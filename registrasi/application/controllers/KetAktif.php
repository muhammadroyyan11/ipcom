<?php
class KetAktif extends DosenController
{
     function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('KetAktifModel');
        $this->load->helper('url','html','form');
    }



    public function getKeteranganAktif()
    {
        $data_users = $this->KetAktifModel->getKeteranganAktif();
        if (!$data_users) {
            message('error', 'Tidak ada data!');
        }
        $data['data_users'] = $this->KetAktifModel->getKeteranganAktif();
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $data_users = $this->KetAktifModel->where('akun',$username)->getKeteranganAktif();

        if (!$data_users) {
            message('error', 'Tidak ada data!');
        }
        $data['data_users'] = $this->KetAktifModel->getKeteranganAktif();
        //print_r ($data);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_index_view', $data);
    }

     public function create()
    {

        $level = $this->session->userdata('level');
        $username = $this->session->userdata('username');
        $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('data_users'); //dari tabel data_users
        $ketaktif = $this->db->where('akun', $username);
        $ketaktif = $this->db->get(); //mengambil seluruh data

        //$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
        //$this->db->from('keteranganaktif'); //dari tabel data_users
        //$this->db->join('data_users', 'data_users.akun = keteranganaktif.username', 'left'); //menyatukan tabel users menggunakan left join
        //$ketaktif = $this->db->where('akun', $username);
        //$ketaktif = $this->db->get(); //mengambil seluruh data


        $data=array();
        $data['records']=$ketaktif->result_array();
        //return $data->result(); //mengembalikan data
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_view', $data);

    }

     public function submit(){

        $result = $this->KetAktifModel->submit();
        if($result) {
          flashMessage('success', 'Data berhasil disimpan!');
          } else {
          flashMessage('error', 'Data gagal disimpan!');
        }

        redirect('KeteranganAktif/getKeteranganAktif', 'refresh');

    }
}

