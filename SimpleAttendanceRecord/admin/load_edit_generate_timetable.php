<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `timetable` WHERE `sno` = '$_REQUEST[sno]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_generate_timetable_query.php?sno=<?php echo $f_edit_student['sno']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">

<div class = "form-group">
	<label>Sno</label>
	<input type = "number" name = "sno" required = "required" class = "form-control" value = "<?php echo $f_edit_student['sno']?>" class = "form-control" />
</div>

		<div class = "form-group">
			<label>Day</label><br/>
									<select style="width: 100%;height: 40px" name = "day" value = "<?php echo $f_edit_student['day']?>" required = "required" class = "form-control">
										<option>--Select Day--</option>
										<option>Monday</option>
										<option>Tuesday</option>
										<option>Wednesday</option>
										<option>Thursday</option>
										<option>Friday</option>
										<option>Saturday</option>
										<option>Sunday</option>
									</select>


			
		</div>
		<div class = "form-group">
			<label>Class</label><br/>
									<select style="width: 100%;height: 40px" name="class" value = "<?php echo $f_edit_student['class']?>" required = "required" class = "form-control" >
										<option>--Select Class--</option>
										<option value="1st year A1">1st Year A1</option>
										<option value="1st year A2">1st Year A2</option>
										<option value="1st year B1">1st Year B1</option>
										<option value="1st year B2">1st Year B2</option>
										<option value="1st year C1">1st Year C1</option>
										<option value="1st year C2">1st Year C2</option>
									</select>


		</div>
		<div class = "form-group">
			<label>Subject</label><br/>
									<select style="width: 100%;height: 40px" name="subject" value = "<?php echo $f_edit_student['subject']?>"  class = "form-control">
										<option>--Select Subject--</option>
										<option>Math</option>
										<option>Physics</option>
										<option>Chemistry</option>
										<option>Biology</option>
										<option>English</option>
										<option>Urdu</option>
									</select>


					</div>
		<div class = "form-group">
			<label>Teacher</label><br/>
									<select style="width: 100%;height: 40px" name="teacher" value = "<?php echo htmlentities($f_edit_student['teacher'])?>" required = "required" class = "form-control">
										<option>--Select Teacher--</option>
										<option>Dr. Tahir</option>
										<option>Dr. Qureshi</option>
										<option>Miss Nadia</option>
										<option>Sir Ali</option>
										<option>Dr. Mushtaq</option>
										<option>Dr. Gohar Alam</option>
									</select>

		</div>
		<div class = "form-group">
			<label>Period No.</label><br/>
									<select style="width: 100%;height: 40px" name="periodno" value = "<?php echo $f_edit_student['periodno']?>" required = "required" class = "form-control">
										<option>--Select Period--</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
									</select>

		</div>
		<div class = "form-group">
			<label>Period Time</label>
									<input type = "time" name = "periodtime" required = "required" class = "form-control" value = "<?php echo $f_edit_student['periodtime']?>" class = "form-control" />

		</div>

		<div class="form-group">
			<label>Description</label>
									<textarea name = "description" required = "required" class = "form-control" rows="4" value = "<?php echo $f_edit_student['description']?>"></textarea> 
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	