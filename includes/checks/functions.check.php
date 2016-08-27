<?php
            //mysqli_extension for databse development
$query = mysqli_query($db, "INSERT INTO enrolled 
            (id, username,firstname,lastname,email,contact,date)
 VALUES ('','$username', '$firstname','$lastname', '$email',$contact,NOW())");
			



            
if($query)
			{
				 $msg = "Thank You! you are now registered.";
			}else{ 
                $err = "Registration Couldnt Complete. Try Again Later";    
                    }
   


?>