
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Sistem Pengurusan File</title>
<style type="text/css">


#top{width:1300px; height:120px; background-color: #2D9C92; border-top-left-radius:10px;border-top-right-radius:10px;}
#undermenu{width:1300px;height:19px;background-color: #FFF;}
#menu{width:1300px;height:35px;background-color:#000}
#wrap {width:1300px; background-color:#2D9C92;}
.submenu{width:200px;height:100px; background-color: #FFF; float:left;}
.middle{width:1100px;height:auto;background-color: #FFF; float:right;}
#bottom{width:1300px;height:20px;background-color: #2D9C92; border-bottom-left-radius:10px;border-bottom-right-radius:10px; clear:both;}
</style>
	
</head>
<body>
<BR>
<div id="top" style="margin:0 auto"></div>

<div id="menu" style="margin:0 auto"><?php include('menu.php');?>
</div>
<div id="undermenu" style="margin:0 auto">
</div>
<div id="wrap" style="margin:0 auto">


   <div class="submenu" style="margin:0 auto"><BR /><BR />

   </div>

   <div class="middle" style="margin:0 auto"><BR /><BR />
     
     <center>
     <A href="<?php echo base_url('upload/files')?>">
<input type="button" value="View All Upload Files" /> </A>
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
   </div>

</div>

<div id="bottom" style="margin:0 auto"></div>

<BR />

<center>
<FONT face="Verdana, Geneva, sans-serif" size="-5" color="#333333">Copyright Reserve &copy; 2015 Tuffah Informatics <BR /><BR />


</center>



</body>
</html>
