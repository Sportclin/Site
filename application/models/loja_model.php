<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Loja_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar($where = array(), $perpage = 0, $start = 0) {
        $this->db->select();
        if (!$perpage == 0 && !$start == 0) {
            $this->db->limit($perpage, $start);
        }
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get('loja');
        return $query->result();
    }

    function editar($id,$dados = array()) {
        $this->db->where('id', $id);
        $this->db->update('loja', $dados);
        //echo $sql = $this->db->last_query();
        return $this->db->affected_rows();
    }

    function cadastrar($dados = array()) {
        $this->db->set($dados);
        $this->db->insert('loja'); 
        return $this->db->affected_rows();
    }

    function deletar($id) {
        $this->db->where('id', $id);
        $this->db->delete('loja'); 
        return $this->db->affected_rows();
    }
    
}
