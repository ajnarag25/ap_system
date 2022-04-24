<?php

$conn =" ";

try {
    $servername = "localhost:3306";
    $dbname = "db_aps";
    $username = "root";
    $password = "";

    // $conn = new PDO(
    //     "mysql:host=$servername; dbname=db_aps",
    //     $username, $password
    // );

    $conn = mysqli_connect('localhost', $username, $password, $dbname);


    // $conn->setAttribute(PDO::ATTR_ERRMODE,
    //                  PDO:: ERRMODE_EXCEPTION);
}
catch(Execption $e){
    echo "Connection failed: " . $e->getMessage();
}

?>