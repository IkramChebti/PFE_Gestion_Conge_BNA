<?php
 include('session.php');
 if(!isset($_SESSION['login_user'])){
 header("location: index.php"); // Redirecting To Home Page
 } 
 $id = filter_input(INPUT_POST, 'id');
 $id1 = filter_input(INPUT_POST, 'id1');
 $ref = filter_input(INPUT_POST, 'ref');
 $signataire1 = filter_input(INPUT_POST, 'signataire1');
 $datecourriel1 = filter_input(INPUT_POST, 'date-courriel1');
 $datecourriel2 = filter_input(INPUT_POST, 'date-courriel2');
 $sex = filter_input(INPUT_POST, 'sex');
 $sex1 = filter_input(INPUT_POST, 'sex1');
 $sex2 = filter_input(INPUT_POST, 'sex2');
 $date = date('d-m-y ');
 $chef ='Le Chef de la Division,';
 $Matricule1  = filter_input(INPUT_POST, 'Matricule1');
 $Matricule2  = filter_input(INPUT_POST, 'Matricule2');
 $Matricule  = filter_input(INPUT_POST, 'Matricule');
 $codestructure = filter_input(INPUT_POST, 'code-structure');
 $codestructureparent = filter_input(INPUT_POST, 'code-structure-parent');
 $server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";
$con = new mysqli($server, $user, $password, $database);
$sql11 = "SELECT * FROM `ordre-service` where id = '$id1'";
$result11 = mysqli_query($con,$sql11);
 while ($row = mysqli_fetch_assoc($result11)) {
   $ref1 = $row['ref'];
   
}if($conn->query($sql11)){}
 $sql9 = "UPDATE `absence` SET `id-annulation` = '$id', `Etat` = 'annuler', `username` = '$login_session' WHERE `absence`.`id` = '$id'";
 $sql77 = "INSERT INTO `annulation` (`id`, `date-couriel1`, `date-courriel2`) VALUES ('$id', '$datecourriel1', '$datecourriel2')";
      
 if($conn->query($sql77)){}
 if($conn->query($sql9)){}
 
$sql = "SELECT * FROM `personnel` where matricule = '$Matricule' ";
      $result = mysqli_query($con,$sql);
      
      while ($row = mysqli_fetch_assoc($result)) {
         $nom = $row['nom'];
         $prenom = $row['prenom'];
         $post = $row['poste'];
         $structure = $row['structure'];
      }

      if($conn->query($sql)){}
      $sql432 = "SELECT * FROM `intérime` where id = '$ref1' ";
      $result432 = mysqli_query($con,$sql432);
      
      while ($row = mysqli_fetch_assoc($result432)) {
         $nbrintérime = $row['nbr-intérime'];
         $datedebut1 = $row['date-debut1'];
         $datefin1 = $row['date-fin1'];
         $debut2 = $row['debut2'];
         $fin2 = $row['fin2'];
      }

      if($conn->query($sql432)){}
      $sql4 = "SELECT * FROM `personnel` where matricule = '$Matricule1' ";
      $result4 = mysqli_query($con,$sql4);
      
      while ($row = mysqli_fetch_assoc($result4)) {
         $nomint1 = $row['nom'];
         $prenomint1 = $row['prenom'];
         $post1 = $row['poste'];
      }

      if($conn->query($sql4)){}

      $sql5 = "SELECT * FROM `personnel` where matricule = '$Matricule2' ";
      $result5 = mysqli_query($con,$sql5);
      
      while ($row = mysqli_fetch_assoc($result5)) {
         $nomint2 = $row['nom'];
         $prenomint2 = $row['prenom'];
         $post2 = $row['poste'];
      }

      if($conn->query($sql5)){}
      $sql6 = "SELECT * FROM `structure` where code = '$codestructureparent' ";
      $result6 = mysqli_query($con,$sql6);
      
      while ($row = mysqli_fetch_assoc($result6)) {
        $nomstructureparent = $row['nom-structure'];
         
      }

      if($conn->query($sql6)){}
      $sql7 = "SELECT * FROM `structure` where code = '$codestructure' ";
      $result7 = mysqli_query($con,$sql7);
      
      while ($row = mysqli_fetch_assoc($result7)) {
        $nomstructure = $row['nom-structure'];
         
      }

      if($conn->query($sql7)){}
     
      
 ?><!DOCTYPE html>
 <html>
 <head>
 <title>ordre de service</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
 </head>
 <center>
 <body style="background-image:url(logo.jpg) ; hight : 100px; ">
 -<!-- entet drh-->
 <?php
 $dgmmrh = 'dgmmrh' ;
 $DG = 'DG';
 if($signataire1 == $dgmmrh){
    echo " <h2><strong > الـبـنـك الـوطـنـي الجـزائـري </strong ></h2>"."
    <h3><strong > B A N Q U E N A T I O N A L E D’A L G É R I E <strong></h3>"."
    <h4>Société par actions, AU CAPITAL DE 150.000.000.000 D.A.</h4>"."
    <h4>SIÈGE SOCIAL : 08, Bd Ernesto Che-Guevara - ALGER</h4>"."
    <h5>R.C. 00 B 0012904</h5>"."
    <h5 class ='text-right'>Baba-Hassen, le $date </h5>"."<br>"."
    <h5 class ='text-left'><strong >  Division Gestion des Moyens</strong ></h5>"."
    <h5 class ='text-left'> <strong >Matériels et des Ressources Humaines</strong ></h5>
    ";
 }
 elseif($signataire1 == $DG) {
    echo " <h5 class ='text-right'> الــــــبنك الـوطـــــني الـجزائــــــري</h5>"."
    <h5 class ='text-left'> BANQUE NATIONALE D’ALGERIE </h5>"."
    <h5 class ='text-right'>المـــــدير العــــــــــام</h5>"."
    <h5 class ='text-left'> Le Directeur Général </h5>"."
    <h5 class ='text-center'> alger,le $date </h5>"."<br>
    
    ";
 } 
 else {
    echo " <h5 class ='text-right'> الــــــبنك الـوطـــــني الـجزائــــــري</h5>"."
    <h5 class ='text-left'> BANQUE NATIONALE D’ALGERIE </h5>"."
    <h5 class ='text-right'>المـــــديرية العــــــــــامة</h5>"."
    <h5 class ='text-left'> La Direction Générale </h5>"."
    <h5 class ='text-center'> alger,le $date </h5>"."<br>
    
    ";
     }
 ?>
 <h2> <u> <strong >O R D R E DE S E R V I C E N°<?php echo $ref1;?>.</strong> </u></h2>
  <h3> <u> <strong >Annulation</strong> </u></h3>
  <br><br>
  <h4 class ="text-left"> - Vu l’Ordonnance n° 66-178 du 13 Juin 1966, portant création de la BANQUE NATIONALEd'ALGERIE,</h4>
