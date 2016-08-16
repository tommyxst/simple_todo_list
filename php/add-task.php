<!DOCTYPE html>
<html>
<body onload="parent.location='index.php'">

<?php include 'database.php' ?>

<?php

$item = $_POST['item'];
if($item == "") {
	echo "<script> alert('Please add something!'); </script>";
} else {
	mysqli_query($conn, "INSERT INTO tasks (item, isComplete) VALUES ('$item', 'F')");
}

?>

</body>
</html>