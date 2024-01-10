<?php
class KetAktifModel extends MY_Model
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

    public function getValidationRules()
    {
        return [
            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => ['trim','required']

            ],
            [
                'field' => 'sk',
                'label' => 'SK',
                'rules' => 'required'
            ],
            [
                'field' => 'tglsk',
                'label' => 'Tgl SK',
                'rules' => 'required'
            ]
        ];
    }

    public function getDefaultValues()
    {
        return [
            'jabatan' => '',
            'sk' => '',
            'tglsk'    => '',
            'fileskkarier' => ''
        ];
    }
/*
    function getKeteranganAktif(){
      return $this->db->get('keteranganaktif');
    }
*/
    public function getKeteranganAktifById($id){
         $this->db->where('id', $id);
         $query=$this->db->get('keteranganaktif');
         if($query->num_rows() >0) {
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

        $tgl = date('Y-m-d');
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('userfile');
        $datafile = $this->upload->data();
        $filepermohonan = $_FILES['userfile']['name'];
        $this->upload->do_upload('userfile2');    
        $datafile = $this->upload->data();
        $filespp = $_FILES['userfile2']['name'];       
        $field = array(
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level'),
            'nama' => $this->session->userdata('nama'),
            'tglmasehi' => $tgl,
            'filepermohonan' => $_FILES['userfile']['name'],
            'filespp' => $_FILES['userfile2']['name'],
            'alamat' => $this->input->post('alamat'),
            'kabupaten' => $this->input->post('kabupaten'),
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'semester' => $this->input->post('semester'),
            'email' => $this->input->post('email'),
            'keperluan' => $this->input->post('keperluan'),
            'ta' => $this->input->post('ta')
        );
        $this->db->insert('keteranganaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

    }

    public function update_data(){
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
                    'filektm' => $file['file_name']);
                $id = $this->input->post('txt_hidden');
                $this->db->where('id', $id);
                $this->db->update('keteranganaktif', $field);

            }
        }


        $username = $this->session->userdata('username');
        $field = array(
            'jabatan1' => $this->input->post('jabatan1'),
            'jabatan2' => $this->input->post('jabatan2'),
            'nosurat' => $this->input->post('nosurat'),
            'tglmasehi' => $this->input->post('tglmasehi'),
            'tglhijriah' => $this->input->post('tglhijriah'),
            'verifikasi' => $this->input->post('verifikasi'),
            'approval' => $this->input->post('approval'),
            'filektm' => $_FILES['userfile']['name'],
            'alamat' => $this->input->post('approval')
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
        if(isset($_FILES['userfile2']['name']))
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
            'alamat' => $this->input->post('alamat')
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


    public function delete_data($id){
        $this->db->where('id', $id);
        $this->db->delete('keteranganaktif');
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
     }

     public function index() {
        $username = $this->session->userdata('username');
        $this->db->select('*' ); //mengambil semua data dari tabel data_users dan users
        $this->db->from('data_users'); //dari tabel data_users
        $data = $this->db->where('akun', $username);
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data
     }

    public function getKeteranganAktifAdm() {
        $jabatan = $this->session->userdata('jabatan');
        $this->db->where('jabatan1', $jabatan);
        $this->db->order_by('verifikasi', 'asc');
        $query = $this->db->get('keteranganaktif');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getKeteranganAktifDekan() {
        $jabatan = $this->session->userdata('jabatan');
        $this->db->where('jabatan2', $jabatan);
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
