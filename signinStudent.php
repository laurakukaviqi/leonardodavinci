<?php

//krijojme tabelen me kolonat

$servername="localhost";
$username="root";
$password="";
$dbname="institutileonardodavinci";
$tbname="signinStudent";

//Create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

//Create Table
$sql="CREATE TABLE $tbname(
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    emri VARCHAR(30) NOT NULL,
    mbiemri VARCHAR(30) NOT NULL,
    mosha INT(2) NOT NULL,
    gjinia VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    cel INT(15) NOT NULL,
    username VARCHAR(30) NOT NULL,
    pasword VARCHAR(30) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "Table $tbname created successfully!!!";
}
else {
    echo "Error creating table: ". mysqli_error($conn);
}
mysqli_close($conn);
?>