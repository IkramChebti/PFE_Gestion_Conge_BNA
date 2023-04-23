<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";

$con = new mysqli($server, $user, $password, $database);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $id = $_POST['user'];    
    $query = "SELECT `absence`.*, `titre-conge`.*, `ordre-service`.* , `intérime`.* FROM (((`absence`  JOIN `titre-conge` ON `absence`.`id`=`titre-conge`.`id`)JOIN `ordre-service` ON `ordre-service`.`id`=`titre-conge`.`id`)JOIN `intérime` ON `ordre-service`.`id`=`intérime`.`id`) WHERE `absence`.`id` = '$id' ";
             
    $delete = mysqli_query($con,$query);
  
    
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
<div class="card card-center text-center"  style="width: 18rem; width : 20rem;  border-color : green;">
  
  <div class="card-body ">
    <h5 class="card-title text-center">imprimer une absence</h5>
    <br>

      <form  method="post" action="imprimannel.php" >
       <div class="row">
       
       <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Mme/Mr délégataire</label>
         <select class="form-select border-success " name ="sex" aria-label="Default select example">
         <option value="Madame">Madame</option>
         <option value="Monsieur">Monsieur</option>
         </select>
        </div>
    
        <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Mme/Mr 1ér intérimaire</label>
         <select class="form-select border-success " name ="sex1" aria-label="Default select example">
         <option value="Madame">Madame</option>
         <option value="Monsieur">Monsieur</option>
         </select>
        </div>
    
        <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Mme/Mr 2éme intérimaire</label>
         <select class="form-select border-success " name ="sex2" aria-label="Default select example">
         <option value="Madame">Madame</option>
         <option value="Monsieur">Monsieur</option>
         </select>
        </div>
    
    
    
    
    </div>
        <input type="text"  class="form-control" name="user" value="<?php echo "$id";?>" hidden>
      
        
 

         <button  class="btn btn-info"  type="submit" value="Submit"  >Imprimer</button>  
      
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