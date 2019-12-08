<?php
	require_once 'connect.php';
	$student_no = $_POST['sno'];
	$firstname = $_POST['title'];
	$middlename = $_POST['description'];
	$lastname = $_POST['createdby'];
	$course = $_POST['createdate'];
	$section = $_POST['status'];
		$conn->query("UPDATE `student` SET `sno` = '$student_no', `title` = '$firstname', `description` = '$middlename', `createdby` = '$lastname', `createdate` = '$course', `status` = '$section' WHERE `sno` = '$_REQUEST[sno]'") or die(mysqli_error());
		
		header("location:timetables.php");