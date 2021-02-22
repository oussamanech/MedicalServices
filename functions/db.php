<?php
$sever="localhost";
$username = "root";
$password = "12345";
$dbname = "medical_services";

$conn = mysqli_connect($sever,$username,$password,$dbname);

if(!$conn)
{
    die("Error In Connection : " . mysqli_connect_error() );
}

function db_insert($sql)
{
    global $conn;

    $result = mysqli_query($conn,$sql);
    if($result){
        return "Added Success";
    }
    return false;
}



?>