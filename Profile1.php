<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
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
 <div class="container-scroller" style="height: 640px; ">

    <!-- partial:partials/_navbar.html -->
     <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/bna-logo.png" style="width:210px; height: 100px;" class="mr-4" alt="logo"/></a>
      
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" >
        <!--<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>-->

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name" style="color: green;"><i><?php echo $login_session; ?></i></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>


    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <br>
          <br>
          <br>
          <br>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Gérer-Congé" aria-expanded="false" aria-controls="titre-de-conge">
              <i class="bi bi-calendar-event"></i>
              <span class="menu-title" style="margin-left: 16px;">Congé annuel</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Gérer-Congé">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal1" >Nouveau</a></li>
                <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal2" >remplacer</a></li>
                <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal3" >Annuler</a></li>
                <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal4" >Archive</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ordre-de-service" aria-expanded="false" aria-controls="ordre-de-service">
              <i class="bi bi-calendar-event-fill"></i>
              <span class="menu-title" style="margin-left: 16px;">Autre absence</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ordre-de-service">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal5">nouveau</a></li>
              <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal6">remplacer</a></li>
              <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal7">annuler</a></li>
              <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal8" >Archive</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#gestio-personnel" aria-expanded="false" aria-controls="gestio-personnel">
              <i class="bi bi-person-lines-fill"></i>
              <span class="menu-title" style="margin-left: 16px;">Gestion Personnel</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gestio-personnel">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal9" >Ajouter</a></li>
                 <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#exampleModal11" >Liste Du Personnel</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#gestion-utilisateurs" aria-expanded="false" aria-controls="gestion-utilisateurs">
              <i class="bi bi-person-plus-fill"></i>
              <span class="menu-title" style="margin-left: 16px;">Gestion Utilisateurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gestion-utilisateurs">
              <ul class="nav flex-column sub-menu" >
                 <li class="nav-item "> <a class="nav-link" data-toggle="modal" data-target="#exampleModal12" >Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link"data-toggle="modal" data-target="#exampleModal13">Liste Utilisateurs</a></li>
              </ul>
            </div>
          </li>
          
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#pisteaudit" aria-expanded="false" aria-controls="pisteaudit">
              <i class="bi bi-journal-text"></i><span class="menu-title" style="margin-left: 16px;">Piste d'Audit</span></a>
       
          </li>
          <li class="nav-item">
              <a href="logout.php" class="nav-link"> <i class="bi bi-person-x"></i><span class="menu-title" style="margin-left: 16px;">Deconnexion</span></a>
       
           
          </li>
        </ul>
       </nav>

      
      
       <!-- partial:partials/_footer.html -->
        <footer class="footer" style="background-color: white;">
          <!--<div class="d-sm-flex justify-content-center justify-content-sm-between" style="height: 2px; background-color: white;">-->
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block" style=" margin-bottom: 50px;">Copyright © 2022. <a href="https://www.bootstrapdash.com/" target="_blank">Ikram CHEBTI et Chaima KHOUDRI</a> BNA. tous droits reservé.</span>
          
        </footer>
      <!-- partial -->
      </div>
        

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->




                                  <!--   nouveau congé annuel       -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
<div class="modal-dialog-xl" role="document">
<div class="modal-dialog " role="document">
<div class="modal-content">
        <!--model header-->
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel1">Ajouter un nouveau congé annuel</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button> </div>
      <!-- model body-->
<div class="modal-body">
<form method="post" action="nv-annuel.php">
                                      <h5> Absence </h5>
    <div class ="row">
        <div class ="col">
                <label for="date" class="col-sm-1-form-label">Date début</label>
                <div class="input-group date border-success" id="datepicker2">
                    <input type="date"  name ="date-debut"class="form-control"required>
                </div>
        </div>
        <div class ="col">
                   <label for="date" class="col-sm-1-form-label">Date fin </label>
                      <div class="input-group date border-success" id="datepicker3">
                          <input type="date" name ="date-fin" class="form-control"required> 
                      </div>
        </div>
    </div>
    <br>
    <div class="row">
       <div class="col-auto border-success">
             <label for="sex" class="col-sm-1-form-label">Mme/Mr</label>  
             <select class="form-select border-success " name ="sex" aria-label="Default select example">
                <option selected value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
              </select>
         </div>        
      <div class="col">
          <label for="matricule" class="col-form-label border-success">Matricule</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Matricule" placeholder="matricule"required>
        </div>
           
     </div>
                 
   
  
                              <h5>Titre de congé </h5>
       
    <div class="row">
          <div class="col">
            <label for="id" class="col-form-label border-success">Id</label>
            <input type="text" id="id" name ="id" class="form-control border-success" placeholder="Id">
          </div>
          <div class="col">
             <label for="Reference" class="col-form-label border-success">Référence</label>
             <input type="text" id="Reference" name ="ref" class="form-control border-success" placeholder="Reference"required>
          </div>
    </div> 
    <div class="row">
      <div class="col">
        <label for="select" class="col-form-label border-success">Signataire</label>
        <select class="form-select border-success" name="signataire" aria-label="Default select example"required>
        <option  value="DRH">DRH</option>
        <option value="SG">SG</option>
        <option value="DG">DG</option>
        </select>
      </div>
        <br>
        <div class="col">
            <div class=" col border-success">
            <label for="select" class="col-form-label border-success">Type</label>
            <select class="form-select border-success" name ="type" aria-label="Default select example">
            <option value = "algérie">Simple</option>
            <option value = "Visa">Visa</option>
            <option value = "etranger">Valable à l'etranger</option>
            </select>
           </div>  
        </div>   
  </div>
   <br>
   <div class="row">
            <div class="col">
              <textarea name = "direction" class="border-success" >Directrice des Ressources Humaines</textarea> 
            </div>
            <div class="col">
              <textarea name = "signature"  class="border-success">P.NOM </textarea>
            </div>
     </div>
    <div class="row">
           <div class="col">
             <label for="adresse" class="col-form-label border-success">Adresse</label>
             <input type="text" class="form-control  rounded border border-success"  name ="adresse" placeholder="adresse"required>
           </div>
    </div>
     <br>
     
                                 <h5> ordre de service </h5>
<div class="row">
        <div class="col">
          <label for="signataire" class="col-sm-1-form-label">Signataire</label>
           <select class="form-select border-success" name="signataire1" aria-label="Default select example">
            <option  value="dgmmrh">DGMMRH</option>
            <option value="SG">SG</option>
            <option value="DG">DG</option>
            </select>
        </div>
        <div class="col">
          <label for="Reference" class="col-form-label border-success">Référence</label>
          <input type="text" id="Reference" name ="ref1" class="form-control border-success" placeholder="Reference"required>
       </div>
</div>
<div class ="row">
          <div class ="col">
             <label for="date" class="col-sm-1-form-label">Date courriel 1</label>
              <div class="input-group date border-success" id="datepicker2">
                <input type="date"  name ="date-courriel1"class="form-control"required>
              </div>
          </div>
          <div class ="col"> 
             <label for="date" class="col-sm-1-form-label">Date courriel 2</label>
                <div class="input-group date border-success" id="datepicker3">
                <input type="date" name ="date-courriel2" class="form-control"required>
                </div>
          </div>
</div>

<div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="code-structure" class="form-control border-success" placeholder="Code structure"required>
          
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      </div>

                          <h5> intérimaires </h5>
    <div class="col">
          <label for="nbrintérime" class="col-sm-1-form-label">Nombre</label>
          <input type="text" class="form-control  rounded border border-success"  name ="nbrintérime" placeholder="nombre "required>
    </div>
                          <h5>1er intérimaire </h5>
