
 <?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "bna-congé";
 $conn = new mysqli($server, $user, $password, $database);
 
if ($_SERVER["REQUEST_METHOD"] == "GET"){
   
    $username = filter_input(INPUT_POST, 'username');  
    $qry ="DELETE FROM `compte` WHERE `compte`.`username` = $username";
    $delete = mysqli_query($conn,$qry);
    if ($delete) {
      echo" delet seccesfully";
    }
    $conn->close();
}
?>