<br>
  <h4 class ="text-left">- Vu les Statuts de la BANQUE NATIONALE d'ALGERIE,</h4>
  <br>
<?php 
$dgmmrh = 'dgmmrh' ;
$DG = 'DG';
if($signataire1 == $dgmmrh){
     echo "<h4 class ='text-left'>- Vu la décision n°244 du 22 Août 2021, portant nomination de Monsieur Nasreddine ACHOUR
     en qualité de Chef de la Division Gestion des Moyens Matériels et des Ressources Humaines,</h4>"; 
                         }
     elseif($signataire1 == $DG) {
         echo"<h4 class ='text-left'>- Vu le Procès-verbal n°04/2021 du Conseil d&#39;Administration du 03 Mai 2021 portant nomination
      de Monsieur Mohammed Lamine LEBBOU en qualité de Directeur Général de la BANQUE
      NATIONALE d&#39;ALGÉRIE.</h4>";}
     else {
        echo "<h4 class ='text-left'>- Vu le Procès-verbal n°04/2021 du Conseil d&#39;Administration du 03 Mai 2021 portant nomination
      de Monsieur Mohammed Lamine LEBBOU en qualité de Directeur Général de la BANQUE
      NATIONALE d&#39;ALGÉRIE.</h4>";
        }
     ?><br>
     <?php
     if($nbrintérime == 1){
      echo "<h4 class ='text-left'>- Vu le courriel de la $nomstructureparent(indice $codestructureparent) du $datecourriel1, portant annulation du départ en congé de $sex $nom $prenom ,  $post de $nomstructure (indice  $codestructure),</h4>
     "."<h4 class ='text-left'>- Vu le courriel de la DSRE (indice 136) du  $datecourriel2,</h4>
     "."<h4 class ='text-left'> $chef"."</h4>"."<h2> <u> <strong >D E C I D E</h2> </u> </strong >"."<br>";
      echo "<h4 class ='text-center'> L’ordre de service Réf : $ref1 du $datecourriel1 portant désignation de $sex1 $nomint1 $prenomint1 en qualité de chargé (e) de
      l’intérim de $nomstructure(indice $codestructure) du $datedebut1 au $datefin1 est annulé.</h4>"; }
   else {
      echo "<h4 class ='text-left'>- Vu le courriel de la $nomstructureparent(indice $codestructureparent) du $datecourriel1, portant annulation du départ en congé de $sex $nom $prenom ,  $post de $nomstructure (indice  $codestructure),</h4>
      "."<h4 class ='text-left'>- Vu le courriel de la DSRE (indice 136) du  $datecourriel2,</h4>
      "."<h4 class ='text-left'> $chef"."</h4>"."<h2> <u> <strong >D E C I D E</h2> </u> </strong >"."<br>";
       echo "<h4 class ='text-center'> L’ordre de service Réf : $ref1 du $datecourriel1 portant désignation de $sex1 et $sex2 $nomint1 $prenomint1 et $nomint2 $prenomint2 en qualité de chargé (s) (es) de l’intérim de
       $nomstructure(indice $codestructure) du $datedebut1 au $dafin1 et du $debut2 au $fin2 est annulé.</h4>";
    }?><br><br><br><br>
 
    <?php 
    $dgmmrh = 'dgmmrh' ;
$DG = 'DG';
if($signataire1 == $dgmmrh){echo "<h3><strong > Le Chef de la Division Gestion des Moyens</strong ></h3>"."<h3><strong >Matériels et des Ressources Humaines</strong ></h3>"."<h3><strong >N. ACHOUR</strong ></h3>";}
elseif($signataire1 == $DG) {echo "<h3><strong >Le Directeur Général </strong ></h3>"."<h3><strong >Mohammed Lamine LEBBOU</strong ></h3>";}
   else {echo "<h3><strong > Le Secrétaire Général</strong ></h3>"."<h3><strong >Benabdi DINE</strong ></h3>";}
   ?>
   

</body>
   </center>
</html>
<?php    

$conn->close();
?>