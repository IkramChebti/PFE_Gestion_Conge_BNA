<?php
 include('session.php');
 if(!isset($_SESSION['login_user'])){
 header("location: index.php"); // Redirecting To Home Page
 } 
 $matricule = filter_input(INPUT_POST, 'matricule');
 $nom = filter_input(INPUT_POST, 'nom');
 $prenom= filter_input(INPUT_POST, 'prenom');
 $poste = filter_input(INPUT_POST, 'poste');
 $dateentree = filter_input(INPUT_POST, 'date-entree');
 $email = filter_input(INPUT_POST, 'email');
 $datenaiss = filter_input(INPUT_POST, 'date-naiss');
 $lieunaiss = filter_input(INPUT_POST, 'lieu-naiss');
 $sitfam = filter_input(INPUT_POST, 'sit-fam');
 $sexe= filter_input(INPUT_POST, 'sexe');
 $structure = filter_input(INPUT_POST, 'code-structure');
 $structureparent = filter_input(INPUT_POST, 'code-structure-parent');

 $reliquat = filter_input(INPUT_POST, 'reliquat');
 $sql = "INSERT INTO `personnel` (`matricule`, `nom`, `prenom`, `poste`, `date-entree`, `email`, `date-naiss`, `lieu-naiss`, `sit-fam`, `sexe`, `structure`, `structure parent`) VALUES('$matricule','$nom', '$prenom', '$poste', '$dateentree','$email', '$datenaiss', '$lieunaiss','$sitfam','$sexe','$structure', '$structureparent')";
 $sql1 = "INSERT INTO  `droit-conge` (  `exercice-antérieur`,`Matricule` ) VALUES('$reliquat', '$matricule')";
 if($conn->query($sql1)){ 
   header("location: Profile1.php?msg=record successfully!");
  }
else{
echo "Error: ". $sql1 ."
". $conn->error;
}
   if($conn->query($sql)){
    header("location: Profile1.php?msg=record successfully!");
  }
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
?>
 