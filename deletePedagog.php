<?php
session_start();
include_once 'connection.php';
//$result = mysqli_query($conn,"SELECT * FROM signinpedagog");


$sql = "DELETE FROM signinPedagog WHERE username='" . $_GET["username"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Profesori u fshi me sukses!!";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>