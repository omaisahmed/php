<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `student` WHERE `sno` = '$_REQUEST[sno]'") or die(mysqli_error());
	header('location:timetables.php');