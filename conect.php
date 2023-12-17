
<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["valider"])){
    
    $prenom = $_POST["prenom"];
    $matricule = $_POST["matricule"];
    $genie = $_POST["genie"];
    $promotion = $_POST["Promotion"];
    $repas = $_POST["Repas"];

  $query = "INSERT INTO tb_data VALUES('$prenom', '$matricule', '$genie', '$Promotion', '$repas')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>