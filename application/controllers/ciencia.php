<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ciencia extends MY_Controller {
    
    function __construct() {
        parent::__construct(); 
        $this->load->model('Ciencia_model');
    }

    public function index() {

        $where = array();
        $conteudo['ciencia'] = $this->Ciencia_model->listar($where, 0, 0);

        $this->load->view('/templates/default/header');
        $this->load->view('ciencia_view', $conteudo);
        $this->load->view('/templates/default/footer');
    
    }

}
