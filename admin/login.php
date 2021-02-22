<?php require '../config.php';  ?>
<?php 
    if(isset($_SESSION['user_name']))
    {
        header("location:".BURLA.'index.php');
    }
?>
<?php require BL.'functions/validate.php';  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Login</title>
</head>
<body>

<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white"> Login</h3>
    
        <?php  
                if (isset($_POST['submit'])) 
                {
                    $email= $_POST['email'];
                    $password = $_POST['password'];
                    
                $check = getRow('users','user_email',$email);
                 var_dump($check); //for data check ...
                            
                            echo $check['user_name'] .'+++++++' .$check['user_password'] ; 
                                if($password == $check['user_password'] )
                                {
                                    $_SESSION['user_name'] = $check['user_name'];
                                    $_SESSION['user_email'] = $check['user_email'];
                                    $_SESSION['user_id'] = $check['user_id'];

                                    header("location:".BURLA.'index.php');
                                }
                                else 
                                {
                                    $error_message = "Incorrect Information";
                                }
                            
                }
                
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="border p-5" >
                <div class="row">
                    
                    <?php  require BL.'functions/messages.php'; ?>
                    <div class="col-sm-6 offset-sm-3 ">
                        <div class="form-group">
                            <label >Email </label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-success"   >
                        </div>
                    </div>
                </div>
                
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>




  </body>
</html>