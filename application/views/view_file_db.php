<A href="<?php echo base_url('upload')?>">
<center><input type="button" value="Upload Another File " /></center> </A>

<table border='0' align="center">
<TR> 
<TD bgcolor="#CCCCCC" bordercolor="#CCCCCC"> No </TD>
<TD bgcolor="#CCCCCC" bordercolor="#CCCCCC"> File Name </TD>
<TD bgcolor="#CCCCCC" bordercolor="#CCCCCC"> Thumb </TD>
<TD bgcolor="#CCCCCC" bordercolor="#CCCCCC"> Ext </TD>
<TD bgcolor="#CCCCCC" bordercolor="#CCCCCC"> Upload Date </TD>
<TD bgcolor="#CCCCCC" bordercolor="#CCCCCC"> Action </TD>
<TR>

<?php
 $i=1;
 foreach($result->result() as $data)
 {
 ?>
 
	<TR> 
	 <TD> <?php echo $i++; ?></TD>
     <TD> <?php echo $data->img_name; ?></TD>
     <TD> <?php echo $data->thumb_name; ?></TD>
     <TD> <?php echo $data->ext; ?></TD>
	 <TD> <?php echo $data->upload_date; ?></TD>
	  <TD> <A href="<?php echo base_url('index.php/belajar/download_file/'.$data->id)?>" onclick="return confirm('Are sure want to Edit?')">Download</A> | <A href="<?php echo base_url('upload/delete_file/'.$data->id)?>" onclick="return confirm('Are sure want to delete the file ?')"> Delete </A></TD>
	</TR> 
	 
<?php	 
 }
?>
