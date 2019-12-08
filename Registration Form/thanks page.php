
<?php
include("../Registration Form/myformdb.php");
    if( isset($_POST['firstname'])){
    if(isset($_POST['gender']))
{	
    echo "<b>"."<u>"."<font color='blue' size='5'>"."Thanks For Submitting!!!"."</font>"."</b>"."</u>"."<br/>"."<br/>";
    echo ("<b>"."First Name : "."</b>"."<font color='green'>".$_POST['firstname']."</font>"."<br/>");
    echo ("<b>"."Last Name : "."</b>"."<font color='green'>".$_POST['lastname']."</font>"."<br/>");
    echo ("<b>"."Date of Birth : "."</b>"."<font color='green'>".$_POST['dob']."</font>"."<br/>");
    echo ("<b>"."Email : "."</b>"."<font color='green'>".$_POST['email']."</font>"."<br/>");
    echo ("<b>"."CNIC : "."</b>"."<font color='green'>".$_POST['cnic']."</font>"."<br/>");
    echo ("<b>"."Mobile Number : "."</b>"."<font color='green'>".$_POST['mobilenumber']."</font>"."<br/>");
    echo ("<b>"."Gender : "."</b>"."<font color='green'>".$_POST['gender']."</font>"."<br/>");
    echo ("<b>"."Address : "."</b>"."<font color='green'>".$_POST['address']."</font>"."<br/>");
    echo ("<b>"."Country : "."</b>"."<font color='green'>".$_POST['country']."</font>"."<br/>");
    echo ("<b>"."City : "."</b>"."<font color='green'>".$_POST['city']."</font>"."<br/>");
    echo ("<b>"."Postal Code : "."</b>"."<font color='green'>".$_POST['postalcode']."</font>");
    
    }
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    	<style type="text/css">
    		body{
    			background-color: lightgray;
    			margin-left: 45%;
                margin-top: 10%;
    		}

    	</style>
    </head>
    <body>
    
    </body>
    </html>