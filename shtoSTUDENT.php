<?php
session_start();
include_once 'connection.php';
$s=$_POST["kursi"];
$_SESSION["k"] = $s;
$result = mysqli_query($conn,"SELECT * FROM $s");

if(isset($_POST['save'])){	 

	 $kursi = $_POST['kursi'];
	 $id = $_POST['id'];
	 $emri = $_POST['emri'];
	 $mbiemri = $_POST['mbiemri'];
	 $username = $_POST['username'];
     $mungesa = $_POST['mungesa'];
     $detyra = $_POST['detyra'];
	 $midterm = $_POST['midterm'];
	 $final = $_POST['final'];
	 $perfundimi = $_POST['perfundimi'];

	 $sql = "INSERT INTO $s (id,emri,mbiemri,username,mungesa,detyra,midterm,final, perfundimi)
	 VALUES ('$id','$emri','$mbiemri','$username','$mungesa','$detyra','$midterm','$final','$perfundimi')";
	 if (mysqli_query($conn, $sql)) {
		echo "Studenti u shtua ne klase me sukses!!";
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>