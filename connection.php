<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_stu";

$conn = mysqli_connect($servername , $username , $password , $dbname);

if($conn) {
    echo "connection OK";
}
else {
    echo "connection failed";
}

?>