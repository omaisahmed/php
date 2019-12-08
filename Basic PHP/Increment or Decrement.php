<html>
<head>
	</head>
	<body>

		
		<?php 
		print "<b>"."<font color=red>"." //Using Post Increment"."</b>"."</font>"."<br/>";    
		$test_var=100;   
		print "The value of test_var is : ".$test_var."<br/>";
		print "After Post Increment, Value is : ".$test_var++."<br/>";
		print "Now,Value is : ".$test_var."<br/>";
        ?>
        
        
        <?php
        print "<b>"."<font color=red>"."//Using Post Decrement"."</b>"."</font>"."<br/>";
		$test_var=11;
		print "The value of test_var is : ".$test_var."<br/>";
		print "After Post Decrement, Value is : ".$test_var--."<br/>";
		print "Now,Value is : ".$test_var."<br/>";
        ?>

        
        <?php
        print "<b>"."<font color=red>"."//Using Pre Increment"."</b>"."</font>"."<br/>";
		$test_var=8;
		print "The value of test_var is : ".$test_var."<br/>";
		print "After Pre Increment, Value is : ".++$test_var."<br/>";
		print "Now,Value is : ".$test_var."<br/>";
        ?>

        
         <?php
         print "<b>"."<font color=red>"."//Using Pre Decrement"."</b>"."</font>"."<br/>";
		$test_var=20;
		print "The value of test_var is : ".$test_var."<br/>";
		print "After Pre Decrement, Value is : ".--$test_var."<br/>";
		print "Now,Value is : ".$test_var."<br/>";
        ?>
	 </body>
</html>