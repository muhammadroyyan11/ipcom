<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profildb extends DosenController {
    public function __construct() {
        parent::__construct();
        $this->load->model('ProfildbModel');
    }

    public function editdosen(){
      	$this->load->view('templates/dosen/template');
        $this->load->view('dosen/profil/editprofil', $data);
    }
    public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './foto/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 20000, 'max_width' => 20000,
        'max_height' => 60000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('produk/input', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['foto' => $file['file_name'],
           'nama' => set_value('nama'),
           'password' => set_value('password')
          ];
          $this->ProfildbModel->input($data); //memasukan data ke database
          redirect('dosen'); //mengalihkan halaman
      }
  	}

  	public function data(){
	  $data['users'] = $this->ProfildbModel->data();
	  $this->load->view('users', $data);
	}

	public function ubah(){
	 $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/dosen/template');
    $this->load->view('editprofil', $data);
  }

  public function ubahadm(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/adm/template');
    $this->load->view('editprofil', $data);
  }

  public function ubahsubadmin(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/subadmin/template');
    $this->load->view('editprofilsubadmin', $data);
  }
	
	public function ubahjuri(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/dosen/template');
    $this->load->view('editprofiljuri', $data);
  }


  public function ubahlomba(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/dosen/template');
    $this->load->view('editprofil', $data);
  }

  public function ubahmahasiswa(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/mahasiswa/template');
    $this->load->view('editprofil', $data);
  }

  public function ubahalumnni(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/alumni/template');
    $this->load->view('editprofil', $data);
  }

  public function ubahadmin(){
    $dosen = $this->session->userdata('id');
    $data['users'] = $this->ProfildbModel->getid($dosen);
    $this->load->view('templates/admin/template');
    $this->load->view('editprofil', $data);
  }

  public function proses_ubah(){
    $dosen = $this->session->userdata('id');

    $foto = $this->ProfildbModel->foto($dosen);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './foto/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 20000, 'max_width' => 20000,
          'max_height' => 60000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('editprofil', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto' => $file['file_name']];
           // unlink('foto/'.$foto->foto); //menghapus gambar yang lama
        }
      }

    $data['nama']      = set_value('nama');
     // $data['password']   = set_value('');
    $password = $this->input->post('password', true);
        if (!empty($password)) {
            $data = array(
                'password' => md5($this->input->post('password')));
         }
    $this->ProfildbModel->ubah($dosen, $data); //memasukan data ke database
    redirect('');
  }
	
	public function proses_ubahjuri(){
    $dosen = $this->session->userdata('id');

    $foto = $this->ProfildbModel->foto($dosen);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './foto/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 20000, 'max_width' => 20000,
          'max_height' => 60000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('editprofil', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto' => $file['file_name']];
           // unlink('foto/'.$foto->foto); //menghapus gambar yang lama
        }
      }

    $data['nama']      = set_value('nama');
     // $data['password']   = set_value('');
    $password = $this->input->post('password', true);
        if (!empty($password)) {
            $data = array(
                'password' => md5($this->input->post('password')));
         }
    $this->ProfildbModel->ubah($dosen, $data); //memasukan data ke database
    redirect('');
  }


  public function proses_ubahsubadmin(){
    $dosen = $this->session->userdata('id');

    $foto = $this->ProfildbModel->foto($dosen);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './foto/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 20000, 'max_width' => 20000,
          'max_height' => 60000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('editprofilsubadmin', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto' => $file['file_name']];
           // unlink('foto/'.$foto->foto); //menghapus gambar yang lama
        }
      }

    $data['nama']      = set_value('nama');
     // $data['password']   = set_value('');
    $password = $this->input->post('password', true);
        if (!empty($password)) {
            $data = array(
                'password' => md5($this->input->post('password')));
         }
    $this->ProfildbModel->ubah($dosen, $data); //memasukan data ke database
    redirect('subadmin');
  }

  public function proses_ubahlomba(){
    $dosen = $this->session->userdata('id');

    $foto = $this->ProfildbModel->foto($dosen);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './foto/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 20000, 'max_width' => 20000,
          'max_height' => 60000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('editprofillomba', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto' => $file['file_name']];
           // unlink('foto/'.$foto->foto); //menghapus gambar yang lama
        }
      }

    $data['nama']      = set_value('nama');
     // $data['password']   = set_value('');
    $password = $this->input->post('password', true);
        if (!empty($password)) {
            $data = array(
                'password' => md5($this->input->post('password')));
         }
    $this->ProfildbModel->ubah($dosen, $data); //memasukan data ke database
    redirect('lomba');
  }

public function hapus($id){
  $gambar = $this->ProfildbModel->gambar($id);
  unlink('foto/'.$foto->foto);
  $this->ProfildbModel->hapus($id);
  redirect('profildb/data'); //mengalihkan halaman
}

}