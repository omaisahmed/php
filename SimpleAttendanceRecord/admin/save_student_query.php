<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$student_no = $_POST['sno'];
		$firstname = $_POST['title'];
		$middlename = $_POST['description'];
		$lastname = $_POST['createdby'];
		$course = $_POST['createdate'];
		$section = $_POST['status'];
		$conn->query("INSERT INTO `student` VALUES('$student_no','$firstname', '$middlename', '$lastname', '$course', '$section')") or die(mysqli_error());
			
			header("location:timetables.php");
	}	