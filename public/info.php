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
    <title>About Us</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--  Desktop   -->
    
     <!--    Mobile  -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:100,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    
     <link rel="stylesheet" href="print.css" type="text/css" media="print" />
     
     
    <style>
      
  #why-us-wrapper{
    flex-wrap: nowrap;
    margin-top:0;
    padding-top: 80px;
    text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding-bottom: 50px;
  }
  #why-us-image-right {
    width: 50%;
  }
  #why-us-image-right img{
    max-width: 100%;
    border-radius: 10px;
    margin-top: 30px;
  }
  #why-us h1 {
    font-size:3em;
  }
  #why-us {
    text-align: center;
  }


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
/* *************************** 
          Wrapper 
***************************** */
 #wrapper {
     -webkit-perspective: 900px;
             perspective: 900px;
     width: 100%;
     margin: 0 auto;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
         -ms-flex-direction: column;
             flex-direction: column;
}
/*
 nav {
     position: fixed;
}
 nav ul li a {
     color:#fff;
}
 .main-nav img {
     margin: 0 auto;
}
*/
/* *************************** 
          table
***************************** */
	.demo {
		border:1px solid #C0C0C0;
		border-collapse:collapse;
		padding:5px;
        width: 100%;
	}
	.demo th {
		border:1px solid #C0C0C0;
		padding:5px;
		background:#F0F0F0;
       
	}
	.demo td {
		border:1px solid #C0C0C0;
		padding:5px;
        text-align: center;
	}
/* *************************** 
            Row1 
***************************** */
 #row-1 {
    /* Photo by Aleks Dorohovich on Unsplash */
     background-image: url("images/gift-habeshaw.jpg");
     height: 600px;
     background-attachment: fixed;
     background-position: center;
     background-repeat: no-repeat;
     background-size:cover;
     background-position: left;
     text-align: center;
     color: #fff;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: center;
         -ms-flex-pack: center;
             justify-content: center;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
         -ms-flex-direction: column;
             flex-direction: column 
}
 #row-1 h1 {
     font-size: 4em;
}
 #row-1 p {
     font-size: 1.5em;
}
 h1.about-title-h1 {
     color:#fff;
     padding-bottom: 60px;
}
/* *************************** 
          Button 
***************************** */
 .myButton {
     margin-top:15px;
     background-color:orangered;
     border-radius:28px;
     display:inline-block;
     cursor:pointer;
     color:#ffffff;
     font-family:Arial;
     font-size:17px;
     padding:16px 31px;
     text-decoration:none;
}
 .myButton:hover {
     background-color:#E63946;
}
 .myButton:active {
     position:relative;
     top:1px;
}
/* *************************** 
          Why us 
***************************** */
 #svg-wrapper {
     display: -webkit-inline-box;
     display: -ms-inline-flexbox;
     display: inline-flex;
}

 #why-us-text {
     width: 33%;
     text-align: left;
}
 #why-us-text p {
     padding: 20px;
}
 #why-us-text span {
     color:orangered;
}
 #why-us-text h2 {
     text-align: left;
     border-left: 3px solid orangered;
     padding-left: 10px;
     color: #888;
}

/* *************************** 
            Row2 
***************************** */
 #row-2 {
     background: #fefefe;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
         -ms-flex-direction: column;
             flex-direction: column;
}
 .title-wrapper {
     text-align: center;
     background-color: #eee;
}
 #our-team {
     width: 100%;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     margin-top: 0;
     text-align: center;
}
 @-webkit-keyframes AnimationName {
     0%{
        background-position:0% 51%
    }
     50%{
        background-position:100% 50%
    }
     100%{
        background-position:0% 51%
    }
}
 @keyframes AnimationName {
     0%{
        background-position:0% 51%
    }
     50%{
        background-position:100% 50%
    }
     100%{
        background-position:0% 51%
    }
}
 .circle-1, .circle-3, .circle-2 {
     background-color: #FF6B6B;
     padding: 30px;
     background-color: #eee;
     width:30%;
}
 .circle-1 img, .circle-2 img, .circle-3 img{
     max-width: 100%;
     border-radius: 500px;
     border: 1px solid #ccc;
}
 .circle-2 {
     border-right: 1px solid #ccc;
     border-left: 1px solid #ccc;
}
.circle p {
  padding:20px;
}
      #nav-id img {
        margin: -100px auto -110px 0;
      }
