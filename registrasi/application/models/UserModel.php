<?php
class UserModel extends MY_Model
{
    protected $table = 'users';

    public function getValidationRules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => [
                    'trim',
                    'required',
                    'max_length[32]',
                    'callback_isUsernameUnik'
                ]
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|callback_isPasswordRequired'
            ],
            [
                'field' => 'level',
                'label' => 'Level',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'isBlokir',
                'label' => 'Blokir?',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getDefaultValues()
    {
        return [
            'username' => '',
            'password' => '',
            'level'    => '',
            'isBlokir' => ''
        ];
    }

    public function cekAkun($username, $password)
    {
      //cari username lalu lakukan validasi
      $this->db->where('username', $username);
      $query = $this->db->get($this->table)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      //jika bernilai 2 maka user tidak aktif
      if ($query->active == 0) return 2;

      //jika bernilai 3 maka password salah
      $hash = $query->password;
      if (md5($password) != $hash) return 3;

      return $query;
    }

    public function getUsers() {
        $query = $this->db->get('users');

        if($query->num_rows() >0) {
            return $query->result();
         } else {
            return false;
         }
     }

      public function tambah_akun($data)
   {
       $this->db->insert('users', $data);
       $id = $this->db->insert_id();
       return (isset($id)) ? $id : FALSE;
   }
   
     public function tambah_profil($data)
     {
  	    $this->db->insert('data_users', $data);
     }

     public function getUserById($id){
         $this->db->where('id', $id);
            return $this->db->get('users')->result();
    }

    public function update_data(){
        $password = $this->input->post('password', true);
        if (!empty($password)) {
            $id = $this->input->post('id');
            $this->db->where('id', $id);
             $field = array(
                'password' => md5($this->input->post('password')));
            $this->db->update('users', $field);
        }
        $id = $this->input->post('id');
        $field = array(
                'nama' => $this->input->post('nama'),
                'level' => $this->input->post('level'),
                'reg_jenis' => $this->input->post('reg_jenis'),      
                'universitas' => $this->input->post('universitas'),      
                'active' => $this->input->post('active'),
                'jabatan' => $this->input->post('jabatan')
         );
        $this->db->where('id', $id);
        $this->db->update('users', $field);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

    }

}
