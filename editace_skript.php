<?php
  if($_POST) if (isset($_POST["submit"])){

      $id = $_POST["id"];
      $nazev_serveru = $_POST["nazev_serveru"];
      $typ_serveru = $_POST["typ_serveru"];
      $admin_server = $_POST["administrator_serveru"];
      $potvrzeni_spravnost = $_POST["potvrzeni_spravnost"];

      if(isset($_POST["potvrzeni_spravnost"]) == 1)
      {
        echo "<br>-------------------------------------------<br>";
        echo "Údaje z formuláře byly aktualizovány!<br>";
        echo "-------------------------------------------<br>";
        echo "Změněné údaje: <br><br>";
        if (is_numeric($nazev_serveru)) {
            echo "Název serveru: nebyl vložen textový údaj!<br>";
        } else echo "Název serveru: " . ucfirst($nazev_serveru) . "<br>";


        if (is_numeric($admin_server)) {
            echo "Administrátor: nebyl vložen textový údaj!<br>";
        } else {
            echo "Administrátor: " . ucfirst($admin_server) . "<br>";
        }

        switch ($typ_serveru) {
            case "lite":
                $typ_serveru = "Lite";
                break;
            case "standard":
                $typ_serveru = "Standard";
                break;
            case "extreme":
                $typ_serveru = "Extreme";
                break;
        }
        echo "Typ serveru: " . $typ_serveru . "<br>";

        /* Odesílání do databáze */

        $sqlserver = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dat_3b";

        $connection = new mysqli($sqlserver,$username,$password,$dbname);
        if($connection->connect_error){
            die("Spojení s databází selhalo!".$connection->connect_error);
        }
        $query = "UPDATE servers SET server_name='$nazev_serveru', server_type='$typ_serveru', server_admin='$admin_server' WHERE id_server='$id'";
        if (mysqli_query($connection, $query)) {
            echo "<br>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
        mysqli_close($connection);

      }else echo "Nepotvrdil(a) jste potvrzení!";
    }



?>
