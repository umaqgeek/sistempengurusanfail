<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class file_model extends CI_Model {
 
 function __construct()
 {
  parent::__construct();
 }
 
  function insert_file($filename,$title)
  {
   $data = array( 
                  'product_pic' => $filename,
				  'title'       => $title
				);
   $this->db->insert('file',$data);
   return $this->db->insert_id();
  }
  
    function getalldata()
	{
	  $query = $this->db->get('file');
      return $query->result();	  
	}
	
	
	public function get_file($file_id)
	{
     return $this->db->select()
	                 ->from('file')
					 ->where('id',$file_id)
					 ->get()
					 ->row();
	}
	
	public function delete_file($file_id)
	{
	 $file = $this->get_file($file_id);
	 if(!$this->db->where('id',$file_id)->delete('file'))
	 {
		 return false;
	 }
	 unlink('file/' .$file->product_pic);
	 return true;
	}
}

?>
