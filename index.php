<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <br>
  <br>
  <center>
<div class="card card-center text-center"  style="width: 18rem; width : 20rem;  border-color : green;">
  <img class="card-img-top" src="bna1.png" alt="Card image cap">
 
  <div class="card-body ">
    <h5 class="card-title text-center">Connexion</h5>
    <br>
<form action="" method="post">
<div class="form-group">
    <input type="text" class="form-control border border-success" id="user" name="username" placeholder="Nom d'utilisateur">
</div>
<div class="form-group">
     <input type="password" class="form-control border border-success" id="exampleInputPassword1" name="password"  placeholder="mot de passe ">
<?php
       
  if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "<p style='color:red;'> Veuillez remplir les champs vides</p>";
}
elseif($stmt->fetch()) //fetching the contents of the row 
{
    $_SESSION['login_user'] = $username; 
// Initializing Session

header("location: Profile1.php"); // Redirecting To admin Profile Page
     
                         }
 
else echo "<p style='color:red;'> Nom d'utilisateur ou mot de passe incorrect</p>";
}
                                    ?>
   </div>
  <br><br>
  <button type="submit" value=" Login "  name="submit" class="btn btn-success">Connexion</button>
</form>
</div>
</div>
<center/>
</body>
</html>