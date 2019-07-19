<?php 
session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tayamen Dental Clinic</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/teeth.png" alt="Logo"></a>
            </div>
            <br/>   
            <br/>                   

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="admin_panel.php"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>
                         <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-calendar"></i>Schedule </a>
                    </li>
                  
                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-users"></i>Patient </a>
                    </li>


                      <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-envelope"></i>Send sms </a>
                    </li>

                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-folder-open"></i>Reports </a>
                    </li>
                     <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-trash"></i>Deleted History </a>
                    </li>
                 

                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class= "dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                        <p> Welcome, <strong><?php echo $_SESSION['username'];?>    </strong> </p><br>
                    </div>
                </div>
                

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="admin_change_password.php"><i class="fa fa -cog"></i>Change Password</a>

                                <a class="nav-link" href="Logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->

        <div class="col col-lg-12 col-md-12 panel panel-default">
                    <legend><b>Add Admin || Secretary</b></legend>
                  <form method="POST" class="form-disable">

                      <div class="form-group col-md-4">
                        <label>Full Name:</label>
                        <input type="text" name="fullname" class="form-control"  placeholder="Enter Full Name" value="" required>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Email:</label>
                       <input type="text" name="email" class="form-control pull-right"  placeholder="Enter Email" value="" required>   
                      </div>

                      <div class="form-group col-md-4">
                       <label>Username:</label>
                       <input type="text" name="username" class="form-control pull-right"  placeholder="Enter Username" required>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Password:</label>
                       <input type="text" name="password" class="form-control pull-right"  placeholder="Enter Password" required>
                      </div>
                       
                      <div class="form-group col-md-4">
                       <label>Contact Number:</label>
                       <input type="text" name="contact_no" class="form-control pull-right"  placeholder="Enter Contact Number" required>   
                      </div>

                    
                        <div class="form-group col-md-4">
                       <label>Age:</label>
                       <input type="text" name="age" class="form-control pull-right"  placeholder="Age " required>   
                      </div>

                      

                     

                      <div class="form-group col-md-4">
                       <label>Gender:</label>
                       <select class="form-control" name="gender" data-placement="right" required>
                         <option value=""></option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                       </select>
                      </div>

                      <div class="form-group col-md-4">
                       <label>position:</label>
                       <select class="form-control" name="type" data-placement="right" required>
                         <option value=""></option>
                         <option value="admin">Admin</option>
                         <option value="secretary">Secretary</option>
                       </select>
                      </div>

                    
                      <div class="form-group col-md-4">
                       <label>Address:</label>
                       <input type="text" name="address" class="form-control pull-right"  placeholder="Address" required>   
                      </div>
                   

                    
                      <div class="form-group" align="center">
                        <button type="submit" name="submit" class="btn btn-primary">Add Information</button>
                      </div>
                    
                    </form>
                     <?php
                           if (isset($_POST['submit']))
                            {
                          $fullname = $_POST['fullname'];
                          $email = $_POST['email'];
                          $username = $_POST['username'];
                          $password = $_POST['password'];
                          $contact_no = $_POST['contact_no'];
                          $age = $_POST['age'];
                          $gender = $_POST['gender'];
                          $address = $_POST['address'];
                          $type = $_POST['type'];
                           $connection = mysqli_connect("localhost", "root", "", "dental");
                                $query = "INSERT INTO main_user (fullname, username, email, password, contact_no, age, gender, address, type) 
                                VALUES ('$fullname','$username', '$email', '$password','$contact_no', '$age', '$gender', '$address', '$type')";
                                $results = mysqli_query($connection, $query);
                                 if(!$results)
                                    {
                                     echo 'mysqli_error()';
                                    }
                                    else
                                    {
                                          echo'<script>';
                        echo'alert("Successfully Added!");';
                        echo'window.location.href="add_secretary.php";';
                        echo'</script>';        
                                    }
                           }


                        
                    ?>

  </div>

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="http://ajaxgoogleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/global.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>