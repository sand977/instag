<?php
$servername = "localhost";
$username = "root";
$password = "Abh123$%^";
$dbname = "instagramlogin";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if($connection)
{
   // echo "Connect";
}
else{
    echo "Failed";
}

?>