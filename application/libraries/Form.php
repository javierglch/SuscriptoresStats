<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form {

    private $ci;

    function __construct() {
        $this->ci = get_instance();
        $this->ci->load->library('form_validation');
        $this->ci->load->helper('security');

        # Reglas por defecto de validación
        $this->ci->form_validation->set_message('required', "El campo <strong>%s</strong> es obligatorio.");
        $this->ci->form_validation->set_message('exact_length', "El campo <strong>%s</strong> debe tener <strong>%s</strong> caracteres.");
        $this->ci->form_validation->set_message('max_length', "El campo <strong>%s</strong> no puede exceder de <strong>%s</strong> caracteres.");
        $this->ci->form_validation->set_message('exist', "El valor del campo <strong>%s</strong> no es válido.");
        $this->ci->form_validation->set_message('is_natural', "El valor del campo <strong>%s</strong> no es válido.");
        $this->ci->form_validation->set_message('is_cif', "El <strong>%s</strong> no es válido.");
        $this->ci->form_validation->set_message('is_vat', "El <strong>%s</strong> no es válido.");
        $this->ci->form_validation->set_message('exact_length', "El campo <strong>%s</strong> no es válido.");
        $this->ci->form_validation->set_message('max_length', "El campo <strong>%s</strong> no puede exceder de <strong>%s</strong> caracteres.");
        $this->ci->form_validation->set_message('is_natural', "El valor del campo <strong>%s</strong> no es válido.");
        $this->ci->form_validation->set_message('min_length', "El campo <strong>%s</strong> debe contener más de <strong>%s</strong> caracteres.");
        $this->ci->form_validation->set_message('max_length', "El campo <strong>%s</strong> no puede contener más de <strong>%s</strong> caracteres.");
        $this->ci->form_validation->set_message('is_unique', "Ya existe un <strong>%s</strong> con ese valor, escoge uno diferente.");
        $this->ci->form_validation->set_message('is_unique_or_one', "El valor de <strong>%s</strong> ya existe, escoge uno diferente.");
        $this->ci->form_validation->set_message('valid_email', "El <strong>%s</strong> no es un email valido.");
        $this->ci->form_validation->set_message('matches', "Los campos <strong>%s</strong> y <strong>%s</strong> no coinciden.");
        $this->ci->form_validation->set_message('is_date', "El valor del campo <strong>%s</strong> no es una fecha valida. Formato: dd-mm-yyyy hh:ii");
        $this->ci->form_validation->set_message('max_date', "El valor del campo <strong>%s</strong> debe ser menor a <strong>%s</strong>.");
        $this->ci->form_validation->set_message('min_date', "El valor del campo <strong>%s</strong> debe ser mayor a <strong>%s</strong>.");
        $this->ci->form_validation->set_message('max_datetime', "El valor del campo <strong>%s</strong> debe ser menor a <strong>%s</strong>.");
        $this->ci->form_validation->set_message('min_datetime', "El valor del campo <strong>%s</strong> debe ser mayor a <strong>%s</strong>.");
    }

    /**
     * @return boolean true si es correcto, false si no
     */
    public function validateSignInForm() {
        $this->ci->form_validation->set_rules('email', 'email', 'required|trim|xss_clean|is_unique[' . Youtubers::TABLE_NAME . '.' . Youtubers::COLUMN_EMAIL . ']');
        $this->ci->form_validation->set_rules('pass', 'contraseña', 'required|trim|xss_clean');
        $this->ci->form_validation->set_rules('youtubeurl', 'id de youtube', 'required|trim|xss_clean');
        $this->ci->form_validation->set_rules('conditions', 'condiciones', 'required');

        return $this->ci->form_validation->run();
    }

    /**
     * @return boolean true si es correcto, false si no
     */
    public function validateLogInForm() {
        $this->ci->form_validation->set_rules('email', 'email', 'required|trim|xss_clean|checkLogin[pass]');
        $this->ci->form_validation->set_rules('pass', 'contraseña', 'required|trim|xss_clean');

        $this->ci->form_validation->set_message('checkLogin', 'Login incorrecto.');

        return $this->ci->form_validation->run();
    }

    /**
     * @return boolean true si es correcto, false si no
     */
    public function validateChangePassForm() {
        $this->ci->form_validation->set_rules('actual_pass', 'contraseña actual', 'required|trim|xss_clean');
        $this->ci->form_validation->set_rules('new_pass', 'nueva contraseña', 'required|trim|xss_clean');
        $this->ci->form_validation->set_rules('confirm_pass', 'confirmar contraseña', 'required|trim|xss_clean|matches[new_pass]');

        $this->ci->form_validation->set_message('matches', 'Las contraseñas no coinciden.');

        return $this->ci->form_validation->run();
    }

    /**
     * @return boolean true si es correcto, false si no
     */
    public function validateGeneralConfigForm() {
        $this->ci->form_validation->set_rules('email', 'email', 'required|trim|xss_clean');
        $this->ci->form_validation->set_rules('url_youtube', 'url del canal de youtube', 'required|trim|xss_clean|regex_match[/^http[s]:\/\/.*youtube.*[user|channel]\/.*$/]');
        $this->ci->form_validation->set_rules('url_app', 'custom link para los subs', 'required|trim|xss_clean|regex_match[/^[\w|\d|_|-|\.|\+]+$/]|is_unique['.Youtubers::TABLE_NAME.'.'.Youtubers::COLUMN_APP_CUSTOM_URL.']');
        $this->ci->form_validation->set_rules('url_video', 'url de un video destacado', 'trim|xss_clean|regex_match[/^http[s]:\/\/.*youtube.*v=.*$/]');
        $this->ci->form_validation->set_rules('custom_msg', 'mensaje custom para subs al inicio', 'trim|xss_clean');
        $this->ci->form_validation->set_rules('custom_msg_register', 'mensaje custom para subs tras registrarse', 'trim|xss_clean');

        $this->ci->form_validation->set_message('matches', 'Las contraseñas no coinciden.');
        $this->ci->form_validation->set_message('regex_match', 'El formato del campo <strong>%s</strong> es incorrecto. Formato: <code style="display:block;">%s</code>');

        return $this->ci->form_validation->run();
    }

}
