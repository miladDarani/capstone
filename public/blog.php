<?php

$title = "Blog";
require __DIR__ . "/../../config.php";
require __DIR__ . "/../includes/header_inc.php";


?>
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

 <?php 


require __DIR__ . "/../includes/footer_inc.php";

?>