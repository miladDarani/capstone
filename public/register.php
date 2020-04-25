<?php
require __DIR__ . "/../config.php";
$title = "Register";
require __DIR__ . "/../includes/header_inc.php";
?>


<div id="wrapper1">


    <div id="error-div">
        
        <div id="txt"></div>
    </div>

    <form name="form1" action="handle.php" method="post" novalidate>

        <div id="box">
            <h1 class="header"><?=$title?></h1>
        </div>



        <!-- First name & Last name -->
        <div class="fl_name">

            <div class="f_name">
            <input name="first_name" type="text" placeholder="First Name *" required value="" />
          </div>

            <div class="l_name">
                <input name="last_name" type="text" placeholder="Last Name *" required value="" />
            </div>
        
        </div>
        
        <p>
          <input name="email" id="email" type="text" placeholder="Type your e-mail address *" required value="" />
        </p>

        <p>
            <input name="phone" type="text" placeholder="Phone Number *" required value="" />
        </p>

        <p>
            <input name="postal_code" type="text" placeholder="Postal Code i.e R2J1L5 or 90210 *" required value="" />
        </p>

       

        <p>
            <input name="age" type="text" placeholder="Your Age"  value="" />
        </p>

        <div class="buttons">
            <p><button type="submit">GET STARTED</button></p>
            <p><button>RESET</button></p>
        </div>

    </form> <!-- end form -->
</div><!-- /wrapper -->













<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>