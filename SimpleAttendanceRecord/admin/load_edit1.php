<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `student` WHERE `sno` = '$_REQUEST[sno]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_student_query.php?sno=<?php echo $f_edit_student['sno']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>S.No:</label>
			<input type = "text" name = "sno" value = "<?php echo $f_edit_student['sno']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Title:</label>
			<input type = "text" name = "title" value = "<?php echo $f_edit_student['title']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Description:</label>
			<input type = "text" name = "description" value = "<?php echo $f_edit_student['description']?>"  class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Created By:</label>
			<input type = "text" name = "createdby" value = "<?php echo htmlentities($f_edit_student['createdby'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Create Date:</label>
			<input type = "date" value = "<?php echo $f_edit_student['createdate']?>" name = "createdate" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Status</label>
			<input type = "text" name = "status" required = "required" value = "<?php echo $f_edit_student['status']?>" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	