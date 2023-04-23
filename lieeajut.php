<?php
 include('session.php');
 if(!isset($_SESSION['login_user'])){
 header("location: index.php"); // Redirecting To Home Page
 } 

 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 $profile = filter_input(INPUT_POST, 'profile');
 $sql = " INSERT INTO `compte`(`username`, `password`, `profile`) VALUES ('$username','$password','$profile')";
 if($conn->query($sql)){
  header("location: Profile1.php?msg=deleted successfully!");
  }
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
?>
 