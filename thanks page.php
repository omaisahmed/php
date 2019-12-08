 <?php
    if( isset($_POST['firstname'])){	
    echo "<b>"."<font color='blue'>"."Thanks For Submitting!!!"."</font>"."</b>"."<br/>";
    echo ("First Name : ".$_POST['firstname']."<br/>");
    echo ("Last Name : ".$_POST['lastname']."<br/>");
    echo ("Date of Birth : ".$_POST['dob']."<br/>");
    echo ("Email : ".$_POST['email']."<br/>");
    echo ("CNIC : ".$_POST['cnic']."<br/>");
    echo ("Mobile Number : ".$_POST['mobilenumber']."<br/>");
    
    echo ("Address : ".$_POST['address']."<br/>");
    echo ("Country : ".$_POST['country']."<br/>");
    echo ("City : ".$_POST['city']."<br/>");
    echo ("Postal Code : ".$_POST['postalcode']);
    
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
    		}

    	</style>
    </head>
    <body>
    
    </body>
    </html>