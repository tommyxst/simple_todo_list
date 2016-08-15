<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>To Do List</title>
</head>
<body>
<h1>This is a to do list</h1>
<form method="post" action="php/add-task.php" class="add-new-task">
<input type="text" name="item" placeholder="Enter Something Here">
<input type="image" src="image/submit.svg" alt="submit"  class="add-button">
</form>
<div class="task-list">
<?php 
     include 'php/database.php';

     $query = "SELECT * FROM tasks";
     $results = mysqli_query($conn, $query);
     $index = 1;
     while ($row = mysqli_fetch_row($results)) {
     	$isComplete = $row[2];
     	if($isComplete == 'F') {  	
     		echo "<br><span id=mySpan" . $row[0] . ">" . $index . "." . $row[1] . "</span>";
     	} else {
     		echo "<br><span class='finished-task-list' id=mySpan" . $row[0] . ">" . $index . ". " . $row[1] . "</span>";
     	}
     	echo "<img src='image/close.svg' class='delete-button' id=del" . $row[0] . "></button>";
     	echo "<img src='image/tick.png' class='complete-button' id=com" . $row[0] . ">";
     	$index++;
     }
?>
</div>
</body>
<script src="js/jquery-1.12.3.js"></script>
<script type="text/javascript">
	$("img").click(function() {
		current_id = $(this).attr('id');
		type_id = current_id.slice(0,3);
		num_id = current_id.slice(3);
		if(type_id == "del") {
			$.post("php/delete-task.php", {task_id: num_id}, function() {location.reload()});
		}
		if(type_id == "com") {
			$.post("php/complete-task.php", {task_id: num_id}, function() {location.reload()});
		}
	})
</script>
</html>