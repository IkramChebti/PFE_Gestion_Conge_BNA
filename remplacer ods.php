<!--supp-personel-->
<div class="modal fade" id="exampleModal123" tabindex="-1" aria-labelledby="exampleModalLabel123" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel123">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="lieerplods.php">
    <h5>définer absence </h5>
    <div class ="row">
    <div class ="col">
               <div>
                  <label for="date" class="col-sm-1-form-label">Du</label>
              </div>
                      <div class="input-group date border-success" id="datepicker2">
                          <input type="date"  name ="date-courriel1"class="form-control">
                          
                      </div>
                  </div>
                  <div class ="col">
                    <div>
                   <label for="date" class="col-sm-1-form-label">Au</label>
                   </div>
                      <div class="input-group date border-success" id="datepicker3">
                          <input type="date" name ="date-courriel2" class="form-control">
                          
                      </div>
                  </div>
                  </div>
<br>
          <div class="row">
         
        <select class="form-select border-success" name ="type" aria-label="Default select example">
        <option  value="abs-mission">abs_misssion</option>
        <option value="abs-formation">abs-formation</option>
        <option value="abs-justifier">abs-justifier</option>
        <option  value="anuelle">anuelle</option>
        <option value="congé-maladie">congé-maladie</option>
        <option value="matérnité">matérnité</option>
        <option value="mise-en-dispo">mise-en-dispo</option>
        </select>
         </div>
     <br>
    <div class="row">
    <div class="col">
       <input type="text" id="id" name ="id" class="form-control border-success" placeholder="id">
    </div>
    <div class="col">
       <input type="text" id="Reference" name ="ref" class="form-control border-success" placeholder="referance">
    </div>
      <div class="col">
       <input type="text" id="Reference" name ="ref1" class="form-control border-success" placeholder="referance ancien ods">
      </div>
      <div class="col">
       <select class="form-select border-success" name="signataire" aria-label="Default select example">
        <option  value="dgmmrh">DGMMRH</option>
        <option value="SG">SG</option>
        <option value="DG">DG</option>
        </select>
      </div>
      </div>
      <br>
    <div class="col">
      <textarea name = "chef"  class="border-success">Le Chef de la Division, </textarea>
    </div>
  
  <h5>définer délégataire </h5>
    
    <div class="row">
          <div class="col">
              <select class="form-select border-success " name ="sex" aria-label="Default select example">
              <option value="madame">madame</option>
              <option value="monsieur">monsieur</option>
              </select>
           </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="nom" placeholder="Nom">
            </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="prenom" placeholder="prenom">
            <div> 
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="post" placeholder="post">
            <div>       
         </div>
         <br> 
         <div class="row">
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="nomstructure" placeholder="nom structure">
            </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="codestructure" placeholder="code structure">
            <div>       
            <div class="col">
              <input type="text" class="form-control text-left  rounded border border-success"  name ="nomstructureparent" placeholder="nom structure parent">
            </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="codestructureparent" placeholder="code structure parent">
            <div>       
         </div>
<hr>
<br> 
    <h5>remplire pour les intérimaires </h5>
    <div class="row">
    <div class="col">
              <select class="form-select border-success " name ="sex1" aria-label="Default select example">
              <option value="madame">madame</option>
              <option value="monsieur">monsieur</option>
              </select>
           </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="nomint1" placeholder="nom-intérimaire">
            </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="prenomint1" placeholder="Prenom-intérimaire">
            <div>  
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="nbrintérime" placeholder="nbr-intérimaire">
            <div>  
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="post1" placeholder="post-intérimaire">
            <div>    
         </div>
         
                
         </div>
                  <div class ="col">
                    <div>
                   <label for="date" class="col-sm-1-form-label">Au</label>
                   </div>
                      <div class="input-group date border-success" id="datepicker3">
                          <input type="date" name ="datefin1" class="form-control">
                          
                      </div>
                  </div> 

                  <div class="row">
                  <div class="col">
              <select class="form-select border-success " name ="sex2" aria-label="Default select example">
              <option value="madame">madame</option>
              <option value="monsieur">monsieur</option>
              </select>
           </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="nomint2" placeholder="nom-intérimaire">
            </div>
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="prenomint2" placeholder="Prenom-intérimaire">
            <div>  
            <div class="col">
              <input type="text" class="form-control  rounded border border-success"  name ="post2" placeholder="post-intérimaire">
            <div>    
         </div>
         <div class ="row">
    <div class ="col">
               <div>
                  <label for="date" class="col-sm-1-form-label">Du</label>
              </div>
                      <div class="input-group date border-success" id="datepicker2">
                          <input type="date"  name ="debut2"class="form-control">
                          
                      </div>
                  </div>
                  <div class ="col">
                    <div>
                   <label for="date" class="col-sm-1-form-label">Au</label>
                   </div>
                      <div class="input-group date border-success" id="datepicker3">
                          <input type="date" name ="fin2" class="form-control">
                          
                      </div>
                  </div> 


          <hr>
              <br>
       
        
          
          <br>
        </div>
        <div class="modal-footer">
       <button  class="btn btn-success"  type="submit" value="Submit"  >valider</button> 
      </div>
      </form>
    </div>
  </div>
  </div></div>