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

function getRow($table,$field,$value)
{
    global $conn;
    //$sql = "SELECT * FROM `$table` WHERE `$field`=$value ;";
    //$ok="alex@gmail.com";
    // SELECT * FROM `users` WHERE `user_email` = `alex@gmail.com`;
    $sql="SELECT * FROM `$table` WHERE `$field`= '". $value ."' ; " ;
    $result = mysqli_query($conn,$sql);
    if($result){
        $rows = [];
        if(mysqli_num_rows($result)>0)
        {
            $rows[]= mysqli_fetch_assoc($result);
            return $rows[0];
        }
    }
    return false;
}

function getRows($table)
{
    global $conn;
    
    $sql="SELECT * FROM `$table` ; " ;
    $result = mysqli_query($conn,$sql);
    if($result){
        $rows = [];
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $rows[] = $row;
            }
            
        }
    }
    return $rows;
}

function db_update($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Updated Success";
    }
    return false;
}

?>