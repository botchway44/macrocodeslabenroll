<?php
    session_start();
//include db for posting
require_once '../includes/connect.inc.php';


$err = array();
$succ = array();

//check form data before processing

 if(isset($_POST['submit'])){
  
        $username = $_POST["username"];
		$email = $_POST["email"];
		$password1= $_POST["password1"];
		$password2= $_POST["password2"];
    

        
//check if given param is (!empty)
   if(!empty($username) && !empty($email) && !empty($password1) && !empty($password2)){
     
      //check if username exist
        require 'username.check.php';
        require 'email.check.php';
        require 'password.check.php';
       
      
// check for fields and relocate page to insert.php
           
            }else{
       
       $err[] = 'Please fill all fields';
                } 
   }
   

//store errors in session and echo out to user
  if(count($err))
	{
 	 $_SESSION['reg-err'] = implode('<br />',$err);
      require '../html/render/header.php';
      require '../html/errorform.php';
       require '../html/render/footer.php';     
        
      
 }else{
      require 'functions.check.php';
      header ("Location: ../../profile/acct.form.php");
         require '../includes/session.inc.php';
         
 }

   

?>