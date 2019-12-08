<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `timetable` WHERE `sno` = '$_REQUEST[sno]'") or die(mysqli_error());
	header('location:generate_timetable.php');