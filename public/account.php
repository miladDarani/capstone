<?php
require __DIR__ . "/../config.php";
$title = "Account";

require __DIR__ . "/../includes/header_inc.php";


?>
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
      
      
      
<?php 



require __DIR__ . "/../includes/footer_inc.php";

?>