<div class="row">
        <div class="col">
               <label for="sex1" class="col-sm-1-form-label">Mme/Mr</label>
                <select class="form-select border-success " name ="sex1" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
         </div>
        <div class="col">
               <label for="matricule1" class="col-sm-1-form-label">Matricule</label>
                <input type="text" class="form-control  rounded border border-success"  name ="Matricule1" placeholder="matricule"required>
        </div>
</div>
          
 <div class ="row">
      <div class ="col">
        <label for="date" class="col-sm-1-form-label">Du</label>
        <div class="input-group date border-success" id="datepicker2">
             <input type="date"  name ="date-debut1"class="form-control">
        </div>
         </div>
        <div class ="col">
             <label for="date" class="col-sm-1-form-label">Au</label>
            <div class="input-group date border-success" id="datepicker3">
              <input type="date" name ="date-fin1" class="form-control">
             </div>
        </div>
</div>
                 <h5>2éme intérimaire </h5>
<div class="row">
        <div class="col">
               <label for="sex2" class="col-sm-1-form-label">Mme/Mr</label>
                <select class="form-select border-success " name ="sex2" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
         </div>
         <div class="col">
             <label for="matricule2" class="col-sm-1-form-label">Matricule</label>
                <input type="text" class="form-control  rounded border border-success"  name ="Matricule2" placeholder="matricule">
        </div>
              
</div>
          
<div class ="row">
      <div class ="col">
        <label for="date" class="col-sm-1-form-label">Du</label>
            <div class="input-group date border-success" id="datepicker2">
                <input type="date"  name ="debut2"class="form-control">
            </div>
      </div>
      <div class ="col">
            <label for="date" class="col-sm-1-form-label">Au</label>
            <div class="input-group date border-success" id="datepicker3">
                 <input type="date" name ="fin2" class="form-control">
             </div>
        </div>
</div>
  <br> 
  
        <div class="modal-footer">
        <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
        <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
        </div>
          
          
 </form>
</div>
</div>
</div>
</div>
</div>


                               <!-- Remplacer un congé annuel -->

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-dialog" role="document">
<div class="modal-content">
 <!--model header-->
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel2">  Remplacer un congé annuel </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button></div>
      <!-- model body-->
 <div class="modal-body">
 <form method="post" action="lieerempltc.php">
                         <h5> Absence </h5>
                         <div class ="row">
        <div class ="col">
                <label for="date" class="col-sm-1-form-label">Date début</label>
                <div class="input-group date border-success" id="datepicker2">
                    <input type="date"  name ="date-debut"class="form-control"required>
                </div>
        </div>
        <div class ="col">
                   <label for="date" class="col-sm-1-form-label">Date fin </label>
                      <div class="input-group date border-success" id="datepicker3">
                          <input type="date" name ="date-fin" class="form-control"required> 
                      </div>
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-auto border-success">
             <label for="sex" class="col-sm-1-form-label">Mme/Mr</label>  
             <select class="form-select border-success " name ="sex" aria-label="Default select example">
                <option selected value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
              </select>
         </div>        
      <div class="col">
          <label for="matricule" class="col-form-label border-success">Matricule</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Matricule"required placeholder="matricule">
        </div>
        
     </div>
        <h5>Titre de congé </h5>
       
<div class="row">
    <div class="col">
        <label for="id" class="col-form-label border-success">Id du congé à remplacer</label>
        <input type="text" id="id" name ="id" class="form-control border-success" placeholder="Id du congé à remplacer"required>
    </div>
    
    <div class="col">
        <label for="Reference" class="col-form-label border-success">Référence</label>
        <input type="text" id="Reference" name ="ref" class="form-control border-success" placeholder="Reference"required>
    </div>
</div> 
<div class="row">
    <div class="col">
        <label for="select" class="col-form-label border-success">Signataire</label>
        <select class="form-select border-success" name="signataire" aria-label="Default select example"required>
        <option  value="DRH">DRH</option>
        <option value="SG">SG</option>
        <option value="DG">DG</option>
        </select>
    </div>
    <br>  
    <div class="col">
        <div class="col border-success">
        <label for="select" class="col-form-label border-success">Type</label>
        <select class="form-select border-success" name ="type" aria-label="Default select example">
        <option value="algérie">Simple</option>
        <option value="Visa">Visa</option>
        <option value="etranger">Valable à l'etranger</option>
        </select>
        </div>  
    </div>   
</div>
   <br>
<div class="row">
    <div class="col">
      <textarea name = "direction" class="border-success" >Directrice des Ressources Humaines</textarea> 
    </div>
    <div class="col">
      <textarea name = "signature"  class="border-success">P.NOM </textarea>
    </div>
 </div>
<div class="row">
    <div class="col">
          <label for="adresse" class="col-form-label border-success">Adresse</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Adresse" placeholder="adresse" required>
    </div>
</div>
     <br>         
                          <h5> ordre de service </h5>
 
<div class="row">
    <div class="col">
        <label for="signataire" class="col-sm-1-form-label">Signataire</label>
         <select class="form-select border-success" name="signataire1" aria-label="Default select example"required>
          <option  value="dgmmrh">DGMMRH</option>
          <option value="SG">SG</option>
          <option value="DG">DG</option>
          </select>
    </div>
    <div class="col">
        <label for="Reference" class="col-form-label border-success">Référence</label>
        <input type="text" id="Reference" name ="ref2" class="form-control border-success" placeholder="Reference"required>
    </div>
</div>
<div class ="row">
      <div class ="col">
            <label for="date" class="col-sm-1-form-label">Date courriel 1</label>
            <div class="input-group date border-success" id="datepicker2">
             <input type="date"  name ="date-courriel1"class="form-control"required>
             </div>
        </div>
        <div class ="col">
             <label for="date" class="col-sm-1-form-label">Date courriel 2</label>
              <div class="input-group date border-success" id="datepicker3">
                <input type="date" name ="date-courriel2" class="form-control"required>
              </div>
         </div>
 </div>
 <div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="code-structure" class="form-control border-success" placeholder="Code structure"required>
          
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      </div>
                             <h5> intérimaires </h5>
          <div class="col">
          <label for="nbrintérime" class="col-sm-1-form-label">Nombre</label>
          <input type="text" class="form-control  rounded border border-success"  name ="nbrintérime" placeholder="nombre "required>
          </div>
                            <h5>1er intérimaire </h5>
<div class="row">
     <div class="col">
              <label for="sex1" class="col-sm-1-form-label">Mme/Mr</label>
                <select class="form-select border-success " name ="sex1" aria-label="Default select example"required>
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
      </div>
      <div class="col">
             <label for="matricule2" class="col-sm-1-form-label">Matricule</label>
                <input type="text" class="form-control  rounded border border-success"  name ="Matricule1" placeholder="matricule"required>
      </div>
 </div>
          
<div class ="row">
      <div class ="col">
                 <label for="date" class="col-sm-1-form-label">Du</label>
                 <div class="input-group date border-success" id="datepicker2">
                    <input type="date"  name ="date-debut1"class="form-control"required>
                 </div>
         </div>
         <div class ="col">
                   <label for="date" class="col-sm-1-form-label">Au</label>
                    <div class="input-group date border-success" id="datepicker3">
                     <input type="date" name ="date-fin1" class="form-control"required>
                     </div>
          </div>
</div>
                         <h5>2éme intérimaire </h5>
