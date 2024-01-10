<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends MY_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('Model_common');
		$this->load->model('PsypaperModel');
        $this->load->model('PenilaianModel');
    if($this->session->userdata('logged_in') != TRUE ){
        $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
        redirect('');
    };
    if($this->session->userdata('level') != 'juri') {
        redirect('');
    };
}

  public function nilai()
  {
    
    //echo $this->session->userdata('jabatan');
   
    //  "</pre>";echo "<pre>";
    // echo print_r($this->session->userdata('jabatan'));
    // echo
    //$data['setting'] = $this->Model_common->get_setting_data();

    //$data['testimonial'] = $this->PsypaperModel->proposal();
    $username = $this->session->userdata('username');
    $reg_jenis = $this->session->userdata('reg_jenis');
    $data['penilaian'] = $this->PenilaianModel->ppreach();
        //  echo "<pre>";
        //  print_r($data);
        //  echo "</pre>";
        // echo $username;
        // echo $reg_jenis;
    
    $mainView = 'penilaian/penilaian_index_view';
    $this->load->view('templates/dosen/templatehome', compact('mainView'));
  }

  public function Psyproposal()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->proposal();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyproposal/psyproposal_index_view', $data);
  }

  public function Psydesign()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->design();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsydesign/psydesign_index_view', $data);
  }

  public function Psyessay()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->essay();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyessay/psyessay_index_view', $data);
  }

  public function Psyphotography()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->photography();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyphotography/psyphotography_index_view', $data);
  }

  public function Psyinfografis()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->infografis();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyinfografis/psyinfografis_index_view', $data);
  }

  public function Psyintervention()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->intervention();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyintervention/psyintervention_index_view', $data);
  }

  public function Psymovie()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->film();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyfilm/psyfilm_index_view', $data);
  }

  public function Psypaper()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->mypaper();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsypaper/psypaper_index_view', $data);
  }

  public function Psypreach()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->preach();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsypreach/psypreach_index_view', $data);
  }

  public function Psyqiraah()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->qiraah();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyqiraah/psyqiraah_index_view', $data);
  }

  public function Psyvlog()
  {
    $data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->vlog();

		$this->load->view('templates/dosen/template');
    $this->load->view('juripsyvlog/psyvlog_index_view', $data);
  }
}