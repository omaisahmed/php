<?php
   if( $_GET["name"] || $_GET["age"] || $_GET["mobile"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      echo "Your number ". $_GET['mobile'];
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         Mobile<input type="text" name="mobile">
         <input type = "submit" />
      </form>
      
   </body>
</html>