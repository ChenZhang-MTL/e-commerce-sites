<?php
$host='127.0.0.1';
$user = 'root';
$pass = '';
$dbname='dbshopping';
$connectionID=mysqli_connect($host,$user,$pass,$dbname);

try{
    $pdo = new PDO("mysql:host=$host; dbname = $dbname",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Scussfully connect to the database".$dbname;
}catch(PDOException $e){
    echo "connection failed : ", $e->getMessage();
}
?>