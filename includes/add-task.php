<?php
	$task = strip_tags($_POST['task']);
	$date = date('Y-m-d');
	$time = date('H:i:s');

	includes('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
	$mysqli ->query("INSERT INTO tasks VALUES ('', 'tasks', '$date', '$time')");
 
	$query = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time' ";

	if($result = $myslqi->query($query)) {
		while ($row = $result->fetch_assoc()) {
 			$task_id = $row['id'];
 			$task_name = $row['task'];
		}
	}

	$myslqi->close();

	echo '<li><span>',$task_name.'<span/><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
?>