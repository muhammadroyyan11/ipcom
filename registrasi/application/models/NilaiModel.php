<?php
class NilaiModel extends MY_Model
{
    var $gallerypath;
    var $gallery_path_url;
    public $table = 'nilai';
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
            ],
            [
                'field' => 'filesk',
                'label' => 'Upload',
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

    function getNilaiAll(){
      return $this->db->get('nilai');
    }

    public function getNilaiById($id){
         $this->db->where('id', $id);
         $query=$this->db->get('nilai');
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
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('file');
        $file = $this->upload->data();
        $username = $this->session->userdata('username');
        $field = array(
                'username' => $this->input->post('username'),
                'nama' => $this->session->userdata('nama'),
                'reg_jenis' => $this->input->post('reg_jenis'),
                'file'=>$file['file_name']
        );
        $this->db->insert('nilai', $field);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    
    public function update_data(){
        if(isset($_FILES['file']['name']))
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
         //$this->upload->do_upload('file');
         if(!$this->upload->do_upload('file'))
         {
             flashMessage('success', 'Data sukses diupdate.');
         } else
         {
             $file = $this->upload->data();
             $field = array(
                 'file' => $file['file_name']
             );
             $id = $this->input->post('txt_hidden');
             $this->db->where('id', $id);
             $this->db->update('nilai', $field);
           }
         }

        $username = $this->session->userdata('username');
        $field = array(
                'nama' => $this->input->post('nama'),
                'reg_jenis' => $this->input->post('reg_jenis')
         );
         $id = $this->uri->segment(3);
         $id = $this->input->post('txt_hidden');
         $this->db->where('id', $id);
         $this->db->update('nilai', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

    }

    public function update_dataPegawai(){
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
            $field = ['ijazah' => $file['file_name']];
            $id = $this->input->post('txt_hidden');
            $this->db->where('id', $id);
            $this->db->update('nilai', $field);
          }
        }

        $username = $this->session->userdata('username');
        $field = array(
                'jenjang' => $this->input->post('jenjang'),
                'fakultas' => $this->input->post('fakultas'),
                'universitas' => $this->input->post('universitas'),
                'minatkeahlian' => $this->input->post('minatkeahlian'),
                'tahunlulus' => $this->input->post('tahunlulus')
         );
         $id = $this->uri->segment(3);
         $id = $this->input->post('txt_hidden');
         $this->db->where('id', $id);
         $this->db->update('nilai', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

    }

    public function delete_data($id){
        $this->db->where('id', $id);
        $this->db->delete('nilai');
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
     }

     public function getPreach() {
        $username = $this->session->userdata('username');
        //$reg_jenis = $this->session->userdata('reg_jenis');
        $this->db->where('username', $username);
        //$this->db->where('reg_jenis', $reg_jenis);
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

     public function getLomba() {
        $username = $this->session->userdata('username');
        //$reg_jenis = $this->session->userdata('jabatan');
        $this->db->where('username', $username);
       // $this->db->where('reg_jenis', $reg_jenis);
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

     public function getLombaadmin() {
        $username = $this->session->userdata('username');
        $reg_jenis = $this->session->userdata('jabatan');
        //$this->db->where('username', $username);
        //$this->db->where('reg_jenis', $reg_jenis);
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

      public function getNilaiDosen() {
        $query = $this->db->order_by('level, jenjang', 'asc');
        $query = $this->db->get('nilai');
        
        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

     public function getNilaiAdm() {
        $username = $this->session->userdata('username');
        $this->db->where('level', 'adm');
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

     public function getNilaiMahasiswa() {
        $username = $this->session->userdata('username');
        $this->db->where('level', 'mahasiswa');
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

     public function getNilaiAlumni() {
        $username = $this->session->userdata('username');
        $this->db->where('level', 'alumni');
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

     public function getNilaiPegawai() {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $query = $this->db->get('nilai');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }


  function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('nilai');
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
