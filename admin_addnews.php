
<?php 
include "admin_navbar.php";
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(!is_null($_POST["Title"]))
{
	
	$db=new mysqli("127.0.0.1","root","","Pecarnia");
	$db->query("SET NAMES 'UTF8'");
	$db->query("insert into news values (null,'".$_POST['Title']."','".$_POST['Text']."')");	
	header("Location:/pecarnia/admin.php");
}
?>
<br>

	<div class="text-center py-5 px-3" id="cooperation">
    <h1>Панель адміністратора: Новини</h1>
  </div> 
<article style="padding:15px;">
<div class="container cooperation">
<form method="post">
<div class="row">
<div class="col-lg-12">
	<h4 class="mb-3">Зоголовок</h4><br>
	<input name="Title" style="width:500px; resize:none" placeholder="Введіть заголовок новини" required><br><br>
</div>
<div class="col-lg-12">
	<h4 class="mb-3">Зміст</h4>
	<textarea name="Text" style="width:500px; height:300px; resize:none" placeholder="Введіть зміст новини" required></textarea><br>
	<input class="btn btn-primary btn-lg" type="submit" style="margin:15px 0 0 0">
</div>
</div>
</form>
</div>


</article>
	
