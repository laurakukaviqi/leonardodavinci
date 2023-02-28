<?php
session_start();
include_once 'connection.php';
$s=$_SESSION["p"] ;
$result = mysqli_query($conn,"SELECT * FROM $s");
?>

<!DOCTYPE html>
<html>
<head>
<title> Rishfaq tabelen</title>
</head>
<body>
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
        if($i%2==0)
        $classname="even";
        else
        $classname="odd";
        ?>
        <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["emri"]; ?></td>
		<td><?php echo $row["mbiemri"]; ?></td>
		<td><?php echo $row["mungesa"]; ?></td>
		<td><?php echo $row["detyra"]; ?></td>
		<td><?php echo $row["midterm"]; ?></td>
		<td><?php echo $row["final"]; ?></td>
		<td><?php echo $row["perfundimi"]; ?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
    </table>
</body>
</html> 