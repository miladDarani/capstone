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
    <title>Blog</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:100,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="stylesheet" href="print.css" type="text/css" media="print" />
    
    
    <style>
/* *************************** 
            General 
***************************** */
body {
  font-family: 'Quicksand', sans-serif;
  padding: 0;
  margin: 0;
}
.break-line {
  border-top:1px solid #ccc;
}
.blog2-title p {
  padding: 20px;
}
#mobile-nav {
  margin-bottom:40px;
}
/* *************************** 
            Wrapper 
***************************** */
#wrapper {
  -webkit-perspective: 900px;
  perspective: 900px;
  width: 100%;
  margin: 0 auto;
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
          blog-row1 
***************************** */
#blog-row1 {
  /* Photo by Aleks Dorohovich on Unsplash */
  background-repeat: no-repeat;
  background-size:cover;
  background-position: left;
  text-align: center;
  color: #444;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 30px;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
}

/* *************************** 
             Row 2 
***************************** */
#row2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

/* *************************** 
          blog images 
***************************** */
#blog1-div {
  width:70%;
}
#blog1-div img {
  width: 75%;
  height: 65%;
}
#blog1-title {
  width: 71.5%;
  margin: 0 auto;
  padding: 20px 0 20px 0;
  border: .5px solid #ccc;
}
#blog1-title p{
  padding: 20px;
}
.blog2-div {
  width: 33%;
  margin: 0 auto;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
   justify-content: center;
   padding: 10px;
}
.blog2-div img {
  width: 100%;
}
.blog2-title {
  width: 100%;
  text-align: center;
  border: .5px solid #ccc;
}
.bottom-space a {
  padding-bottom: 30px;
  display: block;
}
/* *************************** 
            login 
***************************** */
#login-box{
  border: .5px solid #ccc;
  height: 340px;
  padding: 40px;
  width: 300px;
  margin-right: 80px;
  background: white;
  border-radius: 5px;
}
#login-box p {
  font-size: 14px;
}
.login-box-image {
  max-width: 25%;
  margin: 5px auto;
}
#blog-form{
  background: white;
}
#blog-form input[type="text"] {
  font-family: Quicksand;
  height: 10px;
  width: 88%;
}
#blog-form input[type="email"] {
  width: 88%;
  font-family: Quicksand;
}
#blog-form input[type="submit"] {
  width: 100%;
  padding: 10px;
  font-family: Quicksand;
  border-radius: 4px;
  background-color:#000;
  color: #fff;
  font-size: 16px;
}
#blog-form input[type="submit"]:active {
  width: 95%;
  font-family: Quicksand;
  border-radius: 4px;
  background-color:coral;
  color: #fff;
  font-size: 16px;
}
#blog-form input[type="submit"] {
  cursor:pointer;
}
#blog-form input {
  padding: 15px;
}
/* ************************** 
           Buttons 
***************************** */
.myButton {
  background-color:#FF6B6B;
  border-radius:28px;
  display:inline-block;
  cursor:pointer;
  color:#fff;
  font-weight: 700;
  font-size:17px;
  padding:16px 40px;
  text-decoration:none;
  margin-top:5%;
  -webkit-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}
.myButton:hover {
  background-color:#4ECDC4;
  color: #555;
  -webkit-box-shadow: 5px 2px 2px rgba(0,0,0,0.6);
  box-shadow: 5px 2px 2px rgba(0,0,0,0.6);
  -webkit-transform: scale(1.03);
  -ms-transform: scale(1.03);
  transform: scale(1.03) 
  }
.myButton:active {
  position:relative;
  top:1px;
  }
.myButton2 {
  background-color:#87ce8c;
  border-radius:28px;
  display:inline-block;
  cursor:pointer;
  color:#fff;
  font-weight: 700;
  font-size:17px;
  padding:16px 40px;
  text-decoration:none;
  margin-top:5%;
  -webkit-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}
