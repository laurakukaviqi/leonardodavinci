<?php

//krijojme tabelen me kolonat

$servername="localhost";
$username="root";
$password="";
$dbname="institutileonardodavinci";
$tbname="signinAdmin";

//Create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

//Create Table
$sql="CREATE TABLE $tbname(
    emri VARCHAR(30) NOT NULL,
    mbiemri VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
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