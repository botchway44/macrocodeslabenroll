<?php
//check for users id and store in the session variable for cookie
   $sql="SELECT uid FROM users WHERE username='$username'";
   $result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
       if(mysqli_num_rows($result) == 1)
		{
        $_SESSION['sessionuid'] = $row['uid'];
		 $succ[] = "username and password are stored, logout to clear all";
           
           //set cookie for the session uid
           setcookie('sessionuid',$_SESSION['sessionuid'],time()+360*360);
           
		}

    

?>