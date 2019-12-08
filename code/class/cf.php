<?php
class estate{
	function con(){
		$con=mysqli_connect("localhost","root","","building")or die("some problem in connection");
		return $con;
		}//connection

        function sess(){
            session_start();
            if(!$_SESSION["admin"]){
                  echo "<script>window.location.assign('adminlogin.php');</script>";
                 }
             }//session
	function login($n,$p){
		$login="select * from tbl_admin where Admin_Name='$n' and Admin_Password='$p'";
                $d=mysqli_query($this->con(),$login)or die("some problem in admin login");
		if(mysqli_num_rows($d)==1){
                   session_start();
                   $_SESSION["admin"]=$n;
                   echo"<script>window.location.assign('dashboard.php');</script>";
                  }
                else{
                  echo "<script>alert('Invalid login');</script>";
		   
                    }
		}//admnlogn	
	function adminlog(){
		session_start();
		$dest=session_destroy();
		if($dest){
               echo "<script>window.location.assign('adminlogin.php');</script>"; 		
                }
              } //adlogout	
				
	}
?>