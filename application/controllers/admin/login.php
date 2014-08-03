<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model', '', TRUE);
    }

    public function index() {
        //print_r($this->session->all_userdata());
        $this->load->view('/templates/admin/login_view');
    }

    public function auth() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_login');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('/templates/admin/login_view');
        } else {         
            redirect(base_url('admin/home')); 
        }
    }

    function check_login($password) {
        
        $username = $this->input->post('username');
        $result = $this->login_model->validacao($username, $password);

        if ($result) {
            
            $sess_array = array();
            foreach ($result as $row) {            
                $sess_array = array(
                    'id' => $row->id,
                    'nome' => $row->nome
                );
            }
            $this->session->set_userdata('logado',$sess_array);
            
            return TRUE;
        } else {
            $this->form_validation->set_message('check_login', 'Usuário ou senha inválido');
            return false;
        }
    }

}
