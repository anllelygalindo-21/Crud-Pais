<?php

include("conexionPA.php");
$con=conectar();

if(isset($_GET['id_pais'])) {
  $id_pais = $_GET['id_pais'];
  $query = "DELETE FROM pais WHERE id_pais='$id_pais'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: pais.php"); 
}

?>