<div class="row">
     <div class="col">
              <label for="sex2" class="col-sm-1-form-label">Mme/Mr</label>
                <select class="form-select border-success " name ="sex2" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
      </div>
      <div class="col">
               <label for="matricule3" class="col-sm-1-form-label">Matricule</label>
                <input type="text" class="form-control  rounded border border-success"  name ="Matricule2" placeholder="matricule">
      </div>
              
</div>
          
 <div class ="row">
      <div class ="col">
            <label for="date" class="col-sm-1-form-label">Du</label>
             <div class="input-group date border-success" id="datepicker2">
                  <input type="date"  name ="debut2"class="form-control"required>
             </div>
        </div>
        <div class ="col">
                 <label for="date" class="col-sm-1-form-label">Au</label>
                   <div class="input-group date border-success" id="datepicker3">
                     <input type="date" name ="fin2" class="form-control"required>
                   </div>
        </div>
 </div>
 <br>

  <br> 
  
        <div class="modal-footer">
          <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
          <button  class="btn btn-success"  type="Annuler" value="Annuler" style="color: red >Annuler</button><button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
        </div>
        </form>
          
  
</div>
</div>
</div>
</div>
</div>

                              <!--  annuler  un congé annuel   -->
  
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
               <!--model header-->
  <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel3">Annuler un congé annuel</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button></div>
        <!-- model body-->
  <div class="modal-body">
  <form method="post" action="lieeannultc.php">
  
      <div class ="row">
      <div class ="col">
        <label for="date" class="col-sm-1-form-label">Date de courriel</label>
          <div class="input-group date border-success" id="datepicker2">
          <input type="date"  name ="courriel"class="form-control" required>
          </div>
       </div>
       <div class="col">
        <label for="id1" class="col-form-label border-success">Id </label>
        <input type="text" id="id" name ="id" class="form-control border-success" placeholder="Id "required>
    </div> 
      </div>
      <h5>Titre de congé </h5>
                
        
<div class="row">
    <div class="col">
        <label for="id1" class="col-form-label border-success">Id du congé à annuler</label>
        <input type="text" id="id1" name ="id1" class="form-control border-success" placeholder="Id du congé à remplacer"required>
    </div>
    <div class="col">
        <label for="select" class="col-form-label border-success">Signataire</label>
        <select class="form-select border-success" name="signataire" aria-label="Default select example">
        <option  value="DRH">DRH</option>
        <option value="SG">SG</option>
        <option value="DG">DG</option>
        </select>
    </div>
</div>
         
<div class="row">
  <div class="col-auto border-success">
             <label for="sex" class="col-sm-1-form-label">Mme/Mr</label>  
             <select class="form-select border-success " name ="sex" aria-label="Default select example">
                <option selected value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
              </select>
         </div>       
      <div class="col">
          <label for="matricule" class="col-form-label border-success">Matricule</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Matricule" placeholder="matricule" required>
        </div>
         
     </div>
        
    <br>
  <div class="row">
  <div class="col">
    <textarea name = "direction" class="border-success" >Directrice des Ressources Humaines</textarea> 
   </div>
   <div class="col">
    <textarea name = "signature"  class="border-success">P.NOM </textarea>
   </div>
  </div>
       <br>
       <h5> ordre de service </h5>
<div class ="row">
  <div class ="col">
     <label for="date" class="col-sm-1-form-label">Date courriel 1</label>
       <div class="input-group date border-success" id="datepicker2">
         <input type="date"  name ="date-courriel1"class="form-control" required>
       </div>
   </div>
    <div class ="col">
        <label for="date" class="col-sm-1-form-label">Date courriel 2</label>
          <div class="input-group date border-success" id="datepicker3">
             <input type="date" name ="date-courriel2" class="form-control"required>
           </div>
    </div>
  </div>
 
<div class="row">
    <div class="col">
        <label for="signataire" class="col-sm-1-form-label">Signataire</label>
         <select class="form-select border-success" name="signataire1" aria-label="Default select example">
          <option  value="dgmmrh">DGMMRH</option>
          <option value="SG">SG</option>
          <option value="DG">DG</option>
          </select>
    </div>
    </div>
    <div class="row">
     
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure</label>
             <input type="text" id="codestructureparent" name ="code-structure" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      </div>
       <div class="row">
     <div class="col">
              <label for="sex1" class="col-sm-1-form-label">Mme/Mr 1er intérimaire</label>
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
 <div class="row">
 <div class="col">
          <label for="matricule" class="col-form-label border-success">Matricule 1er intérimaire</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Matricule1" placeholder="matricule" required>
        </div>
        <div class="col">
          <label for="matricule" class="col-form-label border-success">Matricule 2éme intérimaire</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Matricule2" placeholder="matricule" >
        </div>
      
 </div>
          <div class="modal-footer">
            <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
            <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
          </div>
            
            
            </form>
            
    
        </div>
      </div>
      </div></div></div>


                                    


    
                           <!--  nv    ods    -->

 <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
 <div class="modal-dialog modal-xl" role="document">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
          <!--model header-->
<div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel5">  Ajouter une nouvelle absence </h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button></div>
      <!-- model body-->
<div class="modal-body">
 <form method="post" action="lieenvods.php">
                      <h5> Absence </h5>
  <div class="row">
    <div class="col">
        <label for="select" class="col-form-label border-success">Type d'absence</label>
        <select class="form-select border-success" name="type" aria-label="Default select example">
        <option  value="Absence Justifiée">Absence Justifiée</option>
        <option value="Absence pour formation">Absence pour formation</option>
        <option value="Absence pour mission">Absence pour mission</option>
        <option  value="Congé maladie">Congé maladie</option>
        <option value="Congé Maternité">Congé Maternité</option>
        <option value="Mise en disponibilité">Mise en disponibilité</option>
        </select>
    </div>
  </div>
<div class ="row">
  <div class ="col">
    <label for="date" class="col-sm-1-form-label">Date début</label>
      <div class="input-group date border-success" id="datepicker2">
       <input type="date"  name ="date-debut"class="form-control"required>
       </div>
   </div>
    <div class ="col">
     <label for="date" class="col-sm-1-form-label">Date fin </label>
      <div class="input-group date border-success" id="datepicker3">
         <input type="date" name ="date-fin" class="form-control"required>
       </div>
    </div>
</div>
    <br>
<div class="row">
  <div class="col g-3 align-items-center">
       <label for="sex" class="col-sm-1-form-label">Mme/Mr</label>
       <div class="col-auto border-success">
        <select class="form-select border-success " name ="sex" aria-label="Default select example">
        <option selected value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
        </select>
      </div>        
  <div class="col">
    <label for="matricule" class="col-form-label border-success">Matricule</label>
    <input type="text" class="form-control  rounded border border-success"  name ="Matricule" placeholder="matricule"required>
  </div>
  </div>
</div>           
                      <h5> ordre de service </h5>
<div class="row">
  <div class="col">
    <label for="id" class="col-form-label border-success">Id</label>
    <input type="text" id="id" name ="id" class="form-control border-success" placeholder="Id"required>
  </div>
