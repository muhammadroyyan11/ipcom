<?php
class DosenController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Data yang berkaitan dengan login.
        $username = $this->session->userdata('username');
        $level    = $this->session->userdata('level');
        $nama     = $this->session->userdata('nama');
        $foto     = $this->session->userdata('foto');
        $logged_in  = $this->session->userdata('logged_in');

        if (!$logged_in) {
            redirect(base_url());
            return;
        }
    }
}
