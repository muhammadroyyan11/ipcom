<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimonial extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_reg'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_reg ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_reg',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('reg_id',$id);
        $this->db->update('tbl_reg',$data);
    }

    function delete($id)
    {
        $this->db->where('reg_id',$id);
        $this->db->delete('tbl_reg');
    }

    function get_testimonial($id)
    {
        $sql = 'SELECT * FROM tbl_reg WHERE reg_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function testimonial_check($id)
    {
        $sql = 'SELECT * FROM tbl_reg WHERE reg_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}