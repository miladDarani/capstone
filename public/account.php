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
    <title>Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--  Desktop   -->
    
     <!--    Mobile  -->
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
	border-top: 1px solid #ccc;
}

#mobile-nav {
  margin-bottom: 40px;
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


/* *************************** 
              Nav 
***************************** */

.main-nav {}

nav {
	width: 100%;
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
	width: 100%;
	background-color: #b3e3b5;
}

nav ul {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	list-style: none;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
}

nav ul li {
	padding: 16px;
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

nav ul li:hover {
	-webkit-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1);
}

nav ul li a {
	text-decoration: none;
	color: #444;
	padding: 20px;
	-webkit-transition: color .1s, border-radius 2.6s, -webkit-box-shadow .1s, -webkit-transform 1.5s;
	transition: color .1s, border-radius 2.6s, -webkit-box-shadow .1s, -webkit-transform 1.5s;
	-o-transition: box-shadow .1s, color .1s, border-radius 2.6s, transform 1.5s;
	transition: box-shadow .1s, color .1s, border-radius 2.6s, transform 1.5s;
	transition: box-shadow .1s, color .1s, border-radius 2.6s, transform 1.5s, -webkit-box-shadow .1s, -webkit-transform 1.5s;
}

nav ul li:hover a {
	background-color: #FF6B6B;
	color: #fff;
	-webkit-box-shadow: 8px 5px .2px rgb(255, 255, 255, .6);
	box-shadow: 8px 5px .2px rgb(255, 255, 255, .6);
	border-radius: 90px;
}

nav ul li:active a {
	background-color: #B3E3B5;
	color: #555;
	border: 1px solid #FF6B6B;
}

nav img {
	margin-top: -90px;
	margin-bottom: -70px;
}


/* *************************** 
              row1 
***************************** */
div#row1 {
  max-width: 100%;      
}
#row1 {
	/* Photo by Aleks Dorohovich on Unsplash */
	background-image: url("images/green-back.jpg");
	height: 600px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: left;
	text-align: center;
	color: #444;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	padding: 0;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	-ms-flex-direction: row;
	flex-direction: row;
    
}

#text-wrapper {
	margin-left: 20px;
}


/* *************************** 
            row2 
***************************** */

#row2 {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

#heading-title {
	text-align: center;
	margin-top: -100px;
}

#less-work, #less-work1, #less-work2 {
	text-align: center;
	width: 30%;
	margin-top: 20px;
	padding: 20px;
}

#less-work img,#less-work1 img,#less-work2 img {
	max-width: 28%;
}

#less-work img:nth-child(2) {
	max-width: 30%;
}

#info-wrapper {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	width: 80%;
	margin: 0 auto;
}


/* *************************** login ***************************** */

#login-box {
	border-top: 4px solid #FF6B6B;
	height: 340px;
	padding: 10px;
	width: 300px;
	background: white;
	-webkit-box-shadow: 6px 4px 14px rgba(0, 0, 0, .6);
	box-shadow: 6px 4px 14px rgba(0, 0, 0, .6);
	border-radius: 5px;
	padding-top: 30px;
	margin-right: 50px;
}


form input[type="text"] {
	font-family: Quicksand;
	height: 10px;
	width: 40%;
	padding: 10px;
}

form input[type="email"], form input[type="password"] {
	width: 88%;
	height: 10px;
	padding: 10px;
	font-family: Quicksand;
}
form input[type="password"] {
 margin-top: 10px;       
}

form input[type="submit"] {
	width: 95%;
	padding: 10px;
	font-family: Quicksand;
	border-radius: 40px;
	background-color: #87ce8c;
}

.tb-form input[type=submit] {
	background-color: #95C623;
	color: #fff;
	padding: 6px 10px 6px 10px;
	margin-left: -10px;
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
	border-style: none;
	border-bottom-left-radius: 0;
	border-top-left-radius: 0;
	margin-top: 3px;
	font-weight: 500;
	font-size: 16px;
	vertical-align: middle;
}

form input[type="submit"] {
	cursor: pointer;
}

input {
	border: 1px solid #ddd;
	padding: 15px;
	border-radius: 5px;
}

.tb-form-field {
	border-radius: 40px;
}


/* *************************** 
         Buttons 
***************************** */

.myButton {
	background-color: #FF6B6B;
	border-radius: 28px;
	/* border:1px solid #FF6B6B;
*/
	display: inline-block;
	cursor: pointer;
	color: #fff;
	font-weight: 700;
	font-size: 17px;
	padding: 16px 40px;
	text-decoration: none;
	margin-top: 5%;
	-webkit-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;
}

.myButton:hover {
	background-color: #4ECDC4;
	color: #555;
	-webkit-box-shadow: 5px 2px 2px rgba(0, 0, 0, 0.6);
	box-shadow: 5px 2px 2px rgba(0, 0, 0, 0.6);
	-webkit-transform: scale(1.03);
	-ms-transform: scale(1.03);
	transform: scale(1.03)
}

.myButton:active {
	position: relative;
	top: 1px;
}

.myButton2 {
	background-color: #87ce8c;
	border-radius: 28px;
	display: inline-block;
	cursor: pointer;
	color: #fff;
	font-weight: 700;
	font-size: 17px;
	padding: 16px 40px;
	text-decoration: none;
	margin-top: 5%;
	-webkit-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;
}

.myButton2:hover {
	background-color: #4ECDC4;
	color: #555;
	-webkit-box-shadow: 5px 2px 2px rgba(0, 0, 0, 0.6);
	box-shadow: 5px 2px 2px rgba(0, 0, 0, 0.6);
	-webkit-transform: scale(1.03);
	-ms-transform: scale(1.03);
	transform: scale(1.03)
}

