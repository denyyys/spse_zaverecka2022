<?php
  if($_POST) if(isset($_POST["submit"])){
    $id = $_POST["id"];

    if(isset($_POST["potvrzeni_smazat"]) == 1)
    {
      echo "<br>-------------------------------------------<br>";
      echo "Vybraný záznam o serveru by vymazán!<br>";
      echo "-------------------------------------------<br>";

      /* Vymázaní z databáze*/

      $sqlserver = "localhost";
      $username = "root";
      $password = "";
      $dbname = "dat_3b";

      $connection = new mysqli($sqlserver,$username,$password,$dbname);
      if($connection->connect_error){
        die("Spojení s databází selhalo!".$connection->connect_error);
      }
      $query = "DELETE FROM servers WHERE id_server='$id'";
      if(mysqli_query($connection,$query)){
        echo "<br>";
      }else{
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
      }
      mysqli_close($connection);
    }else echo "Nepotvrdil jste souhlas se smazáním dat!";
  }
 ?>
