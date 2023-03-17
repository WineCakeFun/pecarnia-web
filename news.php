<?php 
$db=new mysqli("127.0.0.1","root","","Pecarnia");
$db->query("SET NAMES 'UTF8'");
$temp=$db->query("SELECT * FROM news");
?>
<article style="padding:20px">
<?php 
foreach($temp as $key=>$item)
{
	echo("<hr class='featurette-divider'>");
	echo("<div class='row featurette'>");
	echo("<div class='col-md-2'>");
	echo("<img src='img/pecnews.png'  class='bd-placeholder-img rounded-circle' width='150' height='150'>");
	echo("</div>");
	echo("<div class='col-md-7'>");
	echo("<h2>");
	echo($item["Name"]);
	echo("</h2>");
	echo("<p>");
	echo($item["Text"]);
	echo("</p>");
	echo("<a class='btn btn-secondary' href='#' role='button'>");
	echo("Детальніше&raquo;");
	echo("</a>");
	echo("</p>");
	echo("</p>");
	echo("</div>");
	echo("</div>");
}
?>
</article>
	
