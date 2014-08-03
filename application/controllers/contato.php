<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contato extends MY_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Email_model');
    }    
    
    public function index() {
        $this->load->view('/templates/default/header');
        $this->load->view('contato_view');
        $this->load->view('/templates/default/footer');
    }

    public function enviar() {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'O campo %s é obrigatorio');
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|email');
        $this->form_validation->set_rules('tipo', 'Tipo', 'trim|required');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('msg', 'Conteudo do email', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('/templates/default/header');
            $this->load->view('contato_view');
            $this->load->view('/templates/default/footer');
        } else {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $tipo = $this->input->post('tipo');
            $assunto = $this->input->post('assunto');
            $msg = $this->input->post('msg');

            $msg = $msg.'<p> Mensaguem enviada pelo formulário de contato por '.$nome.' - '.$email.'</p>'; 
            
            $enviado = FALSE;
                $this->email->initialize(); // Aqui carrega todo config criado anteriormente
                $this->email->subject($tipo.' - '.$assunto); //assunto
                $this->email->from($email, $nome); //quem mandou
                $this->email->reply_to($email, $nome);
                $this->email->to('sportclin2@hotmail.com'); //quem recebe
                $this->email->to('contato@sportclin.com.br');
                $this->email->message($msg); //corpo da mensagem
                $enviado = $this->email->send(); // Envia o email  
                if ($enviado === TRUE) {
                    redirect(base_url('/contato/sucesso'));
                }else{
                    redirect(base_url('/contato/error'));                    
                }
            }
    }
    
    public function sucesso(){
        $this->load->view('/templates/default/header');
        $this->load->view('contato_sucesso_view');
        $this->load->view('/templates/default/footer');        
    }
    
    public function error(){
        $this->load->view('/templates/default/header');
        $this->load->view('contato_error_view');
        $this->load->view('/templates/default/footer');        
    }
    
}


