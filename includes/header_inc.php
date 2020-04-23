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
|||          2019          |||
|||  Instructor: B. Scott  |||
|||                        |||
||||||||||||||||||||||||||||||

--> 
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Desktop   -->

    <!--    Mobile  -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:100,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/../css/print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="/../css/style.css" type="text/css">
    
    
    <style>
       .break-line {
        border-top:1px solid #ccc;
        }
    </style>
    
    <?php if($title == "About") : ?>

        <link rel="stylesheet" href="/../css/info.css" />

    <?php endif; ?>


    <?php if($title == "Pricing") : ?>

        <link rel="stylesheet" href="/../css/pricing.css" />

    <?php endif; ?>

    <?php if($title == "Blog") : ?>

        <link rel="stylesheet" href="/../css/blog.css" />

    <?php endif; ?>

    <?php if($title == "Account") : ?>

        <link rel="stylesheet" href="/../css/account.css" />

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
            <img src="images/logo.png" alt="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="info.php">About</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </nav>
        
       
        
        <div class="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        
        <div id="mobile-nav">
            <div class="dropdown">
        
      </div> 
           
            <ul>
             
              <li><a href="index.php">Home</a></li>
              <li><a href="info.php">About</a></li>
              <li><a href="pricing.php">Pricing</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="account.php">Account</a></li>
            </ul>
          
        </div>