<?php
class KeteranganAktifModel extends MY_Model
{
    var $gallerypath;
    var $gallery_path_url;
    public $table = 'keteranganaktif';
    public function __construct()
    {
        parent::__construct();
        $this->pagination_delimiters = array('<li>','</li>');
        $this->pagination_arrows = array('<span aria-hidden="true">&laquo;</span>','<span aria-hidden="true">&raquo;</span>');
        $this->galerypath = realpath(APPPATH .'../files');
        $this->galary_path_url = base_url().'files/';
    }

    public function getKeteranganAktifById($id){
         $this->db->where('id', $id);
         $query=$this->db->get('keteranganaktif');
         if($query->num_rows() >0) {
            return $query->row();
         } else {
            return false;
         }
    }
    
    public function getKeteranganAktifByEmail($id){
         $this->db->where('id', $id);
         $query=$this->db->get('keteranganaktif');
         if($query->num_rows() >0) {
             //$mahasiswa = $keteranganaktif['nama'];
            return $query->row();
         } else {
            return false;
         }
    }

    public function submit(){
        $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
            'upload_path' => './files/',
            'overwrite' => TRUE,
            'remove_space' => TRUE,
            'max_width'=>20000,
            'max_height'=>20000,
            'max_size' =>60000
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('userfile');
        $datafile = $this->upload->data();
        $filepermohonan = $_FILES['userfile']['name'];
        $this->upload->do_upload('userfile2');
        $tgl = date('Y-m-d');
        $datafile = $this->upload->data();
        $filespp = $_FILES['userfile2']['name'];
        $field = array(
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level'),
            'nama' => $this->session->userdata('nama'),
            'tglmasehi' => $tgl,
            'filepermohonan' => $_FILES['userfile']['name'],
            'filespp' => $_FILES['userfile2']['name'],
            'alamat' => $this->input->post('alamat')
        );
        $this->db->insert('keteranganaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function update_data_ktu(){
        $username = $this->session->userdata('username');
        $field = array(
            'nosurat' => $this->input->post('nosurat'),
            'tglmasehi' => $this->input->post('tglmasehi'),
            'semester' => $this->input->post('semester'),
            'ta' => $this->input->post('ta'),
            'keperluan' => $this->input->post('keperluan'),
            'keperluan2' => $this->input->post('keperluan2'),
            'keperluan3' => $this->input->post('keperluan3'),
            'alamat' => $this->input->post('alamat'),
            'kabupaten' => $this->input->post('kabupaten'),
            'verifikasi' => $this->input->post('verifikasi')
        );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $this->db->where('id', $id);
        $this->db->update('keteranganaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

        public function update_data_mahasiswa(){
        if(isset($_FILES['userfile']['name']))
        {
            $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                'upload_path' => './files/',
                'overwrite' => TRUE,
                'remove_space' => TRUE,
                'max_width'=>20000,
                'max_height'=>20000,
                'max_size' =>60000
            );
            $this->load->library('upload', $konfigurasi);
            if(!$this->upload->do_upload())
            {
                flashMessage('success', 'Data sukses diupdate.');
            } else
            {
                $file = $this->upload->data();
                $field = array(
                    'filepermohonan' => $file['file_name']);
                $id = $this->input->post('txt_hidden');
                $this->db->where('id', $id);
                $this->db->update('keteranganaktif', $field);                
            }
        }

        $username = $this->session->userdata('username');
        $field = array(
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'semester' => $this->input->post('semester'),
            'ta' => $this->input->post('ta'),
            'email' => $this->input->post('email'),
            'keperluan' => $this->input->post('keperluan'),
            'keperluan2' => $this->input->post('keperluan2'),
            'keperluan3' => $this->input->post('keperluan3'),
            'alamat' => $this->input->post('alamat'),
            'kabupaten' => $this->input->post('kabupaten')
        );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $this->db->where('id', $id);
        $this->db->update('keteranganaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    
    public function update_data_mahasiswa2(){
        if(isset($_FILES['userfile']['name']))
        {
            $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                'upload_path' => './files/',
                'overwrite' => TRUE,
                'remove_space' => TRUE,
                'max_width'=>20000,
                'max_height'=>20000,
                'max_size' =>60000
            );
            $this->load->library('upload', $konfigurasi);
            if(!$this->upload->do_upload())
            {
                flashMessage('success', 'Data sukses diupdate.');
            } else
            {
                $file = $this->upload->data();
                $field = array(
                    'filespp' => $file['file_name']);
                $id = $this->input->post('txt_hidden');
                $this->db->where('id', $id);
                $this->db->update('keteranganaktif', $field);                
            }
        }

        $username = $this->session->userdata('username');
        $field = array(
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'semester' => $this->input->post('semester'),
            'ta' => $this->input->post('ta'),
            'email' => $this->input->post('email'),
            'keperluan' => $this->input->post('keperluan'),
            'keperluan2' => $this->input->post('keperluan2'),
            'keperluan3' => $this->input->post('keperluan3'),
            'alamat' => $this->input->post('alamat'),
            'kabupaten' => $this->input->post('kabupaten')
        );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $this->db->where('id', $id);
        $this->db->update('keteranganaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function update_datadekan(){


        $username = $this->session->userdata('username');
        $nama = $this->input->post('nama');
        $field = array(
            'approval' => $this->input->post('approval')
         );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $nama = $this->input->post('nama');
        $this->db->where('id', $id);
        $this->db->update('keteranganaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function delete_data($id){
        $this->db->where('id', $id);
        $this->db->delete('keteranganaktif');
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
     }

     public function getKeteranganAktif() {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $this->db->order_by('verifikasi', 'asc');
        $query = $this->db->get('keteranganaktif');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

    public function getKeteranganAktifAdmTU() {
        $this->db->order_by('verifikasi', 'asc');
        $query = $this->db->get('keteranganaktif');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getKeteranganAktifDekan() {
        $verifikasi=1;
        $this->db->where('verifikasi', $verifikasi);
        $this->db->order_by('approval', 'asc');
        $query = $this->db->get('keteranganaktif');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

     public function getKarierDosen() {
        $username = $this->session->userdata('username');
        $this->db->where('level', 'dosen');
        $query = $this->db->get('keteranganaktif');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

  function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('keteranganaktif');
        $this->db->order_by('id','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

}
