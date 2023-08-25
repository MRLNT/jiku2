<?php
clearstatcache();
// CLEAR THE NOTICE
error_reporting(E_ERROR | E_WARNING | E_PARSE);

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:dashboard_user');

      }

   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="components/login.css">
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
        <meta name="author" content="Potenza Global Solutions" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- app favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <!-- plugin stylesheets -->
        <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
        <!-- app style -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="left">
                <div id="login">
                    <div class="logo">
                        <img src="components/logos.png" alt="">
                    </div>
                    <div class="label">
                        <h1>PT Jaringan Inklusi Keuangan</h1>
                    </div>
                    
                    <form action="" method="post">
                        <?php
                          if(isset($error)){
                             foreach($error as $error){
                                echo '<div class="col-12">
                                        <div class="alert alert-danger alert-icon" role="alert">
                                            <i class="fa fa-info-circle"></i> Username or Password Wrong!
                                        </div>
                                    </div>';
                                // echo '<span class="error-msg">'.$error.'</span>';
                             };
                          };
                        ?>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input form-control" required placeholder="Enter your email" />
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" class="text-input form-control" required placeholder="Enter your password" />
                        </div>
                        <button type="submit" class="primary-btn" name="submit" value="LOGIN">Login</button>
                    </form>
                </div>
            </div>
            <div id="right">
                <div id="image">
                    <div class="image-content">
                        <h1 class="image-text">Selamat Datang <strong>Contoh</strong></h1>
                    </div>
                </div>
            </div>
        </div>
            <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
    </body>
</html>