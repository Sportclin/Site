<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class loja extends MY_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Loja_model');
    }    

    public function index() {
        $conteudo['loja'] = $this->Loja_model->listar(NULL, 0, 0);

        $this->load->view('/templates/default/header');
        $this->load->view('loja_view', $conteudo);
        $this->load->view('/templates/default/footer');
    }

}
