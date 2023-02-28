<?php
session_start();
if(isset($_POST['submit'])){
if(!empty($_POST['kursi'])) {
    $selected = $_POST['kursi'];
   
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "institutileonardodavinci";

$cookie_name=$_SESSION["username"];
  if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
  } 
  else {
  echo "Mireserdhe " . $_COOKIE[$cookie_name]."<br>";}
echo "Keto jane te dhenat e tua:". "<br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$u=$_SESSION["username"];

$sql = "SELECT ID, emri, mbiemri, mungesa, detyra, midterm, final, perfundimi
 FROM $selected WHERE username='$u'";
$result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "ID: " . $row["ID"]." Emri: " . $row["emri"]. " Mbiemri: " . $row["mbiemri"]. " Mungesa " . $row["mungesa"].
      " Detyra: " . $row["detyra"]. " Midterm " . $row["midterm"]. " Final: " . $row["final"]. " Perfundimi: " . $row["perfundimi"]."<br>";
    }
  } 
  else { echo "0 results";}

mysqli_close($conn);

    } 
}
?>