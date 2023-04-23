<?php
 include('session.php');
 if(!isset($_SESSION['login_user'])){
 header("location: index.php"); // Redirecting To Home Page
 } 
   $id = filter_input(INPUT_POST, 'user');
  
  $poste = filter_input(INPUT_POST, 'poste');
 $email = filter_input(INPUT_POST, 'email');
 $sitfam = filter_input(INPUT_POST, 'sit-fam');
 $structure = filter_input(INPUT_POST, 'structure');
 $structureparent  = filter_input(INPUT_POST, 'structureparent');
 $sql = " UPDATE `personnel` SET `poste` = '$poste', `email` = '$email', `sit-fam` = '$sitfam', `structure` = '$structure', `structure parent` = '$structureparent' WHERE `personnel`.`matricule` = '$id'";
 if($conn->query($sql)){
    header("location: Profile1.php?msg=updated successfully!");
    
  }
else{
echo "Error: ". $sql ."
". $conn->error;

}
$conn->close();
?>