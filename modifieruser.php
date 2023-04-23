<?php
 include('session.php');
 if(!isset($_SESSION['login_user'])){
 header("location: index.php"); // Redirecting To Home Page
 } 

 $matricule = filter_input(INPUT_POST, 'matricule');
 $nom = filter_input(INPUT_POST, 'nom');
 $prenom = filter_input(INPUT_POST, 'prenom');
 $poste = filter_input(INPUT_POST, 'poste');
 $dateentree = filter_input(INPUT_POST, 'date-entree');
 $email = filter_input(INPUT_POST, 'email');
 $datenaiss = filter_input(INPUT_POST, 'date-naiss');
 $lieunaiss= filter_input(INPUT_POST, 'lieu-naiss');
 $sitfam = filter_input(INPUT_POST, 'sit-fam');
 $sexe = filter_input(INPUT_POST, 'sexe');
 
 $sql = " INSERT INTO `personnel`(`matricule`, `nom`, `prenom`, `poste`, `date-entree`, `email`,`date-naiss`, `lieu-naiss`, `sit-fam`, `sexe`) VALUES ('$matricule','$nom','$prenom','$poste','$prenom','$dateentree','$email','$datenaiss',' $lieunaiss' ,'$sitfam',' $sexe ')";
 if($conn->query($sql)){
  header("location: Profile1.php?msg=deleted successfully!");
  }
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
?>
 

  