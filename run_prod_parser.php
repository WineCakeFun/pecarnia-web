<?php
include "parser.php";
include "admin_navbar.php";
$db=new mysqli("127.0.0.1","root","","test");
$db->query("SET NAMES 'UTF8'");
$xml = file_get_contents('./products.xml', FILE_USE_INCLUDE_PATH);
echo '<pre>';
$rss = new XML($xml);
foreach($rss->rss->pecarnia->products->product as $it)
{
	$db->query("insert into products values (null,'".$it['ProductName']."','".$it['ManufactureDate']."',".$it['BestBefore'].",'".$it['Price']."')");	
    echo("<hr class='featurette-divider'>");
	echo("<div class='row featurette'>");
	echo("<div class='col-md-2'>");
	echo("<img src='img/pecdata.png'  class='bd-placeholder-img rounded-circle' width='150' height='150'>");
	echo("</div>");
    echo("<div class='col-md-7'>");
      echo("<h2>");
      echo("Id: ");
      echo $it->Id."\n";
      echo("</h2>");
      echo("<h2>");
      echo("ProductName: ");
      echo $it->ProductName."\n";
      echo("</h2>");
      echo("<h2>");
      echo("ManufactureDate: ");
      echo $it->ManufactureDate."\n";
      echo("</h2>");
      echo("<h2>");
      echo("BestBefore: ");
      echo $it->BestBefore."\n";
      echo("</h2>");
      echo("<h2>");
      echo("Price: ");
      echo $it->Price."\n";
      echo("</h2>");
      echo("</div>");
      echo("</div>");
}
?>