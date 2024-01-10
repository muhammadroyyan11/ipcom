<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PsypaperModel extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_reg'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Paper' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function showsub() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Paper' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function showpaper() {
       $nama = $this->session->userdata('nama');

       $this->db->where('reg_universitas', $nama)
                    ->where('reg_jenis', 'Psy-Paper');
        $query = $this->db->get('tbl_reg');

        if($query->num_rows() >0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function registrasi() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Paper');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

    function showvlog() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Vlog');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showphotography() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Photography');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showpreach() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Preach');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showqiraah() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Qiraah');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }


     function showdesign() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Design');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showintervention() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Intervention');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showproposal() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Proposal');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }
     
     

     function showinfografis() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Infografis');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showregistrasi() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama);
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     public function tambah_registrasi()
   {
    $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
    'upload_path' => './../public/uploads/',
    'overwrite' => TRUE,
    'remove_space' => TRUE,
    'max_width'=>20000,
    'max_height'=>20000,
    'max_size' =>60000
    );
    $this->load->library('upload', $konfigurasi);
    $this->upload->do_upload('abstrak');
    $abstrak = $this->upload->data();
        
    $this->upload->do_upload('ktm');
    $ktm = $this->upload->data();

    $this->upload->do_upload('pernyataan');
    $pernyataan = $this->upload->data();

    $this->upload->do_upload('screenshoot');
    $screenshoot = $this->upload->data();

    $this->upload->do_upload('softcopy');
    $softcopy = $this->upload->data();
     $tgl = date('Y-m-d');
     $nama = $this->session->userdata('nama');
     $data = array(
       'reg_delegasi' => 'Online',
       'reg_jenis' => $this->input->post('reg_jenis'),
       'reg_universitas' => $nama,
       'reg_date' => $tgl,
       'hp' => $this->input->post('hp'),
       'kategori' => $this->input->post('kategori'),
       'penulis1' => $this->input->post('penulis1'),
       'penulis2' => $this->input->post('penulis4'),
       'penulis3' => $this->input->post('penulis3'),
       'penulis4' => $this->input->post('penulis4'),
      // 'penulis5' => $this->input->post('penulis5'),
       'link' => $this->input->post('link'),
       'abstrak' => $abstrak['file_name'],
        'pernyataan' => $pernyataan['file_name'],
        'ktm' => $ktm['file_name'],
        'softcopy' => $softcopy['file_name'],
        'screenshoot' => $screenshoot['file_name'],
       'judul' => $this->input->post('judul'));
       $this->db->insert('tbl_reg', $data);
       $id = $this->db->insert_id();
       return (isset($id)) ? $id : FALSE;
   }

   public function update_registrasi(){
    if(isset($_FILES['abstrak']['name']))
     {
     $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                           'upload_path' => './../public/uploads/',
                          'overwrite' => TRUE,
                          'remove_space' => TRUE,
                          'max_width'=>20000,
                          'max_height'=>20000,
                          'max_size' =>60000
                          );
      $this->load->library('upload', $konfigurasi);
      //$this->upload->do_upload('file');
      if(!$this->upload->do_upload('abstrak'))
      {
          flashMessage('success', 'Data sukses diupdate.');
      } else
      {
          $abstrak = $this->upload->data();
          $field = array(
              'abstrak' => $abstrak['file_name']
          );
          $id = $this->input->post('txt_hidden');
          $this->db->where('reg_id', $id);
          $this->db->update('tbl_reg', $field);
        }
      }

      if(isset($_FILES['pernyataan']['name']))
     {
     $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                           'upload_path' => './../public/uploads/',
                          'overwrite' => TRUE,
                          'remove_space' => TRUE,
                          'max_width'=>20000,
                          'max_height'=>20000,
                          'max_size' =>60000
                          );
      $this->load->library('upload', $konfigurasi);
      //$this->upload->do_upload('file');
      if(!$this->upload->do_upload('pernyataan'))
      {
          flashMessage('success', 'Data sukses diupdate.');
      } else
      {
          $pernyataan = $this->upload->data();
          $field = array(
              'pernyataan' => $pernyataan['file_name']
          );
          $id = $this->input->post('txt_hidden');
          $this->db->where('reg_id', $id);
          $this->db->update('tbl_reg', $field);
        }
      }

      if(isset($_FILES['ktm']['name']))
         {
         $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                               'upload_path' => './../public/uploads/',
                              'overwrite' => TRUE,
                              'remove_space' => TRUE,
                              'max_width'=>20000,
                              'max_height'=>20000,
                              'max_size' =>60000
                              );
          $this->load->library('upload', $konfigurasi);
         // $this->upload->do_upload('file');
          if(!$this->upload->do_upload('ktm'))
          {
              flashMessage('success', 'Data sukses diupdate.');
          } else
          {
              $ktm = $this->upload->data();
              $field = array(
                  'ktm' => $ktm['file_name']
              );
              $id = $this->input->post('txt_hidden');
              $this->db->where('reg_id', $id);
              $this->db->update('tbl_reg', $field);
            }
          }

          if(isset($_FILES['softcopy']['name']))
         {
         $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                               'upload_path' => './../public/uploads/',
                              'overwrite' => TRUE,
                              'remove_space' => TRUE,
                              'max_width'=>20000,
                              'max_height'=>20000,
                              'max_size' =>60000
                              );
          $this->load->library('upload', $konfigurasi);
         // $this->upload->do_upload('file');
          if(!$this->upload->do_upload('softcopy'))
          {
              flashMessage('success', 'Data sukses diupdate.');
          } else
          {
              $softcopy = $this->upload->data();
              $field = array(
                  'softcopy' => $softcopy['file_name']
              );
              $id = $this->input->post('txt_hidden');
              $this->db->where('reg_id', $id);
              $this->db->update('tbl_reg', $field);
            }
          }

          if(isset($_FILES['screenshoot']['name']))
         {
         $konfigurasi = array('allowed_types'=>'gif|jpg|png|doc|txt|pdf|jpeg|xls|docx|xlsx',
                               'upload_path' => './../public/uploads/',
                              'overwrite' => TRUE,
                              'remove_space' => TRUE,
                              'max_width'=>20000,
                              'max_height'=>20000,
                              'max_size' =>60000
                              );
          $this->load->library('upload', $konfigurasi);
         // $this->upload->do_upload('file');
          if(!$this->upload->do_upload('screenshoot'))
          {
              flashMessage('success', 'Data sukses diupdate.');
          } else
          {
              $screenshoot = $this->upload->data();
              $field = array(
                  'screenshoot' => $screenshoot['file_name']
              );
              $id = $this->input->post('txt_hidden');
              $this->db->where('reg_id', $id);
              $this->db->update('tbl_reg', $field);
            }
          }

          $tgl = date('Y-m-d');
          $nama = $this->session->userdata('nama');
          $field = array(
            'reg_delegasi' => 'Online',
            'reg_jenis' => $this->input->post('reg_jenis'),
            'reg_universitas' => $nama,
            'reg_date' => $tgl,
            'hp' => $this->input->post('hp'),
            'kategori' => $this->input->post('kategori'),
            'penulis1' => $this->input->post('penulis1'),
            'penulis2' => $this->input->post('penulis4'),
            'penulis3' => $this->input->post('penulis3'),
            'penulis4' => $this->input->post('penulis4'),
           // 'penulis5' => $this->input->post('penulis5'),
            'link' => $this->input->post('link'),
           
            'judul' => $this->input->post('judul'));
       $id = $this->uri->segment(3);
       $id = $this->input->post('txt_hidden');
       $this->db->where('reg_id', $id);
       $this->db->update('tbl_reg', $field);

      if($this->db->affected_rows() > 0){
          return true;
      } else {
          return false;
      }

  }

     function showessay() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Essay');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

     function showfilm() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama)
                     ->where('reg_jenis', 'Psy-Film');
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
     }

    function intervention() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Intervention' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function proposal() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Proposal' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function proposalsub() {
          $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Proposal');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
       
    }

    
    function hcmotion() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-HCMotion' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function hcmotionsub() {
         $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-HCMotion');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
      
    }

    function design() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-design' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function infografis() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Infografis' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function essay() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Esai' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function essaysub() {
        $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Esai');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
     
    }

    function film() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Movie' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function mypaper() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Paper' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function tahfidz15() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='PSY-TAHFIDZ JUZ 1-5' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function tahfidz30() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='PSY-TAHFIDZ JUZ 30' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function debat() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Debat' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
      function cerdascermat() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Cerdas Cermat' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function vlog() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Vlog' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function photography() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Fotografi' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function photographysub() {
        $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Fotografi');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
      
    }

    function science() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Cerdas Cermat' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function sciencesub() {
         $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Cerdas Cermat');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
      
      
    }

    function debate() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Debat' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function debatesub() {
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Debat');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
               
      
    }
    
    function tahfidz1() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='PSY-TAHFIDZ JUZ 1-5' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function tahfidz1sub() {
        $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'PSY-TAHFIDZ JUZ 1-5');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
    }

    
    function tahfidz30sub() {
        $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'PSY-TAHFIDZ JUZ 30');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
    }

    function preach() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Preach' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function preachsub() {
        $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Preach');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
   
    }

    function qiraah() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Qira\'\ah' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function qiraahsub() {
         $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Qira\'ah');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
    
    }

    function poster() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Poster' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

