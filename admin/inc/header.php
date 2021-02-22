<?php 
    if(!isset($_SESSION['user_name']))
    {
        header("location:".BURLA.'login.php');
    }
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css">

    <title>Dashboard | Home page</title>
</head>
<body>

   <!-- Navbar --> 
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo BURLA ?>"> <img src="<?php echo BURL.'assets/images/logo.png'; ?>" width="70" alt="LOGO"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BURLA ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA.'cities/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA.'cities/' ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA.'services/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA.'services/' ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Orders
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo BURLA.'orders/' ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admins
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA.'admins/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA.'admins/' ?>">View All</a>
                    </div>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo BURL; ?>" target="_blank">View Site</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo BURLA.'logout.php'; ?>">Logout</a>
                </li>

            </ul>

            
        </div>
    </nav>

<div class="container-fluid mt-5 mb-5">
    <div class="row">
    