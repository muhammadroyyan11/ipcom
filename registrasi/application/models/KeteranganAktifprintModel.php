<?php
class KeteranganAktifprintModel extends MY_Model
{
    var $gallerypath;
    var $gallery_path_url;
    public $table = 'permohonanaktif';
    public function __construct()
    {
        parent::__construct();
        $this->pagination_delimiters = array('<li>','</li>');
        $this->pagination_arrows = array('<span aria-hidden="true">&laquo;</span>','<span aria-hidden="true">&raquo;</span>');
        $this->galerypath = realpath(APPPATH .'../files');
        $this->galary_path_url = base_url().'files/';
    }

  
/*
    function getKeteranganAktif(){
      return $this->db->get('permohonanaktif');
    }
*/
    public function getKeteranganAktifById($id){
         $this->db->where('id', $id);
         $query=$this->db->get('permohonanaktif');
         if($query->num_rows() >0) {
            return $query->row();
         } else {
            return false;
         }

    }

    public function getmohonketeranganaktifByEmail($id){
         $this->db->where('id', $id);
         $query=$this->db->get('permohonanaktif');
         if($query->num_rows() >0) {
             $mahasiswa = $mohonketeranganaktif['nama'];
            return $query->row();

         } else {
            return false;
         }
    }



    public function submit(){

        $tgl = date('Y-m-d');
        $field = array(
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level'),
            'nama' => $this->session->userdata('nama'),
            'tglmasehi' => $tgl,
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'semester' => $this->input->post('semester'),
            'ta' => $this->input->post('ta'),
            'email' => $this->input->post('email'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'alamat' => $this->input->post('alamat'),
            'kelurahan' => $this->input->post('id_kel'),
            'kecamatan' => $this->input->post('id_kec'),
            'kabupaten' => $this->input->post('id_kab'),
            'provinsi' => $this->input->post('id_prov'),
            'orangtua' => $this->input->post('orangtua'),
            'kodepos' => $this->input->post('kodepos'),
            'keperluan' => $this->input->post('keperluan')
  
        );
        $this->db->insert('permohonanaktif', $field);

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
                    'filektm' => $file['file_name'],
                    'filespp' => $file['file_name']);
                $id = $this->input->post('txt_hidden');
                $this->db->where('id', $id);
                $this->db->update('permohonanaktif', $field);

            }
        }


        $username = $this->session->userdata('username');
        $field = array(
            'nosurat' => $this->input->post('nosurat'),
            'tglmasehi' => $this->input->post('tglmasehi'),
            'tglhijriah' => $this->input->post('tglhijriah'),
            'verifikasi' => $this->input->post('verifikasi'),
            'approval' => $this->input->post('approval')
        );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $this->db->where('id', $id);
        $this->db->update('permohonanaktif', $field);

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
                    'filektm' => $file['file_name']);
                $id = $this->input->post('txt_hidden');
                $this->db->where('id', $id);
                $this->db->update('permohonanaktif', $field);

            }
        }
        $username = $this->session->userdata('username');
        $field = array(
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'semester' => $this->input->post('semester'),
            'ta' => $this->input->post('ta'),
            'email' => $this->input->post('email'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'alamat' => $this->input->post('alamat'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten' => $this->input->post('kabupaten'),
            'provinsi' => $this->input->post('provinsi'),
            'orangtua' => $this->input->post('orangtua'),
            'kodepos' => $this->input->post('kodepos'),
            'keperluan' => $this->input->post('keperluan')
 
        );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $this->db->where('id', $id);
        $this->db->update('permohonanaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function update_datadekan(){
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
                $this->db->update('permohonanaktif', $field);

            }
        }


        $username = $this->session->userdata('username');
        $nama = $this->input->post('nama');
        $field = array(
            'approval' => $this->input->post('approval')
         );
        $id = $this->uri->segment(3);
        $id = $this->input->post('txt_hidden');
        $nama = $this->input->post('nama');
        $this->db->where('id', $id);
        $this->db->update('permohonanaktif', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

     public function namamahasiswa(){

        $username = $this->session->userdata('username');
        $nama = $this->input->post('nama');
     }


    public function delete_data($id){
        $this->db->where('id', $id);
        $this->db->delete('permohonanaktif');
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
     }

     public function getketeranganaktif() {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $query = $this->db->get('permohonanaktif');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

    public function getmohonketeranganaktifAdm() {
        $jabatan = $this->session->userdata('jabatan');
        $this->db->where('jabatan1', $jabatan);
        $query = $this->db->get('permohonanaktif');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getmohonketeranganaktifDekan() {
        $verifikasi=1;
        $jabatan = $this->session->userdata('jabatan');
        $this->db->where('jabatan2', $jabatan);
        $this->db->where('verifikasi', $verifikasi);
        $query = $this->db->get('permohonanaktif');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }

     public function getKarierDosen() {
        $username = $this->session->userdata('username');
        $this->db->where('level', 'dosen');
        $query = $this->db->get('permohonanaktif');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

  function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('permohonanaktif');
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
