<?php

//selektojme te dhenat nga tabele
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="institutileonardodavinci";
$tbname="signinStudent";

$u=$_POST["username"];
$p=$_POST["pasword"];
$status=0;

$_SESSION["username"]= $u;


$cookie_name=$u;
$cookie_value=$cookie_name;
setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");


//Create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

//Selektojme nga Table
$sql="SELECT username, pasword, emri, mbiemri FROM $tbname";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        if($u==$row["username"] && $p==$row["pasword"]){
            $status++;//confirm that the username and password exists in the sign in table
            $emri=$row["emri"];
            $mbiemri=$row["mbiemri"];
        }
    }
    if($status==1 ){
        echo file_get_contents("$emri.$mbiemri.php");
        //file_get_contents($n.".php");
    }
    else echo "Ku account nuk ekziston! Ju lutem krijoni accountin tuaj!";       
}
else {
    echo "0 results";
}
mysqli_close($conn);
?>