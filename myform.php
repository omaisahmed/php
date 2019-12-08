

<!DOCTYPE html>
<html>
<head>
	<title>MY FORM</title>


	<style type="text/css">
		.btn{
			font-size: 20px;
			font-family: sans-serif;
			background-color: olive;
			cursor: pointer;
		}
		.btn:hover{
			opacity: 0.5;
		}
		body{
			background-image: url('http://getwallpapers.com/wallpaper/full/7/8/9/845329-free-incredible-hulk-wallpaper-2018-1920x1080-windows-10.jpg');
			margin-top: 15%;
		}
        tr:hover{
         opacity: 0.5;
        }


	</style>

	
</head>
<body>

	    <form action="thanks page.php" method="POST">
		<table align="center" class="center" border="2" width="500" height="100">
			<tr>
				<td colspan="3" align="center" bgcolor="black"><b><font color="white">REGISTRATION FORM</font><b></td>
		    </tr>
<tr bgcolor="palered">
	<td colspan="2"><label for="name">First Name</label></td>
	<td><input type="text" name="firstname" maxlength="10" size="25" id="name"><br/></td>
</tr>

<tr bgcolor="palegreen">
	<td colspan="2">Last Name</td>
	<td><input type="text" name="lastname" maxlength="20" size="25"><br/></td>
</tr>

<tr bgcolor="palegoldenrod">
	<td colspan="2">Date of Birth</td>
	<td><input type="date" name="dob"></td>
</tr>

<tr bgcolor="lightsteelblue">
	<td colspan="2">Email</td>
	<td><label for="email"><input type="email" name="email" maxlength="50" size="25" id="email"></label></td>
</tr>

<tr bgcolor="linen">
	<td colspan="2">Password</td>
	<td><input type="password" name="password" size="25"></td>
</tr>

<tr bgcolor="teal">
	<td colspan="2">Confirm Password</td>
	<td><input type="password" name="confirm password" size="25"></td>
</tr>

<tr bgcolor="azure">
	<td colspan="2">CNIC</td>
	<td><input type="text" name="cnic" maxlength="13" size="25"></td>
</tr>

<tr bgcolor="gray">
	<td colspan="2">Mobile Number</td>
	<td><input type="text" name="mobilenumber" maxlength="11" size="25"></td>
</tr>

<tr bgcolor="gainsboro">
	<td colspan="2">Gender</td>
	<td>Male<input type="radio" value="male" name="gender">Female<input type="radio" value="female" name="gender"></td>
</tr>

<tr bgcolor="lightcyan">
	<td colspan="2">Address</td>
	<td><textarea name="address" rows="3"></textarea></td>
</tr>

<tr bgcolor="silver">
	<td colspan="2">Country</td>
	<td><select name="country">
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

<tr bgcolor="antiquewhite">
	<td colspan="2">City</td>
	<td><select name="city">
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

<tr bgcolor="aquamarine">
	<td colspan="2">Postal Code</td>
	<td><input type="text" name="postalcode" maxlength="6" size="25"><br/></td>
</tr>

<tr>
    <td align="center" colspan="3" bgcolor="black"><input type="submit" name="submit" class="btn" id="submit" value="Submit">
    <input type="reset" name="reset" class="btn" value="Reset"></td>
</tr>
		</table>
    </form>

</body>
</html>
