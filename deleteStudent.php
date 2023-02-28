<?php
session_start();
include_once 'connection.php';
$s=$_POST["kursi"];
$_SESSION["k"] = $s;
$result = mysqli_query($conn,"SELECT * FROM $s");


$sql = "DELETE FROM $s WHERE username='" . $_GET["username"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Studenti u fshi me sukses!!";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>