<?php
$sqlserver = "localhost";
$username = "root";
$password = "";
$dbname = "dat_3b";

$connection = mysqli_connect($sqlserver,$username,$password,$dbname);
if(!$connection){
    die("Spojení s databází selhalo! ".mysqli_connect_error());
}

$query = "SELECT * from servers";
$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "ID: ".$row["id_server"]."<br>";
        echo "Název serveru: ".$row["server_name"]."<br>";
        echo "Typ serveru: ".$row["server_type"]."<br>";
        echo "Administrátor: ".$row["server_admin"]."<br><br>";
    }
}else {
    echo "0 výsledků";
}
mysqli_close($connection);

?>
