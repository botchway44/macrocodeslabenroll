<?php 

if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact= $_POST['contact'];
     
        
        require_once 'includes/checks/username.check.php';  
      //require_once 'includes/checks/name.check.php.check.php';  
      require_once 'includes/checks/email.check.php';  
    
    }else{
        $err[] = 'please make sure all field are filled';
    }

        //count errors and echo to user
         if(count($err))
	{
 	 $_SESSION['reg-err'] = implode('<br />',$err);
        $Message = "Registration Not Successful";
        
      
 }else{
      
      require_once 'includes/checks/functions.check.php';
        $Message = "Registration Successful";
 }
    
        //count success and echo
        if(count($succ)){
             $_SESSION['reg-succ'] = implode('<br />',$err);
            
        } 


?>