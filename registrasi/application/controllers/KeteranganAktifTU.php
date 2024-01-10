<?php
class KeteranganAktifTU extends DosenController
{
     function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('KeteranganAktifTUModel');
        $this->load->helper('url','html','form');
    }

    public function getKeteranganAktifAdm()
    {
        $level = $this->session->userdata('level');
              $keteranganaktif = $this->KeteranganAktifTUModel->getKeteranganAktifAdmTU();
                if (!$keteranganaktif) {
                    message('error', 'Tidak ada data!');
                }
              $data['keteranganaktif'] = $this->KeteranganAktifTUModel->getKeteranganAktifAdmTU();
           $this->load->view('templates/' .$level. '/template');
            $this->load->view('keteranganaktif/ktu_keteranganaktif_index_view', $data);
            }

    public function create()
    {
        $level = $this->session->userdata('level');
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/keteranganaktif_view');
    }

    public function ubah($id){
        $level = $this->session->userdata('level');
        $data['keteranganaktif']=$this->KeteranganAktifTUModel->getKeteranganAktifById($id);
        $this->load->view('templates/' .$level. '/template');
        $this->load->view('keteranganaktif/umum_keteranganaktif_edit_view', $data);
    }
    
    public function updatedata(){
        $mail = $this->input->post('email');
        $nama = $this->input->post('nama');
        $recipient = array('miketrg72@gmail.com', $mail);
        $result = $this->KeteranganAktifTUModel->update_data();
        if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
            $htmlContent = '<h3>Surat Keterangan Aktif Kuliah</h3>';
            $htmlContent .= 'Terima kasih <b>';
            $htmlContent .= $nama;
            $htmlContent .= ' </b>telah menggunakan Aplikasi Layanan Online Psikologi (SIAP Psikologi).  Surat Keterangan anda dalam proses menunggu approval Dekan. Anda akan mendapat notifikasi jika Surat Keterangan anda selesai di approval.';
    
            $config['mailtype'] = 'html';

            $this->email->to($recipient);
            $this->email->from('layananpsikologiuir@gmail.com','PSIKOLOGI UIR');
            $this->email->subject('Surat Keterangan Aktif Kuliah');
            $this->email->message($htmlContent);
            $this->email->send();
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('KeteranganAktifTU/getKeteranganAktifAdm', 'refresh');
    }

    public function updatedataktu(){
        $mail = $this->input->post('email');
        $nama = $this->input->post('nama');
        $recipient = array('miketrg72@gmail.com', $mail);
        $result = $this->KeteranganAktifTUModel->update_data_ktu();
        if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
            $htmlContent = '<h3>Surat Keterangan Aktif Kuliah</h3>';
            $htmlContent .= 'Terima kasih <b>';
            $htmlContent .= $nama;
            $htmlContent .= ' </b>telah menggunakan Aplikasi Layanan Online Psikologi (SIAP Psikologi).  Surat Keterangan anda dalam proses menunggu approval Dekan. Anda akan mendapat notifikasi jika Surat Keterangan anda selesai di approval.';
    
            $config['mailtype'] = 'html';

            $this->email->to($recipient);
            $this->email->from('layananpsikologiuir@gmail.com','PSIKOLOGI UIR');
            $this->email->subject('Surat Keterangan Aktif Kuliah');
            $this->email->message($htmlContent);
            $this->email->send();
      } else {
          flashMessage('success', 'File berhasil diupdate!');
      }
      redirect('KeteranganAktif/getKeteranganAktifAdm', 'refresh');
    }

    public function deletedata($id){
      $id = $this->uri->segment(3);
      $result = $this->KeteranganAktifTUModel->delete_data($id);
      if($result) {
          flashMessage('success', 'Data berhasil dihapus!');
      } else {
          flashMessage('error', 'Data gagal dihapus!');
      }
      redirect('KeteranganAktifTU/getKeteranganAktifAdm', 'refresh');
    }

   public function download($id){
        $data = array();
         //get files from database
        $data['keteranganaktif'] = $this->KeteranganAktifTUModel->getRows();
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->KeteranganAktifTUModel->getRows(array('id' => $id));

            //file path
            $file = 'files/'.$fileInfo['filepermohonan'];

            //download file from directory
            force_download($file, NULL);
        }
    }
    
    public function downloadspp($id){
        $data = array();
         //get files from database
        $data['keteranganaktif'] = $this->KeteranganAktifTUModel->getRows();
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->KeteranganAktifTUModel->getRows(array('id' => $id));

            //file path
            $file = 'files/'.$fileInfo['filespp'];

            //download file from directory
            force_download($file, NULL);
        }
    }

}
