<?php
session_start();
include_once 'connection.php';
$s=$_POST["kursi"];
$_SESSION["k"] = $s;
$result = mysqli_query($conn,"SELECT * FROM $s");
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Lista e studeneteve</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	  	<td>ID</td>
		<td>Emri</td>
		<td>Mbiemri</td>
		<td>Mungesa</td>
		<td>Detyra</td>
		<td>Midterm</td>
		<td>Final</td>
		<td>Perfundimi</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["emri"]; ?></td>
		<td><?php echo $row["mbiemri"]; ?></td>
		<td><?php echo $row["mungesa"]; ?></td>
		<td><?php echo $row["detyra"]; ?></td>
		<td><?php echo $row["midterm"]; ?></td>
		<td><?php echo $row["final"]; ?></td>
		<td><?php echo $row["perfundimi"]; ?></td>
	
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "Kjo klase nuk ka studente!!";
}
?>
 </body>
</html>