.myButton2:active {
	position: relative;
	top: 1px;
}

#button-div {
	text-align: center;
	margin-bottom: 50px;
}


/* ****************************************************** 
                        @media
*********************************************************/

@media screen and (min-width: 768px) and (max-width: 959px) {
	#text-wrapper {
		padding: 50px;
	}
	form input[type="text"] {
		width: 70%;
		margin-top: 10px;
	}
	form input[type="email"] {
		width: 70%;
	}
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
	nav ul {
		padding-left: 0;
	}
	.main-nav img {
		width: 30%;
		margin: -50px auto -90px auto;
	}
	#text-wrapper {
		padding-top: 0;
		text-align: left;
	}
	#row2 {
		margin: 0 auto;
	}
	#button-div .myButton2 {
		margin-bottom: 90px;
	}
 
}

@media screen and (max-width: 767px) {
  
	nav {
		display: none;
	}
  #heading-title {
    padding-top: 50px;
  }
	#row1 {
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-ms-flex-direction: column;
		flex-direction: column;
	}
	#text-wrapper {
		padding-top: 110px;
	}
	#heading-title {
		width: 65%;
		margin: 40px auto 40px auto;
	}
	#login-box {
		margin: 20px auto;
        
	}
	#info-wrapper {
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-ms-flex-direction: column;
		flex-direction: column;
		width: 90%;
		margin: 0 auto;
	}
	#less-work, #less-work1, #less-work2 {
		width: 90%;
		border-radius: 5px;
		border: .5px solid #ccc;
		margin: 0 auto 20px auto;
	}
	#less-work p,#less-work1 p,#less-work2 p {
		width: 100%;
	}
}

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
      <div id="row1">
       <div id="text-wrapper">
        <h1>Effortless Mixing</h1>
        <h1>and Mastering</h1>
        <p>Our platform is powered by Machine Learning</p>
        <p>We have analyzed over 300,000 songs to date.</p>
        </div>
        <div id="login-box">
        <h3>Let's get started</h3>
<!--       FORM        -->
        <form class="form_class" id="first_form"
                name="first_form"
                method="post"
                action="http://www.scott-media.com/test/form_display.php"
                autocomplete="on">

              <p>
                <input type="text"
                       name="first_name"
                       id="first_name"
                       placeholder="First Name"
                       
                />
                 <input type="text"
                       name="last_name"
                       id="last_name"
                       placeholder="Last Name"
                       
                />
                <input type=password
                       name="password"
                       id="password"
                       placeholder="Password"
                       required
                />
                 <input type=password
                       name="password"
                       id="password2"
                       placeholder="Re-Type Password"
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
                <input type="submit" value="Register/Login" />
              </p>
            </form> <!-- end form -->
      </div>
      </div>
      
      <div id="row2"> <!-- Row 2 -->
        
        <div id="heading-title">
          <h1>Say Hello To a Full Service Plan</h1>
          <p>By doing it all, we keep fees down and let you focus on what's more important</p>
        </div>
        <div id="info-wrapper">
          <div id="less-work">
            <img src="images/workstation.svg" alt="workstation">
            <h3>Less work for you</h3>
            <p>We take your unfinisehd songs and turn them into professional sounding masterpieces</p>
          </div>

          <div id="less-work1">
            <img src="images/computer.svg" alt="workstation">
            <h3>Quick</h3>
            <p>The whole process takes minutes to complete and save your hours of work.</p>
          </div>

          <div id="less-work2">
            <img src="images/speaker.svg" alt="workstation">
            <h3>Flexibility</h3>
            <p>With our Pro+ plan you can select between 15 different presets for getting the desired sound. </p>
          </div>
        </div>
        
        <div id="button-div">
          <a href="#" class="myButton2">7 Day Free Trial</a>
        </div>
        
      </div> <!-- end row 2 -->
      
      
      

      
    <div id="footer">

      <div id="footer-wrapper">
        <div class="footer-item footer-item1">
          <img src="images/logo-white.png" alt="logo">
        </div>

          <div class="footer-item footer-item2">
            <div class="first-date-wrapper">

              <div class="date-title">
                <h4>Latest posts</h4>
                <p><a href="#">Mastering</a></p>
                <p><a href="#">Distribution</a></p>
                <p><a href="#">Plugns</a></p>
                <p><a href="#">Samples</a></p>
                <p><a href="#">Promotions</a></p>
                <p><a href="#">Desktop App</a></p>
              </div>

              <div class="date-title">
                <h4>Resources</h4>
                <p><a href="#">What is mixing?</a></p>
                <p><a href="#">What is mastering?</a></p>
                <p><a href="#">How to promote yourself</a></p>
                <p><a href="#">Thing's you need to know</a></p>
                <p><a href="#">Terms</a></p>
                <p><a href="#">Privacy</a></p>
              </div>
            </div>
          </div>

        <div class="footer-item footer-item4">
          <h3>CONNECT WITH US</h3>

          <div class="sm-icons">
            <p><img src="images/svgs/brands/facebook-f.svg" alt="facebook"></p>
            <p id="twitter-icon"><img src="images/svgs/brands/twitter.svg" alt="facebook"></p>
            <p id="youtube-icon">
            <img src="images/svgs/brands/youtube.svg" alt="facebook">
            </p>
          </div>
          <div class="privacy">

            <a class="copyright" href="#">SOUNDCOMET &copy; 2019 All rights reserved </a>
          </div>
        </div>

      </div>

    </div> <!--Footer end -->

       
         
         
  </section> <!-- WRAPPER END -->
      
   
   
  </body>
</html>