<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();

            // Load model, jika ada.
            $model = strtolower(get_class($this));
            if (file_exists(APPPATH . 'models/' . $model . 'Model.php')) {
              $this->load->model($model . 'Model', $model, true);
        }

        // Data yang berkaitan dengan login.
        $username = $this->session->userdata('username');
        $level    = $this->session->userdata('level');
        $isLogin  = $this->session->userdata('isLogin');

        // Load global data untuk view. Untuk mempersingkat
        // pemanggilan variabel-variabel login.
        $this->load->vars([
            'username' => $username,
            'level'    => $level,
            'isLogin'  => $isLogin
        ]);
      }
      
      public function cekLogin()
      {
        //Jika tidak ada session (username) maka alihkan ke controller login
        if (!$this->session->userdata('username')) {
          redirect('authentication/auth/login');
        }
      }
}
