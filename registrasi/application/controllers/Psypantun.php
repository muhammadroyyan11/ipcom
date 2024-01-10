<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psypantun extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
		$this->load->model('PsypaperModel');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->poster();

		$this->load->view('templates/admin/template');
        $this->load->view('psyposter/psyposter_index_view', $data);
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
			$this->form_validation->set_rules('comment', 'Comment', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'testimonial-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'        => $_POST['name'],
					'designation' => $_POST['designation'],
					'photo'       => $final_name,
					'comment'     => $_POST['comment']
	            );
	            $this->Model_testimonial->add($form_data);

		        $success = 'Testimonial is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/testimonial');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/testimonial/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_testimonial_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
	$data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->PsypaperModel->get_testimonial($id);
		

		$this->load->view('templates/admin/template');
        $this->load->view('psyposter/psyposter_edit_view', $data);
	}


	public function delete($id) 
	{
		// If there is no testimonial in this id, then redirect
    	$tot = $this->Model_testimonial->testimonial_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/testimonial');
        	exit;
    	}

        $data['testimonial'] = $this->Model_testimonial->get_testimonial($id);
        if($data['testimonial']) {
            unlink('./public/uploads/'.$data['testimonial']['photo']);
        }

        $this->Model_testimonial->delete($id);
        $success = 'Testimonial is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/testimonial');
    }

    function fetch_peserta_data()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->Model_testimonial->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_testimonial_pdf',$data);
		$this->load->view('admin/view_footer');
	}

	public function download($id){
        $data = array();
         //get files from database
        $data['tbl_reg'] = $this->PsypaperModel->getRows();
        //echo "<pre>";
         //    print_r($data);
         //    echo "</pre>";
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->PsypaperModel->getRows(array('reg_id' => $id));
  
            //file path
            $file = '../juri/files/'.$fileInfo['abstrak'];
 			 
            //download file from directory
			force_download($file, NULL);
			
			
		}
	}
	

public function downloadsp($id){
	$data = array();
	 //get files from database
	$data['tbl_reg'] = $this->PsypaperModel->getRows();
	//echo "<pre>";
	 //    print_r($data);
	 //    echo "</pre>";
	if(!empty($id)){
		//load download helper
		$this->load->helper('download');

		//get file info from database
		$fileInfo = $this->PsypaperModel->getRows(array('reg_id' => $id));

		//file path
		$file = '../juri/files/'.$fileInfo['pernyataan'];
		  
		//download file from directory
		force_download($file, NULL);
	}
}

public function downloadktm($id){
	$data = array();
	 //get files from database
	$data['tbl_reg'] = $this->PsypaperModel->getRows();
	//echo "<pre>";
	 //    print_r($data);
	 //    echo "</pre>";
	if(!empty($id)){
		//load download helper
		$this->load->helper('download');

		//get file info from database
		$fileInfo = $this->PsypaperModel->getRows(array('reg_id' => $id));

		//file path
		$file = '../juri/files/'.$fileInfo['ktm'];
		  
		//download file from directory
		force_download($file, NULL);
	}

 }

 public function downloadsoft($id){
	$data = array();
	 //get files from database
	$data['tbl_reg'] = $this->PsypaperModel->getRows();
	//echo "<pre>";
	 //    print_r($data);
	 //    echo "</pre>";
	if(!empty($id)){
		//load download helper
		$this->load->helper('download');

		//get file info from database
		$fileInfo = $this->PsypaperModel->getRows(array('reg_id' => $id));

		//file path
		$file = '../juri/files/'.$fileInfo['softcopy'];
		  
		//download file from directory
		force_download($file, NULL);
	}
}
}