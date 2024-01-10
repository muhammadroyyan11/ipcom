<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_testimonial extends CI_Model
{
    public function all_testimonial()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_all_register()
    {
        $query = $this->db->query("SELECT * FROM tbl_reg ORDER BY reg_id DESC");
        return $query->result_array();
    }

    function get_register()
    {
        $sql = 'SELECT * FROM tbl_reg ORDER BY reg_id ASC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_reg'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('tbl_reg', $data);
        return $this->db->insert_id();
    }

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('tbl_reg');
        $this->db->order_by('reg_id', 'desc');
        if (array_key_exists('reg_id', $params) && !empty($params['reg_id'])) {
            $this->db->where('reg_id', $params['reg_id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
        }
        //return fetched data
        return $result;

    }

}