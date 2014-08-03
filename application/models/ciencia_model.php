<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ciencia_model extends CI_Model {

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
        $this->db->order_by('data','id');
        $query = $this->db->get('ciencia');
        return $query->result();
    }

    function editar($id,$dados = array()) {

        $this->db->where('id', $id);
        $this->db->update('ciencia', $dados); 
        return $this->db->affected_rows();
        
    }

    function cadastrar($dados = array()) {

        $this->db->set($dados);
        $this->db->insert('ciencia'); 
        return $this->db->affected_rows();
        
    }
    
    
}
