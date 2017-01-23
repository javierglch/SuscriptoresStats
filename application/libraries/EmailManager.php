<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailHelper
 *
 * @author Javier
 */
class EmailManager {

    const SUBJECT_SUFIX = "| TOTAL";
    
    # ~ Layouts ~ #
    const EMAIL_LAYOUT_VIEW = 'email_layout_view';
    
    
    # ~ Templates ~ #
    const TEMPLATE_WELCOME = "email_welcome_view";
    const TEMPLATE_DEFAULT = "email_default_view";
    const TEMPLATE_TEST = "email_test_view";
    const TEMPLATE_CALENDAR_EDITED = "email_calendar_edited_view";
    const TEMPLATE_CALENDAR_DELETED = "email_calendar_deleted_view";
    const TEMPLATE_PARKING_ASSIGNED = "email_parking_assigned_view";

    /**
     *
     * @var CI_Controller 
     */
    private $ci;

    /**
     * email de quien envia el mensaje
     * @var string 
     */
    private $from;

    /**
     * nombre de la persona que dirije el mensaje
     * @var string 
     */
    private $name;

    /**
     * hacia quien va dirigido el mensaje
     * @var string 
     */
    private $to;

    /**
     * asunto del mensaje
     * @var string 
     */
    private $subject;

    /**
     * contenido del correo (va dentro del layout)
     * @var string 
     */
    private $innerContent;

    function __construct($to = '', $subject = '', $innerContent = '') {
        $this->ci =& get_instance();

        //inicializaciones
        $this->ci->load->library('email');
        $this->ci->load->config('email');
        $this->ci->email->initialize($this->ci->config->item('email'));

        //headers
        $this->from = $this->ci->config->item('sending_email')['from'];
        $this->name = $this->ci->config->item('sending_email')['your_name'];
        $this->to = $to;

        //content
        $this->subject = $subject;
        $this->innerContent = $innerContent;
    }

    /**
     * prepara el correo electronico para ser enviado construyendo la vista y añadiendo 
     * todos los parametros al helper 'email' de codeigniter
     * @param string $uuid identificador unico del correo o null
     */
    private function prepare($uuid = null) {

        //construct headers
        $this->ci->email->from($this->from, $this->name, $this->from);
        $this->ci->email->reply_to($this->from, $this->name);
        $this->ci->email->to($this->to);

        //content
        $this->ci->email->subject($this->subject);
        $this->ci->email->message($this->ci->load->view('emails/' . self::EMAIL_LAYOUT_VIEW, [
                    "name" => $this->name,
                    "from" => $this->from,
                    "to" => $this->to,
                    "subject" => $this->subject,
                    "innerContent" => $this->innerContent,
                    "uuid" => $uuid
                        ], true));
    }

    /**
     * Envia el correo electronico y lo inserta en la base de datos
     * @return bool true si el correo fue enviado o false si no
     */
    public function send() {
        //insertamos el email en la base de datos
        $this->ci->Emails = new Emails();
        $this->ci->Emails->setFrom($this->from);
        $this->ci->Emails->setInner_content($this->innerContent);
        $this->ci->Emails->setName($this->name);
        $this->ci->Emails->setSubject($this->subject);
        $this->ci->Emails->setTo($this->to);
        $this->ci->Emails->insert();

        //actualizamos el uuid en la base de datos
        $this->ci->Emails->setIdemails($this->ci->db->insert_id());
        $this->ci->Emails->updateUUID();

        //construimos y enviamos
        $this->prepare($this->ci->Emails->getEmail_unique_code());
        return $this->ci->email->send();
    }

    /**
     * recupera el contenido del correo desde la base de datos
     * @param string $uuid email_unique_code de la base de datos
     * @return \EmailManager
     */
    public function selectFromDatabase($uuid) {
        $this->ci->Emails->findOneBy([
            "email_unique_code" => $uuid
        ]);
        $this->from = $this->ci->Emails->getFrom();
        $this->innerContent = $this->ci->Emails->getInner_content();
        $this->name = $this->ci->Emails->getName();
        $this->subject = $this->ci->Emails->getSubject();
        $this->to = $this->ci->Emails->getTo();

        return $this;
    }

    public function __toString() {
        return $this->ci->load->view('emails/' . self::EMAIL_LAYOUT_VIEW, [
                    "name" => $this->name,
                    "from" => $this->from,
                    "to" => $this->to,
                    "subject" => $this->subject,
                    "innerContent" => $this->innerContent,
                        ], true);
    }

    # ---------------------------------------------- #
    # CONTROLADORES PARA LOS CORREOS Y SU CONTENIDO  #
    # Añadir aquí las funciones para generar correos #
    # ---------------------------------------------- #

    /**
     * Metodo por defecto para crear y enviar emails. <br>
     * Crea el email con la plantilla seleccionada y lo envia automaticamente
     * @param string $toEmail email de destino
     * @param string $subject asunto del email
     * @param string $template plantilla del email para construirla ( o vista del email, se guarda en emails/...)
     * @param array $aDataForTemplate este array se le pasa a la plantilla, así que debe de contener las variables de la plantilla
     * @return bool true si lo envio, false si no.
     */
    public function sendMailTo($toEmail, $subject, $template=self::TEMPLATE_DEFAULT, $aDataForTemplate=[]) {
        $this->to = $toEmail;
        $this->subject = $subject. self::SUBJECT_SUFIX;
        $this->innerContent = $this->ci->load->view('emails/'.$template, $aDataForTemplate, true);
        return $this->send();
    }
    
    /**
     * Metodo para testear la creacion de emails y su plantilla para su edicion
     * @param string $toEmail email de destino
     * @param string $subject asunto del email
     * @param string $template plantilla del email para construirla ( o vista del email, se guarda en emails/...)
     * @param array $aDataForTemplate este array se le pasa a la plantilla, así que debe de contener las variables de la plantilla
     * @param bool $boolSend true y el email se envia al destion, false y no. default: false.
     * @return si $boolSend==true, bool true si lo envio, false si no. en caso de que sea false, devuelve la misma instancia del objeto ($this)
     */
    public function test($toEmail='ejemplo@dominio.com', $subject='TEST', $template=self::TEMPLATE_TEST, $aDataForTemplate=[], $boolSend=false) {
        $this->to = $toEmail;
        $this->subject = $subject;
        $this->innerContent = $this->ci->load->view('emails/'.$template, $aDataForTemplate, true);
        if($boolSend){
            return $this->send();
        }
        return $this;
    }
    
    /**
     * envia un correo para recuperar contraseña
     * @param Accounts $account
     * @return bool
     */
    public function sendRecoverPasswordEmail(Accounts $account,$generatedCode) {

        # enviamos correo electronico
        $this->to = $account->getEmail();
        $this->subject = 'Recuperar contraseña';
        $this->innerContent = $this->ci->load->view('emails/email_recover_password_view', [
            "code" => $generatedCode,
            "name" => $account->getName().' '.$account->getSurnames(),
                ], true);

        return $this->send();
    }
    
    /**
     * envia un correo para recuperar contraseña
     * @param Accounts $account
     * @return bool
     */
    public function sendPasswordEmail(Accounts $account) {

        # enviamos correo electronico
        $this->to = $account->getEmail();
        $this->subject = 'Recuperar contraseña';
        $this->innerContent = $this->ci->load->view('emails/email_password_view', [
            "pass" => $account->getPassword(),
            "name" => $account->getName().' '.$account->getSurnames(),
                ], true);

        return $this->send();
    }

}
