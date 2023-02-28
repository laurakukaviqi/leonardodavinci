<?php
session_start();
include_once 'connection.php';
$s=$_SESSION["p"];
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE $s set id='" . $_POST['id'] . "',
                                  emri='" . $_POST['emri'] . "',
                                  mbiemri='" . $_POST['mbiemri'] . "',
                                  mungesa='" . $_POST['mungesa'] . "',
                                  detyra='" . $_POST['detyra'] . "',
                                  midterm='" . $_POST['midterm'] . "',
                                  final='" . $_POST['final'] . "',
                                  perfundimi='" . $_POST['perfundimi'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Studenti u modifikua me sukses!!";
}

$result = mysqli_query($conn,"SELECT * FROM $s WHERE  id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Tabela e Studenteve</title>
</head>
<body>
<form name="frmUser" method="post" action="">
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div style="padding-bottom:5px;">
        <a href="retrieve2.php">student list</a>
        </div>
        ID: <br>
        <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
        <input type="text" name="id"  value="<?php echo $row['id']; ?>">
        <br>
        Emri: <br>
        <input type="text" name="emri" class="txtField" value="<?php echo $row['emri']; ?>">
        <br>
        Mbiemri :<br>
        <input type="text" name="mbiemri" class="txtField" value="<?php echo $row['mbiemri']; ?>">
        <br>
        Mungesa:<br>
        <input type="number" name="mungesa" class="txtField" value="<?php echo $row['mungesa']; ?>">
        <br>
        <br>
        Detyra:<br>
        <input type="number" name="detyra" class="txtField" value="<?php echo $row['detyra']; ?>">
        <br>
        <br>
        Midterm:<br>
        <input type="number" name="midterm" class="txtField" value="<?php echo $row['midterm']; ?>">
        <br>
        <br>
        Final:<br>
        <input type="number" name="final" class="txtField" value="<?php echo $row['final']; ?>">
        <br>
        <br>
        Perfundimi:<br>
        <input type="number" name="perfundimi" class="txtField" value="<?php echo $row['perfundimi']; ?>">
        <br>

        <input type="submit" name="submit" value="Update" class="buttom">

</form>
</body>
</html>