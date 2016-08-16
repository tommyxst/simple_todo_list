<!DOCTYPE html>
<html>
<body onload="parent.location='index.php'">
<?php
include 'database.php';

$task_id = $_POST['task_id'];
mysqli_query($conn, "DELETE FROM tasks WHERE id = '$task_id'");
?>
</body>
</html>