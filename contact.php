
<?php 
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(!is_null($_POST["fname"])&&!is_null($_POST["email"]))
{
	$db=new mysqli("127.0.0.1","root","","Pecarnia");
	$db->query("SET NAMES 'UTF8'");
	$db->query("insert into clients values (null,'".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."')");	
	
}
?>
<br>

<div class=container-fluid>
  <div class="row g-3">
      <div class="col-md-11 col-lg-12">
        <h4 class="mb-3">Зворотня форма</h4>
        <form method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="FirstName" class="form-label">Ім'я</label>
              <input type="FirstName" class="form-control" name="fname" placeholder="Введіть ім'я" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="LastName" class="form-label">Прізвище</label>
              <input type="LastName" class="form-control" name="lname" placeholder="Введіть прізвище"value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="Email" class="form-label">Email</label>
              <input type="Email" class="form-control" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

          <hr class="featurette-divider">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue</button>
        </form>
      </div>
    </div>
</div>


