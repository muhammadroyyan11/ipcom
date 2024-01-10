<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Subadmin extends MY_Controller
{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE ){
        $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
        redirect('');
    };
    if($this->session->userdata('level') != 'subadmin') {
        redirect('');
    };
}

  public function index()
  {
	
    $mainView = 'dashboard/dashboard_subadmin_view';
    $this->load->view('templates/subadmin/templatehome', compact('mainView'));
  }
}