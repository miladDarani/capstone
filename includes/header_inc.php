<!doctype html>
<!--
    ──────▄▀▄─────▄▀▄              W W W !!
    ─────▄█░░▀▀▀▀▀░░█▄         E O  
    ─▄▄──█░░░░░░░░░░░█──▄▄   M
    █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
||||||||||||||||||||||||||||||
|||                        |||
|||       Milad Darani     |||
|||    WDD - Capstone      |||
|||          2020          |||
|||  Instructor: S. George |||
|||                        |||
||||||||||||||||||||||||||||||

--> 
<html lang="en">

<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Desktop   -->


    <!--    Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:100,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SLIDER -->
    <script src="js/ResponsiveSlides/responsiveslides.js"></script>
    <!-- Milads JS -->
    <script src="js/app.js"></script>
  
    <style>
       .break-line {
        border-top:1px solid #ccc;
        }
    </style>
    
    <?php if($title == "About") : ?>

        <link rel="stylesheet" href="css/info.css" type="text/css" />

    <?php endif; ?>


    <?php if($title == "Pricing") : ?>

        <link rel="stylesheet" href="css/pricing.css" type="text/css" />

    <?php endif; ?>



    <?php if($title == "Account") : ?>

        <link rel="stylesheet" href="css/account.css" type="text/css"/>

    <?php endif; ?>

    <?php if($title == "Register") : ?>

        <link rel="stylesheet" href="css/register.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

    <?php endif; ?>


    <?php if($title == "Login") : ?>

        <link rel="stylesheet" href="css/login.css" type="text/css"/>

    <?php endif; ?>

    <?php if($title == "Cart") : ?>

        <link rel="stylesheet" href="css/cart.css" type="text/css"/>

    <?php endif; ?>

    <?php if($title == "Profile") : ?>

        <link rel="stylesheet" href="css/profile.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Muli:wght@500&display=swap" rel="stylesheet">

    <?php endif; ?>



    <?php if($title == "Blog") : ?>

        <link rel="stylesheet" href="css/blog_list.css" type="text/css"/>

    <?php endif; ?>

    <!--[if LT IE 9]>

      <script src="old_ie.js"></script>
      <style type="text/css">
        header,
        nav,
        section,
        footer{
          display:block;
        }
      </style>
    <![endif]-->
</head>


<body>
  <!--[if LTE IE 9]>
     <div id="ie_warning">This page will not display properly in IE8, Please update to a newer version!</div>
  <![endif]-->
    <section id="wrapper">

        <nav class="main-nav">
            <img src="images/logo<?php if($title == "Register") {echo '-version-white';} ?>.png" alt="logo">
            <ul>
                <li><a <?php if($title == "Welcome To Sound Comet") {echo 'class="active"';} ?> href="index.php">Home</a></li>
                <li><a <?php if($title == "About") {echo 'class="active"';} ?> href="info.php">About</a></li>
                <li><a <?php if($title == "Pricing") {echo 'class="active"';} ?> href="pricing.php">Pricing</a></li>
                <li><a <?php if($title == "Blog") {echo 'class="active"';} ?> href="blog.php">Blog</a></li>
                
                <?php if(!empty($_SESSION['is_admin'])) : ?>

                    <li><a href="/admin">Admin</a></li>

                <?php endif; ?>
               
               

                <?php if(!empty($_SESSION['user_id'])) : ?>
                     <li><a <?php if($title == "Profile") {echo 'class="active"';} ?> href="profile.php">Profile</a></li>
                     <li><a <?php  ?> href="signout.php"></form><span class="signin"><strong>LOGOUT</strong></span></a></li>
                     
                <?php else :?>
                     <li><a <?php if($title == "Register") {echo 'class="active"';} ?> href="register.php">Register</a></li>
                     <li><a <?php if($title == "Login") {echo 'class="active sign"';} ?> href="login.php"><span class="signin"><strong>SIGN-IN</strong></span></a></li>

                <?php endif; ?>

                 <li><a <?php if($title == "Cart") {echo 'class="active"';} ?> href="cart.php"><i class="fas fa-cart-plus"></i></a></li>
            </ul>
        </nav>
        
       
        
        <div class="burger" >
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        
        <div id="mobile-nav" class="toggle-m">

            <div class="dropdown"></div> 
           
            <ul>
                <li><a <?php if($title == "Welcome To Sound Comet") {echo 'class="active"';} ?> href="index.php">Home</a></li>
                <li><a <?php if($title == "About") {echo 'class="active"';} ?> href="info.php">About</a></li>
                <li><a <?php if($title == "Pricing") {echo 'class="active"';} ?> href="pricing.php">Pricing</a></li>
                <li><a <?php if($title == "Blog") {echo 'class="active"';} ?> href="blog.php">Blog</a></li>
                
                
                <?php if(!empty($_SESSION['is_admin'])) : ?>

                    <li><a href="/admin">Admin</a></li>

                <?php endif; ?>
               
               

                <?php if(!empty($_SESSION['user_id'])) : ?>
                     <li><a <?php if($title == "Profile") {echo 'class="active"';} ?> href="profile.php">Profile</a></li>
                     <li><a <?php  ?> href="signout.php"></form><span class="signin"><strong>LOGOUT</strong></span></a></li>
                     
                <?php else :?>
                     <li><a <?php if($title == "Register") {echo 'class="active"';} ?> href="register.php">Register</a></li>
                     <li><a <?php if($title == "Login") {echo 'class="active sign"';} ?> href="login.php"><span class="signin"><strong>SIGN-IN</strong></span></a></li>

                <?php endif; ?>

                 <li><a <?php if($title == "Cart") {echo 'class="active"';} ?> href="cart.php"><i class="fas fa-cart-plus"></i></a></li>
            </ul>
          
        </div> <!-- /mobile-nav -->
