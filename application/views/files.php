<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pengurusan File</title>
</head>

<body>
<BR><BR><BR>
<A href="<?php echo base_url('index.php/upload/index')?>">
<center><input type="button" value="Upload Another Files" /> </A>
&nbsp;&nbsp &nbsp;
<A href="<?php echo base_url('index.php/download')?>">
<input type="button" value="Download Files " /></center> </A>
<BR><BR><BR>

<table style="border:1px solid #000; width:50%; height:50%; overflow:auto; text-align:center; " align="center">
<thead style="border:1px solid #000; background:#CCC">
 <tr>
  <th> ID </th>
  <th> Title Image </th>
  <th> FileName Image </th>
  <th> Action </th>
 
 </tr>
</thead>
<tbody style="border:1px solid #000; background:#FFF">
<?php
 foreach($this->b->getalldata()as $row)
 {
 ?>
 
	<TR> 
	 <TD> <?php echo $row->id ?></TD>
     <TD> <?php echo $row->title ?></TD>
     <TD> <?php echo $row->product_pic ?></TD>
	 
	  <TD> <a href="<?php echo site_url('upload/download/'.$row->id)?>" onclick="return confirm('Are sure want to edit the file ?')">
           <img src="<?php echo base_url(); ?>assets/images/wand.png" title="Update File"/></a>
            &nbsp;&nbsp &nbsp; 
            <A href="<?php echo site_url('upload/delete_file/'.$row->id)?>" onclick="return confirm('Are sure want to delete the file ?')">
            <img src="<?php echo base_url(); ?>assets/images/database_delete.png" title="Remove File"/></A></TD>
	</TR> 
	 
<?php	 
 }
?>

</tbody>




</body>
</html>
