<?php
require __DIR__ . "/../config.php";
$title = "Pricing";

require __DIR__ . "/../includes/header_inc.php";


?>
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