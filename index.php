<?php
require 'includes/header.php';

//search database for registered users

?>

<body>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h4 class="page-header">
                  <!-- Hello World
                   <small>Welcome </small>-->
                     <img class="img-responsive" src="html/img/logo.png" alt="">
                </h4>

                <!-- First Blog Post -->
         <span>
                <h4>
                    <a href="includes/form.php">Enroll The Developer Course</a>
                </h4>
                <p class="lead post">
                    Enroll the interllectual enterprise of computer science and the Art of programming course by macro codes lab starting September. This course will teach the individual to think algorithmically and solve problems efficiently. Topics include abstraction,algorithms, data structures, encapsulation, security, software engineering, web development.Languages like C, PHP and JavaScript plus SQL, CSS and HTML. It is designed for people with no prior experience.
                    
                </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?=date('D M Y',time()).' at '.date('H:i:s',time());?> PM by <a href="index.php">Botwe Emmanuel</a></p>
                <hr>
                <img class="img-responsive" src="html/img/speak.png" alt="macro codes lab">
                <hr>
                <p>Macro Codes Lab Is a developer community aimed Inspiring and helping individuals learn computer science and the art of programming.</p>
             <span>
    <span class="glyphicon glyphicon-hand-right"> </span>
                 <a href="https://m.facebook.com/macrocodeslab"> On our Facebook page</a>
             </span>
             <span>
                 or visit
<a href="http://macrocodeslab.blogspot.com">macrocodeslab.blogspot.com</a>
                  </span>
                <a class="btn btn-primary" href="about.php">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    </span>
   
                <hr>

               

                <hr>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
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

                <!-- registered membersWell -->
                <div class="well">
                    <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                            <?php include 'includes/connect.inc.php'; 
                                  include 'includes/checks/members.php'; ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                  
                    <!-- /.row -->
               
                    
                <!-- Side Widget Well -->
                    <div class="searchwell">
                            <div class="well ">
                     <div class="col-lg-6">
                         <h4>Academic Honesty</h4>
                         <ul class="list-unstyled">
                             <li><p>This courses philosophy on academic honesty is entitled ‘Think Different’.All that we ask is to enroll and build something of your interest that solves an actual problem, that impacts campus or will change the world</p></li>
                             <li><span class="ratings pull-right">
                                 <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                 <span class="glyphicon glyphicon-star-empty"></span> CS 4 All
                                 </span>
                             </li>
                     </ul>
               
                 </div>
                    </div>
                        </div>
                 </div><!--well -->
            </div><!--col -->
            </div><!--row -->

        </div>
        <!-- /.container -->

        <hr>
    </div>
<?php require 'includes/footer.php';?>