/* **************************************** 
                 svg's 
******************************************* */
 #svg-image-1 {
     animation: blur-out .5s linear forwards;
     -webkit-animation: blur-out .5s linear forwards;
     animation-delay: 2.3s, 3s;
     -webkit-animation-delay: 2.3s, 3s;
     position: relative;
     top:0;
     left: 0;
}
 #svg-image-2 {
     animation: scale-in .15s linear forwards, blur-out-2 .2s ease-in 10s 1 forwards;
     -webkit-animation: scale-in .15s linear forwards, blur-out-2 .2s ease-in 10s 1 forwards;
     animation-delay: 3.05s, 6s;
     -webkit-animation-delay: 3.05s, 6s;
     -ms-transform: scale(0);
         transform: scale(0);
     -webkit-transform: scale(0);
     margin: 0 auto;
     position: relative;
     top:0;
     left: 0;
     padding-right: 40px;
}
 #svg-image-3 {
     animation: scale-in-2 .15s linear forwards, moving 3.2s ease-in 10s 1 forwards;
     -webkit-animation: scale-in-2 .15s linear forwards, moving 3.2s ease-in 10s 1 forwards;
     animation-delay: 6.05s, 7s;
     -webkit-animation-delay: 6.05s, 7s;
     -webkit-transform: scale(0);
     -ms-transform: scale(0);
         transform: scale(0);
     margin: 0 auto;
     position: relative;
     top:0;
     left: 0;
}
 #svg-image-4 {
     animation: scale-in-3 .15s ease-in-out forwards, turn-around 1s ease-in-out ;
     -webkit-animation: scale-in-3 .15s ease-in-out forwards, turn-around 1s ease-in-out ;
     animation-delay: 10.05s, 12s;
     -webkit-animation-delay: 10.05s, 12s;
     -ms-transform: scale(0);
         transform: scale(0);
     -webkit-transform: scale(0);
     margin: 0 auto;
     position: relative;
     top:0;
     left: 0;
     -ms-transform-origin: 50% 50%;
         transform-origin: 50% 50%;
     -webkit-transform-origin: 50% 50%;
     transform-style: preserve-3d;
     -webkit-transform-style: preserve-3d;
}
 #svg-image-5 {
     animation: scale-in-3 .15s ease-in-out forwards, turn-around 1s ease-in-out, moving-speaker 4s ease-in-out forwards;
     -webkit-animation: scale-in-3 .15s ease-in-out forwards, turn-around 1s ease-in-out, moving-speaker 4s ease-in-out forwards;
     animation-delay: 10.05s, 12s, 14s;
     -webkit-animation-delay: 10.05s, 12s, 14s;
     -ms-transform: scale(0);
         transform: scale(0);
     -webkit-transform: scale(0);
     margin: 0 auto;
     position: relative;
     top:0;
     left: 0;
     -ms-transform-origin: 50% 50%;
         transform-origin: 50% 50%;
     -webkit-transform-origin: 50% 50%;
     transform-style: preserve-3d;
     -webkit-transform-style: preserve-3d;
}
 #woofer-cone-left, #woofer-cone-right {
     animation: pumping .4s ease-in-out ;
     -webkit-animation: pumping .4s ease-in-out ;
     animation-iteration-count: infinite;
     -webkit-animation-iteration-count: infinite;
     animation-delay: 13s;
     -webkit-animation-delay: 13s;
     -ms-transform-origin: center;
         transform-origin: center;
     -webkit-transform-origin: center;
     perspective-origin: center;
     -webkit-perspective-origin: center;
}
 #left-circle-g {
     animation: spin 2s linear backwards;
     -webkit-animation: spin 2s linear backwards;
     animation-iteration-count: infinite;
     -webkit-animation-iteration-count: infinite;
     -ms-transform-origin: 25% 49%;
         transform-origin: 25% 49%;
     -webkit-transform-origin: 25% 49%;
}
 #right-circle-g {
     animation: spin 2s linear backwards;
     -webkit-animation: spin 2s linear backwards;
     animation-iteration-count: infinite;
     -webkit-animation-iteration-count: infinite;
     -ms-transform-origin: 75% 49%;
         transform-origin: 75% 49%;
     -webkit-transform-origin: 75% 49%;
}
/* ************************************* @Keyframes **************************************** */
 @keyframes pumping {
     0% {
        -webkit-transform: scale(1);
                transform: scale(1)
    }
     25% {
        -webkit-transform: scale(1.03);
                transform: scale(1.03)
    }
     50% {
        -webkit-transform: scale(1.08);
                transform: scale(1.08)
    }
     70% {
        -webkit-transform: scale(1.02);
                transform: scale(1.02)
    }
}
 @-webkit-keyframes pumping {
     0% {
        -webkit-transform: scale(1);
                transform: scale(1)
    }
     25% {
        -webkit-transform: scale(1.03);
                transform: scale(1.03)
    }
     50% {
        -webkit-transform: scale(1.08);
                transform: scale(1.08)
    }
     70% {
        -webkit-transform: scale(1.02);
                transform: scale(1.02)
    }
}
 @keyframes color-switch-1 {
     0% {
        background-color:#FF1654;
    }
     70% {
        background-color:#70C1B3
    }
}
 @-webkit-keyframes color-switch-1 {
     0% {
        background-color:#FF1654;
    }
     70% {
        background-color:#70C1B3
    }
}
 @keyframes color-switch-1-a {
     100% {
        color:white
    }
}
 @-webkit-keyframes color-switch-1-a {
     100% {
        color:white
    }
}
 @keyframes turn-around {
     0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg)
    }
     50% {
        -webkit-transform: rotateY(365deg);
                transform: rotateY(365deg)
    }
     70% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg)
    }
}
 @-webkit-keyframes turn-around {
     0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg)
    }
     50% {
        -webkit-transform: rotateY(365deg);
                transform: rotateY(365deg)
    }
     60% {
        -webkit-transform: rotateY(10deg);
                transform: rotateY(10deg)
    }
     65% {
        -webkit-transform: rotateY(20deg);
                transform: rotateY(20deg)
    }
     70% {
        -webkit-transform: rotateY(70deg);
                transform: rotateY(70deg)
    }
     75% {
        -webkit-transform: rotateY(90deg);
                transform: rotateY(90deg)
    }
}
 @keyframes woosh {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0)
    }
     50% {
        -webkit-transform:scale(.9);
                transform:scale(.9)
    }
     65% {
        -webkit-transform: scale(1.1);
                transform: scale(1.1)
    }
}
 @-webkit-keyframes woosh {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0)
    }
     50% {
        -webkit-transform:scale(.9);
                transform:scale(.9)
    }
     65% {
        -webkit-transform: scale(1.1);
                transform: scale(1.1)
    }
}
 @keyframes blur-out {
     80% {
        -webkit-filter: blur(60px);
                filter: blur(60px)
    }
     100% {
        opacity: 0
    }
}
 @-webkit-keyframes blur-out {
     80% {
        -webkit-filter: blur(60px);
                filter: blur(60px)
    }
     100% {
        opacity: 0
    }
}
 @keyframes blur-out-2 {
     80% {
        -webkit-filter: blur(60px);
                filter: blur(60px)
    }
     100% {
        opacity: 0
    }
}
 @-webkit-keyframes blur-out-2 {
     80% {
        -webkit-filter: blur(60px);
                filter: blur(60px)
    }
     100% {
        opacity: 0
    }
}
 @keyframes moving {
     from {
        right: 0
    }
     to {
        left:-62px
    }
}
 @-webkit-keyframes moving {
     from {
        right: 0
    }
     to {
        left:-62px
    }
}
 @keyframes moving-speaker {
     from {
        right: 0
    }
     to {
        left:-65%
    }
}
 @-webkit-keyframes moving-speaker {
     from {
        right: 0
    }
     to {
        left:-65%
    }
}
 @keyframes scale-in {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0);
         -webkit-filter: blur(60px);
                 filter: blur(60px)
    }
     100% {
        -webkit-transform: scale(1);
                transform: scale(1);
         -webkit-filter: blur(0);
                 filter: blur(0)
    }
}
 @-webkit-keyframes scale-in {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0);
         -webkit-filter: blur(60px);
                 filter: blur(60px)
    }
     100% {
        -webkit-transform: scale(1);
                transform: scale(1);
         -webkit-filter: blur(0);
                 filter: blur(0)
    }
}
 @keyframes scale-in-2 {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0);
         -webkit-filter: blur(60px);
                 filter: blur(60px)
    }
     100% {
        -webkit-transform: scale(1);
                transform: scale(1);
         -webkit-filter: blur(0);
                 filter: blur(0)
    }
}
 @-webkit-keyframes scale-in-2 {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0);
         -webkit-filter: blur(60px);
                 filter: blur(60px)
    }
     100% {
        -webkit-transform: scale(1);
                transform: scale(1);
         -webkit-filter: blur(0);
                 filter: blur(0)
    }
}
 @keyframes scale-in-3 {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0);
         -webkit-filter: blur(60px);
                 filter: blur(60px)
    }
     100% {
        -webkit-transform: scale(1);
                transform: scale(1);
         -webkit-filter: blur(0);
                 filter: blur(0)
    }
}
 @-webkit-keyframes scale-in-3 {
     0% {
        -webkit-transform: scale(0);
                transform: scale(0);
         -webkit-filter: blur(60px);
                 filter: blur(60px)
    }
     100% {
        -webkit-transform: scale(1);
                transform: scale(1);
         -webkit-filter: blur(0);
                 filter: blur(0)
    }
}
 @keyframes spin {
     from {
        -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
    }
     to {
        -webkit-transform: rotate(365deg);
                transform: rotate(365deg)
    }
}
 @-webkit-keyframes spin {
     from {
        -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
    }
     to {
        -webkit-transform: rotate(365deg);
                transform: rotate(365deg)
    }
}

 @media screen and (min-width: 961px) {
     .main-nav img {
         margin-left: -10px;
    }
}
 @media screen and (min-width: 768px) {
     #our-team {
         -webkit-box-orient: horizontal;
         -webkit-box-direction: normal;
             -ms-flex-direction: row;
                 flex-direction: row;
    }
  
     #why-us-image-right {
         width:35%;
         padding:10px;
    }
     #why-us-text {
         width: 70%;
         padding:10px;
         margin: 0 auto;
         text-align: center;
    }
   .circle-1, .circle-2, .circle-3 {
     width:100%;
   }
}
 @media screen and (max-width: 767px) {
   .circle-1, .circle-2, .circle-3 {
     width:100%;
     padding: 0;
     padding-bottom: 30px;
   } 
   #our-team {
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
             -ms-flex-direction: column;
                 flex-direction: column;
    }
     #why-us-wrapper {
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
             -ms-flex-direction: column;
                 flex-direction: column;
         -ms-flex-pack: distribute;
             justify-content: space-around;
    }
     #why-us-text {
         width: 100%;
         -webkit-box-ordinal-group:2;
             -ms-flex-order:1;
                 order:1;
         text-align: center;
    }
     #why-us-text h2 {
         text-align: center;
         border: 0;
         color: #222;
         margin-top: -60px;
         margin-bottom: 80px;
         font-size: 2em;
    }
     #why-us-image-right {
         width: 100%;
         -webkit-box-ordinal-group: 3;
             -ms-flex-order: 2;
                 order: 2;
    }
     #svg-wrapper {
         display: none;
    }
}
 @media screen and (min-width: 961px) {
   
}
  @media screen and (min-width:768px)and (max-width: 959px){
    #nav-id img {
     margin: -80px auto -110px auto;
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
      
      <nav class="main-nav" id="nav-id">
       <img src="images/logo.png" alt="logo">
        <ul>
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
      <div id="row-1">
        <h1 class="big-sound">Big Sound</h1>  
        <p>Give us your track and let us finish it for you, so you can focus on what matters</p>
        
        
        
      </div> <!-- ROW 1 END -->

        <div id="why-us-wrapper">
           
          <div id="svg-wrapper">
              <svg id="svg-image-1" width="250px" height="200px" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
      <g>
        <g>
            <g>
                <path d="M409.566,357.308c-0.563-8.9-7.987-15.974-17.033-15.974H119.467c-9.045,0-16.469,7.074-17.033,15.974L85.53,433.348
                    c-0.555,2.526,0.06,5.171,1.681,7.185c1.621,2.022,4.062,3.2,6.656,3.2h324.267c2.594,0,5.035-1.178,6.656-3.2
                    c1.621-2.014,2.236-4.659,1.681-7.185L409.566,357.308z M104.508,426.667l14.763-66.415c0.128-0.606,0.196-1.229,0.196-1.852
                    h273.067c0,0.623,0.068,1.246,0.196,1.852l14.763,66.415H104.508z"/>
                <g id="left-circle-g">
                <path id="left-circle" d="M149.982,211.089c-0.239-0.171-0.393-0.418-0.649-0.572c-0.333-0.196-0.708-0.213-1.05-0.358
                    c-6.067-3.302-12.911-5.359-20.284-5.359s-14.217,2.048-20.267,5.359c-0.358,0.145-0.734,0.162-1.075,0.358
                    c-0.256,0.154-0.41,0.401-0.64,0.572c-12.339,7.492-20.685,20.924-20.685,36.378s8.346,28.885,20.676,36.369
                    c0.239,0.179,0.393,0.427,0.657,0.589c0.546,0.316,1.126,0.521,1.698,0.7c5.914,3.089,12.518,5.009,19.635,5.009
                    c7.134,0,13.756-1.929,19.678-5.035c0.555-0.179,1.126-0.375,1.655-0.683c0.256-0.154,0.401-0.393,0.631-0.563
                    c12.348-7.484,20.702-20.924,20.702-36.386v-0.009C170.667,232.004,162.313,218.573,149.982,211.089z M152.115,255.701
                    c-1.084,3.183-2.756,6.059-4.932,8.533c-2.62-3.081-7.031-4.087-10.65-1.98c-3.661,2.108-4.992,6.485-3.575,10.308
                    c-1.604,0.324-3.26,0.503-4.958,0.503s-3.354-0.179-4.958-0.503c1.425-3.831,0.085-8.209-3.575-10.317
                    c-3.618-2.099-8.03-1.092-10.658,1.988c-2.167-2.483-3.84-5.359-4.924-8.533c3.977-0.725,7.049-4.045,7.049-8.235
                    s-3.072-7.509-7.049-8.235c1.075-3.149,2.731-5.999,4.864-8.465c1.647,1.946,4.002,3.055,6.46,3.055
                    c1.451,0,2.918-0.367,4.267-1.143c3.652-2.108,4.983-6.485,3.567-10.308c1.604-0.324,3.26-0.503,4.958-0.503
                    s3.362,0.179,4.966,0.503c-1.417,3.831-0.077,8.209,3.575,10.317c1.348,0.768,2.807,1.135,4.258,1.135
                    c2.458,0,4.804-1.109,6.451-3.046c2.142,2.466,3.789,5.316,4.872,8.465c-3.985,0.725-7.049,4.045-7.049,8.235
                    C145.075,251.657,148.147,254.976,152.115,255.701z"/>
              </g>
                <path d="M469.333,68.267H42.667C19.14,68.267,0,87.407,0,110.933v290.133c0,23.526,19.14,42.667,42.667,42.667h17.067
                    c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533H42.667c-14.114,0-25.6-11.486-25.6-25.6V110.933
                    c0-14.114,11.486-25.6,25.6-25.6h426.667c14.114,0,25.6,11.486,25.6,25.6v290.133c0,14.114-11.486,25.6-25.6,25.6h-17.067
                    c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h17.067c23.526,0,42.667-19.14,42.667-42.667V110.933
                    C512,87.407,492.86,68.267,469.333,68.267z"/>
                <path d="M179.456,375.467h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533c4.71,0,8.533-3.823,8.533-8.533
                    S184.166,375.467,179.456,375.467z"/>
                <path d="M145.323,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533c0,4.71,3.866,8.533,8.576,8.533s8.533-3.823,8.533-8.533
                    C153.856,396.356,150.033,392.533,145.323,392.533z"/>
                <path d="M333.056,375.467h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533s8.533-3.823,8.533-8.533
                    S337.766,375.467,333.056,375.467z"/>
                <path d="M367.189,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533c0,4.71,3.866,8.533,8.576,8.533
                    c4.71,0,8.533-3.823,8.533-8.533C375.723,396.356,371.9,392.533,367.189,392.533z"/>
                <path d="M329.216,205.952c-4.07-2.364-9.301-0.981-11.656,3.106c-6.776,11.691-10.359,24.969-10.359,38.409
                    s3.584,26.718,10.359,38.409c1.579,2.731,4.446,4.258,7.39,4.258c1.451,0,2.927-0.367,4.267-1.152
                    c4.087-2.364,5.478-7.578,3.106-11.657c-5.274-9.097-8.055-19.422-8.055-29.858s2.782-20.762,8.055-29.858
                    C334.694,213.53,333.303,208.316,329.216,205.952z"/>
                <path d="M465.067,102.4c-7.057,0-12.8,5.743-12.8,12.8s5.743,12.8,12.8,12.8s12.8-5.743,12.8-12.8S472.124,102.4,465.067,102.4z"
                    />
                <path d="M384,170.667H128c-42.351,0-76.8,34.458-76.8,76.8s34.449,76.8,76.8,76.8h256c42.351,0,76.8-34.458,76.8-76.8
                    S426.351,170.667,384,170.667z M384,307.2H128c-32.93,0-59.733-26.795-59.733-59.733S95.07,187.733,128,187.733h256
                    c32.93,0,59.733,26.795,59.733,59.733S416.93,307.2,384,307.2z"/>
                <path d="M46.933,409.6c7.057,0,12.8-5.743,12.8-12.8S53.99,384,46.933,384s-12.8,5.743-12.8,12.8S39.876,409.6,46.933,409.6z"/>
                <path d="M182.784,205.952c-4.087,2.364-5.478,7.578-3.106,11.656c5.274,9.097,8.055,19.422,8.055,29.858
                    s-2.782,20.762-8.055,29.858c-2.372,4.079-0.981,9.293,3.106,11.657c1.34,0.785,2.816,1.152,4.267,1.152
                    c2.944,0,5.811-1.527,7.39-4.258c6.775-11.691,10.359-24.969,10.359-38.409s-3.584-26.718-10.359-38.409
                    C192.085,204.979,186.854,203.597,182.784,205.952z"/>
                <path d="M46.933,128c7.057,0,12.8-5.743,12.8-12.8s-5.743-12.8-12.8-12.8s-12.8,5.743-12.8,12.8S39.876,128,46.933,128z"/>
                <g id="right-circle-g">
                <path id="right-circle" d="M405.982,211.089c-0.239-0.171-0.393-0.418-0.648-0.572c-0.333-0.196-0.708-0.205-1.05-0.358
                    c-6.067-3.302-12.911-5.359-20.284-5.359c-7.373,0-14.216,2.048-20.275,5.359c-0.35,0.145-0.725,0.162-1.067,0.358
                    c-0.256,0.154-0.41,0.401-0.64,0.572c-12.339,7.492-20.685,20.924-20.685,36.378s8.346,28.885,20.676,36.369
                    c0.239,0.179,0.393,0.427,0.657,0.589c0.546,0.316,1.126,0.521,1.698,0.7c5.914,3.089,12.518,5.009,19.635,5.009
                    c7.134,0,13.756-1.929,19.678-5.035c0.555-0.179,1.126-0.375,1.656-0.683c0.256-0.154,0.401-0.393,0.631-0.563
                    c12.348-7.484,20.702-20.924,20.702-36.386v-0.009C426.667,232.004,418.313,218.573,405.982,211.089z M408.115,255.701
                    c-1.084,3.183-2.756,6.059-4.932,8.533c-2.62-3.081-7.031-4.087-10.65-1.98c-3.661,2.108-4.992,6.485-3.575,10.308
                    c-1.604,0.324-3.26,0.503-4.958,0.503c-1.698,0-3.354-0.179-4.958-0.503c1.425-3.831,0.085-8.209-3.575-10.317
                    c-3.618-2.099-8.03-1.092-10.658,1.988c-2.167-2.483-3.84-5.359-4.924-8.533c3.977-0.725,7.049-4.045,7.049-8.235
                    s-3.072-7.509-7.049-8.235c1.075-3.149,2.731-5.999,4.864-8.465c1.655,1.946,4.002,3.055,6.46,3.055
                    c1.451,0,2.918-0.367,4.267-1.143c3.652-2.108,4.983-6.485,3.567-10.308c1.604-0.324,3.26-0.503,4.958-0.503
                    c1.698,0,3.362,0.179,4.966,0.503c-1.417,3.831-0.077,8.209,3.575,10.317c1.348,0.768,2.807,1.135,4.258,1.135
                    c2.458,0,4.804-1.109,6.451-3.046c2.142,2.466,3.789,5.316,4.873,8.465c-3.985,0.725-7.049,4.045-7.049,8.235
                    C401.075,251.657,404.147,254.976,408.115,255.701z"/>
              </g>
                <path d="M366.933,136.533c4.719,0,8.533-3.823,8.533-8.533c0-4.71-3.814-8.533-8.533-8.533H145.067
                    c-4.719,0-8.533,3.823-8.533,8.533c0,4.71,3.814,8.533,8.533,8.533H366.933z"/>
                <path d="M465.067,384c-7.057,0-12.8,5.743-12.8,12.8s5.743,12.8,12.8,12.8s12.8-5.743,12.8-12.8S472.124,384,465.067,384z"/>
            </g>
        </g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>

        <svg id="svg-image-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="250px" height="200px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
    <g>
        <g>
            <path d="M293.151,0H106.849c-27.614,0-50,22.386-50,50v300c0,27.614,22.386,50,50,50h186.303c27.613,0,50-22.386,50-50V50
                C343.151,22.386,320.765,0,293.151,0z M200,346c-35.898,0-65-29.102-65-65s29.102-65,65-65s65,29.102,65,65S235.897,346,200,346z
                 M295.642,177H104.357V49H295.64v128H295.642z"/>
            <circle cx="200" cy="281.048" r="25"/>
        </g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>

        <svg id="svg-image-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="200.909px" height="200.91px" viewBox="0 0 260.909 260.91" style="enable-background:new 0 0 260.909 260.91;"
         xml:space="preserve">
    <g>
        <g>
            <polygon points="87.808,57.891 83.831,57.891 83.831,75.782 74.329,75.782 74.329,89.038 83.831,89.038 83.831,109.914 
                87.808,109.914 87.808,89.038 98.413,89.038 98.413,75.782 87.808,75.782 		"/>
            <polygon points="133.323,56.403 129.347,56.403 129.347,74.293 119.84,74.293 119.84,87.549 129.347,87.549 129.347,108.425 
                133.323,108.425 133.323,87.549 143.929,87.549 143.929,74.293 133.323,74.293 		"/>
            <polygon points="178.834,54.906 174.857,54.906 174.857,72.796 165.355,72.796 165.355,86.053 174.857,86.053 174.857,106.933 
                178.834,106.933 178.834,86.053 189.438,86.053 189.438,72.796 178.834,72.796 		"/>
            <path d="M27.674,260.91h205.561c14.644,0,26.512-11.873,26.512-26.512V26.512C259.747,11.874,247.879,0,233.235,0H27.674
                C13.028,0,1.162,11.874,1.162,26.512v207.886C1.162,249.037,13.028,260.91,27.674,260.91z M85.819,243.243
                c-6.349,0-11.49-5.143-11.49-11.49c0-6.349,5.142-11.49,11.49-11.49c6.346,0,11.49,5.142,11.49,11.49
                C97.31,238.1,92.17,243.243,85.819,243.243z M85.819,211.982c-6.349,0-11.49-5.137-11.49-11.485
                c0-6.348,5.142-11.495,11.49-11.495c6.346,0,11.49,5.147,11.49,11.495C97.31,206.845,92.17,211.982,85.819,211.982z
                 M85.819,180.732c-6.349,0-11.49-5.142-11.49-11.49s5.142-11.49,11.49-11.49c6.346,0,11.49,5.142,11.49,11.49
                S92.17,180.732,85.819,180.732z M98.413,143.387H73.226v-12.93h25.187V143.387z M131.887,243.243
                c-6.346,0-11.49-5.143-11.49-11.49c0-6.349,5.144-11.49,11.49-11.49c6.346,0,11.487,5.142,11.487,11.49
                C143.374,238.1,138.232,243.243,131.887,243.243z M117.856,143.387v-12.93h25.187v12.93H117.856z M131.887,211.982
                c-6.346,0-11.49-5.137-11.49-11.485c0-6.348,5.144-11.495,11.49-11.495c6.346,0,11.487,5.147,11.487,11.495
                C143.374,206.845,138.232,211.982,131.887,211.982z M131.887,180.732c-6.346,0-11.49-5.142-11.49-11.49s5.144-11.49,11.49-11.49
                c6.346,0,11.487,5.142,11.487,11.49S138.232,180.732,131.887,180.732z M177.948,243.243c-6.348,0-11.49-5.143-11.49-11.49
                c0-6.349,5.143-11.49,11.49-11.49c6.344,0,11.49,5.142,11.49,11.49C189.438,238.1,184.302,243.243,177.948,243.243z
                 M162.486,143.387v-12.93h25.187v12.93H162.486z M177.948,211.982c-6.348,0-11.49-5.137-11.49-11.485
                c0-6.348,5.143-11.495,11.49-11.495c6.344,0,11.49,5.147,11.49,11.495C189.438,206.845,184.302,211.982,177.948,211.982z
                 M177.948,180.732c-6.348,0-11.49-5.142-11.49-11.49s5.143-11.49,11.49-11.49c6.344,0,11.49,5.142,11.49,11.49
                S184.302,180.732,177.948,180.732z M61.296,12.816h2.768H197.17h5.302v108.036H61.296V12.816z M53.342,245.458h-33.14v-66.942
                h33.14V245.458z M32.35,18.124c3.902,0,7.068,3.166,7.068,7.068c0,3.904-3.166,7.068-7.068,7.068s-7.068-3.164-7.068-7.068
                C25.282,21.29,28.448,18.124,32.35,18.124z M32.35,43.755c3.902,0,7.068,3.166,7.068,7.068c0,3.904-3.166,7.068-7.068,7.068
                s-7.068-3.164-7.068-7.068C25.282,46.921,28.448,43.755,32.35,43.755z M17.773,69.376h30.929v4.862H17.773V69.376z
                 M17.773,162.609h30.929v4.862H17.773V162.609z"/>
        </g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>

        <svg version="1.1" id="svg-image-4" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 403 403" style="enable-background:new 0 0 403 403;" xml:space="preserve">
    <g>
        <path id="woofer-cone-right" d="M201.5,174.506c-54.287,0-98.453,44.166-98.453,98.453s44.166,98.453,98.453,98.453c54.287,0,98.453-44.166,98.453-98.453
            S255.786,174.506,201.5,174.506z M201.5,356.411c-46.016,0-83.453-37.437-83.453-83.453s37.437-83.453,83.453-83.453
            s83.453,37.437,83.453,83.453S247.516,356.411,201.5,356.411z"/>
        <path d="M201.5,202.41c-38.9,0-70.548,31.648-70.548,70.549s31.648,70.549,70.548,70.549c38.901,0,70.549-31.648,70.549-70.549
            S240.401,202.41,201.5,202.41z M201.5,328.508c-30.629,0-55.548-24.919-55.548-55.549S170.87,217.41,201.5,217.41
            c30.63,0,55.549,24.919,55.549,55.549S232.13,328.508,201.5,328.508z"/>
        <path d="M201.5,249.89c-12.72,0-23.068,10.348-23.068,23.068s10.349,23.068,23.068,23.068c12.72,0,23.069-10.348,23.069-23.068
            S214.22,249.89,201.5,249.89z M201.5,281.027c-4.449,0-8.068-3.619-8.068-8.068s3.62-8.068,8.068-8.068s8.069,3.619,8.069,8.068
            S205.948,281.027,201.5,281.027z"/>
        <path d="M132.648,172.719c16.322,0,29.602-13.279,29.602-29.601s-13.279-29.602-29.602-29.602s-29.601,13.279-29.601,29.602
            S116.326,172.719,132.648,172.719z M132.648,128.516c8.051,0,14.602,6.55,14.602,14.602s-6.55,14.601-14.602,14.601
            s-14.601-6.55-14.601-14.601S124.597,128.516,132.648,128.516z"/>
        <path d="M235.676,73.655c-12.72,0-23.068,10.349-23.068,23.069s10.349,23.068,23.068,23.068s23.068-10.348,23.068-23.068
            S248.396,73.655,235.676,73.655z M235.676,104.792c-4.449,0-8.068-3.619-8.068-8.068s3.619-8.069,8.068-8.069
            s8.068,3.62,8.068,8.069S240.125,104.792,235.676,104.792z"/>
        <path d="M235.676,32.447c-35.442,0-64.277,28.834-64.277,64.277S200.234,161,235.676,161s64.276-28.834,64.276-64.277
            S271.118,32.447,235.676,32.447z M235.676,146c-27.171,0-49.277-22.105-49.277-49.277s22.106-49.277,49.277-49.277
            s49.276,22.105,49.276,49.277S262.847,146,235.676,146z"/>
        <path d="M295.844,0H107.156C89.976,0,76,13.977,76,31.156v340.688C76,389.023,89.976,403,107.156,403h188.688
            c17.18,0,31.156-13.977,31.156-31.156V31.156C327,13.977,313.024,0,295.844,0z M312,371.844c0,8.909-7.248,16.156-16.156,16.156
            H107.156C98.247,388,91,380.752,91,371.844V31.156C91,22.248,98.247,15,107.156,15h188.688C304.752,15,312,22.248,312,31.156
            V371.844z"/>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>


        <svg version="1.1" id="svg-image-5" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 403 403" style="enable-background:new 0 0 403 403;" xml:space="preserve">
    <g>
        <path id="woofer-cone-left" d="M201.5,174.506c-54.287,0-98.453,44.166-98.453,98.453s44.166,98.453,98.453,98.453c54.287,0,98.453-44.166,98.453-98.453
            S255.786,174.506,201.5,174.506z M201.5,356.411c-46.016,0-83.453-37.437-83.453-83.453s37.437-83.453,83.453-83.453
            s83.453,37.437,83.453,83.453S247.516,356.411,201.5,356.411z"/>
        <path d="M201.5,202.41c-38.9,0-70.548,31.648-70.548,70.549s31.648,70.549,70.548,70.549c38.901,0,70.549-31.648,70.549-70.549
            S240.401,202.41,201.5,202.41z M201.5,328.508c-30.629,0-55.548-24.919-55.548-55.549S170.87,217.41,201.5,217.41
            c30.63,0,55.549,24.919,55.549,55.549S232.13,328.508,201.5,328.508z"/>
        <path d="M201.5,249.89c-12.72,0-23.068,10.348-23.068,23.068s10.349,23.068,23.068,23.068c12.72,0,23.069-10.348,23.069-23.068
            S214.22,249.89,201.5,249.89z M201.5,281.027c-4.449,0-8.068-3.619-8.068-8.068s3.62-8.068,8.068-8.068s8.069,3.619,8.069,8.068
            S205.948,281.027,201.5,281.027z"/>
        <path d="M132.648,172.719c16.322,0,29.602-13.279,29.602-29.601s-13.279-29.602-29.602-29.602s-29.601,13.279-29.601,29.602
            S116.326,172.719,132.648,172.719z M132.648,128.516c8.051,0,14.602,6.55,14.602,14.602s-6.55,14.601-14.602,14.601
            s-14.601-6.55-14.601-14.601S124.597,128.516,132.648,128.516z"/>
        <path d="M235.676,73.655c-12.72,0-23.068,10.349-23.068,23.069s10.349,23.068,23.068,23.068s23.068-10.348,23.068-23.068
            S248.396,73.655,235.676,73.655z M235.676,104.792c-4.449,0-8.068-3.619-8.068-8.068s3.619-8.069,8.068-8.069
            s8.068,3.62,8.068,8.069S240.125,104.792,235.676,104.792z"/>
        <path d="M235.676,32.447c-35.442,0-64.277,28.834-64.277,64.277S200.234,161,235.676,161s64.276-28.834,64.276-64.277
            S271.118,32.447,235.676,32.447z M235.676,146c-27.171,0-49.277-22.105-49.277-49.277s22.106-49.277,49.277-49.277
            s49.276,22.105,49.276,49.277S262.847,146,235.676,146z"/>
        <path d="M295.844,0H107.156C89.976,0,76,13.977,76,31.156v340.688C76,389.023,89.976,403,107.156,403h188.688
            c17.18,0,31.156-13.977,31.156-31.156V31.156C327,13.977,313.024,0,295.844,0z M312,371.844c0,8.909-7.248,16.156-16.156,16.156
            H107.156C98.247,388,91,380.752,91,371.844V31.156C91,22.248,98.247,15,107.156,15h188.688C304.752,15,312,22.248,312,31.156
            V371.844z"/>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
              </svg>          
            </div>
          <div id="why-us-text">

            <h1>We Love <span>Music</span></h1>
            <p>Our entire team are music lovers and creators.</p>
            <p>We have 100 years of music industry experience combined. Our team consists of musicians, Ex record label owners and sound enigneers plsu many more. </p>
            <div id="button-div">
              <a href="#" class="myButton">Learn More</a>
            </div>
          </div>
          
         
        </div><!-- Why Us End-->
        
         <div id="row-2">
        <div class="title-wrapper">
          <h1>OUR TEAM</h1>  
        </div>
        <div id="our-team">
         
          <div class="circle circle-1">
            <img src="images/team-isco.jpg" alt="isco unspalsh"/>
            <h2>Isco Rodri</h2>
            <p>Isco have been a Sound Enginner for the past 10 years and he is our CTO. He also loves his puppy, Rocko</p>
          </div>  
          <div class="circle circle-2">
            <img src="images/team-milad.jpg" alt="Milad Darani"/>
            <h2>Milad Darani</h2>
            <p>With 14 years of Djing and producing music, Milad has a vast knowledge of this field and he is our Foounder and CEO</p>
          </div>  
        
          <div class="circle circle-3">
            <img src="images/team-Ella.jpg" alt="jacob-postuma-unsplash" />
            <h2>Ella Jackson</h2>
            <p>A wizard programmer, with 9 years of development experience. She is our head programmer and software engineer.</p>
          </div> 
          
        </div><!-- Our Team -->
        <table class="demo">
	  
	<thead>
	<tr>
		<th>&nbsp;</th>
		<th>Skill</th>
		<th>Hobby</th>
		<th>Fav. Movie</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<th>&nbsp;Milad</th>
		<td>&nbsp;Management</td>
		<td>&nbsp;Music</td>
		<td>&nbsp;Fast &amp; Furious 1</td>
	</tr>
	<tr>
		<th>&nbsp;Isco</th>
		<td>&nbsp;Sound Engineer</td>
		<td>&nbsp;Music</td>
		<td>&nbsp;Star Wars</td>
	</tr>
	<tr>
		<th>&nbsp;Ella</th>
		<td>&nbsp;Web Developer</td>
		<td>&nbsp;Music</td>
		<td>Anchorman&nbsp;</td>
	</tr>
	
	</tbody>
</table> 
       
    </div> <!-- Row 2 End -->
      
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

      <form action="http://www.scott-media.com/test/form_display.php" onsubmit="return newsletter_check(this)" method="post" class="tb-newsletter tb-style7">

          <div class="tb-form-field" id="form-footer">
              <input type="text" name="email" required="" placeholder="Email Address" class="footer-email">
              <input type="submit" class="footer-submit" value="&check;">
          </div>

      </form>
      <div class="sm-icons">
          <p><img src="images/svgs/brands/facebook-f.svg" alt="facebook"></p>
          <p id="twitter-icon"><img src="images/svgs/brands/twitter.svg" alt="facebook"></p>
          <p id="youtube-icon"><img src="images/svgs/brands/youtube.svg" alt="facebook"></p>
      </div>
      <div class="privacy">

          <a class="copyright" href="#">SOUNDCOMET &copy; 2019 All rights reserved </a>
      </div>
                    </div>

                </div>

            </div>
            <!-- FOOTER -->
       
         
         
      </section> <!-- WRAPPER END -->
      
   
   
  </body>
</html>