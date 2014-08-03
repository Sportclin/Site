<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inscricao_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function save($dados) {

        $pessoa = $dados['pessoa'];
        $dadosPessoa = $this->getDadosPessoa($pessoa['cpf']);
        if ($dadosPessoa != FALSE) {
            $id_pessoa = $dadosPessoa[0]->id;
        } else {
            $this->db->set($pessoa);
            $this->db->insert('pessoa');
            $id_pessoa = $this->db->insert_id();
        }
        if (!empty($id_pessoa)) {
            $inscricao = $dados['inscricao'];
            $check = $this->checaInscricao($inscricao['cursos_id'], $id_pessoa);
            if ($check == FALSE) {
                $inscricao = array('pessoa_id' => $id_pessoa) + $inscricao;
                $this->db->set($inscricao);
                $this->db->insert('inscricoes');
                $id_inscricao = $this->db->insert_id();
                if (!empty($id_inscricao)) {
                    return $id_inscricao;
                }
            } else {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

    function getDadosPessoa($cpf) {
        $this->db->select();
        $this->db->where('cpf', $cpf);
        $query = $this->db->get('pessoa');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function checaInscricao($curso_id, $pessoa_id) {
        $this->db->select();
        $where = array('cursos_id' => $curso_id, 'pessoa_id' => $pessoa_id);
        $this->db->where($where);
        $query = $this->db->get('inscricoes');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getDadosIncricao($curso_id, $inscricao_id) {

        $this->db->select('cursos.id as curso_id, cursos.nome as curso, cursos.valor, cursos.inicio, inscricoes.nivel_txt, inscricoes.id as inscricoes_id, pessoa.nome as pessoa, pessoa.cpf, pessoa.celular, pessoa.email');
        $this->db->from('inscricoes');
        $this->db->join('cursos', 'cursos.id = inscricoes.cursos_id');
        $this->db->join('pessoa', 'pessoa.id = inscricoes.pessoa_id');

        $where = array(
            'inscricoes.id' => $inscricao_id,
            'inscricoes.cursos_id' => $curso_id
        );
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getDescontoIncricao($curso_id) {

        $this->db->select();
        $this->db->from('desconto');
        $this->db->where('cursos_id', $curso_id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function quantidade($curso_id = NULL, $pago = NULL) {
        if(!empty($curso_id)){ $this->db->where('cursos_id', $curso_id);}       
        if($pago === '0' || $pago === '1'){ $this->db->where('pago', $pago); }
        $query = $this->db->count_all_results('inscricoes');
        return $query;
    }
    
    function quatidadecurso($curso_id = NULL, $ativo = '1') {

        $this->db->select('cursos.id as curso_id, cursos.nome as curso, cursos.ativo, count(inscricoes.id) as total');
        $this->db->from('inscricoes');
        $this->db->join('cursos', 'cursos.id = inscricoes.cursos_id');
        $this->db->group_by(array('cursos.id', 'cursos.nome', 'cursos.ativo')); 

        if (!empty($curso_id)) {  $this->db->having('cursos.id',$inscricao_id); }
        if (!empty($ativo)) {  $this->db->having('cursos.ativo',$ativo); }  
        $this->db->order_by('cursos.ativo','DESC');
        $query = $this->db->get();
        
        return $query->result();
    }    
    
    function listar($curso_id = NULL) {
        $this->db->select('inscricoes.id as inscricoes_id, inscricoes.cursos_id, inscricoes.nivel_txt, inscricoes.pago, pessoa.nome as pessoa_nome, pessoa.cpf, pessoa.celular, pessoa.email');
        $this->db->from('inscricoes');
        $this->db->join('pessoa', 'pessoa.id = inscricoes.pessoa_id');
        
        if(!empty($curso_id)){
            $where = array('inscricoes.cursos_id' => $curso_id);
            $this->db->where($where);
        }
        $this->db->order_by('pessoa.nome');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    } 
    
    function confirmarpgto($inscricao_id){
        
        $dados = array('pago' => '1');
        $this->db->where('id', $inscricao_id);
        $this->db->update('inscricoes',$dados);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
        
    }
    
    function desconfirmarpgto($inscricao_id){
        
        $dados = array('pago' => '0');
        $this->db->where('id', $inscricao_id);
        $this->db->update('inscricoes',$dados);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
        
    }
    
}
