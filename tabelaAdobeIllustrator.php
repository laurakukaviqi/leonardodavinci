<?php

//krijojme tabelen me kolonat

$servername="localhost";
$username="root";
$password="";
$dbname="institutileonardodavinci";
$tbname="AdobeIllustrator";

//Create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

//Create Table
$sql="CREATE TABLE $tbname(
    numri INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id INT(11) NOT NULL,
    emri VARCHAR(30) NOT NULL,
    mbiemri VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    mungesa INT(3) NOT NULL,
    detyra INT(3) NOT NULL,
    midterm INT(3) NOT NULL,
    final INT(3) NOT NULL,
    perfundimi INT(3) NOT NULL)";
    

if(mysqli_query($conn, $sql)){
    echo "Table $tbname created successfully!!!";
}
else {
    echo "Error creating table: ". mysqli_error($conn);
}
mysqli_close($conn);
?>