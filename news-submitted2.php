<div class="mbr-section-subtitle mbr-fonts-style display-5">
<?php
include "config.php";



$result = mysql_query("SELECT * FROM news where show_hide='1' order by pdate desc limit 6", $db);
//$result = mysql_query("SELECT * FROM news where show_hide='1' order by pdate desc limit 6", $db);
//$result = mysql_query("SELECT * from news where member_id IN(select MAX(member_id) FROM news)", $db);

?>
<marquee id="scroll_news" width="auto" height="162" direction="Up" scrolldelay="200">
<div onmouseover="document.getElementById('scroll_news').stop();" onmouseout="document.getElementById('scroll_news').start();">
<?php
while($rows=mysql_fetch_array($result)){
?>

<a href="<?php echo $rows['newslink']; ?>"><?php echo $rows['newsinfo']; echo "<br><br>";?></a>


<?php
// close while loop 
}
?>
</div>
</marquee>



<br/>
<p><a href="news.php" class="btn btn-primary">See All News</a></p>

</div>