.myButton2:hover {
  background-color:#4ECDC4;
  color: #555;
  -webkit-box-shadow: 5px 2px 2px rgba(0,0,0,0.6);
  box-shadow: 5px 2px 2px rgba(0,0,0,0.6);
  -webkit-transform: scale(1.03);
  -ms-transform: scale(1.03);
  transform: scale(1.03) 
}
.myButton2:active {
  position:relative;
  top:1px;
}
#button-div {
  text-align: center;
  margin-bottom: 50px;
}
/* *************************** 
             more 
***************************** */
#more {
  text-align: center;
  margin-bottom: 40px;
}
#more a {
  padding: 8px;
}
#more a:nth-child(1) {
  color: #222;
}
/* **********************************
                @media 
************************************* */
@media screen and (min-width: 768px) and (max-width: 959px){
  .main-nav {
    margin-top: -10px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 0 auto;
    }
  nav ul{
    padding-left: 0;
    }
  .main-nav img {
    width: 30%;
    margin: -50px auto -90px auto;
    }
  #row2 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    }
  #blog2-title {
    width:auto;
    margin: 0 auto;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    }
  #blog-row1 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    }
  #blog1-div {
    width: 85%;
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
  .blog2-div {
    width:75%;
    margin: 0 auto;
    }
h2{
    padding-left: 25px;
    display: none;
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
  .blog2-title {
    margin: 0 auto;
    }
  #blog-row1 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
     padding: 110px 10px 10px 10px;
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
  .blog2-div {
    width: 75%;
    }
  .blog2-title p {
    padding: 20px;
    }
  #login-box {
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
       <img src="images/logo.png" alt="logo">
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="info.html">About</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="account.html">Account</a></li>
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
              <li><a href="index.html">Home</a></li>
              <li><a href="info.html">About</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="account.html">Account</a></li>
            </ul>
          
        </div>
      <div id="blog-row1">
        <div id="blog1-div">
          
          <div id="blog1-title">
           <img src="images/5-reasons-why-you-shouldnt-mix-and-master-picture.jpg" alt="25 Tips">
            <h2>5 Reasons why you shouldn't mix and master your own tracks</h2>
            <p>You’ve composed and recorded a song all on your own, now why not just mix and master it as well? There are some advantages to doing this, of course. In my experience, however, the disadvantages outweigh them for most musicians. </p>
            <div class="bottom-space">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        
        
        <div id="login-box">
        <h3>Sign up for Newsletter</h3>
        <p>Hottest articles in your inbox!</p>
        <div class="login-box-image">
          <img src="images/music-player.svg" alt="Music Player">
        </div>
        <form class="form_class" id="blog-form"
                name="first_form"
                method="post"
                action="http://www.scott-media.com/test/form_display.php"
                autocomplete="on">

              <p>
                <input type="text"
                       name="first_name"
                       id="first_name"
                       placeholder="First Name"
                       required
                />
                
              </p>
              
              <p>
                <input type="email"
                       name="email_address"
                       id="email_address"
                       tabindex="4"
                       placeholder="Type E-Mail Address"
                       required/>
              </p>

                <p>
                  <input type="submit" value="Subscribe Now" />
                 
                </p>

<!--              </fieldset>-->
            </form>
        </div>
        
      </div> <!-- Row 1 End -->
      <div id="row2">
        <div class="blog2-div">
          <div class="blog2-title">
           <img src="images/blog1.jpg" alt="25 Tips">
            <h2 class="header-h2">25 Music Production Tips You Don't Already Know</h2>
            <p>Maybe you just started learning how to use your DAW and need some help getting the sound right. Maybe you’re a seasoned producer looking to improve your mixing skills.  </p>
            <div class="bottom-space">
            <a href="#">Read More</a>
            </div>
          </div>
          
        </div>
        
        <div class="blog2-div">
          <div class="blog2-title">
           <img src="images/blog3-sized.jpg" alt="10 Music Production Hacks">
            <h2 class="header-h2">10 Music Production Hacks Every Musician Should Follow </h2>
            <p>As a music producer, it’s essential that you find ways to be as efficient as possible. Many (or most) of us are self taught, working on our own schedules, often from in-home studios.   </p>
            <div class="bottom-space">
            <a href="#">Read More</a>
            </div>
          </div>
          
        </div>
        
        <div class="blog2-div">
          <div class="blog2-title">
           <img src="images/blog2-sized.jpg" alt="What is 8D Audio?">
            <h2 class="header-h2">What is 8D Audio? and is it useful in the real world?</h2>
            <p>Maybe you just started learning how to use your DAW and need some help getting the sound right. Maybe you’re a seasoned producer looking to improve your mixing skills.  </p>
            <div class="bottom-space">
            <a href="#">Read More</a>
            </div>
          </div>
          
        </div>
        
      </div> <!-- row 2 -->
      <div id="more">
        <a href="#">1</a>
        <a href="#">2</a>
      </div>
    </section> <!-- WRAPPER END -->
 <?php 


require __DIR__ . "/../includes/footer_inc.php";

?>