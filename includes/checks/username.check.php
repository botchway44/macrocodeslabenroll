<?php 



$sql="SELECT username FROM enrolled WHERE username='$username'";
		
        $result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
       if(mysqli_num_rows($result) == 1)
		{
		$err[] = "Sorry...This username already exist...";
            
		}
           
           //check for stringlenght of the username
           	if(strlen($_POST['username'])<4 || strlen($_POST['username'])>32)
	{
		$err[]='Your username must be between 3 and 32 characters!';
	}





?>