function postersub() {
     $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Poster');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();

    }

     function puisi() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Cerpen' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function puisisub() {
          $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Cerpen');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
    
    }

     function pantun() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Pantun' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

     function lagureligi() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Lagu Religi' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function religi() {
        $sql = "SELECT * FROM tbl_reg WHERE reg_jenis='Psy-Lagu Religi' ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function religisub() {
         $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Lagu Religi');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();
      
    }

    function peserta() {
        $sql = "SELECT * FROM tbl_reg ORDER BY reg_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     function pesertasub() {
         $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    return $query->result_array();

        return $query->result_array();
    }

    function subpeserta() {
        $nama = $this->session->userdata('nama');
 
        $this->db->where('reg_universitas', $nama);
         $query = $this->db->get('tbl_reg');
 
         if($query->num_rows() >0) {
             return $query->result();
         } else {
             return false;
         }
    }

    function add($data) {
        $this->db->insert('tbl_reg',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('reg_id',$id);
        $this->db->update('tbl_reg',$data);
    }

    function delete($id)
    {
        $this->db->where('reg_id', $id);
        $this->db->delete('tbl_reg');
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    function get_testimonial($id)
    {
        $sql = 'SELECT * FROM tbl_reg WHERE reg_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function testimonial_check($id)
    {
        $sql = 'SELECT * FROM tbl_reg WHERE reg_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_reg');
        $this->db->order_by('reg_id','desc');
        if(array_key_exists('reg_id',$params) && !empty($params['reg_id'])){
            $this->db->where('reg_id',$params['reg_id']);
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

function update_data_daring2(){
    if(isset($_FILES['abstrak']['name']))
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
        //$this->upload->do_upload('abstrak');
        if(!$this->upload->do_upload('abstrak'))
        {
            flashMessage('success', 'Data sukses diupdate.');
        } else
        {
            $abstrak = $this->upload->data();
            $field = array(
                'abstrak' => $abstrak['file_name']
            );
            $id = $this->input->post('txt_hidden');
            $this->db->where('reg_id', $id);
            $this->db->update('tb;_reg', $field);
          }
        }

        if(isset($_FILES['ktm']['name']))
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
           // $this->upload->do_upload('file');
            if(!$this->upload->do_upload('ktm'))
            {
                flashMessage('success', 'Data sukses diupdate.');
            } else
            {
                $ktm = $this->upload->data();
                $field = array(
                    'ktm' => $ktm['file_name']
                );
                $id = $this->input->post('txt_hidden');
                $this->db->where('reg_id', $id);
                $this->db->update('tb;_reg', $field);
              }
            }

            if(isset($_FILES['pernyataan']['name']))
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
           // $this->upload->do_upload('file');
            if(!$this->upload->do_upload('pernyataan'))
            {
                flashMessage('success', 'Data sukses diupdate.');
            } else
            {
                $pernyataan = $this->upload->data();
                $field = array(
                    'pernyataan' => $filetranskrip['file_name']
                );
                $id = $this->input->post('txt_hidden');
                $this->db->where('reg_id', $id);
                $this->db->update('tb;_reg', $field);
              }
            }

            if(isset($_FILES['softcopy']['name']))
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
           // $this->upload->do_upload('file');
            if(!$this->upload->do_upload('softcopy'))
            {
                flashMessage('success', 'Data sukses diupdate.');
            } else
            {
                $softcopy = $this->upload->data();
                $field = array(
                    'softcopy' => $softcopy['file_name']
                );
                $id = $this->input->post('txt_hidden');
                $this->db->where('reg_id', $id);
                $this->db->update('tb;_reg', $field);
              }
            }


        $username = $this->session->userdata('username');
        //$tgl = date('Y-m-d');

        $field = array(
            'hp' => $this->input->post('hp'),
            'email' => $this->input->post('email'),
            'judul' => $this->input->post('judul'),
            'link' => $this->input->post('link'),
            'penulis1' => $this->input->post('penulis1'),
            'penulis2' => $this->input->post('penulis2'),
            'penulis3' => $this->input->post('penulis3'),
            'penulis4' => $this->input->post('penulis4'),
            'penulis5' => $this->input->post('penulis5'),        
            'kategori' => $this->input->post('kategori')
         );
         $id = $this->uri->segment(3);
         $id = $this->input->post('txt_hidden');
         $this->db->where('reg_id', $id);
         $this->db->update('tb;_reg', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

    }

}