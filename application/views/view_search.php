<center>
<BR /><BR /><BR />
<A href="<?php echo base_url('upload/files')?>">
<input type="button" value="View All Upload Files" /> </A> 
<BR /><BR />
<form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
<input type="reset" value = "Reset" onclick="myFunction()"/>
</form>
</center>
<BR /><BR />
<table align="center">
<tr>
  <th> ID </th>
  <th> Image Name </th>
  <th> Title </th>
 
 </tr>
<?php
foreach($results as $row){
?>
    <tr>
        <td><?php echo $row->id?></td>
        <td><?php echo $row->product_pic?></td>
        <td><?php echo $row->title?></td>
    </tr>
<?php   
}
?>
</table>
</center>

<script>
function myFunction() {
    location.reload();
}
</script>
