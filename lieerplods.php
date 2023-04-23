
<?php
 include('session.php');
 if(!isset($_SESSION['login_user'])){
 header("location: index.php"); // Redirecting To Home Page
 } 
 
 $datedebut = filter_input(INPUT_POST, 'date-debut');
 $datefin = filter_input(INPUT_POST, 'date-fin');
 $Matricule = filter_input(INPUT_POST, 'Matricule');
 $sex = filter_input(INPUT_POST, 'sex');
 $id = filter_input(INPUT_POST, 'id');
 $id1 = filter_input(INPUT_POST, 'id1');
 $ref = filter_input(INPUT_POST, 'ref');
 $signataire1 = filter_input(INPUT_POST, 'signataire1');
 $datecourriel1 = filter_input(INPUT_POST, 'date-courriel1');
 $datecourriel2 = filter_input(INPUT_POST, 'date-courriel2');
 $nbrintérime = filter_input(INPUT_POST, 'nbrintérime');
 $datedebut1 = filter_input(INPUT_POST, 'date-debut1');
 $datefin1 = filter_input(INPUT_POST, 'date-fin1');
 $Matricule1 = filter_input(INPUT_POST, 'Matricule1');
 $sex1 = filter_input(INPUT_POST, 'sex1');
 $debut2 = filter_input(INPUT_POST, 'debut2');
 $fin2 = filter_input(INPUT_POST, 'fin2');
 $Matricule2 = filter_input(INPUT_POST, 'Matricule2');
 $sex2 = filter_input(INPUT_POST, 'sex2');
 $codestructure = filter_input(INPUT_POST, 'code-structure');
 $codestructureparent = filter_input(INPUT_POST, 'code-structure-parent');
 $date = date('d-m-y ');
 $Etat =" remplacer ";
 $server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";
$chef ='Le Chef de la Division,';

$con = new mysqli($server, $user, $password, $database);
$sql11 = "SELECT * FROM `ordre-service` where id = '$id1'";
$result11 = mysqli_query($con,$sql11);
 while ($row = mysqli_fetch_assoc($result11)) {
   $ref1 = $row['ref'];
   $date1 = $row['date-saisie'];
}

if($conn->query($sql11)){}


      $sql9 = "UPDATE `absence` SET `id-remplacement` = '$id', `debut-remplacement` = '$datedebut', `fin-remplacement` = '$datefin', `Etat` = 'remplacer', `username` = '$login_session' WHERE `absence`.`id` = '$id'";
      $sql1 = "INSERT INTO `remplacement` (`id`, `date-saisie`) VALUES ('$id', '$date')";
      $sql3 = "UPDATE `ordre-service` SET `signataire1` = '$signataire1', `date-saisie` = '$date', `date-courriel1` = '$datecourriel1', `date-courriel2` = '$datecourriel2', `Matricule` = '$Matricule', `id-intérime` = '$ref1' WHERE `ordre-service`.`id` = '$id' ";
      $sql8 = "UPDATE `intérime` SET `nbr-intérime` = '$nbrintérime', `matricule1` = '$Matricule1', `date-debut1` = '$datedebut1', `date-fin1` = '$datefin1', `matricule2` = '$Matricule2', `debut2` = '$debut2', `fin2` = '$fin2' WHERE `intérime`.`id` = '$ref1' ";
      if($conn->query($sql8)){}
      if($conn->query($sql9)){}
      if($conn->query($sql1)){}
      if($conn->query($sql3)){}

     
$sql = "SELECT * FROM `personnel` where matricule = '$Matricule' ";
      $result = mysqli_query($con,$sql);
      
      while ($row = mysqli_fetch_assoc($result)) {
         $nom = $row['nom'];
         $prenom = $row['prenom'];
         $post = $row['poste'];
         $structure = $row['structure'];
      }

      if($conn->query($sql)){}
      $sql22 = "SELECT * FROM `absence` where id = '$id1' ";
      $result22 = mysqli_query($con,$sql22);
      
      while ($row = mysqli_fetch_assoc($result22)) {
         $type1 = $row['type-congé'];
      }

      if($conn->query($sql22)){}

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
  <body  class ="text-center"style="background-image:url(logo.jpg) ; hight : 20px; ">
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
  <h3> <u> <strong >Le présent ordre de service annule et remplace celui du <?php echo $datecourriel1;?> portant le numéro
  <?php echo $ref;?>.</strong> </u></h3>
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
      echo "<h4 class ='text-left'>- Vu le courriel de la $nomstructureparent(indice $codestructureparent) du $datecourriel1, portant désignation de
     $sex1 $nomint1 $prenomint1 qualité de chargé (e) de l’intérim de $nomstructure (indice $codestructure),</h4>
     "."<h4 class ='text-left'>- Vu le courriel de la DSRE (indice 136) du  $datecourriel2,</h4>
     "."<h4 class ='text-left'> $chef"."</h4>"."<h2> <u> <strong >D E C I D E</h2> </u> </strong >"."<br>";
      echo "<h4 class ='text-center'> Durant le  $type1  de $sex  $nom $prenom,  $post de $nomstructure (indice  $codestructure), l’intérim sera assuré du.</h4>"."<br>"."<h4 class ='text-center'>
     $datedebut1 au  $datefin1 par : </h4>"."<br>"."<h4 class ='text-center'> $nomint1  $prenomint1</h4>"." <h4 class ='text-center'> $post1</h4>"."<h4 class ='text-center'>à  $nomstructure « indice  $codestructure »</h4>"."<h4 class ='text-center'> Le spécimen de signature de $sex1  $nomint1 $prenomint1, figure au Recueil
     'INTERNE'; des signatures autorisées.</h4>"; }
   else {
      echo "<h4>- Vu le courriel de la $nomstructureparent (indice $codestructureparent) du $datecourriel1, portant désignation de
      $sex1 et $sex2 $nomint1 $prenomint1 et $nomint2 $prenomint2 en qualité de chargé (s) (es) de l’intérim de
      $nomstructure (indice  $codestructure),</h4>"."<h4 class ='text-left'>- Vu le courriel de la DSRE (indice 136) du  $datecourriel2,</h4>
      "."<h4 class ='text-left'> $chef"."</h4>"."<h2> <u> <strong >D E C I D E</h2> </u> </strong >"."<br>"."<h4> Durant le $type1 de $sex $nom $prenom , $post de
      $nomstructure (indice  $codestructure), l’intérim sera assuré du
$datecourriel1 au $datecourriel2 comme suit :</h4>"."<br>"."<h4>Du $datedebut1 au $datefin1 par :</h4>"."<br>"."<h4>$sex1 $nomint1 $prenomint1</h4>"."<h4 class ='text-center'> $post1</h4>"."<h4 class ='text-center'> à $nomstructure  « indice  $codestructure »</h4>"
."<h4>Du $debut2 au $fin2 par :</h4>"."<h4>$sex2 $nomint2 $prenomint2</h4>"."<h4 class ='text-center'> $post2</h4>"."<h4 class ='text-center'> à  $nomstructure « indice  $codestructure »</h4>"
."<h4 class ='text-center'>Les spécimens de signatures de $sex1 et $sex2 $nomint1 $prenomint1 et $nomint2 $prenomint2, figurent au Recueil 'INTERNE ' des
signatures autorisées.</h4>";
    }?><br>
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