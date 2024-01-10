<?php
class ProfildbModel extends MY_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('users', $data);
      return true;
    }catch(Exception $e){
    }
  }

  public function data(){
   $this->db->select('*');
   $this->db->from('users');
   $data = $this->db->get();
   return $data->result();
 }

 public function getid($id){
    $this->db->where('id', $id);
    return $this->db->get('users')->result();
  }

  public function foto($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('users')->row();
  }
  public function ubah($id, $data) {
    try{
      $this->db->where('id',$id)->limit(1)->update('users', $data);
      return true;
    }catch(Exception $e){}
  }



}
