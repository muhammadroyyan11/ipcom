<?php
class Nilai extends DosenController
{
     function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('NilaiModel');
        $this->load->helper('url','html','form');
    }

    public function getPreach()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->where('username',$username)->getUser();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getPreach();
 //      print_r ($data);
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai/nilai_index_view', $data);
    }

    public function getLomba()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->where('username',$username)->getUser();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getLomba();
 //      print_r ($data);
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai/nilai_index_view', $data);
    }

    public function getLombaadmin()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

       
        $data['nilai'] = $this->NilaiModel->getLombaadmin();
 //      print_r ($data);
        $this->load->view('templates/admin/template');
        $this->load->view('nilai/admin_nilai_index_view', $data);
    }

    public function getNilaiDosen()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->getnilaiDosen();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getNilaiDosen();
 //      print_r ($data);
        $this->load->view('templates/admin/template');
        $this->load->view('nilai_index_view', $data);
    }

    public function getNilaiAdm()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->getNilaiAdm();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getNilaiAdm();
 //      print_r ($data);
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai_index_view', $data);
    }

    public function getNilaiMahasiswa()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->getNilaiMahasiswa();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getNilaiMahasiswa();
 //      print_r ($data);
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai_index_view', $data);
    }

    public function getNilaiPegawai()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->getNilaiPegawai();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getNilaiPegawai();
 //      print_r ($data);
        $this->load->view('templates/dosen/template');
        $this->load->view('adm/nilai/nilai_index_view', $data);
    }

    public function getNilaiAlumni()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $nilai = $this->NilaiModel->getNilaiAlumni();
        if (!$nilai) {
            message('error', 'Tidak ada data!');
        }
        $data['nilai'] = $this->NilaiModel->getNilaiAlumni();
 //      print_r ($data);
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai_index_view', $data);
    }




    public function create()
    {
        $level = $this->session->userdata('level');
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai/nilai_view');
    }

    public function createPegawai()
    {
        $level = $this->session->userdata('level');
        $this->load->view('templates/dosen/template');
        $this->load->view('adm/nilai/nilai_view');
    }

    public function ubah($id){
        $level = $this->session->userdata('level');
        $data['nilai']=$this->NilaiModel->getNilaiById($id);
        $this->load->view('templates/dosen/template');
        $this->load->view('nilai/nilai_edit_view', $data);
    }

     public function ubahPegawai($id){
        $level = $this->session->userdata('level');
        $data['nilai']=$this->NilaiModel->getNilaiById($id);
        $this->load->view('templates/dosen/template');
        $this->load->view('adm/nilai/nilai_edit_view', $data);
    }

    public function submit(){

        $result = $this->NilaiModel->submit();
        if($result) {
          flashMessage('success', 'Data berhasil disimpan!');
        } else {
          flashMessage('error', 'Data gagal disimpan!');
        }

        redirect('nilai/getLomba', 'refresh');

    }

    public function submitPegawai(){

        $result = $this->NilaiModel->submit();
        if($result) {
          flashMessage('success', 'Data berhasil disimpan!');
        } else {
          flashMessage('error', 'Data gagal disimpan!');
        }

        redirect('nilai/getLomba', 'refresh');

    }

    public function updatedata(){
      $result = $this->NilaiModel->update_data();
      if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('nilai/getLomba', 'refresh');
    }

    public function updatedataPegawai(){
      $result = $this->NilaiModel->update_dataPegawai();
      if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('nilai/getnilaiPegawai', 'refresh');
    }


    public function deletedata($id){
      $id = $this->uri->segment(3);
    //  $this->load->model('nilai');
      $result = $this->NilaiModel->delete_data($id);
      if($result) {
          flashMessage('success', 'Data berhasil dihapus!');
      } else {
          flashMessage('error', 'Data gagal dihapus!');
      }
      redirect('nilai/getLomba', 'refresh');
    }
//http://codexworld.com/codeigniter-download-file-from-database/

    public function deletedataPegawai($id){
      $id = $this->uri->segment(3);
    //  $this->load->model('nilai');
      $result = $this->NilaiModel->delete_data($id);
      if($result) {
          flashMessage('success', 'Data berhasil dihapus!');
      } else {
          flashMessage('error', 'Data gagal dihapus!');
      }
      redirect('nilai/getnilaiPegawai', 'refresh');
    }

    public function download($id){
         $data = array();
         //get files from database
        $data['nilai'] = $this->NilaiModel->getRows();
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->NilaiModel->getRows(array('id' => $id));
            
            //file path
            $file = 'files/'.$fileInfo['file'];
            
            //download file from directory
            force_download($file, NULL);
        }
    }
}
