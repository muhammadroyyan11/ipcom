<?php
class KeteranganAktif extends DosenController
{
     function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('KeteranganAktifModel');
        $this->load->helper('url','html','form');
    }

    public function getKeteranganAktif()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $keteranganaktif = $this->KeteranganAktifModel->where('username',$username)->getKeteranganAktif();
        if (!$keteranganaktif) {
            message('error', 'Tidak ada data!');
        }
        $data['keteranganaktif'] = $this->KeteranganAktifModel->getKeteranganAktif();
       // print_r ($data);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_index_view', $data);
    }

    public function getKeteranganAktifAdm()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

              $keteranganaktif = $this->KeteranganAktifModel->getKeteranganAktifAdmTU();
                if (!$keteranganaktif) {
                    message('error', 'Tidak ada data!');
                }
              $data['keteranganaktif'] = $this->KeteranganAktifModel->getKeteranganAktifAdmTU();
            //  echo "<pre>";
            //  print_r($data);
            //  echo "</pre>";
            $this->load->view('templates/' .$level. '/template');
            $this->load->view('keteranganaktif/ktu_keteranganaktif_index_view', $data);
    }

    public function getKeteranganAktifDekan()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');
        $verifikasi= 1;

        $keteranganaktif = $this->KeteranganAktifModel->where('verifikasi',$verifikasi)
                                                      ->getKeteranganAktifDekan();
        if (!$keteranganaktif) {
            message('error', 'Tidak ada data!');
        }
        $data['keteranganaktif'] = $this->KeteranganAktifModel->getKeteranganAktifDekan();
        //print_r ($data);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/dekan_keteranganaktif_index_view', $data);
    }      

    public function getKeteranganAktifDosen()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $KeteranganAktif = $this->KeteranganAktifModel->getKeteranganAktifDosen();
        if (!$KeteranganAktif) {
            message('error', 'Tidak ada data!');
        }
        $data['KeteranganAktif'] = $this->KeteranganAktifModel->getKeteranganAktifDosen();
 //      print_r ($data);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('KeteranganAktif_index_view', $data);
    }

    public function create()
    {
        $level = $this->session->userdata('level');
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_view');
    }

    public function ubah($id){
        $level = $this->session->userdata('level');
        $data['keteranganaktif']=$this->KeteranganAktifModel->getKeteranganAktifById($id);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/umum_keteranganaktif_edit_view', $data);
    }

    public function ubahktu($id){
        $level = $this->session->userdata('level');
        $data['keteranganaktif']=$this->KeteranganAktifModel->getKeteranganAktifById($id);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/ktu_keteranganaktif_edit_view', $data);
    }
    
     public function ubahmahasiswa($id){
        $level = $this->session->userdata('level');
        $data['keteranganaktif']=$this->KeteranganAktifModel->getKeteranganAktifById($id);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_edit_view', $data);
    }
    
    public function ubahmahasiswa2($id){
        $level = $this->session->userdata('level');
        $data['keteranganaktif']=$this->KeteranganAktifModel->getKeteranganAktifById($id);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_edit_view2', $data);
    }

    public function ubahdata($id){
        $level = $this->session->userdata('level');
        $data['keteranganaktif']=$this->KeteranganAktifModel->getKeteranganAktifById($id);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/dekan_keteranganaktif_edit_view', $data);
    }

    public function submit(){
       
        $result = $this->KeteranganAktifModel->submit();
        if($result) {
          flashMessage('success', 'Data berhasil disimpan!');
        } else {
          flashMessage('error', 'Data gagal disimpan!');
        }

        redirect('KeteranganAktif/getKeteranganAktif', 'refresh');

    }

    public function updatedataktu(){
       $result = $this->KeteranganAktifModel->update_data_ktu();
        if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('KeteranganAktif/getKeteranganAktifAdm', 'refresh');
    }
    
    public function updatedatamahasiswa(){
      $result = $this->KeteranganAktifModel->update_data_mahasiswa();
      if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('KeteranganAktif/getKeteranganAktif', 'refresh');
    }
    
    public function updatedatamahasiswa2(){
      $result = $this->KeteranganAktifModel->update_data_mahasiswa2();
      if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('KeteranganAktif/getKeteranganAktif', 'refresh');
    }


    public function updatedatadekan(){
    $result = $this->KeteranganAktifModel->update_datadekan();
      if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
       } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('KeteranganAktif/getKeteranganAktifDekan', 'refresh');
    }


    public function deletedata($id){
      $id = $this->uri->segment(3);
    //  $this->load->model('pendidikan');
      $result = $this->KeteranganAktifModel->delete_data($id);
      if($result) {
          flashMessage('success', 'Data berhasil dihapus!');
      } else {
          flashMessage('error', 'Data gagal dihapus!');
      }
      redirect('KeteranganAktif/getKeteranganAktifAdm', 'refresh');
    }
//http://codexworld.com/codeigniter-download-file-from-database/
    public function deletedatadekan($id){
      $id = $this->uri->segment(3);
    //  $this->load->model('pendidikan');
      $result = $this->KeteranganAktifModel->delete_data($id);
      if($result) {
          flashMessage('success', 'Data berhasil dihapus!');
      } else {
          flashMessage('error', 'Data gagal dihapus!');
      }
      redirect('KeteranganAktif/getKeteranganAktifDekan', 'refresh');
    }

   public function download($id){
        $data = array();
         //get files from database
        $data['keteranganaktif'] = $this->KeteranganAktifModel->getRows();
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->KeteranganAktifModel->getRows(array('id' => $id));

            //file path
            $file = 'files/'.$fileInfo['filepermohonan'];

            //download file from directory
            force_download($file, NULL);
        }
    }
    
    public function downloadspp($id){
        $data = array();
         //get files from database
        $data['keteranganaktif'] = $this->KeteranganAktifModel->getRows();
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->KeteranganAktifModel->getRows(array('id' => $id));

            //file path
            $file = 'files/'.$fileInfo['filespp'];

            //download file from directory
            force_download($file, NULL);
        }
    }

}
