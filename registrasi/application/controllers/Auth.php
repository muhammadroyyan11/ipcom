<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function cekAkun()
  {
    //load model_users
    $this->load->model('UserModel');

    //membuat validasi login
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $query = $this->UserModel->cekAkun($username, $password);

    if ($query === 1) {
      return "User Tidak Ditemukan!";
    } else if ($query === 2) {
      return "User Tidak Aktif!";
    } else if ($query === 3) {
      return "Password Salah!";
    } else {
      //membuat session dengan nama userdata
      $userData = array(
        'id' => $query->id,
        'username' => $query->username,
        'level' => $query->level,
        'reg_jenis' => $query->reg_jenis,
        'nama' => $query->nama,
        'foto' => $query->foto,
        'reg_universitas' => $query->universitas,
        'jabatan' => $query->jabatan,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($userData);
      return TRUE;
    }
  }

  public function login()
  {

    //proses login dan validasi nya
    if ($this->input->post('submit')) {
      $this->load->model('UserModel');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $error = $this->cekAkun();
      if ($this->form_validation->run() && $error === TRUE) {
        $data = $this->UserModel->cekAkun($this->input->post('username'), $this->input->post('password'));

        //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
        if ($data->level == 'admin') {
          redirect('admin');
        } elseif ($data->level == 'mahasiswa') {
          redirect('mahasiswa');
        } elseif ($data->level == 'dosen') {
          redirect('dosen');
        } elseif ($data->level == 'alumni') {
          redirect('alumni');
        } elseif ($data->level == 'tu') {
          redirect('TU');
        } elseif ($data->level == 'kasubag') {
          redirect('kasubag');
        } elseif ($data->level == 'pustaka') {
          redirect('pustaka');
        } elseif ($data->level == 'subadmin') {
          redirect('admin');
        } elseif ($data->level == 'dekan') {
          redirect('dekan');
        } elseif ($data->level == 'wd1') {
          redirect('wd1');
        } elseif ($data->level == 'wd2') {
          redirect('wd2');
        } elseif ($data->level == 'wd3') {
          redirect('wd3');
        } elseif ($data->level == 'sekprodi') {
          redirect('sekprodi');
        } elseif ($data->level == 'kaprodi') {
          redirect('kaprodi');
        }
      }

      //Jika bernilai FALSE maka tampilkan error
      else {
        $data['error'] = $error;
        $this->load->view('authentication/login', $data);
      }
    }
    //Jika tidak maka alihkan kembali ke halaman login
    else {
      $this->load->view('authentication/login');
    }
  }


  public function logout()
  {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('');
  }

  public function index()
  {

    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'IPCOM-IV';
      $this->load->view('templates/login/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/login/auth_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('users', ['username' => $username])->row_array();
    if ($user) {
      //var_dump($user);
      //die;
      //Jika user active
      if ($user['active'] == 1) {
        //var_dump($user);
        //die;
        $error = $this->cekAkun();
        if ($this->form_validation->run() && $error === TRUE) {
          $data = $this->UserModel->cekAkun($this->input->post('username'), $this->input->post('password'));

          //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
          if ($data->level == 'admin') {
            redirect('admin');
          } elseif ($data->level == 'mahasiswa') {
            redirect('mahasiswa');
          } elseif ($data->level == 'juri') {
            redirect('lomba');
          } elseif ($data->level == 'alumni') {
            redirect('alumni');
          } elseif ($data->level == 'tu') {
            redirect('TU');
          } elseif ($data->level == 'kasubag') {
            redirect('kasubag');
          } elseif ($data->level == 'pustaka') {
            redirect('pustaka');
          } elseif ($data->level == 'subadmin') {
            redirect('subadmin');
          } elseif ($data->level == 'dekan') {
            redirect('dekan');
          } elseif ($data->level == 'wd1') {
            redirect('wd1');
          } elseif ($data->level == 'wd2') {
            redirect('wd2');
          } elseif ($data->level == 'wd3') {
            redirect('wd3');
          } elseif ($data->level == 'sekprodi') {
            redirect('sekprodi');
          } elseif ($data->level == 'kaprodi') {
            redirect('kaprodi');
          }

          $data = [
            'nama' => $user['nama'],
            'email' => $user['email'],
            'level' => $user['level'],
            'reg_universitas' => $user['reg_universitas'],
            'alamat' => $user['alamat'],
            'reg_jenis' => $user['reg_jenis'],         
            'logged_in' => true
          ];
          $this->session->set_userdata($data);
          // var_dump($data);
          // die;
          if ($user['level'] == 'admin') {
            redirect('admin');
          } elseif ($user['subadmin'] == 'subadmin') {
            redirect('user');
          } else {
            redirect('juri');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</dv>');
          redirect('auth');
        }

        //user aktif
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email does not activated!. Please verify your email!</dv>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email does not registered!. Please create an account!</dv>');
      redirect('auth');
    }
  }


  public function registration()
  {
    $this->form_validation->set_rules('username', 'NPM', 'required|trim|is_unique[users.username]');
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|is_unique[users.email]', [
      'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'SIAP-APP';
      $this->load->view('templates/login/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('templates/login/auth_footer');
    } else {
      $email = $this->input->post('email');
      $data = [
        'username' => htmlspecialchars($this->input->post('username'), true),
        'email' => htmlspecialchars($email, true),
        'password' => md5($this->input->post('password1')),
        'active' => 0,
        'nama' => htmlspecialchars($this->input->post('nama'), true),
        'foto' => 'foto-default.jpg',
        'level' => 'mahasiswa',
        'jabatan' => 'Mahasiswa',
        'id_prov'  => 14,
        'id_kab'  => 1471,
        'id_kec'  => 147101,
        'id_kel'  => 1471021001,
        'date_created' => time()
      ];

      $token = base64_encode(random_bytes(32));
      $user_token = [
        'email' => $email,
        'token' => $token,
        'date_created' => time()
      ];

      $this->db->insert('users', $data);
      $this->db->insert('user_token', $user_token);

      $this->_sendEmail($token, 'verify');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please verify your email!</dv>');
      redirect('auth');
    }
  }

  private function _sendEmail($token, $type)
  {

    $config = [
      'protocol'   => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_user' => 'layananpsikologiuir@gmail.com',
      'smtp_pass' => 'uirunggul2020',
      'smtp_port' =>  465,
      'mailtype' => 'html',
      'charset'  => 'utf-8',
      'newline'  => "\r\n"
    ];
    $this->email->initialize($config);
    $this->email->from('layananpsikologiuir@gmail.com', 'Layanan Psikologi UIR');
    $this->email->to($this->input->post('email'));

    if ($type == 'verify') {
      $this->email->subject('Account Verification');
      $this->email->message('Click this link to verify your account : <a href=" ' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
    } else if ($type == 'forgot') {
      $this->email->subject('Reset Passowrd');
      $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
    }

    if ($this->email->send()) {
      return true;
    } else {
      echo $this->email->print_debugger();
      die;
    }
  }

  public function verify()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $user = $this->db->get_where('users', ['email' => $email])->row_array();

    if ($user) {
      $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
      if (time() - $user_token['date_creted'] > (60 * 60 * 24)) {
        $this->db->set('active', 1);
        $this->db->where('email', $email);
        $this->db->update('users');

        $this->db->delete('user_token', ['email' => $email]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please Login</dv>');
        redirect('auth');
      } else {
        $this->db->delete('user_token', ['email' => $email]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token expired!</dv>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email!</dv>');
      redirect('auth');
    }
  }

  public function forgotPassword()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'SIAP-APP';
      $this->load->view('templates/login/auth_header', $data);
      $this->load->view('auth/forgot-password');
      $this->load->view('templates/login/auth_footer');
    } else {
      $email = $this->input->post('email');
      $user = $this->db->get_where('users', [
        'email' => $email,
        'active' => 1
      ])->row_array();

      if ($user) {
        $token = base64_encode(random_bytes(32));
        $user_token = [
          'email' => $email,
          'token' => $token,
          'date_created' => time()
        ];

        $this->db->insert('user_token', $user_token);
        $this->_sendEmail($token, 'forgot');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset password!</dv>');
        redirect('auth/forgotpassword');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated!</dv>');
        redirect('auth/forgotpassword');
      }
    }
  }

  public function resetPassword()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $user = $this->db->get_where('users', [
      'email' => $email
    ])->row_array();

    if ($user) {
      $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

      if ($user_token) {
        $this->session->set_userdata('reset_email', $email);
        $this->changePassword();
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong Token</dv>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong Email</dv>');
      redirect('auth');
    }
  }

  public function changePassword()
  {
    if (!$this->session->userdata('reset_email')) {
      redirect('auth');
    }
    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[5]|matches[password1]');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'SIAP-APP';
      $this->load->view('templates/login/auth_header', $data);
      $this->load->view('auth/change-password');
      $this->load->view('templates/login/auth_footer');
    } else {
      $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
      $email = $this->session->userdata('reset_email');

      $this->db->set('password', $password);
      $this->db->where('email', $email);
      $this->db->update('users');

      $this->session->unset_userdata('reset_email');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please Login</dv>');
      redirect('auth');
    }
  }
}
