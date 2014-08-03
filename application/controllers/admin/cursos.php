<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cursos extends MY_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin'), 'refresh');
        }
        $this->load->model('Cursos_model');
    }

    function index($sucesso = NULL) {

        if (!empty($sucesso)) {
            $conteudo['sucesso'] = $sucesso;
        }

        $conteudo['curso'] = $this->Cursos_model->listar($where = array(), $perpage = 0, $start = 0);

        $this->load->view('/templates/admin/admin_header', $this->header);
        $this->load->view('/templates/admin/cursos', $conteudo);
        $this->load->view('/templates/admin/admin_footer');
    }

    function novo() {

        $this->load->view('/templates/admin/admin_header', $this->header);
        $this->load->view('/templates/admin/cursos_novo');
        $this->load->view('/templates/admin/admin_footer');
    }

    function editar($id, $sucesso = NULL) {

        if (!empty($sucesso)) {
            $conteudo['sucesso'] = $sucesso;
        }

        $where = array('id' => $id);
        $conteudo['curso'] = $this->Cursos_model->listar($where);


        $this->load->view('/templates/admin/admin_header', $this->header);
        $this->load->view('/templates/admin/cursos_editar', $conteudo);
        $this->load->view('/templates/admin/admin_footer');
    }

    function cadastrar() {

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'O campo %s é obrigatorio');
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('coordenacao', 'Coordenação', 'trim');
        $this->form_validation->set_rules('palestrante', 'Palestrante', 'trim');
        $this->form_validation->set_rules('conteudo', 'Conteudo', 'trim');
        $this->form_validation->set_rules('participacao', 'Participacao', 'trim');
        $this->form_validation->set_rules('dtinicio', 'Inicio das inscrições', 'trim|required');
        $this->form_validation->set_rules('dtfim', 'Fim das inscrições', 'trim|required');
        $this->form_validation->set_rules('inicio', 'Inicio do Curso', 'trim|required');
        $this->form_validation->set_rules('cargahoraria', 'Carga Horária', 'trim');
        $this->form_validation->set_rules('local', 'Local', 'trim');
        $this->form_validation->set_rules('horario', 'Horário', 'trim');
        $this->form_validation->set_rules('investimento', 'Investimento', 'trim|required');
        $this->form_validation->set_rules('valor', 'Valor', 'trim');
        $this->form_validation->set_rules('vagas', 'Vagas', 'trim');
        $this->form_validation->set_rules('nivelamento', 'Nivelamento', 'trim');
        $this->form_validation->set_rules('tipo', 'Tipo', 'trim|required');

        $dados = array(
            'nome' => $this->input->post('nome'),
            'coordenacao' => $this->input->post('coordenacao'),
            'palestrante' => $this->input->post('palestrante'),
            'conteudo' => $this->input->post('conteudo'),
            'participacao' => $this->input->post('participacao'),
            'dtinicio' => $this->input->post('dtinicio'),
            'dtfim' => $this->input->post('dtfim'),
            'inicio' => $this->input->post('inicio'),
            'cargahoraria' => $this->input->post('cargahoraria'),
            'local' => $this->input->post('local'),
            'horario' => $this->input->post('horario'),
            'investimento' => $this->input->post('investimento'),
            'valor' => $this->input->post('valor'),
            'vagas' => $this->input->post('vagas'),
            'nivelamento' => $this->input->post('nivelamento'),
            'tipo' => $this->input->post('tipo'),
            'valor' => $this->input->post('valor')
        );

        $cadastro = $this->Cursos_model->cadastrar($dados);

        $config['upload_path'] = '/downloads/ficha-inscricao/'; //Caminho onde será salvo
        $config['allowed_types'] = 'gif|jpg|png'; //Tipos de imagem aceito
        $config['max_size'] = '2048'; //Tamanho - Aqui aceitamos até 2 Mb
        $config['overwrite'] = FALSE; //Não irá sobre-escrever o arquivo
        $config['encrypt_name'] = FALSE; //Trocará o nome do arquivo para um HASH

        $field_name1 = "ficha"; // Nome do campo INPUT do formulário
        $this->upload->initialize($config);
        //Faz o upload
        if (!$this->upload->do_upload($field_name1)) {
            $error = array('erro' => $this->upload->display_errors());
        } else {
            $upload_data = $this->upload->data();
            $nome_do_arquivo_gravado = $upload_data['file_name'];
        }
        //Fim - Upload da Imagem

        redirect('/admin/cursos/index/' . $cadastro, 'location');
    }

    function alterar($id) {

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'O campo %s é obrigatorio');
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('coordenacao', 'Coordenação', 'trim');
        $this->form_validation->set_rules('palestrante', 'Palestrante', 'trim');
        $this->form_validation->set_rules('conteudo', 'Conteudo', 'trim');
        $this->form_validation->set_rules('participacao', 'Participacao', 'trim');
        $this->form_validation->set_rules('dtinicio', 'Inicio das inscrições', 'trim|required');
        $this->form_validation->set_rules('dtfim', 'Fim das inscrições', 'trim|required');
        $this->form_validation->set_rules('inicio', 'Inicio do Curso', 'trim|required');
        $this->form_validation->set_rules('cargahoraria', 'Carga Horária', 'trim');
        $this->form_validation->set_rules('local', 'Local', 'trim');
        $this->form_validation->set_rules('horario', 'Horário', 'trim');
        $this->form_validation->set_rules('investimento', 'Investimento', 'trim|required');
        $this->form_validation->set_rules('valor', 'Valor', 'trim');
        $this->form_validation->set_rules('vagas', 'Vagas', 'trim');
        $this->form_validation->set_rules('nivelamento', 'Nivelamento', 'trim');
        $this->form_validation->set_rules('tipo', 'Tipo', 'trim|required');

        $dados = array(
            'nome' => $this->input->post('nome'),
            'coordenacao' => $this->input->post('coordenacao'),
            'palestrante' => $this->input->post('palestrante'),
            'conteudo' => $this->input->post('conteudo'),
            'participacao' => $this->input->post('participacao'),
            'dtinicio' => $this->input->post('dtinicio'),
            'dtfim' => $this->input->post('dtfim'),
            'inicio' => $this->input->post('inicio'),
            'cargahoraria' => $this->input->post('cargahoraria'),
            'local' => $this->input->post('local'),
            'horario' => $this->input->post('horario'),
            'investimento' => $this->input->post('investimento'),
            'valor' => $this->input->post('valor'),
            'vagas' => $this->input->post('vagas'),
            'nivelamento' => $this->input->post('nivelamento'),
            'tipo' => $this->input->post('tipo'),
            'valor' => $this->input->post('valor')
        );

        $sucesso = $this->Cursos_model->editar($id, $dados);

        redirect('/admin/cursos/editar/' . $id . '/' . $sucesso, 'location');
    }

}
