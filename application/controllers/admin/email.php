<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email extends MY_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin'), 'refresh');
        }
        $this->load->model('Cursos_model');
        $this->load->model('Email_model');
        
    }

    function index($t = NULL, $f = NULL) {
        if (!is_null($t) && !is_null($f)) {
            $conteudo['sucesso'] = $t;
            $conteudo['falha'] = $f;
        }

        $where = array('ativo' => '1');
        $conteudo['cursos'] = $this->Cursos_model->listar($where);

        $this->load->view('/templates/admin/admin_header', $this->header);
        $this->load->view('/templates/admin/email_view', $conteudo);
        $this->load->view('/templates/admin/admin_footer');
    }

    function enviar() {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'O campo %s é obrigatorio');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('msg', 'Conteudo do email', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $where = array('ativo' => '1');
            $conteudo['cursos'] = $this->Cursos_model->listar($where);

            $this->load->view('/templates/admin/admin_header', $this->header);
            $this->load->view('/templates/admin/email_view', $conteudo);
            $this->load->view('/templates/admin/admin_footer');
        } else {

            $curso = $this->input->post('cursos');
            $tipo = $this->input->post('tipo');
            $assunto = $this->input->post('assunto');
            $msg = $this->input->post('msg');

            if ($curso != 0 && $tipo != 2) {
                $where = array('inscricoes.cursos_id' => $curso,
                    'inscricoes.pago' => $tipo
                );
                $emails = $this->Email_model->listar($where);
            } elseif ($curso != 0 && $tipo == 2) {
                $where = array('inscricoes.cursos_id' => $curso);
                $emails = $this->Email_model->listar($where);
            } elseif ($curso == 0 && $tipo != 2) {
                $where = array('inscricoes.pago' => $tipo);
                $emails = $this->Email_model->listar($where);
            } else {
                $emails = $this->Email_model->listar();
            }

            //var_dump($emails);
            $t = 0;
            $f = 0;
            foreach ($emails as $dados) {
                $enviado = FALSE;
                //echo $dados->email . '<br />';   
                $this->email->initialize(); // Aqui carrega todo config criado anteriormente
                $this->email->subject($assunto); //assunto
                $this->email->from('contato@sportclin.com.br', 'Sportclin'); //quem mandou
                $this->email->reply_to('sportclin2@hotmail.com', 'Sportclin');
                $this->email->to($dados->email); //quem recebe
                $this->email->message($msg); //corpo da mensagem
                $enviado = $this->email->send(); // Envia o email  
                if ($enviado === TRUE) {
                    $t = $t + 1;
                } else {
                    $f = $f + 1;
                }
            }
            redirect(base_url('/admin/email/index/' . $t . '/' . $f));
        }
    }

}
