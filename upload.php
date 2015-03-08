<?php
class Upload extends CI_Controller 
{		
 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
  $this->load->model('upload_model');
 }
 
 function index()
 {
  $this->load->view('upload_form', array('error' => ' ' ));
 }
 
  
	
    function getValues()
	{
	 $this->load->model("get_db");
	 $data['title'] = "Upload";
	 $data['results'] = $this->get_db->getAllData();
	 $this->load->view("view_db",$data);
	}
	
 
 function do_upload()
 {
  if($this->input->post('upload'))
  {
   $config['upload_path'] = './uploads/';
   $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|zip|rar';
   $config['max_size']    = '1024';
   $config['max_width']  = '1024';
   $config['max_height']  = '768';
   $this->load->library('upload', $config);
   if ( ! $this->upload->do_upload())
   {
    $error = array('error' => $this->upload->display_errors());
    $this->load->view('upload_form', $error);
   }
   else
   {
    $data=$this->upload->data();
    $this->thumb($data);
    $file=array(
    'img_name'=>$data['raw_name'],
    'thumb_name'=>$data['raw_name'].'_thumb',
    'ext'=>$data['file_ext'],
    'upload_date'=>time()
     );
    $this->upload_model->add_image($file);
    $data = array('upload_data' => $this->upload->data());
    $this->load->view('upload_success', $data);
   }
  }
  else
  {
    redirect(site_url('upload'));
  }
}

 function thumb($data)
 {
  $config['image_library'] = 'gd2';
  $config['source_image'] =$data['full_path'];
  $config['create_thumb'] = TRUE;
  $config['maintain_ratio'] = TRUE;
  $config['width'] = 275;
  $config['height'] = 250;
  $this->load->library('image_lib', $config);
  $this->image_lib->resize();
 }
 
 
}