</div>
        <div class="row">
        <div class="col">
        <label for="signataire" class="col-sm-1-form-label">Signataire</label>
         <select class="form-select border-success" name="signataire1" aria-label="Default select example"required>
          <option  value="dgmmrh">DGMMRH</option>
          <option value="SG">SG</option>
          <option value="DG">DG</option>
          </select>
        </div>
        <div class="col">
        <label for="Reference" class="col-form-label border-success">Référence</label>
       <input type="text" id="Reference" name ="ref" class="form-control border-success" placeholder="Reference"required>
       </div>
      </div>
        <div class ="row">
      <div class ="col">
                 <div>
                    <label for="date" class="col-sm-1-form-label">Date courriel 1</label>
                </div>
                        <div class="input-group date border-success" id="datepicker2">
                            <input type="date"  name ="date-courriel1"class="form-control"required>
                            
                        </div>
                    </div>
                    <div class ="col">
                      <div>
                     <label for="date" class="col-sm-1-form-label">Date courriel 2</label>
                     </div>
                        <div class="input-group date border-success" id="datepicker3">
                            <input type="date" name ="date-courriel2" class="form-control"required>
                            
                        </div>
                    </div>
                    </div>
                    <div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="code-structure" class="form-control border-success" placeholder="Code structure"required>
          
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      </div>
        <h5> intérimaires </h5>
          <div class="col">
          <label for="nbrintérime" class="col-sm-1-form-label">Nombre</label>
                <input type="text" class="form-control  rounded border border-success"  name ="nbrintérime" placeholder="nombre "required>
              </div>
          <h5>1er intérimaire </h5>
          <div class="row">
            <div class="col">
            <label for="sex1" class="col-sm-1-form-label">Mme/Mr</label>
                <select class="form-select border-success " name ="sex1" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
             </div>
             <div class="col">
             <label for="matricule2" class="col-sm-1-form-label">Matricule</label>
                <input type="text" class="form-control  rounded border border-success"  name ="Matricule1" placeholder="matricule"required>
              </div>
              
          </div>
          
          <div class ="row">
      <div class ="col">
                 <div>
                    <label for="date" class="col-sm-1-form-label">Du</label>
                </div>
                        <div class="input-group date border-success" id="datepicker2">
                            <input type="date"  name ="date-debut1"class="form-control"required>
                            
                        </div>
                    </div>
                    <div class ="col">
                      <div>
                     <label for="date" class="col-sm-1-form-label">Au</label>
                     </div>
                        <div class="input-group date border-success" id="datepicker3">
                            <input type="date" name ="date-fin1" class="form-control"required>
                            
                        </div>
                    </div>
                    </div>
          <h5>2éme intérimaire </h5>
          <div class="row">
            <div class="col">
            <label for="sex2" class="col-sm-1-form-label">Mme/Mr</label>
                <select class="form-select border-success " name ="sex2" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
             </div>
             <div class="col">
             <label for="matricule3" class="col-sm-1-form-label">Matricule</label>
                <input type="text" class="form-control  rounded border border-success"  name ="Matricule2" placeholder="matricule">
              </div>
              
          </div>
          
          <div class ="row">
      <div class ="col">
                 <div>
                    <label for="date" class="col-sm-1-form-label">Du</label>
                </div>
                        <div class="input-group date border-success" id="datepicker2">
                            <input type="date"  name ="debut2"class="form-control"required>
                            
                        </div>
                    </div>
                    <div class ="col">
                      <div>
                     <label for="date" class="col-sm-1-form-label">Au</label>
                     </div>
                        <div class="input-group date border-success" id="datepicker3">
                            <input type="date" name ="fin2" class="form-control"required>
                            
                        </div>
                    </div>
                    </div>
  <br> 
  
        <div class="modal-footer">
          <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
          <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
        
          </div>
          
          
          </form>
          
  
      </div>
    </div>
    </div></div></div>
                                 <!--  remplacer   ods    -->
  
   <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
    
  
  
    <div class="modal-dialog modal-xl" role="document">
          <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!--model header-->
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel6">  Remplacer une absence </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button> 
        </div>
        <!-- model body-->
        <div class="modal-body">
        <form method="post" action="lieerplods.php">
      <h5> Absence </h5>
      <div class ="row">
      <div class ="col">
                 <div>
                    <label for="date" class="col-sm-1-form-label">Date début</label>
                </div>
                        <div class="input-group date border-success" id="datepicker2">
                            <input type="date"  name ="date-debut"class="form-control"required>
                            
                        </div>
                    </div>
                    <div class ="col">
                      <div>
                     <label for="date" class="col-sm-1-form-label">Date fin </label>
                     </div>
                        <div class="input-group date border-success" id="datepicker3">
                            <input type="date" name ="date-fin" class="form-control"required>
                            
                        </div>
                    </div>
      </div>
      <br>
      <div class="row">
        <div class="col g-3 align-items-center">
       <label for="sex" class="col-sm-1-form-label">Mme/Mr</label>
       <div class="col-auto border-success">
        <select class="form-select border-success " name ="sex" aria-label="Default select example">
        <option selected value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
        </select>
      </div>        
        <div class="col">
        <label for="matricule" class="col-form-label border-success">Matricule</label>
            <input type="text" class="form-control  rounded border border-success"  name ="Matricule" placeholder="matricule"required>
            </div>
      
       </div>
          </div>           
         <h5> ordre de service </h5>
          <div class="row">
          <div class="col">
          <label for="id" class="col-form-label border-success">Id de l'absence à remplacer </label>
         <input type="text" id="ref1" name ="id1" class="form-control border-success" placeholder="Id de l'absence à remplacer "required>
        </div>
        <div class="col">
          <label for="id" class="col-form-label border-success">Id  </label>
         <input type="text" id="ref1" name ="id" class="form-control border-success" placeholder="Id de l'absence à remplacer "required>
        </div>
       
      </div>
          <div class="row">
          <div class="col">
          <label for="signataire" class="col-sm-1-form-label">Signataire</label>
           <select class="form-select border-success" name="signataire1" aria-label="Default select example">
            <option  value="dgmmrh">DGMMRH</option>
            <option value="SG">SG</option>
            <option value="DG">DG</option>
            </select>
          </div>
          <div class="col">
          <label for="Reference" class="col-form-label border-success">Référence</label>
         <input type="text" id="Reference" name ="ref" class="form-control border-success" placeholder="Reference"required>
         </div>
        </div>
          <div class ="row">
        <div class ="col">
                   <div>
                      <label for="date" class="col-sm-1-form-label">Date courriel 1</label>
                  </div>
                          <div class="input-group date border-success" id="datepicker2">
                              <input type="date"  name ="date-courriel1"class="form-control"required>
                              
                          </div>
                      </div>
                      <div class ="col">
                        <div>
                       <label for="date" class="col-sm-1-form-label">Date courriel 2</label>
                       </div>
                          <div class="input-group date border-success" id="datepicker3">
                              <input type="date" name ="date-courriel2" class="form-control"required>
                              
                          </div>
                      </div>
                      </div>
                      <div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="code-structure" class="form-control border-success" placeholder="Code structure"required>
          
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      </div>
          <h5> intérimaires </h5>
            <div class="col">
            <label for="nbrintérime" class="col-sm-1-form-label">Nombre</label>
                  <input type="text" class="form-control  rounded border border-success"  name ="nbrintérime" placeholder="nombre "required>
                </div>
            <h5>1er intérimaire </h5>
            <div class="row">
              <div class="col">
              <label for="sex1" class="col-sm-1-form-label">Mme/Mr</label>
                  <select class="form-select border-success " name ="sex1" aria-label="Default select example">
                  <option value="Madame">Madame</option>
                  <option value="Monsieur">Monsieur</option>
                  </select>
               </div>
               <div class="col">
               <label for="matricule2" class="col-sm-1-form-label">Matricule</label>
                  <input type="text" class="form-control  rounded border border-success"  name ="Matricule1" placeholder="matricule"required>
                </div>
                
            </div>
            
            <div class ="row">
        <div class ="col">
                   <div>
                      <label for="date" class="col-sm-1-form-label">Du</label>
                  </div>
                          <div class="input-group date border-success" id="datepicker2">
                              <input type="date"  name ="date-debut1"class="form-control"required>
                              
                          </div>
                      </div>
                      <div class ="col">
                        <div>
                       <label for="date" class="col-sm-1-form-label">Au</label>
                       </div>
                          <div class="input-group date border-success" id="datepicker3">
                              <input type="date" name ="date-fin1" class="form-control"required>
                              
                          </div>
                      </div>
                      </div>
            <h5>2éme intérimaire </h5>
            <div class="row">
              <div class="col">
              <label for="sex2" class="col-sm-1-form-label">Mme/Mr</label>
                  <select class="form-select border-success " name ="sex2" aria-label="Default select example">
                  <option value="Madame">Madame</option>
                  <option value="Monsieur">Monsieur</option>
                  </select>
               </div>
               <div class="col">
               <label for="matricule3" class="col-sm-1-form-label">Matricule</label>
                  <input type="text" class="form-control  rounded border border-success"  name ="Matricule2" placeholder="matricule">
                </div>
                
            </div>
            
            <div class ="row">
        <div class ="col">
                   <div>
                      <label for="date" class="col-sm-1-form-label">Du</label>
                  </div>
                          <div class="input-group date border-success" id="datepicker2">
                              <input type="date"  name ="debut2"class="form-control"required>
                              
                          </div>
                      </div>
                      <div class ="col">
                        <div>
                       <label for="date" class="col-sm-1-form-label">Au</label>
                       </div>
                          <div class="input-group date border-success" id="datepicker3">
                              <input type="date" name ="fin2" class="form-control"required>
                              
                          </div>
                      </div>
                      </div>
    <br> 
    
          <div class="modal-footer">
            <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
            <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
          
            </div>
            
            
            </form>
            
    
        </div>
      </div>
      </div></div></div>
      
   <!--  annuler  un absence -->
  
   <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
               <!--model header-->
  <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel7">Annuler une absence</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button></div>
        <!-- model body-->
  <div class="modal-body">
  <form method="post" action="lieeannulods.php">
  <div class="row">
        <div class="col">
        <label for="Reference" class="col-form-label border-success">Référence</label>
        <input type="text" class="form-control  rounded border border-success"  name ="ref" placeholder="Reference"required>
        </div>
        <div class="col">
        <label for="id" class="col-form-label border-success">Id</label>
        <input type="text" class="form-control  rounded border border-success"  name ="id" placeholder="Id"required>
        </div>
      </div>
      <div class ="row">
  <div class ="col">
     <label for="date" class="col-sm-1-form-label">Date courriel 1</label>
       <div class="input-group date border-success" id="datepicker2">
         <input type="date"  name ="date-courriel1"class="form-control"required>
       </div>
   </div>
    <div class ="col">
        <label for="date" class="col-sm-1-form-label">Date courriel 2</label>
          <div class="input-group date border-success" id="datepicker3">
             <input type="date" name ="date-courriel2" class="form-control"required>
           </div>
    </div>
  </div>
 
      
      <h5> ordre de service </h5>
