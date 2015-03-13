<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pengurusan File</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('form').submit(function() {
    
  		var checked_boxes = $(":checkbox:checked").length;

  		if(checked_boxes < 1){
      			alert("Please Select Files First");
      			return false;
  		}else if($('#file_name').val() == ''){
      			alert("Please Enter Name");
      			return false;
  		}
  
	});
</script>

</head>

<body>

<BR><BR><BR>
<A href="<?php echo base_url('index.php/upload/files')?>">
<input type="button" value="View All Upload Files" /></center> </A>
<BR><BR><BR>
<form action="download/download_zip" method="post">
<table>

<?php
foreach($files as $key=>$file_name){
    echo "<tr><td><input type='checkbox' name='files[]' value='".$file_name."' /></td><td>".$file_name."</td></tr>";
}
?>
</table>
    <input type="text" name="file_name" id="file_name">
    <input type="submit" value="Download" id="download" required>
</form>


</body>
</html>
