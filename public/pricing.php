<?php
require __DIR__ . "/../config.php";
$title = "Pricing";

require __DIR__ . "/../includes/header_inc.php";

use Capstone\LogModel;
$log= new LogModel();
$log->addLog($arr);
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
                
                <li>
                    <ul id="includes-ul1">
                        <li><p>3 Songs mastered</p></li>  
                        <li><p>3 Songs mixed</p></li>  
                        <li><p>E-mail support</p></li>  
                        <li><p>Upto 3 re-edits</p></li>  
                    </ul>  
                </li>
               
                <li>
                    <a class="pricebutton" href="#"> Check Out</a>
                </li>

            </ul>
            
            <ul class="plan-ul pro">

                <li class="plan-title">PRO</li>
                <li><p>Digital Guru</p></li>
                <li><p class="monthly">paid monthly</p></li>
                <li class="title"><strong>$12/mo</strong><br /></li>

                <li><p><strong>INCLUDES</strong></p><br /></li>
                <li>
                    <ul id="includes-ul2">
                        <li><p>6 Songs mastered</p></li>  
                        <li><p>6 Songs mixed</p></li>  
                        <li><p>E-mail support</p></li>  
                        <li><p>Upto 4 re-edits</p></li>  
                    </ul>  
                </li>

                <li><a class="pricebutton" href="#"> Check Out</a></li>

            </ul>
                
            <ul class="plan-ul">

                <li class="plan-title">PRO +</li>
                <li><p>Serious Artist</p></li>
                <li><p class="monthly">paid monthly</p></li>
                <li class="title"><strong>$15/mo</strong></li>
                <li><p><strong>INCLUDES</strong></p><br /></li>

                <li>
                    <ul id="includes-ul3">
                        <li><p>Unlimited songs mastered</p></li>  
                        <li><p>15 songs mixed</p></li>  
                        <li><p>E-mail support</p></li>  
                        <li><p>Upto 4 re-edits</p></li>  
                    </ul>  
                </li>

                <li><a class="pricebutton" href="#"> Check Out</a></li>

            </ul>
        </div>

      </div> <!-- ROW 1 END -->


      <section id="row2">

        <div id="row2-title">
            <h1>Hear the difference for yourself</h1>
        </div>

<!--        SOUNDCLOUD SECTION         -->
        <div id="soundcloud">
            <div >
                <div class="soundcloud-wrapper">
                    <iframe width="600" height="450" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/679309221&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                </div>
            </div>
        </div>  

      </section>

<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>