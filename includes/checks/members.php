<?php

$sql="SELECT firstname, lastname FROM enrolled ";
		
        $result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
       if(mysqli_num_rows($result) > 0)
		{
		echo '<h4 class="">'."Members Enrolled".'</h4>';
           foreach ($result as $mem){
               print '<li class=" text-success">'.$mem['firstname'].' '.$mem['lastname'].'</li>';
           }
            
		}
           



?>