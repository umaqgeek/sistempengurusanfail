<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
	
	function files()
	{
	 $this->load->model('file_model','b');
	 $this->load->view('files');
	 
	}
	
	public function delete_file($file_id)
	{
	  $this->load->model('file_model');
		if($this->file_model->delete_file($file_id))
		{
			redirect('upload/files');
		}
		else
		{
			echo "error";
		}
	}
	
	public function upload_file()
	{
      $status = "";
	  $msg = "";
	  $filename = 'product_pic';
	  
	  if(empty($_POST['title']))
	  {
		$status="error";
		$msg ="Plese Enter title";
	  }
	  
	  if($status != "error")
	  {
		$config['upload_path'] = 'file/';
		$config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size']    = 1024*8;
        $config['encrypt_name'] = true; 
		
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload($filename))
		{
		 $status = 'error';
		 $msg = $this->upload->display_errors('','');
		}
		else
		{
	      $this->load->model('file_model');
		  $data = $this->upload->data();
		  $file_id = $this->file_model->insert_file($data['file_name'],$_POST['title']);
		  if($file_id)
		  {
		    redirect('upload/index');
		  }
		  else
		  {
			  unlink($data['full_path']);
			  $status = "error";
			  $msg = "Please try again";
			  
		  }
		  
		}
		@unlink($_FILES[$filename]);
	  }
	  echo json_encode(array('status'=>$status, 'msg'=>$msg));
	}
}

