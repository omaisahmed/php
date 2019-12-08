<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
var html="<form method=POST action='submit.php'><table id = 'table' class = 'table table-bordered'><thead class = 'alert-info'><tr><th>Day</th><th>Class</th><th>Subject</th><th>Teacher</th><th>Period No.</th><th>Period Time</th><th>Description</th><th>Action</th></tr></thead><tbody><tr><td><select style='width: 100%;height: 40px' name='day'><option>--Select Day--</option><option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option></select></td><td><select style='width: 100%;height: 40px' name='class' multiple='multiple' ><option>--Select Class--</option><option value='1st year A1' name='op1'>1st Year A1</option><option value='1st year A2' name='op2'>1st Year A2</option><option value='1st year B1' name='op3'>1st Year B1</option><option value='1st year B2' name'op4'>1st Year B2</option><option value='1st year C1' name='op5'>1st Year C1</option><option value='1st year C2' name='op6'>1st Year C2</option></select></td><td><select style='width: 100%;height: 40px' name='subject'><option>--Select Subject--</option><option>Math</option><option>Physics</option><option>Chemistry</option><option>Biology</option><option>English</option><option>Urdu</option></select></td><td><select style='width: 100%;height: 40px' name='teacher'><option>--Select Teacher--</option><option>Dr. Tahir</option><option>Dr. Qureshi</option><option>Miss Nadia</option><option>Sir Ali</option><option>Dr. Mushtaq</option><option>Dr. Gohar Alam</option></select></td><td align='center'><select style='width: 100%;height: 40px' name='periodno'><option>--Select Period--</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></td><td><input type = 'time' name = 'periodtime' required = 'required' class = 'form-control' /></td><td><textarea name = 'description' required = 'required' class = 'form-control' rows='4'></textarea> </td><td><button type=submit class='btn-danger' name='submit'>Submit</button></td></tr></tbody></table></form>";
							$(document).ready(function(){
								$("#btn1").click(function(){
									$("#container").append(html);
									///alert("Hello");
								});
							});
						
</script>

		<title>Time Table Management System 2019</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo1.jpg" width = "600" height = "100" class="img-responsive" />
					
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:110px;">
			<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li>
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						
					</ul>
				</li>
				
				<li><a href = "timetables.php"><span class = "glyphicon glyphicon-book"></span> Timetables</a></li>
				<li class = "active"><a href = "generate_timetable.php"><span class = "glyphicon glyphicon-plus-sign"></span> Create Timetable</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">New Time Table</div>
			<div class = "modal fade" id = "add_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Generate New Time Table</h4>
						</div>
					
						
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit New Time Table</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "well col-lg-12">
				<button class = "btn btn-success" type = "submit" id="btn1"><span class = "glyphicon glyphicon-plus"></span> Create New Timetable </button>
				<br />
				<br />

<div id="container"></div>
				
                        
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Sno.</th>
							<th>Day</th>
							<th>Class</th>
							<th>Subject</th>
							<th>Teacher</th>
							<th>Period No.</th>
							<th>Period Time</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q_student = $conn->query("SELECT * FROM `timetable`") or die(mysqli_error());
							while($f_student = $q_student->fetch_array()){
						?>
						<script type="text/javascript">
							var a;
							
							if (a=="Approved") {
								document.getElementById('status').style.color="black";
							}
							else
							{
								document.getElementById('status').style.color="red";
							}

						</script>


						<tr>
							<td align="center"><?php echo $f_student['sno']?></td>
							<td><?php echo $f_student['day']?></td>
							<td><?php echo $f_student['class']?></td>
							<td><?php echo $f_student['subject']?></td>
							<td><?php echo $f_student['teacher']?></td>
							<td align="center"><?php echo $f_student['periodno']?></td>
							<td><?php echo $f_student['periodtime']?></td>
							<td><?php echo $f_student['description']?></td>
							<td><a class = "btn btn-danger rstudent_id" name = "<?php echo $f_student['sno']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> <a class = "btn btn-warning  estudent_id" name = "<?php echo $f_student['sno']?>" href = "#" data-toggle = "modal" data-target = "#edit_student"><span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<br />	
			<br />	
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left"><font size="2px">&copy; Time Table Management System 2019</font></label>
				<label class = "pull-right"><font size="2px">Developed By: Omais Ahmed</font></label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rstudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_generate_timetable.php?sno=' + $student_id;
				});
			});
			$('.estudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('#edit_query').load('load_edit_generate_timetable.php?sno=' + $student_id);
			});
		});
	</script>
</html>