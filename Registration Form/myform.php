<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
	<script src="js/validation.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	    <form action="thanks page.php" method="POST" onsubmit="return validatesignup()">

		<table align="center" class="center" border="2" width="500" height="100">
			<tr>
				<td colspan="3" align="center" bgcolor="black"><b><font color="white">REGISTRATION FORM</font><b></td>
		    </tr>
<tr bgcolor="palered" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">FirstName</font></b></td>
	<td><input type="text" name="firstname" maxlength="20" size="25" id="name" required><br/></td>
</tr>

<tr bgcolor="palegreen" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">LastName</font></b></td>
	<td><input type="text" name="lastname" maxlength="20" size="25" required><br/></td>
</tr>

<tr bgcolor="palegoldenrod" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">DateOfBirth</font></b></td>
	<td><input type="date" name="dob" required></td>
</tr>

<tr bgcolor="lightsteelblue" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">Email</font></b></td>
	<td><input type="email" name="email" maxlength="50" size="25" id="email" required></td>
</tr>

<tr bgcolor="linen" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">Password</font></b></td>
	<td><input type="password" name="password" size="25" id="pass-signup" required></td>
</tr>

<tr bgcolor="teal" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">ConfirmPassword</font></b></td>
	<td><input type="password" name="confirmpassword" id="confirm_pass-signup" size="25" required></td>
</tr>

<tr bgcolor="azure" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">CNIC</font></b></td>
	<td><input type="text" name="cnic" maxlength="13" size="25" required></td>
</tr>

<tr bgcolor="gray" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">MobileNumber</font></b></td>
	<td><input type="text" name="mobilenumber" maxlength="11" size="25" required></td>
</tr>

<tr bgcolor="gainsboro" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">Gender</font></b></td>
	<td>Male<input type="radio" value="male" name="gender" style="cursor: pointer;" required>Female<input type="radio" value="female" name="gender" style="cursor: pointer;" required></td>
</tr>

<tr bgcolor="lightcyan" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">Address</font></b></td>
	<td><textarea name="address" rows="3" required></textarea></td>
</tr>

<tr bgcolor="silver" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">Country</font></b></td>
	<td><select name="country" style="cursor: pointer;">
		<option>----None----</option>
		<option>Pakistan</option>
		<option>India</option>
		<option>China</option>
		<option>Afghanistan</option>
		<option>Japan</option>
		<option>Srilanka</option>
		<option>Malaysia</option>
	    </select><br/>
	</td>
</tr>

<tr bgcolor="antiquewhite" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">City</font></b></td>
	<td><select name="city" style="cursor: pointer;">
		<option>----None----</option>
		<option>Karachi</option>
		<option>Islamabad</option>
		<option>Lahore</option>
		<option>Multan</option>
		<option>Rawalpindi</option>
		<option>Sukkhar</option>
		<option>Sargodha</option>
	    </select><br/>
	</td>
</tr>

<tr bgcolor="aquamarine" class="opacity">
	<td colspan="2" align="center"><b><font size="+1">PostalCode</font></b></td>
	<td><input type="text" name="postalcode" maxlength="10" size="25" required><br/></td>
</tr>

<tr>
    <td align="center" colspan="3" bgcolor="black"><input type="submit" name="submit" class="btn" id="b1" value="Submit">
    <input type="reset" name="reset" class="btn" value="Reset"></td>
</tr>


		</table>
    </form>

</body>
</html>
