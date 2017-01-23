<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'models/BaseModels/YoutubersBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla youtubers
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:20:18
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 8
 * 
 * @author Javier
 */
class Youtubers extends YoutubersBase {

    /**
     * Constructor
     * @param $idyoutubers int(11) 
     * @param $channel_id varchar(50) 
     * @param $password varchar(50) 
     * @param $email varchar(50) 
     * @param $registration_date int(11) 
     * @param $app_custom_url varchar(10) URL PARA LA APLICACION
     * @param $last_video varchar(50) 
     * @param $last_update int(11) 
     * 
     */
    function __construct($idyoutubers = null, $channel_id = null, $password = null, $email = null, $registration_date = null, $app_custom_url = null, $last_video = null, $last_update = null) {
        parent::__construct($idyoutubers, $channel_id, $password, $email, $registration_date, $app_custom_url, $last_video, $last_update);
    }

    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES

    public function doLogin($email, $pass) {
        $this->findOneBy([
            self::COLUMN_EMAIL => $email,
            self::COLUMN_PASSWORD => $pass,
        ]);
        if ($this->getIdyoutubers() != null) {
            $this->session->set_userdata(EnumSessionVars::USER_ID, $this->getIdyoutubers());
            $this->session->set_userdata(EnumSessionVars::USER_IP, $this->input->ip_address());
            $this->session->set_userdata(EnumSessionVars::USER_LOGGED, true);
            $this->update([
                self::COLUMN_LAST_VISIT => time(),
                self::COLUMN_LAST_IP => $this->input->ip_address()
            ]);
            return true;
        }
        return false;
    }

    public function doLogout() {
        $this->session->set_userdata(EnumSessionVars::USER_ID, null);
        $this->session->set_userdata(EnumSessionVars::USER_IP, null);
        $this->session->set_userdata(EnumSessionVars::USER_LOGGED, false);
    }

    public function checkLogin($email, $pass) {
        return $this->findOneBy([
                    self::COLUMN_EMAIL => $email,
                    self::COLUMN_PASSWORD => $pass,
                ])->getIdyoutubers() ? true : false;
    }

    /**
     * conecta con la api de youtube
     * @return string
     */
    public function getYtLogoImg($boolUpdate = false) {
        if (!$this->getLogo_icon() || !file_exists(FCPATH . '/assets/images/youtube_logos/' . $this->getLogo_icon()) || $boolUpdate) {
            $youtube_api = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyByJgiRHj2NypQtaj9js5yC6atyKQadnjU'));
            $channel = $youtube_api->getChannelFromURL($this->getChannel_url());
            $this->setLogo_icon($channel->id . '.jpg');
            file_put_contents(FCPATH . '/assets/images/youtube_logos/' . $this->getLogo_icon(), file_get_contents($channel->snippet->thumbnails->default->url));
            $this->update([self::COLUMN_LOGO_ICON => $this->getLogo_icon()]);
        }
        return $this->getLogo_icon();
    }

    /**
     * conecta con la api de youtube
     * @return string
     */
    public function getYtLogoImgMedium($boolUpdate = false) {
        if (!$this->getLogo_icon_medium() || !file_exists(FCPATH . '/assets/images/youtube_logos/' . $this->getLogo_icon_medium()) || $boolUpdate) {
            $youtube_api = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyByJgiRHj2NypQtaj9js5yC6atyKQadnjU'));
            $channel = $youtube_api->getChannelFromURL($this->getChannel_url());
            $this->setLogo_icon_medium($channel->id . '_medium.jpg');
            file_put_contents(FCPATH . '/assets/images/youtube_logos/' . $this->getLogo_icon_medium(), file_get_contents($channel->snippet->thumbnails->medium->url));
            $this->update([self::COLUMN_LOGO_ICON_MEDIUM => $this->getLogo_icon_medium()]);
        }
        return $this->getLogo_icon_medium();
    }

    private $channelId;

    /**
     * Conecta con la api de youtube
     * Puede lanzar throws
     * @return string
     * @throw Exception
     */
    public function getChannelId($url = null) {
        if (!$this->channelId) {
            $youtube_api = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyByJgiRHj2NypQtaj9js5yC6atyKQadnjU'));
            $channel = $youtube_api->getChannelFromURL($url ? $url : $this->getChannel_url());
            $this->channelId = $channel->id;
        }
        return $this->channelId;
    }

    public function changePass($newPass) {
        $this->update([
            self::COLUMN_PASSWORD => $newPass,
        ]);
    }

    public function updateGeneralConfig($email, $url_youtube, $url_app, $url_video, $custom_msg, $custom_msg_register) {
        $this->update([
            self::COLUMN_EMAIL => $email,
            self::COLUMN_CHANNEL_URL => $url_youtube,
            self::COLUMN_APP_CUSTOM_URL => $url_app,
            self::COLUMN_LAST_VIDEO => $url_video,
            self::COLUMN_CUSTOM_SUB_MSG => $custom_msg,
            self::COLUMN_CUSTOM_SUB_MSG_REGISTER => $custom_msg_register,
            self::COLUMN_LAST_UPDATE => time(),
        ]);
    }

    public function updateYoutubeImgs() {
        $this->getYtLogoImg(true);
        $this->getYtLogoImgMedium(true);
    }

    public function getAppShareLink() {
        return base_url($this->getApp_custom_url());
    }

    private $channelName;

    public function getChannelName() {
        if (!$this->channelName) {
            $youtube_api = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyByJgiRHj2NypQtaj9js5yC6atyKQadnjU'));
            $channel = $youtube_api->getChannelFromURL($this->getChannel_url());
            $this->channelName = $channel->snippet->title;
        }
        return $this->channelName;
    }

    private $embedHtml;

    public function getEmbedHtmlCodeForVideo() {
        if (!$this->embedHtml) {
            $youtube_api = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyByJgiRHj2NypQtaj9js5yC6atyKQadnjU'));
            $videoInfo = $youtube_api->getVideoInfo($youtube_api->parseVIdFromURL($this->getLast_video()));
            $this->embedHtml = $videoInfo->player->embedHtml;
        }
        return $this->embedHtml;
    }

    /**
     * 
     * @return SubsYtJoin
     */
    public function getSubsList() {
        $ci = & get_instance();
        $aSubsYtJoin = $ci->SubsYtJoin->findBy([
            SubsYtJoin::COLUMN_YT_IDYOUTUBERS => $this->getIdyoutubers()
        ]);
        return $aSubsYtJoin;
    }
    
    /**
     * 
     * @return SubsYtJoin
     */
    public function getSubsAvgMMR() {
        return $this->db->select('avg('.SubsYtJoin::COLUMN_SUB_MMR.') as avg_mmr')
                ->where(SubsYtJoin::COLUMN_YT_IDYOUTUBERS,$this->getIdyoutubers())
                ->get(SubsYtJoin::TABLE_NAME)
                ->row_array()['avg_mmr'];
    }

}
