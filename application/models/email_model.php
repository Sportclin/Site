<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar($where = array(), $perpage = 0, $start = 0) {

        $this->db->select('pessoa.nome, pessoa.email');
        $this->db->from('pessoa');
        $this->db->join('inscricoes', 'inscricoes.pessoa_id = pessoa.id');
        $this->db->group_by(array('pessoa.nome', 'pessoa.email'));
        
        if (!$perpage == 0 && !$start == 0) {
            $this->db->limit($perpage, $start);
        }
        if (!empty($where)) {
            $this->db->where($where);
        }
        $this->db->order_by('pessoa.nome');
        $query = $this->db->get();
        
        return $query->result();
    }

}
