<div class="table-responsive" >
<?php
	include "config.php";

$result = mysql_query("SELECT * FROM news order by  news.pdate desc, news.dept", $db);
//$result = mysql_query("SELECT * from news where member_id IN(select MAX(member_id) FROM news)", $db);


?>

 <div class="container container-table">
    <div class="table-wrapper">
        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" align="center">
            <thead>
<tr class="table-heads">
<th class="head-item mbr-fonts-style display-7">News Information</th>
<th class="head-item mbr-fonts-style display-7">Posting Date</th>

</tr>
</thead>
<tbody>


<?php

while($rows=mysql_fetch_array($result)){
	
?>

<tr>

<td class="body-item mbr-fonts-style display-7"><?php echo $rows['newsinfo'];?></td>
<td class="body-item mbr-fonts-style display-7" style="width:140px;"><?php echo date("d-m-Y", strtotime($rows['pdate'])); ?></td>
<td class="body-item mbr-fonts-style display-7" style="width:260px;"><a class="btn btn-form btn-secondary display-4" href="<?php echo $rows['newslink']; ?>" target="_blank">More Details</a></td>
</tr>

<?php
// close while loop 
}
?>
</tbody>
</table>
</div>
</div>
</div>
