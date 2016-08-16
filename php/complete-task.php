<!DOCTYPE html>
<html>
<body onload="parent.location='index.php'">

<?php
include 'database.php';

$task_id = $_POST['task_id'];
$query = "UPDATE tasks
          SET isComplete=CASE
          WHEN isComplete='T' THEN 'F'
          WHEN isComplete='F' THEN 'T'
          END
          WHERE id=$task_id";

mysqli_query($conn, $query);
?>

</body>
</html>