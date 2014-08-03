<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    
class Home extends MY_Controller {
            
    function __construct() {
        parent::__construct(); 
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin'), 'refresh');
        }
        $this->load->model('Inscricao_model');
    }
    function index() {
        
           $conteudo['totalcurso'] =  $this->Inscricao_model->quatidadecurso();
           $conteudo['totalgeral'] =  $this->Inscricao_model->quantidade();
           
           //var_dump($conteudo);
           
           $this->load->view('/templates/admin/admin_header',$this->header);
           $this->load->view('/templates/admin/home_view',$conteudo); 
           $this->load->view('/templates/admin/admin_footer');
        
    }

}
