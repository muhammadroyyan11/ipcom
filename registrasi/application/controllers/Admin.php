<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    //memanggil function dari MY_Controller
    $this->cekLogin();
    //validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
    if($this->session->userdata('logged_in') != TRUE ){
      $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
      redirect('');
    };
    if($this->session->userdata('level') != 'admin') {
        redirect('');
    };
  }

  public function index()
  {
	
    $mainView = 'dashboard/dashboard_view';
    $this->load->view('templates/admin/templatehome', compact('mainView'));
  }
}