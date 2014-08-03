<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $sess_data;
    protected $header;

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logado')) {
            $this->sess_data = $this->session->userdata('logado');
            /*
            $this->gravatar = new \emberlabs\gravatarlib\Gravatar();
            $this->gravatar->setAvatarSize(150);
            $this->header['gravatar'] = $this->gravatar->buildGravatarURL($this->sess_data['email']);
             */
            $this->header['nome'] = $this->sess_data['nome'];
        }
        
    }

    function logout() {
        $this->session->unset_userdata('logado');
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
    
    
    

}
