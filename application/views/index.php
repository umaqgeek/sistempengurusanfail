<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Pengurusan File</title>

	
</head>
<body>
<center>
<BR><BR><BR><BR><BR><BR>
<A href="<?php echo base_url('index.php/upload/files')?>">
<center><input type="button" value="View All Upload Files" /></center> </A>
<BR><BR><BR>
 <form action="<?php echo site_url('upload/upload_file'); ?>" method="post" enctype="multipart/form-data">
 <table width="422">
 <tr>
  <td width="86">Title</td>
  <td width="88"><div align="center">:</div></td>
  <td width="232"><input type="text" name="title"></td>
 </tr>
  <tr>
  <td>File Image</td>
  <td><div align="center">:</div></td>
  <td><input type="file" name="product_pic"></td>
 </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
 <td> </td>
  <td><div align="center"></div></td>
  <td><input type="submit" value="Upload File"></td>
 </tr>
 </table>
 </form>

</center>
</body>
</html>
