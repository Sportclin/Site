<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inscricao extends MY_Controller {
            
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin'), 'refresh');
        }

        $this->load->model('Inscricao_model');
        $this->load->model('Cursos_model');
    }

    function index() {
        
        $conteudo['curso'] = $this->Inscricao_model->quatidadecurso(NULL,'');

        $this->load->view('/templates/admin/admin_header', $this->header);
        $this->load->view('/templates/admin/inscritos', $conteudo);
        $this->load->view('/templates/admin/admin_footer');
    }


    function curso($curso_id = NULL) {
        
        $conteudo['insc'] = $this->Inscricao_model->listar($curso_id);
        $conteudo['confirmados'] = $this->Inscricao_model->quantidade($curso_id,'1');
        $conteudo['nconfirmados'] = $this->Inscricao_model->quantidade($curso_id,'0');
        $conteudo['total'] = $this->Inscricao_model->quantidade($curso_id,NULL);
        $conteudo['curso'] = $this->Cursos_model->listar(array('id' => $curso_id),0,1    );
        
        
        $this->load->view('/templates/admin/admin_header', $this->header);
        $this->load->view('/templates/admin/inscritos_curso', $conteudo);
        $this->load->view('/templates/admin/admin_footer');        
    }
 
    
    function confirmar($curso_id, $inscricao_id) {
  
        $conteudo['confirmapgto'] = $this->Inscricao_model->confirmarpgto($inscricao_id);        
        redirect(base_url('admin/inscricao/curso/'.$curso_id), 'refresh');
  
    }
    
    function desconfirmar($curso_id, $inscricao_id) {
  
        $conteudo['confirmapgto'] = $this->Inscricao_model->desconfirmarpgto($inscricao_id);        
        redirect(base_url('admin/inscricao/curso/'.$curso_id), 'refresh');
  
    }
    
    

}
