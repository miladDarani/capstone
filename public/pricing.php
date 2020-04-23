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
    <title>Pricing</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--  Desktop   -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:100,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="print.css" type="text/css" media="print" />
     
    <style> 
    
/* *************************** 
         General 
***************************** */

.break-line {
  border-top:1px solid #ccc;
}
#price-span span {
  background-color:#fff;
}
div#mobile-nav ul li a {
  color:#fff;
}
/* *************************** 
          Wrapper 
***************************** */
#wrapper {
  -webkit-perspective: 900px;
  perspective: 900px;
  width: 100%;
  margin: 0 auto;
  background: rgb(255,255,255);
  background: -webkit-linear-gradient(bottom, rgba(255,255,255,1) 0%, rgba(89,71,247,1) 70%);
  background: -o-linear-gradient(bottom, rgba(255,255,255,1) 0%, rgba(89,71,247,1) 70%);
  background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(89,71,247,1) 70%);
}
img {
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
}
img:hover {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
  overflow: hidden;
}
/* *************************** 
             Nav 
***************************** */
nav ul li a {
  color:#fff;
}
nav img {
  margin: auto auto auto -5px;
}
/* *************************** 
         pricing-row1 
***************************** */
#pricing-row1 {
  margin-top: 50px;
}
#pricing-row1 h1 {
  text-align: center;
  color: #fff;
  margin-bottom: 120px;
}
.pricing{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
li p {
  margin: 0;
  text-align: center;
}
.pricing ul.plan-ul{
  list-style: none;
  margin: 0;
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  border-radius: 5px;
  background: #fff;
  position: relative;
  width: 250px;
  margin-right: 10px;
  margin-bottom: 1em;
  -webkit-transition: all .5s;
  -o-transition: all .5s;
  transition: all .5s;
}
.pricing ul.plan-ul:first-child:hover, .pricing ul.plan-ul:last-child:hover {
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
  -webkit-transition: all .5s;
  -o-transition: all .5s;
  transition: all .5s;
  z-index: 100;
  -webkit-box-shadow: 0 0 10px gray;
  box-shadow: 0 0 10px gray;
}
.pro {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
  display: none;
  -webkit-box-shadow: -2px 1px 19px 1px rgba(0,0,0,0.75);
  box-shadow: -2px 1px 19px 1px rgba(0,0,0,0.75);
  z-index: 100;
}
.pricing ul.plan-ul li{
  margin: 10px 20px;
  position: relative;
}
li strong {
  color: #555;
}
.pricing ul.plan-ul li.title{
  font-size: 150%;
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
  text-transform: uppercase;
  border-bottom: 5px solid white;
}
.pricing ul.plan-ul:nth-of-type(2){
  background: #fff;
}
.pricing ul.plan-ul:nth-of-type(3){
  background: #fff;
}
.pricing ul.plan-ul:last-of-type{
  margin-right: 0;
}
.pricing ul.plan-ul li:last-of-type{
  text-align: center;
  margin-top: auto;
}
li.plan-title{
  text-align: center;
  padding-bottom: 5px;
  border-bottom: 1px solid #ccc;
}
li p{
  font-family: 'Questrial', sans-serif;
}
#includes-ul1, #includes-ul2, #includes-ul3 {
  list-style: disc;
  border:0;
  text-align: left;
}
#includes-ul1 li p, #includes-ul2 li p, #includes-ul3 li p{
  text-align: left;
  color: darkgray;
  font-size: 12px;
}
.pricing a.pricebutton{
  background: #000;
  text-decoration: none;
  padding: 10px 50px;
  display: inline-block;
  margin: 10px auto;
  border-radius: 5px;
  color: #fff;
  text-transform: uppercase;
}
.plan-ul {
  border-top: 9px solid #f64c72;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}
.monthly {
  font-size:.5em;
  color:black;
  text-align: center;
}
/* *************************** 
           Row 2 
***************************** */
#row2 {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-bottom: 140px;
}
#row2-title {
  margin-top: 80px;
}
#soundcloud img{
  max-width: 100%;
}
table, th, td {
  border: 1px solid transparent;
}
#table-div table {
  border-collapse: collapse;
  border: 10px solid #444;
  margin: 50px auto;
}
th {
  height:50px;
  background-color: #000;
  color: #fff;
}
td{
  padding: 10px;
  background-color: #D0E7E8;
}
#table-div {
  width: 100%;
}

/* ******************************************************                                @media
*********************************************************/
@media only screen and (max-width: 530px) {
.pricing ul.plan-ul{
  border-radius: 0;
  width: 100%;
  margin-right: 0;
  }
.pricing ul.plan-ul:hover{
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  }
.pricing a.pricebutton{
  display: block;
  }
}
  
