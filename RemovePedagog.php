<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <body>
	<form method="get" action="deletePedagog.php">
        
		Emri<br>
		<input type="text" name="emri">
		<br>
		Mbiemri:<br>
		<input type="text" name="mbiemri">
		<br>
		
        Username:<br>
        <input type="text" name="username">
        <br><br>
		
		<input type="submit" name="save" value="FSHI">
	</form>
  </body>
</html>