<?php
	require_once 'connect.php';
	if(ISSET($_POST['submit'])){
		//if(isset($_POST['sno'])){
        $sno=$_POST['sno'];
		$student_no = $_POST['day'];
		$firstname = $_POST['class'];
		$middlename = $_POST['subject'];
		$lastname = $_POST['teacher'];
		$course = $_POST['periodno'];
		$section = $_POST['periodtime'];
		$description = $_POST['description'];

	
		$conn->query("INSERT INTO `timetable`  VALUES('$sno','$student_no','$firstname','$middlename','$lastname','$course','$section','$description')") or die(mysqli_error());
			header("location:generate_timetable.php");
		
}
