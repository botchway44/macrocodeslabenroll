<?php
session_start();
require 'includes/header.php';
require_once 'includes/connect.inc.php';
//search database for registered users

$err = array();
$succ = array();

   //require 'includes/check.php'
?>


        

    <div class="container pad">
        <div class="row">
            <div class="col-md-6">
        <form  class="form-signup" role="form" action='includes/check.php' method="post">                     <span class="lead">
            <span class="glyphicon glyphicon-list-alt "> </span> Enroll 
            </span>     
                <div class="form-group">       
                     <!--<lable>Username</lable>-->
            <input type="text" name="username" class="form-control" placeholder="username" required>     
                </div>

                <div class="form-group">
                       <!-- <lable>Password</lable>-->
    <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
                    </div>


                    <div class="form-group">
                       <!-- <lable>Re-Enter Password</lable>-->
  <input type="text" name="lastname" class="form-control" placeholder="lastname" >
                    </div>
                    <div class="form-group">       
                     <!--<lable>Email</lable>-->
            <input type="email" name="email" class="form-control" placeholder="email" required>        
                </div>

                  <div class="form-group">
                       <!-- <lable>Password</lable>-->
    <input type="text" name="contact" class="form-control" placeholder="phone number" required>
                    </div>
                    

                    <input type="submit" class="btn btn-success" value="submit" name="submit">
     </form>
            </div>
        
        
        <!--Side bar log information-->
             <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-6">

                <!-- Blog Search Well -->
                <div class="searchwell">
                <div class="well">
                    <h4>Search Enrolled members</h4>
                                <form action="index.php">
                        <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default" type="button" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                          
                        </span>
                        </div>  </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                <h4><?php if (isset($_POST['submit'])){
                            require 'includes/check.php'; 
                            echo '<span class="text-danger">'.$Message.'</span>';
                        } ?></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <?php foreach($err as $error){
                                echo '<li>'.'<span class="text-danger">'.$error.'</span>'.'</li>';
                                }
                              
                                include 'includes/checks/members.php';
                                ?>
                                
                            </ul>
                        </div>
                    </div>
        
        </div>
        </div> <!--search well well ends here-->
</div> <!--Side bar log information ends here-->
        </div><!--row endes here -->
</div><!--container endes here -->

<?php require 'includes/footer.php'?>