@media screen and (min-width: 768px) and (max-width: 959px){

nav ul{
  padding-left: 0;
  }
.main-nav img {
  width: 30%;
  margin: 14px auto 0px auto;
  }
#row2 {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-right: 0 ;
  width: 100%;
  }
.blog2-div {
  width: 80%;
  }
.blog2-title {
  margin: 0 auto;
  }
#pricing-row1 {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  }
#blog1-div {
  width: 80%;
  margin: 0 auto;
  -webkit-box-ordinal-group:3;
  -ms-flex-order:2;
  order:2;
  }
#blog1-title {
  width: 100%;
  margin: 0 auto;
  }
#blog1-title p , #blog1-title h2 {
  padding: 30px;
  }
#login-box {
  width: 50%;
  margin: 0 auto 40px auto;
  padding: 80px ;
  }
}
      
      
@media screen and (max-width: 767px) {
  
nav{
  display: none;
  }
#row2 {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  margin: 0 auto;
  width: 100%;
  }
#pricing-row1 {
  padding: 10px;
  margin: 0;
  }

.blog2-div {
  width: 100%;
  padding: 0;
  }
.blog2-title {
  margin: 0 auto;
  }
#pricing-row1 {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-top: 110px;
  }
#blog1-div {
  width: 100%;
  margin: 0 auto;
  -webkit-box-ordinal-group:3;
  -ms-flex-order:2;
  order:2;
  }
#blog1-title {
  width: 100%;
  margin: 0 auto;
  }

#login-box {
  width: 100%;
  margin: 0 auto 140px auto;
  padding-bottom: 40px;
  }
form input[type="submit"] {
  width: 92%;
  }
#wrapper {
  padding: 0;
  margin: 0;
  width: 100%;
  }
#more {
  margin-top: 20px;
  }
body {
  margin: 0;
  padding: 0;
  }
.pro {
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1) 
  }
}
/* END of Media */

    </style>

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
       <img src="images/logo-white.png" alt="logo">
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="info.html">About</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="account.html">Account</a></li>
        </ul>
      </nav>
        <div class="burger"  id="price-span">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
<!--        MOBILE NAV HIDDEN         -->
        <div id="mobile-nav"> 
            <div class="dropdown">
        
      </div> 
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="info.html">About</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="account.html">Account</a></li>
            </ul>
          
        </div>
<!--        ROW1         -->
      <div id="pricing-row1">
        <h1>Choose the right plan for you</h1>
        <div class="pricing">
            <ul class="plan-ul">
               
                <li class="plan-title">BASIC</li>
                <li><p>Quick Dirty</p></li>
                <li><p class="monthly">paid monthly</p></li>
                <li class="title"><strong>$8/mo</strong><br /></li>
                <li><p><strong>INCLUDES</strong></p><br /></li>
                
              <li><ul id="includes-ul1">
                <li><p>3 Songs mastered</p></li>  
                <li><p>3 Songs mixed</p></li>  
                <li><p>E-mail support</p></li>  
                <li><p>Upto 3 re-edits</p></li>  
                </ul>  </li>
               
              <li><a class="pricebutton" href="#"> Check Out</a></li>
            </ul>
            
            <ul class="plan-ul pro">
                <li class="plan-title">PRO</li>
                <li><p>Digital Guru</p></li>
                <li><p class="monthly">paid monthly</p></li>
                <li class="title"><strong>$12/mo</strong><br /></li>
              <li><p><strong>INCLUDES</strong></p><br /></li>
                <li><ul id="includes-ul2">
                <li><p>6 Songs mastered</p></li>  
                <li><p>6 Songs mixed</p></li>  
                <li><p>E-mail support</p></li>  
                <li><p>Upto 4 re-edits</p></li>  
                  </ul>  </li>
                <li><a class="pricebutton" href="#"> Check Out</a></li>
            </ul>
                
            <ul class="plan-ul">
                <li class="plan-title">PRO +</li>
                <li><p>Serious Artist</p></li>
                <li><p class="monthly">paid monthly</p></li>
                <li class="title"><strong>$15/mo</strong></li>
                <li><p><strong>INCLUDES</strong></p><br /></li>
              <li><ul id="includes-ul3">
                <li><p>Unlimited songs mastered</p></li>  
                <li><p>15 songs mixed</p></li>  
                <li><p>E-mail support</p></li>  
                <li><p>Upto 4 re-edits</p></li>  
                </ul>  </li>
                <li><a class="pricebutton" href="#"> Check Out</a></li>
            </ul>
        </div>

      </div> <!-- ROW 1 END -->
      <!--        ROW2         -->
      <section id="row2">
        <div id="row2-title">
          <h1>Hear the difference for yourself</h1>
        </div>
<!--        SOUNDCLOUD SECTION         -->
        <div id="soundcloud">
          <img src="images/Soundcloud.jpg" alt="Soundcloud Playlist">
        </div>  
      </section>
<?php 


require __DIR__ . "/../includes/footer_inc.php";

?>