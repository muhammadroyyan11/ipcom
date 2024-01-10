<?php
class Users extends AdminController
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');

    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $data['users'] = $this->UserModel->getUsers();
//       print_r ($data);
        $this->load->view('templates/admin/template');
        $this->load->view('admin/users/index', $data);
    }

    public function getUsers()
    {

        $users = $this->user->getAll();
        if (!$users) {
            message('error', 'Tidak ada data!');
        }
        $data['users'] = $this->user->getUsers();
   //      print_r ($data);
        $this->load->view('templates/admin/template');
        $this->load->view('admin/users/index', $data);
    }

    public function create()
    {
        $this->load->view('templates/admin/template');
        $this->load->view('admin/users/form');
    }

    public function edit($id = null)
    {
        $users = $this->users->find($id);
        if (!$users) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('user', 'refresh');
        }

        // Enkripsi password.
        if (!empty($input->password)) {
            $input->password = md5($input->password);
        } else {
            unset($input->password);
        }

        $update = $this->users->update($id, $input);
        if (!$update) {
            flashMessage('error', 'Data gagal diupdate!');
        } else {
            flashMessage('success', 'Data berhasil diupdate.');
        }

        redirect('user', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->post('ID', true);

        $users = $this->users->find($id);
        if (!$users) {
            flashMessage('error', 'Data tidak ditemukan!');
            redirect('user', 'refresh');
        }

        $delete = $this->users->delete($id);
        if (!$delete) {
            flashMessage('error', 'Data gagal dihapus!');
        } else {
            flashMessage('success', 'Data berhasil dihapus.');
        }

        redirect('user', 'refresh');
    }

    /*
    |-----------------------------------------------------------------
    | Callback.
    |-----------------------------------------------------------------
    */
    public function isUsernameUnik()
    {
        $username = $this->input->post('username');
        $id       = $this->input->post('ID');

        $this->db->where('username', $username);
        !$id || $this->db->where('ID !=', $id);
        $kembar = $this->db->get('user')->result();

        if (count($kembar) > 0) {
            $this->form_validation->set_message(
                'isUsernameUnik',
                '%s sudah digunakan.'
            );
            return false;
        }
        return true;
    }

    public function isPasswordRequired()
    {
        // Ketika edit, password TIDAK "required".
        $isEdit = $this->uri->segment(2);
        if ($isEdit == 'edit') {
            return true;
        }

        // Ketika create, password "required".
        $password = $this->input->post('password', true);
        if (empty($password)) {
            $this->form_validation->set_message(
                'isPasswordRequired',
                '%s harus diisi.'
            );
            return false;
        }
    }

    public function proses_input()
 {

   $akunusers = array(
     'username' => $this->input->post('username'),
     'password' => md5($this->input->post('password')),
     'active' => $this->input->post('active'),
     'nama' => $this->input->post('nama'),
     'reg_jenis' => $this->input->post('reg_jenis'),    
     'level' => $this->input->post('level'),
     'universitas' => $this->input->post('universitas'),
     'jabatan' => $this->input->post('jabatan'));
  /*-------Mengambil id users dan mengirimkan ke model-----*/
  $id_akun = $this->UserModel->tambah_akun($akunusers);

  redirect('users/index'); //mengembalikan halaman setelah berhasil menginputkan data
 }

  public function ubah($id){
        $data = array('users'=>$this->UserModel->getUserById($id));
        $this->load->view('templates/admin/template');
        $this->load->view('admin/users/edit_user', $data);
 //      print_r($data);
    }

    public function updatedata(){
      $result = $this->UserModel->update_data();
      if($result) {
          flashMessage('success', 'Data berhasil diupdate.');
      } else {
          flashMessage('error', 'Data gagal diupdate!');
      }
      redirect('users/index', 'refresh');
    }
}
