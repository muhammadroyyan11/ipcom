<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_testimonial');
		$this->load->model('Model_portfolio');
	}

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial', $data);
		$this->load->view('view_footer', $data);
	}

	public function intervention()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_intervention', $data);
		$this->load->view('view_footer', $data);
	}

	public function proposal()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_proposal', $data);
		$this->load->view('view_footer', $data);
	}

	public function hcmotion()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_hcmotion', $data);
		$this->load->view('view_footer', $data);
	}

	public function cerpen()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_cerpen', $data);
		$this->load->view('view_footer', $data);
	}

	public function design()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_design', $data);
		$this->load->view('view_footer', $data);
	}

	public function infografis()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_infografis', $data);
		$this->load->view('view_footer', $data);
	}

	public function essay()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_essay', $data);
		$this->load->view('view_footer', $data);
	}

	public function science()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_science', $data);
		$this->load->view('view_footer', $data);
	}

	public function debate()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['CurrentUri'] = 'debate';
		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_debate', $data);
		$this->load->view('view_footer', $data);
	}

	public function tahfidz1()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_tahfidz1', $data);
		$this->load->view('view_footer', $data);
	}

	public function tahfidz2()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_tahfidz2', $data);
		$this->load->view('view_footer', $data);
	}

	public function preach()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_preach', $data);
		$this->load->view('view_footer', $data);
	}

	public function qiraah()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_qiraah', $data);
		$this->load->view('view_footer', $data);
	}

	public function film()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_film', $data);
		$this->load->view('view_footer', $data);
	}
	public function vlog()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		//$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['testimonials'] = $this->Model_testimonial->get_all_register();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_vlog', $data);
		$this->load->view('view_footer', $data);
	}

	public function religi()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_religi', $data);
		$this->load->view('view_footer', $data);
	}

	public function photography()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_photography', $data);
		$this->load->view('view_footer', $data);
	}

	public function pantun()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_pantun', $data);
		$this->load->view('view_footer', $data);
	}

	public function puisi()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_puisi', $data);
		$this->load->view('view_footer', $data);
	}

	public function poster()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_testimonial->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_testimonial_poster', $data);
		$this->load->view('view_footer', $data);
	}


	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Penulis I', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path = $_FILES['abstrak']['name'];
			$path_tmp = $_FILES['abstrak']['tmp_name'];

			if ($path != '') {
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$file_name = basename($path, '.' . $ext);
				$ext_check = $this->Model_common->extension_check_pdf($ext);
				if ($ext_check == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Abstrak untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path1 = $_FILES['pernyataan']['name'];
			$path_tmp1 = $_FILES['pernyataan']['tmp_name'];

			if ($path1 != '') {
				$ext1 = pathinfo($path1, PATHINFO_EXTENSION);
				$file_name = basename($path1, '.' . $ext1);
				$ext_check1 = $this->Model_common->extension_check_pdf($ext1);
				if ($ext_check1 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Surat Pernyataan untuk dapat mengikuti jenis lomba ini.<br>';
			}

			// $path2 = $_FILES['ktm']['name'];
			// $path_tmp2 = $_FILES['ktm']['tmp_name'];

			// if ($path2 != '') {
			// 	$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
			// 	$file_name = basename($path2, '.' . $ext2);
			// 	$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
			// 	if ($ext_check2 == FALSE) {
			// 		$valid = 0;
			// 		$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
			// 	}
			// } else {
			// 	$valid = 0;
			// 	$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			// }

			// $path3 = $_FILES['softcopy']['name'];
			// $path_tmp3 = $_FILES['softcopy']['tmp_name'];

			// if ($path3 != '') {
			// 	$ext3 = pathinfo($path3, PATHINFO_EXTENSION);
			// 	$file_name = basename($path3, '.' . $ext3);
			// 	$ext_check3 = $this->Model_common->extension_check_pdf($ext3);
			// 	if ($ext_check3 == FALSE) {
			// 		$valid = 0;
			// 		$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
			// 	}
			// } else {
			// 	$valid = 0;
			// 	$error .= 'Anda harus meng-upload file Soft Copy untuk dapat mengikuti jenis lomba ini.<br>';
			// }
			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				$final_name = 'reg-abstrak' . $ai_id . '.' . $ext;
				move_uploaded_file($path_tmp, './registrasi/files/' . $final_name);

				$final_name1 = 'reg-surat-pernyataan' . $ai_id . '.' . $ext1;
				move_uploaded_file($path_tmp1, './registrasi/files/' . $final_name1);

				// $final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				// move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				// $final_name3 = 'reg-soft-copy' . $ai_id . '.' . $ext3;
				// move_uploaded_file($path_tmp3, './registrasi/files/' . $final_name3);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					'abstrak' => $final_name,
					'pernyataan' => $final_name1,
					// 'ktm' => $final_name2,
					// 'softcopy' => $final_name3,
					'kategori' => $_POST['kategori'],
					'judul' => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					'penulis2' => $_POST['penulis2'],
					'penulis3' => $_POST['penulis3'],
					'penulis4' => $_POST['penulis4'],
					'penulis5' => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/add');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}

	public function adddesign()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Penulis I', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path1 = $_FILES['pernyataan']['name'];
			$path_tmp1 = $_FILES['pernyataan']['tmp_name'];

			if ($path1 != '') {
				$ext1 = pathinfo($path1, PATHINFO_EXTENSION);
				$file_name = basename($path1, '.' . $ext1);
				$ext_check1 = $this->Model_common->extension_check_pdf($ext1);
				if ($ext_check1 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Surat Pernyataan untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path2 = $_FILES['ktm']['name'];
			$path_tmp2 = $_FILES['ktm']['tmp_name'];

			if ($path2 != '') {
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name = basename($path2, '.' . $ext2);
				$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
				if ($ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path3 = $_FILES['softcopy']['name'];
			$path_tmp3 = $_FILES['softcopy']['tmp_name'];

			if ($path3 != '') {
				$ext3 = pathinfo($path3, PATHINFO_EXTENSION);
				$file_name = basename($path3, '.' . $ext3);
				$ext_check3 = $this->Model_common->extension_check_pdf($ext3);
				if ($ext_check3 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Soft Copy untuk dapat mengikuti jenis lomba ini.<br>';
			}
			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				$final_name = 'reg-abstrak' . $ai_id . '.' . $ext;
				move_uploaded_file($path_tmp, './registrasi/files/' . $final_name);

				$final_name1 = 'reg-surat-pernyataan' . $ai_id . '.' . $ext1;
				move_uploaded_file($path_tmp1, './registrasi/files/' . $final_name1);

				$final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				$final_name3 = 'reg-soft-copy' . $ai_id . '.' . $ext3;
				move_uploaded_file($path_tmp3, './registrasi/files/' . $final_name3);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					'abstrak' => $final_name,
					'pernyataan' => $final_name1,
					'ktm' => $final_name2,
					'softcopy' => $final_name3,
					'kategori' => $_POST['kategori'],
					'judul' => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					'penulis2' => $_POST['penulis2'],
					'penulis3' => $_POST['penulis3'],
					'penulis4' => $_POST['penulis4'],
					'penulis5' => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/adddesign');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}

	public function addphotography()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Penulis I', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path1 = $_FILES['pernyataan']['name'];
			$path_tmp1 = $_FILES['pernyataan']['tmp_name'];

			if ($path1 != '') {
				$ext1 = pathinfo($path1, PATHINFO_EXTENSION);
				$file_name = basename($path1, '.' . $ext1);
				$ext_check1 = $this->Model_common->extension_check_pdf($ext1);
				if ($ext_check1 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Surat Pernyataan untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path2 = $_FILES['ktm']['name'];
			$path_tmp2 = $_FILES['ktm']['tmp_name'];

			if ($path2 != '') {
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name = basename($path2, '.' . $ext2);
				$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
				if ($ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			}


			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				// $final_name = 'reg-abstrak'.$ai_id.'.'.$ext;
				// move_uploaded_file( $path_tmp, './registrasi/files/'.$final_name );

				$final_name1 = 'reg-surat-pernyataan' . $ai_id . '.' . $ext1;
				move_uploaded_file($path_tmp1, './registrasi/files/' . $final_name1);

				$final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					//	'abstrak'            => $final_name,					
					'pernyataan' => $final_name1,
					'ktm' => $final_name2,
					'softcopy' => $_POST['link'],
					'kategori' => $_POST['kategori'],
					'judul' => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					'penulis2' => $_POST['penulis2'],
					'penulis3' => $_POST['penulis3'],
					'penulis4' => $_POST['penulis4'],
					'penulis5' => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/adddesign');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}
	public function addfilm()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Creator I', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path = $_FILES['abstrak']['name'];
			$path_tmp = $_FILES['abstrak']['tmp_name'];

			if ($path != '') {
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$file_name = basename($path, '.' . $ext);
				$ext_check = $this->Model_common->extension_check_pdf($ext);
				if ($ext_check == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Sinopsis untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path1 = $_FILES['pernyataan']['name'];
			$path_tmp1 = $_FILES['pernyataan']['tmp_name'];

			if ($path1 != '') {
				$ext1 = pathinfo($path1, PATHINFO_EXTENSION);
				$file_name = basename($path1, '.' . $ext1);
				$ext_check1 = $this->Model_common->extension_check_pdf($ext1);
				if ($ext_check1 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Surat Pernyataan untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path2 = $_FILES['ktm']['name'];
			$path_tmp2 = $_FILES['ktm']['tmp_name'];

			if ($path2 != '') {
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name = basename($path2, '.' . $ext2);
				$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
				if ($ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			}


			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				$final_name = 'reg-abstrak' . $ai_id . '.' . $ext;
				move_uploaded_file($path_tmp, './registrasi/files/' . $final_name);

				$final_name1 = 'reg-surat-pernyataan' . $ai_id . '.' . $ext1;
				move_uploaded_file($path_tmp1, './registrasi/files/' . $final_name1);

				$final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					'abstrak' => $final_name,
					'pernyataan' => $final_name1,
					'ktm' => $final_name2,
					'kategori' => $_POST['kategori'],
					'judul' => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					'penulis2' => $_POST['penulis2'],
					'penulis3' => $_POST['penulis3'],
					'penulis5' => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/add');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}

	public function addreligi()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Creator I', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}



			$path1 = $_FILES['pernyataan']['name'];
			$path_tmp1 = $_FILES['pernyataan']['tmp_name'];

			if ($path1 != '') {
				$ext1 = pathinfo($path1, PATHINFO_EXTENSION);
				$file_name = basename($path1, '.' . $ext1);
				$ext_check1 = $this->Model_common->extension_check_pdf($ext1);
				if ($ext_check1 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file Surat Pernyataan untuk dapat mengikuti jenis lomba ini.<br>';
			}

			$path2 = $_FILES['ktm']['name'];
			$path_tmp2 = $_FILES['ktm']['tmp_name'];

			if ($path2 != '') {
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name = basename($path2, '.' . $ext2);
				$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
				if ($ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			}


			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				//  $final_name = 'reg-abstrak'.$ai_id.'.'.$ext;
				//  move_uploaded_file( $path_tmp, './registrasi/files/'.$final_name );

				$final_name1 = 'reg-surat-pernyataan' . $ai_id . '.' . $ext1;
				move_uploaded_file($path_tmp1, './registrasi/files/' . $final_name1);

				$final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					//	'abstrak'            => $final_name,					
					'pernyataan' => $final_name1,
					'ktm' => $final_name2,
					'kategori' => $_POST['kategori'],
					'judul' => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					'penulis2' => $_POST['penulis2'],
					'penulis3' => $_POST['penulis3'],
					'penulis5' => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/add');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}

	public function addonsite()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Peserta', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}


			$path2 = $_FILES['ktm']['name'];
			$path_tmp2 = $_FILES['ktm']['tmp_name'];

			if ($path2 != '') {
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name = basename($path2, '.' . $ext2);
				$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
				if ($ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			}


			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				//  $final_name = 'reg-abstrak'.$ai_id.'.'.$ext;
				//  move_uploaded_file( $path_tmp, './registrasi/files/'.$final_name );

				//      $final_name1 = 'reg-surat-pernyataan'.$ai_id.'.'.$ext1;
				// move_uploaded_file( $path_tmp1, './registrasi/files/'.$final_name1 );

				$final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					//	'abstrak'            => $final_name,					
					//	'pernyataan'         => $final_name1,
					'ktm' => $final_name2,
					'kategori' => $_POST['kategori'],
					//	'judul'        	     => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					'penulis2' => $_POST['penulis2'],
					'penulis3' => $_POST['penulis3'],
					// 'penulis5'            => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/add');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}

	public function tahfidz()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'HP', 'trim|required');
			$this->form_validation->set_rules('penulis1', 'Peserta', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}


			$path2 = $_FILES['ktm']['name'];
			$path_tmp2 = $_FILES['ktm']['tmp_name'];

			if ($path2 != '') {
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name = basename($path2, '.' . $ext2);
				$ext_check2 = $this->Model_common->extension_check_pdf($ext2);
				if ($ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'Anda harus meng-upload file jenis pdf untuk dapat mengikuti jenis lomba ini.<br>';
				}
			} else {
				$valid = 0;
				$error .= 'Anda harus meng-upload file KTM untuk dapat mengikuti jenis lomba ini.<br>';
			}


			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				//  $final_name = 'reg-abstrak'.$ai_id.'.'.$ext;
				//  move_uploaded_file( $path_tmp, './registrasi/files/'.$final_name );


				$final_name2 = 'reg-ktm' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp2, './registrasi/files/' . $final_name2);

				$tgl = date('Y-m-d');
				$form_data = array(
					'reg_delegasi' => $_POST['delegasi'],
					'reg_jenis' => $_POST['jenis'],
					'reg_universitas' => $_POST['universitas'],
					'email' => $_POST['email'],
					'hp' => $_POST['hp'],
					'reg_date' => $tgl,
					//	'abstrak'            => $final_name,					
					//	'pernyataan'         => $final_name1,
					'ktm' => $final_name2,
					'kategori' => $_POST['kategori'],
					//	'judul'        	     => $_POST['judul'],
					'penulis1' => $_POST['penulis1'],
					//	'penulis2'            => $_POST['penulis2'],
					//	'penulis3'            => $_POST['penulis3'],
					//	'penulis5'            => $_POST['penulis5']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Registrasi is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'testimonial/vlog');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'testimonial/add');
			}
		} else {
			//$data['all_register'] = $this->Model_testimonial->get_register();
			$data['setting'] = $this->Model_common->all_setting();
			$data['page_testimonial'] = $this->Model_common->all_page_testimonial();
			$data['comment'] = $this->Model_common->all_comment();
			$data['social'] = $this->Model_common->all_social();
			$data['all_news'] = $this->Model_common->all_news();

			$data['testimonials'] = $this->Model_testimonial->all_testimonial();
			$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
			$this->load->view('view_header', $data);
			$this->load->view('view_testimonial', $data);
			$this->load->view('view_footer', $data);
		}
	}


	public function download($id)
	{
		$data = array();
		//get files from database
		$data['tbl_reg'] = $this->Model_testimonial->getRows();
		//echo "<pre>";
		//    print_r($data);
		//    echo "</pre>";
		if (!empty($id)) {
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->Model_testimonial->getRows(array('reg_id' => $id));

			//file path
			$file = 'registrasi/files/' . $fileInfo['abstrak'];

			//download file from directory
			force_download($file, NULL);
		}
	}

	public function downloadsp($id)
	{
		$data = array();
		//get files from database
		$data['tbl_reg'] = $this->Model_testimonial->getRows();
		//echo "<pre>";
		//    print_r($data);
		//    echo "</pre>";
		if (!empty($id)) {
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->Model_testimonial->getRows(array('reg_id' => $id));

			//file path
			$file = 'registrasi/files/' . $fileInfo['pernyataan'];

			//download file from directory
			force_download($file, NULL);
		}
	}

	public function downloadktm($id)
	{
		$data = array();
		//get files from database
		$data['tbl_reg'] = $this->Model_testimonial->getRows();
		//echo "<pre>";
		//    print_r($data);
		//    echo "</pre>";
		if (!empty($id)) {
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->Model_testimonial->getRows(array('reg_id' => $id));

			//file path
			$file = 'registrasi/files/' . $fileInfo['ktm'];

			//download file from directory
			force_download($file, NULL);
		}
	}

	public function downloadsoft($id)
	{
		$data = array();
		//get files from database
		$data['tbl_reg'] = $this->Model_testimonial->getRows();
		//echo "<pre>";
		//    print_r($data);
		//    echo "</pre>";
		if (!empty($id)) {
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->Model_testimonial->getRows(array('reg_id' => $id));

			//file path
			$file = 'registrasi/files/' . $fileInfo['softcopy'];

			//download file from directory
			force_download($file, NULL);
		}
	}
}