<div class="row">
    <div class="col">
        <label for="id" class="col-form-label border-success">Id du  absence à annuler</label>
        <input type="text" id="id" name ="id1" class="form-control border-success" placeholder="Id du congé à remplacer"required>
    </div>
    <div class="col">
        <label for="signataire" class="col-sm-1-form-label">Signataire</label>
         <select class="form-select border-success" name="signataire1" aria-label="Default select example"required>
          <option  value="dgmmrh">DGMMRH</option>
          <option value="SG">SG</option>
          <option value="DG">DG</option>
          </select>
    </div>
</div>
         
<div class="row">
    <div class="col border-success">
             <label for="sex" class="col-sm-1-form-label">Mme/Mr</label>  
             <select class="form-select border-success " name ="sex" aria-label="Default select example">
                <option selected value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
              </select>
         </div>       
      <div class="col">
          <label for="matricule" class="col-form-label border-success">Matricule</label>
          <input type="text" class="form-control  rounded border border-success"  name ="Matricule" placeholder="matricule"required>
        </div>
          
     </div>
     <div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="code-structure" class="form-control border-success" placeholder="Code structure"required>
          
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success"required placeholder="Code structure-parent">
         
      </div>
      </div>
    <div class="row">
     <div class="col">
              <label for="sex1" class="col-sm-1-form-label">Mme/Mr du 1er intérimaire</label>
                <select class="form-select border-success " name ="sex1" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
      </div>
      <div class="col">
              <label for="sex1" class="col-sm-1-form-label">Mme/Mr du 2éme intérimaire</label>
                <select class="form-select border-success " name ="sex2" aria-label="Default select example">
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                </select>
      </div>
      
 </div>
              <div class="col">
               <label for="matricule3" class="col-sm-1-form-label">Matricule 1er intérimaire</label>
                  <input type="text" class="form-control  rounded border border-success"  name ="Matricule1" placeholder="matricule"required>
                </div>
                
               <div class="col">
               <label for="matricule3" class="col-sm-1-form-label">Matricule 2éme intérimaire</label>
                  <input type="text" class="form-control  rounded border border-success"  name ="Matricule2" placeholder="matricule">
                </div>

          <div class="modal-footer">
            <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
            <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
           </div>
            
            
            </form>
            
    
        </div>
      </div>
      </div></div></div>

      <!--  nv    personel   -->
      

 <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel9" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">   
      <!--model header-->
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel9">Ajouter un nouveau membre du personnel</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <!-- model body-->
        <div class="modal-body">
        <form method="post" action="lieenvperso.php">
          <div class="row">
          <div class="col">
          <label for="codestructure" class="col-sm-1-form-label">Type</label>
                <select class="form-select border-success " name ="type-perso" aria-label="Default select example">
                <option value="Délegataire">Délegataire</option>
                <option value="DRH administrateur">DRH administrateur</option>
                <option value="DRH utilisateur">DRH utilisateur</option>
                <option value="Autre">Autre</option>
                 </select>
                </div></div>
        <div class="row">
          <div class="col">
          <label for="sex1" class="col-sm-1-form-label">Matricule</label>
          <input type="text" class="form-control  rounded border border-success" required name ="matricule" placeholder=" matricule ">
           </div>
            <div class="col">
            <label for="sex1" class="col-sm-1-form-label">Nom</label>
             <input type="text" class="form-control  rounded border border-success" required name ="nom" placeholder="nom">
            </div>
        </div>
    <div class="row">
        <div class="col">
        <label for="sex1" class="col-sm-1-form-label">Prénom</label>
          <input type="text" class="form-control  rounded border border-success"name="prenom"  placeholder="prenom"required>
       </div>
        <div class="col">
        <label for="sex1" class="col-sm-1-form-label">Poste</label>
          <input type="text" class="form-control  rounded border border-success"  name = "poste" placeholder="poste"required>
       </div>
    </div>
       <br>
       <div class="row">
     <div class="col">
     <label for="codestructure" class="col-sm-1-form-label">Code structure</label>
     <input type="text" id="codestructure" name ="code-structure" class="form-control border-success" placeholder="Code structure"required>
          
      </div>
      <div class="col">
             <label for="codestructureparent" class="col-sm-1-form-label">Code structure-parent</label>
             <input type="text" id="codestructureparent" name ="code-structure-parent" class="form-control border-success" placeholder="Code structure-parent"required>
         
      </div>
      </div>
      <br>
       <div class="row">
       <div class="col form-group">
                <label for="date" class="col-sm-1-form-label">Date-entrée</label>
                  <div class="input-group date" id="datepicker2">
                    <input type="date"  name ="date-entree"class="form-control"required>
                  </div>
         </div>
         <div class="col form-group">
                <label for="date" class="col-sm-1-form-label">Date de naissance</label>
                <div class="input-group date" id="datepicker2">
                   <input type="date"  name ="date-naiss"class="form-control"required>
                </div>
        </div>
        </div>
       <div class="row">
       <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Lieu de naissance</label>
          <input type="text" class="form-control  rounded border border-success" required name = "lieu-naiss" placeholder="lieu-naiss">
       </div>
       <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Email</label>
          <input type="text" class="form-control  rounded border border-success" required name = "email" placeholder="e-mail">
       </div>
       </div>
       <div class="row">
       <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Sexe</label>
          <select class="form-select border-success " name ="sexe" aria-label="Default select example">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
              </select>
       </div>
       <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Situation familiale</label>
          <input type="text" class="form-control  rounded border border-success"  name = "sit-fam" placeholder="sit-fam"required>
       </div>
       </div>
       <div class="row">
         <div class="col">
           <div class="col">
       <label for="sex1" class="col-sm-1-form-label">Reliquat</label>
          <input type="text" class="form-control  rounded border border-success"  name = "reliquat" placeholder="reliquat"required>
       </div>
       </div>
         </div>
       </div>
       <br>
      
 <!-- model footer-->
      <div class="modal-footer">
        <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
      <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
      </div>
    

  </form>
  </div></div></div></div></div>

       

  

 <!-- list-personel-->
 

 <div class="modal  fade " id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel11" aria-hidden="true" >

 <div class="modal-dialog-fullscreen  modal-dialog-scrollable  "  role="document" style="margin-left:15px" >
      
    <div class="modal-content ">
      <!--model header-->
      <div class="modal-header ">
      <h5 class="modal-title" id="exampleModalLabel11"> liste du personnel</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--model body-->
  <div class="modal-body ">
    <div class="row">
   
          <div class="col">
          <form action="" method="GET">
          <label for="sex1" class="col-sm-1-form-label">Matricule</label>
          <input type="text" class="form-control  rounded border border-success" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" >
          </div>
           <div class="col">
            <button type="submit" style="background-color:green; color:white; border:none;border-radius:5px; height:40px; width:40px; margin-top: 30px;"><i class="bi bi-search"></i></button>
           </div>
          </form>
            <div class="col">
            <form action="" method="GET">
            <label for="sex1" class="col-sm-1-form-label">Structure</label>
             <input type="text" class="form-control  rounded border border-success"  name="searche" required value="<?php if(isset($_GET['searche'])){echo $_GET['searche']; } ?>" >
           </div>
           <div class="col">
          <button type="submit" style="background-color:green; color:white; border:none;border-radius:5px; height:40px; width:40px; margin-top: 30px;"><i class="bi bi-search"></i></button>
           </div>
           </form>
        </div>
        <br><br>
  <table class="table table-hover" style="max-width:1000px">
   <thead>
     <tr>
       <th scope="col">Matricule</th>
       
       <th scope="col">Nom</th>
       <th scope="col">Prénom</th>
       <th scope="col">Poste</th>
       <th scope="col">Date-entree</th>
       <th scope="col">E-mail</th>
       <th scope="col">Date de naissance</th>
       <th scope="col">Lieu de naissance</th>
       <th scope="col">Situation familiale</th>
       <th scope="col">Sexe</th>
       <th scope="col">Structure</th>
       <th scope="col">Structure parent</th>
       <th scope="col">exercice-actuel	</th>
       <th scope="col">exercice-antérieur	</th>
       <th scope="col">Action</th>
      
     
     </tr>
   </thead>
   <tbody>

   <?php 
     $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['search']))
         {
        $filtervalues = $_GET['search'];
         $query = "SELECT * FROM personnel WHERE CONCAT(matricule) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
     ?>
     <tr>
       <td><?= $items['matricule']; ?></td>
        <td><?= $items['nom']; ?></td>
        <td><?= $items['prenom']; ?></td>
        <td><?= $items['poste']; ?></td>
        <td><?= $items['date-entree']; ?></td>
        <td><?= $items['email']; ?></td>
        <td><?= $items['date-naiss']; ?></td>
        <td><?= $items['lieu-naiss']; ?></td>
        <td><?= $items['sit-fam']; ?></td>
        <td><?= $items['sexe']; ?></td>
        <td><?= $items['structure']; ?></td>
        <td><?= $items['structure parent']; ?></td>
        
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>
<?php 
     $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['searche']))
         {
        $filtervalues = $_GET['searche'];
         $query = "SELECT * FROM personnel WHERE CONCAT(structure) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
     ?>
     <tr>
       <td><?= $items['matricule']; ?></td>
       
        <td><?= $items['nom']; ?></td>
        <td><?= $items['prenom']; ?></td>
        <td><?= $items['poste']; ?></td>
        <td><?= $items['date-entree']; ?></td>
        <td><?= $items['email']; ?></td>
        <td><?= $items['date-naiss']; ?></td>
        <td><?= $items['lieu-naiss']; ?></td>
        <td><?= $items['sit-fam']; ?></td>
        <td><?= $items['sexe']; ?></td>
        <td><?= $items['structure']; ?></td>
        <td><?= $items['structure parent']; ?></td>
        
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>

<?php
 
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "bna-congé";
 
 $con = new mysqli($server, $user, $password, $database);
 
 $sql = "SELECT `personnel`.*, `droit-conge`.`exercice-actuel`, `droit-conge`.`exercice-antérieur` FROM `personnel` INNER JOIN `droit-conge` ON `personnel`.`matricule`=`droit-conge`.`matricule`;";
    $result = mysqli_query($con,$sql);
    
    while ($row = mysqli_fetch_assoc($result)) {echo '<tr>
      <td>'.$row['matricule'].'</td>
    
      <td>'.$row['nom'].'</td>
      <td>'.$row['prenom'].'</td>
      <td>'.$row['poste'].'</td>
      <td>'.$row['date-entree'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['date-naiss'].'</td>
      <td>'.$row['lieu-naiss'].'</td>
      <td>'.$row['sit-fam'].'</td>
      <td>'.$row['sexe'].'</td>
      <td>'.$row['structure'].'</td>
      <td>'.$row['structure parent'].'</td>
      <td>'.$row['exercice-actuel'].'</td>
      <td>'.$row['exercice-antérieur'].'</td>
      <td>
      <form method="POST" action=" modifpers.php  ">
      <input name="user" value="'.$row['matricule'].'" hidden>
      <button type="submit"  style="background-color:grey; color:white; border:none; border-radius:5px;height:40px; width:40px; ">
      <i class="bi bi-pencil-fill"></i></button>
      </form>
      
      <form method="POST" action="delete1.php">
      <input name="user" value="'.$row['matricule'].'" hidden>
      <button type="button" data-toggle="modal" data-target="#exampleModal33" style="background-color:red; color:white; border:none;border-radius:5px; height:40px; width:40px">
      <i class="bi bi-trash3-fill"></i></button>
      <div class="modal fade" id="exampleModal33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel33" aria-hidden="true">
      <div class="modal-dialog " role="document" style="max-width: 50xp;">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
            <!--model header-->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <!--model body-->
        <div class="modal-body">
        <h5> vous voulez vraiment le supprimer!</h5>
        <div class="modal-footer">
         <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
          <button  class="btn btn-success"  type="submit" value="Submit"  >oui</button>  
        </div>
   </form>
      </div>
</div>
</div>
</div>
</div>
      </tr>';
    }
 ?>
 </tbody>
  </table>
  <div class="modal-footer">
        <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Fermer</button>
      </div>
  </div></div></div></div></div>
  
     <!--le model d'ajuter un nv utilisateur "exampleModal"-->
 <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel12" aria-hidden="true">
<div class="modal-dialog " role="document" style="max-width: 50xp;">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <!--model header-->
   <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel12"> Ajouter un nouvel utilisateur</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <!--model body-->
  <div class="modal-body">
      <form  method="post" action="lieeajut.php" >
       <div class="row">
       <label for="sex1" class="col-sm-1-form-label">Nom d'utilisateur</label>
        <input type="text" class="form-control  rounded border border-success" name ="username" placeholder="username">
        </div>
        
        <div class="row">
        <label for="sex1" class="col-sm-1-form-label">Password</label>
        <input type="text" class="form-control  rounded border border-success"name="password"  placeholder="password">
       </div>
      <div class="row">
      <label for="profile" class="col-sm-1-form-label">Profile</label>
                <select class="form-select border-success " name ="profile" aria-label="Default select example">
                <option value="Admin">Administrateur</option>
                <option value="utilisateur<">Utilisateur</option>
                </select>
        </div>
        
       
 <!-- model footer-->
      <div class="modal-footer">

        <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Annuler</button>
      <button  class="btn btn-success"  type="submit" value="Submit"  >Enregistrer</button>  
      </div>
    </form>
</div>
</div>
</div>
</div>
</div> 
 <!--liste des utilisateur "exampleModal-1"-->
 <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel13" aria-hidden="true">
<div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel13">  Liste des utilisateurs</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       <div class="row">
         <div class="col-md-7">
            <form action="" method="GET">
              <div class="input-group mb-3">
                 <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                     <button type="submit" class="btn btn-primary">Search</button>
                  </div>
            </form>

           </div>
         </div>
<table class="table table-hover">
   <thead>
     <tr>
       
      
       <th scope="col">Nom d'utilisateur</th>
       <th scope="col">Password</th>
       <th scope="col">Profile</th>
       <th scope="col">Action</th>
     </tr>
   </thead>
   <tbody>

   <?php 
     $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['search']))
         {
        $filtervalues = $_GET['search'];
         $query = "SELECT * FROM compte WHERE CONCAT(username,password,Profile) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
     ?>
     <tr>
       <td><?= $items['username']; ?></td>
        <td><?= $items['password']; ?></td>
        <td><?= $items['Profile']; ?></td>
        
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>





<?php
 
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "bna-congé";
 
 $con = new mysqli($server, $user, $password, $database);
 
 $sql = "SELECT * FROM `compte`";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($result)) {echo '<tr>
      <td>'.$row['username'].'</td>
      <td>'.$row['password'].'</td>
      <td>'.$row['Profile'].'</td>
      <td>
      <form method="POST" action="delete.php">
      <input name="user" value="'.$row['username'].'" hidden>
      <button type="submit" style="background-color:red; color:white; border:none;border-radius:5px; height:40px; width:40px">
      <i class="bi bi-trash3-fill"></i></button>
      </form>
      </td>
             
      </tr>';
    }
 ?>
 </table>
 
 </div>
 </div>
 </div>
 </div> 

  <!-- list-personel-->
 

 <div class="modal  fade " id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true" >

