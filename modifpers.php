<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";

$con = new mysqli($server, $user, $password, $database);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $id = $_POST['user'];    
    $qry =" SELECT * FROM  `personnel` WHERE `personnel`.`matricule` = '$id'";
    $delete = mysqli_query($con,$qry);
    while ($row = mysqli_fetch_assoc($delete)) {
        $poste = $row['poste'];
        $email = $row['email'];
        $sitfam = $row['sit-fam'];
        $structure = $row['structure'];
        $structureparent = $row['structure parent'];
      }
    
    
    if ($delete) {
       
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestion des Congés</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


  <!--<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">-->
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="images/bna-logo-mini.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
   
</head>
<body>
<center>
<div class="card card-center text-center"  style="width: 30rem; width : 50rem;  border-color : green;">
  
  <div class="card-body ">
    <h5 class="card-title text-center">modifier un personnel</h5>
    <br>

      <form  method="post" action="lieemofpers.php" >
      
      <input type="text"  class="form-control" name="user" value="<?php echo "$id";?>" hidden>
      
    <div class="row">
       <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Email</label>
        <input type="text" class="form-control  rounded border border-success"  name = "email" value="<?php echo " $email"; ?>" placeholder="e-mail">
       </div>
        <div class="col">
        <label for="sex1" class="col-sm-1-form-label">Poste</label>
        <input type="text" class="form-control  rounded border border-success"  name = "poste" value="<?php echo " $poste"; ?>" placeholder="poste">
       </div>
    </div>
       <br>
    <div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="structure" class="form-control border-success" value="<?php echo " $structure"; ?>" placeholder="Code structure">
     </div>
      <div class="col">
        <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
        <input type="text" id="codestructure" name ="structureparent" class="form-control border-success" value="<?php echo " $structureparent"; ?>" placeholder="Code structure">
       </div>
      </div>
      <br>
       
       
       <div class="row">
       <label for="sex1" class="col-sm-1-form-label">Situation familiale</label>
        <input type="text" class="form-control  rounded border border-success"  name = "sit-fam" value="<?php echo " $sitfam"; ?>" placeholder="sit-fam">
       </div>
       
       <br>
      
      <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
      
      </form>
      <?php
  }
      else{
          header("location: Profile1.php?msg=Try again!");
      }
  }
  ?>
  </div>
  </div>
  <center/>
  </body>
  
  </html>