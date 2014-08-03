<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends MY_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Cursos_model');
    }    
    
    public function index() {

        $where = array('ativo' => '1','dtfim >= ' => date('Y-m-d'));
        $conteudo['curso'] = $this->Cursos_model->listar($where, 0, 0);

        $this->load->view('/templates/default/header');
        $this->load->view('cursos_view', $conteudo);
        $this->load->view('/templates/default/footer');
    }

    public function detalhe($id = 0) {

        $where = ($id = 0 ? array('ativo' => 1) : array('id' => $id));
        $conteudo['curso'] = $this->Cursos_model->listar($where, 0, 0);

        $this->load->view('/templates/default/header');
        $this->load->view('cursosdetalhes_view', $conteudo);
        $this->load->view('/templates/default/footer');
    }

}