<div class="modal-dialog-fullscreen  modal-dialog-scrollable  "  role="document" style="margin-left:15px" >
     
   <div class="modal-content ">
     <!--model header-->
     <div class="modal-header ">
     <h5 class="modal-title" id="exampleModalLabel4"> liste congé annuel</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <!--model body-->
 <div class="modal-body ">
   <div class="row">
  
         <div class="col">
         <form action="" method="GET">
         <label for="sex1" class="col-sm-1-form-label">Matricule</label>
         <input type="text" class="form-control  rounded border border-success" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" >
         </div>
          <div class="col">
           <button type="submit" style="background-color:green; color:white; border:none;border-radius:5px; height:40px; width:40px; margin-top: 30px;"><i class="bi bi-search"></i></button>
          </div>
         </form>
           <div class="col">
           <form action="" method="GET">
           <label for="sex1" class="col-sm-1-form-label">structure</label>
            <input type="text" class="form-control  rounded border border-success"  name="searche" required value="<?php if(isset($_GET['searche'])){echo $_GET['searche']; } ?>" >
          </div>
          <div class="col">
         <button type="submit" style="background-color:green; color:white; border:none;border-radius:5px; height:40px; width:40px; margin-top: 30px;"><i class="bi bi-search"></i></button>
          </div>
          </form>
       </div>
       <br><br>
 <table class="table table-hover" style="max-width:1000px">
  <thead>
    <tr>
      
      <th scope="col">date-saisie</th>
      <th scope="col">type-congé</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">date-debut</th>
      <th scope="col">date-fin</th>
      <th scope="col">nombre de jours</th>
      <th scope="col">Etat</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['searche']))
         {
        $filtervalues = $_GET['searche'];
         $query = "SELECT `absence`.*, `titre-conge`.*, `personnel`.* , `ordre-service`.* FROM (((`absence`  JOIN `titre-conge` ON `absence`.`id`=`titre-conge`.`id`)JOIN `personnel` ON `personnel`.`Matricule`=`titre-conge`.`Matricule`)JOIN `ordre-service` ON `ordre-service`.`id`=`titre-conge`.`id`) WHERE CONCAT(personnel.structure) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
                $dateDifference= abs(strtotime($row['date-debut']) - strtotime($row['date-fin']));
                $years  = floor($dateDifference / (365 * 60 * 60 * 24));
               $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
               $nbr   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
               
               ?>
               <tr>
                  <td><?= $items['date-saisie']; ?></td>
                  <td><?= $items['type-congé']; ?></td>
                  <td><?= $items['nom']; ?></td>
                  <td><?= $items['prenom']; ?></td>
                  <td><?= $items['date-debut']; ?></td>
                  <td><?= $items['date-fin']; ?></td>
                  <td><?= $nbr; ?></td>
                  <td><?= $items['Etat']; ?></td>
                  
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>
<?php
  $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['search']))
         {
        $filtervalues = $_GET['search'];
         $query = "SELECT `absence`.*, `titre-conge`.*, `personnel`.* , `ordre-service`.* FROM (((`absence`  JOIN `titre-conge` ON `absence`.`id`=`titre-conge`.`id`)JOIN `personnel` ON `personnel`.`Matricule`=`titre-conge`.`Matricule`)JOIN `ordre-service` ON `ordre-service`.`id`=`titre-conge`.`id`) WHERE CONCAT(`ordre-service`.`Matricule`) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
                $dateDifference= abs(strtotime($row['date-debut']) - strtotime($row['date-fin']));
      $years  = floor($dateDifference / (365 * 60 * 60 * 24));
     $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
     $nbr   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
     
     ?>
     <tr>
        <td><?= $items['date-saisie']; ?></td>
        <td><?= $items['type-congé']; ?></td>
        <td><?= $items['nom']; ?></td>
        <td><?= $items['prenom']; ?></td>
        <td><?= $items['date-debut']; ?></td>
        <td><?= $items['date-fin']; ?></td>
        <td><?= $nbr; ?></td>
        <td><?= $items['Etat']; ?></td>
        
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>

 
<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";

$con = new mysqli($server, $user, $password, $database);

$sql = "SELECT `absence`.*, `titre-conge`.*, `personnel`.* , `ordre-service`.* FROM (((`absence`  JOIN `titre-conge` ON `absence`.`id`=`titre-conge`.`id`)JOIN `personnel` ON `personnel`.`Matricule`=`titre-conge`.`Matricule`)JOIN `ordre-service` ON `ordre-service`.`id`=`titre-conge`.`id`);";
   $result = mysqli_query($con,$sql);
   
   while ($row = mysqli_fetch_assoc($result)) {
    $dateDifference= abs(strtotime($row['date-debut']) - strtotime($row['date-fin']));
      $years  = floor($dateDifference / (365 * 60 * 60 * 24));
     $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
     $nbr   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
     
    
    echo '<tr>
     
     <td>'.$row['date-saisie'].'</td>
     <td>'.$row['type-congé'].'</td>
     <td>'.$row['nom'].'</td>
     <td>'.$row['prenom'].'</td>
     <td>'.$row['date-debut'].'</td>
     <td>'.$row['date-fin'].'</td>
     <td>'.$nbr.'</td>
     <td>'.$row['Etat'].'</td>
     
     <td> 
     <form method="POST" action="imp.php">
     <input name="user" value="'.$row['id'].'" hidden>
     <button type="submit"  style="background-color:blue; color:white; border:none; border-radius:5px;height:40px; width:40px; ">
     <i class="bi bi-file-earmark-arrow-down"></i></button>
     </form>
</td>
     </tr>';
   }
?>
</tbody>
 </table>
 <div class="modal-footer">
       <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Fermer</button>
     </div>
 </div></div></div></div></div>


 <div class="modal  fade " id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true" >

<div class="modal-dialog-fullscreen  modal-dialog-scrollable  "  role="document" style="margin-left:15px" >
     
   <div class="modal-content ">
     <!--model header-->
     <div class="modal-header ">
     <h5 class="modal-title" id="exampleModalLabel8"> liste absence</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <!--model body-->
 <div class="modal-body ">
   <div class="row">
  
         <div class="col">
         <form action="" method="GET">
         <label for="sex1" class="col-sm-1-form-label">Matricule</label>
         <input type="text" class="form-control  rounded border border-success" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" >
         </div>
          <div class="col">
           <button type="submit" style="background-color:green; color:white; border:none;border-radius:5px; height:40px; width:40px; margin-top: 30px;"><i class="bi bi-search"></i></button>
          </div>
         </form>
           <div class="col">
           <form action="" method="GET">
           <label for="sex1" class="col-sm-1-form-label">structure</label>
            <input type="text" class="form-control  rounded border border-success"  name="searche" required value="<?php if(isset($_GET['searche'])){echo $_GET['searche']; } ?>" >
          </div>
          <div class="col">
         <button type="submit" style="background-color:green; color:white; border:none;border-radius:5px; height:40px; width:40px; margin-top: 30px;"><i class="bi bi-search"></i></button>
          </div>
          </form>
       </div>
       <br><br>
 <table class="table table-hover" style="max-width:1000px">
  <thead>
    <tr>
      
      <th scope="col">date-saisie</th>
      <th scope="col">type-congé</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">date-debut</th>
      <th scope="col">date-fin</th>
      <th scope="col">nombre de jours</th>
      <th scope="col">Etat</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['searche']))
         {
        $filtervalues = $_GET['searche'];
         $query = "SELECT `absence`.*, `personnel`.* , `ordre-service`.* FROM ((`absence`  JOIN  `ordre-service` ON `ordre-service`.`id`=`absence`.`id`)JOIN `personnel` ON `ordre-service`.`Matricule`=`personnel`.`Matricule`) WHERE CONCAT(`personnel`.`structure`) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
                $dateDifference= abs(strtotime($row['date-debut']) - strtotime($row['date-fin']));
                $years  = floor($dateDifference / (365 * 60 * 60 * 24));
               $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
               $nbr   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
               
               ?>
               <tr>
                  <td><?= $items['date-saisie']; ?></td>
                  <td><?= $items['type-congé']; ?></td>
                  <td><?= $items['nom']; ?></td>
                  <td><?= $items['prenom']; ?></td>
                  <td><?= $items['date-debut']; ?></td>
                  <td><?= $items['date-fin']; ?></td>
                  <td><?= $nbr; ?></td>
                  <td><?= $items['Etat']; ?></td>
                  
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>
<?php
  $con = mysqli_connect("localhost","root","","bna-congé");
        if(isset($_GET['search']))
         {
        $filtervalues = $_GET['search'];
         $query = "SELECT `absence`.*, `personnel`.* , `ordre-service`.* FROM ((`absence`  JOIN `ordre-service` ON `ordre-service`.`id`=`absence`.`id`)JOIN `personnel` ON `personnel`.`Matricule`=`ordre-service`.`Matricule`) WHERE CONCAT(`ordre-service`.`Matricule`) LIKE '%$filtervalues%' ";
          $query_run = mysqli_query($con, $query);
         if(mysqli_num_rows($query_run) > 0)
           {
             foreach($query_run as $items)
              {
                $dateDifference= abs(strtotime($row['date-debut']) - strtotime($row['date-fin']));
      $years  = floor($dateDifference / (365 * 60 * 60 * 24));
     $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
     $nbr   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
     
     ?>
     <tr>
        <td><?= $items['date-saisie']; ?></td>
        <td><?= $items['type-congé']; ?></td>
        <td><?= $items['nom']; ?></td>
        <td><?= $items['prenom']; ?></td>
        <td><?= $items['date-debut']; ?></td>
        <td><?= $items['date-fin']; ?></td>
        <td><?= $nbr; ?></td>
        <td><?= $items['Etat']; ?></td>
        
         </tr>
         <?php
           }
           }
           else
           {
            ?>
           <tr>
            <td colspan="4">No Record Found</td>
           </tr>
              <?php
              }
              }
              ?>

 
<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "bna-congé";

$con = new mysqli($server, $user, $password, $database);

$sql = "SELECT `absence`.*, `personnel`.* , `ordre-service`.* FROM ((`absence`  JOIN `ordre-service` ON `ordre-service`.`id`=`absence`.`id`)JOIN `personnel` ON `personnel`.`Matricule`=`ordre-service`.`Matricule`);";
   $result = mysqli_query($con,$sql);
   
   while ($row = mysqli_fetch_assoc($result)) {
    $dateDifference= abs(strtotime($row['date-debut']) - strtotime($row['date-fin']));
      $years  = floor($dateDifference / (365 * 60 * 60 * 24));
     $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
     $nbr   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
     
    
    echo '<tr>
     
     <td>'.$row['date-saisie'].'</td>
     <td>'.$row['type-congé'].'</td>
     <td>'.$row['nom'].'</td>
     <td>'.$row['prenom'].'</td>
     <td>'.$row['date-debut'].'</td>
     <td>'.$row['date-fin'].'</td>
     <td>'.$nbr.'</td>
     <td>'.$row['Etat'].'</td>
     
     <td>   
<form method="POST" action="imp1.php">
      <input name="user" value="'.$row['id'].'" hidden>
      <button type="submit"  style="background-color:blue; color:white; border:none; border-radius:5px;height:40px; width:40px; ">
      <i class="bi bi-file-earmark-arrow-down"></i></button>
      </form>
</td>
     </tr>';
   }
?>
</tbody>
 </table>
 <div class="modal-footer">
       <button class="btn btn-success"type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; border-color:red">Fermer</button>
     </div>
 </div></div></div></div></div>
 
  </body>

</html>