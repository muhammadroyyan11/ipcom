<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenilaianModel extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'nilai'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function ppreach() {
        $username = $this->session->userdata('username');
        $reg_jenis = $this->session->userdata('reg_jenis');
        $this->db->where('username', $username);
        $this->db->where('reg_jenis', 'Psy-Preach');
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
    }

    function showpaper() {
       $nama = $this->session->userdata('nama');

       $this->db->where('reg_universitas', $nama)
                    ->where('reg_jenis', 'Psy-Paper');
        $query = $this->db->get('tbl_reg');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function showvlog() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Vlog');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showphotography() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Photography');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showpreach() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Preach');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showqiraah() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Qiraah');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }


     function showdesign() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Design');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showintervention() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Intervention');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showproposal() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Proposal');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showinfografis() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Infografis');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showessay() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Essay');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showfilm() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Film');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

    function intervention() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Intervention' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function proposal() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Proposal' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function design() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-design' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function infografis() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Infografis' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function essay() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Essay' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function film() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Movie' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function mypaper() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Movie' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function vlog() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Vlog' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function photography() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Photography' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function science() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Science' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function debate() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Debate' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function preach() {
        $sql = "SELECT * FROM nilai WHERE reg_jenis='Psy-Preach' ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function qiraah() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Qiraah' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function peserta() {
        $sql = "SELECT * FROM tbl_reg ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function subpeserta() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama);
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
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
    
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_reg');
        $this->db->order_by('reg_id','desc');
        if(array_key_exists('reg_id',$params) && !empty($params['reg_id'])){
            $this->db->where('reg_id',$params['reg_id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
        
    }
}