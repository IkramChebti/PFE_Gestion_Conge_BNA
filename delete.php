<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";

$con = new mysqli($server, $user, $password, $database);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $id = $_POST['user'];    
    $qry =" DELETE FROM `compte` WHERE `compte`.`username` = '$id'";
    $delete = mysqli_query($con,$qry);
    if ($delete) {
        header("location: Profile1.php?msg=deleted successfully!");
    }
    else{
        header("location: Profile1.php?msg=Try again!");
    }
}
?>