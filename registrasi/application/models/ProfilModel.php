<?php
class ProfilModel extends MY_Model
{

  protected $table = 'data_users';
  public function __construct()
  {
    parent::__construct();
  }

  public function input($data)
  {
    try {
      $this->db->insert('users', $data);
      return true;
    } catch (Exception $e) {
    }
  }

  public function data()
  {
    $this->db->select('*');
    $this->db->from('users');
    $data = $this->db->get();
    return $data->result();
  }

  public function getid($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('users')->result();
  }

  public function foto($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('users')->row();
  }
  public function ubah($id, $data)
  {
    try {
      $this->db->where('id', $id)->limit(1)->update('users', $data);
      return true;
    } catch (Exception $e) {
    }
  }

  public function tampil()
  {
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }

  public function tampildosen()
  {
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join
    $this->db->where('level', 'dosen');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }

  public function tampilmahasiswa()
  {
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join
    $this->db->where('level', 'mahasiswa');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }

  public function tampilalumni()
  {
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join
    $this->db->where('level', 'alumni');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }

  public function tampiladm()
  {
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join
    $this->db->where('level', 'adm');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }

  public function tampilortu()
  {
    $level = $this->session->userdata('level');
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join

    $this->db->where('level', 'mahasiswa');


    $data = $this->db->get(); //mengambil seluruh data

    return $data->result(); //mengembalikan data
  }

  public function profil()
  {
    $id = $this->uri->segment(3);
    $this->db->select('data_users.*, users.username, users.active, users.nama, users.foto, users.level'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('data_users'); //dari tabel data_users
    $this->db->join('users', 'users.id = data_users.id', 'left'); //menyatukan tabel users menggunakan left join
    $this->db->where('data_users.id', $id);
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }
}
