<?php
	require_once 'connect.php';
	$sno=$_POST['sno'];
	$student_no = $_POST['day'];
	$firstname = $_POST['class'];
	$middlename = $_POST['subject'];
	$lastname = $_POST['teacher'];
	$course = $_POST['periodno'];
	$section = $_POST['periodtime'];
	$description = $_POST['description'];


		$conn->query("UPDATE `timetable` SET `sno` = '$sno', `day` = '$student_no', `class` = '$firstname', `subject` = '$middlename', `teacher` = '$lastname', `periodno` = '$course', `periodtime` = '$section',`description`='$description' WHERE `sno` = '$_REQUEST[sno]'") or die(mysqli_error());
		
		header("location:generate_timetable.php");