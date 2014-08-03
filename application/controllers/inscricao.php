<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inscricao extends MY_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Inscricao_model');
    }    

    public function index() {
        
    }

    public function ficha($id) {
        $conteudo['id_curso'] = $id;
        $this->load->view('/templates/default/header');
        $this->load->view('/ficha/inscricao_view', $conteudo);
        $this->load->view('/templates/default/footer');
    }

    public function cadastrar($curso_id) {
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'O campo %s é obrigatorio');
        $this->form_validation->set_message('min_length', 'Preenchimento minimo de 5 caracteres');
        $this->form_validation->set_message('numeric', 'Somente número');
        $this->form_validation->set_message('valid_email', 'É necessário ter um e-mail válido');
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('cep', 'CEP', 'trim');
        $this->form_validation->set_rules('rua', 'Rua', 'trim');
        $this->form_validation->set_rules('numero', 'Número', 'trim');
        $this->form_validation->set_rules('bairro', 'Bairro', 'trim');
        $this->form_validation->set_rules('cidade', 'Cidade', 'trim');
        $this->form_validation->set_rules('estado', 'Estado', 'trim');
        $this->form_validation->set_rules('telefone', 'Telefone', 'trim');
        $this->form_validation->set_rules('celular', 'Celular', 'trim|required|numeric');
        $this->form_validation->set_rules('nivel', 'Nivel', 'required');
        $this->form_validation->set_rules('nivel1_txt', 'Faculdade', 'trim');
        $this->form_validation->set_rules('area', 'Área', 'required');

        $conteudo['id_curso'] = $curso_id;
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('/templates/default/header');
            $this->load->view('/ficha/inscricao_view', $conteudo);
            $this->load->view('/templates/default/footer');
        } else {
            $dados['pessoa'] = array(
                'nome' => $this->input->post('nome'),
                'cpf' => $this->input->post('cpf'),
                'email' => $this->input->post('email'),
                'cep' => $this->input->post('cep'),
                'rua' => $this->input->post('rua'),
                'numero' => $this->input->post('numero'),
                'bairro' => $this->input->post('bairro'),
                'cidade' => $this->input->post('cidade'),
                'estado' => $this->input->post('estado'),
                'telefone' => $this->input->post('telefone'),
                'celular' => $this->input->post('celular')
            );
            $niveltxt = $this->input->post('nivel1_txt');
            if (!isset($niveltxt) || $niveltxt == FALSE) {
                $niveltxt = NULL;
            }
            $dados['inscricao'] = array(
                'cursos_id' => $curso_id,
                'nivel' => $this->input->post('nivel'),
                'nivel_txt' => $niveltxt,
                'area' => $this->input->post('area'),
                'data' => date('Y-m-d H:i:s')
            );

            $inscricao = $this->Inscricao_model->save($dados);

            if ($inscricao === TRUE) {
                redirect('/inscricao/reinscricao', 'location');
            } elseif ($inscricao === FALSE) {
                redirect('/inscricao/falha', 'location');
            } else {

                $insc['dados'] = $this->Inscricao_model->getDadosIncricao($curso_id, $inscricao);

                $pagina = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>
    <table width="750" border="0" cellspacing="0" cellpadding="0" class="fontpadrao">
        <tr>
          <td height="35" align="center"><img src="' . base_url('assets/imagens/logo_email.jpg') . '" /></td>
        </tr>
        <tr>
          <td height="46" align="center"><b>Seu número de inscrição é: <font color="#FF0000">' . $inscricao . '</font></b></td>
        </tr>
        <tr>
          <td><b>Curso/Palestra:&nbsp;</b>' . $insc['dados'][0]->curso . '</td>
        </tr>
        <tr>
          <td><b>Nome:&nbsp;</b>' . $insc['dados'][0]->pessoa . '</td>
        </tr>
        <tr>
          <td><b>Data inicio:&nbsp;</b> ' . date('d/m/Y', strtotime($insc['dados'][0]->inicio)) . '</td>
        </tr>
        <tr>
          <td style="color:#f71625">OBS.: SUA VAGA AINDA NÃO ESTA GARANTIDA, É NECESSARIO O 
          PAGAMENTO DA TAXA DE INSCRIÇÃO PARA GARANTIR A SUA VAGA.</td>
        </tr>
        <tr>
            <td>
            <h5><b>FORMAS DE PAGAMENTO:</b></h5>
            <p> <!--Pelo PagSeguro ou <br /> -->
                Através de Transferência/Depósito Bancário ou presencial na SPORTCLIN:<br />
                às terças - feiras das 10:00h às 12:00h e das 15:00h ás 17:00h;<br /> 
                ás quartas – feiras das 10:00h às 12:00h e as Quintas – feiras das 10:00h as 12:00h.<br />
            </p> 
            <h5><b>CONFIRMAÇÃO DA INSCRIÇÃO:</b></h5>
            <p>
                Caso o pagamento seja realizado através de transferência ou depósito bancário 
                a sua inscrição só será confirmada após o envio do comprovante de pagamento com 
                o nome e número de inscrição para o e-mail: <b>sportclin2@hotmail.com</b>
            </p>
            <h5><b>REGRAS PARA INSCRIÇÃO:</b></h5>
            <p>
                - Não faremos reserva de vagas.<br /> 
                - Não haverá devolução de valores pagos em hipótese alguma.<br />
                - Não serão aceito comprovante de depósito bancário xerocopiado e sem autenticação bancária. 
            </p>                  
            <h5><b>DADOS PARA TRANSFERÊNCIA OU DEPÓSITO BANCÁRIO:</b></h5>
            <p>
                Banco: Banco do Brasil<br />
                Agência: 2816-9<br />
                Conta Corrente: 46314-0<br />
                EM NOME DE: SPORTCLIN CIA LTDA
            </p>
            </td>
        </tr>
      </table>
						</body></html>';

              /*  $this->email->initialize(); // Aqui carrega todo config criado anteriormente
                $this->email->subject('Sportclin | Inscrição: ' . $inscricao); //assunto
                $this->email->from('contato@sportclin.com.br', 'Sportclin'); //quem mandou
                $this->email->reply_to('sportclin2@hotmail.com', 'Sportclin');
                $this->email->to($insc['dados'][0]->email); //quem recebe
                $this->email->message($pagina); //corpo da mensagem
                $this->email->send(); // Envia o email
               */
                $pagina = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>
    <table width="750" border="0" cellspacing="0" cellpadding="0" class="fontpadrao">
        <tr>
          <td height="35" align="center"><img src="' . base_url('assets/imagens/logo_email.jpg') . '" /></td>
        </tr>
        <tr>
          <td height="46" align="center"><b>Foi realizada uma nova inscrição, segue abaixo os dados da inscrição:</b></td>
        </tr>
        <tr>
          <td height="46" align="center"><b>Inscrição: <font color="#FF0000">' . $inscricao . '</font></b></td>
        </tr>
        <tr>
          <td><b>Curso/Palestra:&nbsp;</b>' . $insc['dados'][0]->curso . '</td>
        </tr>
        <tr>
          <td><b>Nome:&nbsp;</b>' . $insc['dados'][0]->pessoa . '</td>
        </tr>
        <tr>
          <td><b>Email:&nbsp;</b> ' . $insc['dados'][0]->email . '</td>
        </tr>
        <tr>
          <td><b>Telefone:&nbsp;</b> ' . $insc['dados'][0]->celular . '</td>
        </tr>';

                $nivel_txt = $insc['dados'][0]->nivel_txt;

                if (!is_null($nivel_txt)) {
                    $pagina .= '<tr>
              <td><b>Instituição:&nbsp;</b> ' . $nivel_txt . '</td>
            </tr>';
                }
                $pagina .= '</table>
	</body></html>';

                $this->email->initialize(); // Aqui carrega todo config criado anteriormente
                $this->email->subject('Novo cadastro: ' . $inscricao . ' - ' . $insc['dados'][0]->curso); //assunto
                $this->email->from('contato@sportclin.com.br', 'Sportclin'); //quem mandou
                $this->email->to('sportclin2@hotmail.com', 'Sportclin'); //quem recebe

                $this->email->message($pagina); //corpo da mensagem
                $this->email->send(); // Envia o email

                redirect('/inscricao/sucesso/' . $curso_id . '/' . $inscricao, 'location');
            }
        }
    }

    public function sucesso($curso_id, $inscricao) {

        $conteudo['dados'] = $this->Inscricao_model->getDadosIncricao($curso_id, $inscricao);
        $desconto = $this->Inscricao_model->getDescontoIncricao($curso_id);
        $conteudo['idCurso'] = $curso_id;
        
        if ($desconto != FALSE) {
            $conteudo['desconto'] = $desconto;
        }

        $this->load->helper('tiraacento');
        $this->load->view('/templates/default/header');
        $this->load->view('/ficha/sucesso_view', $conteudo);
        $this->load->view('/templates/default/footer');
    }

    public function falha() {

        $this->load->view('/templates/default/header');
        $this->load->view('/ficha/falha_view');
        $this->load->view('/templates/default/footer');
    }

    public function reinscricao() {

        $this->load->view('/templates/default/header');
        $this->load->view('/ficha/reinscricao_view');
        $this->load->view('/templates/default/footer');
    }

}
