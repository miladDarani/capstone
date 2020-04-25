<?php
require __DIR__ . "/../config.php";
$title = "Register";
require __DIR__ . "/../includes/header_inc.php";
?>


<div id="wrapper1">

    <h1>Milad Darani - Assignment 1 - Form Validation</h1>

    <div id="error-div">
        <p id =error onclick="startTime()"></p>
        <div id="txt"></div>
    </div>

    <form name="form1" action="handle.php" method="post" novalidate>

        <div id="box">
            <h1 class="header">Sign-up Form Example</h1>
        </div>



        <!-- First name & Last name -->
        <div class="fl_name">

            <div class="f_name">
            <input onchange="checkForNumbers(this)" name="First-Name" type="text" placeholder="First Name *" required/>
          </div>

            <div class="l_name">
                <input onchange="checkForNumbers(this)" name="Last-Name" type="text" placeholder="Last Name *" required/>
            </div>
        
        </div>
        
        <p>
          <input onchange="checkEmail(this)" name="E-Mail" id="email" type="text" placeholder="Type your e-mail address *" required/>
        </p>

        <p>
            <input onchange="checkPhone(this)" name="Phone#" type="text" placeholder="Phone Number *" required/>
        </p>

        <p>
            <input  onchange="checkPostal(this)"  name="Postal-Code" type="text" placeholder="Postal Code i.e R2J1L5 *" required/>
        </p>

        <p>
         <input onchange="checkURL(this)"  id="url" name="URL" type="text" placeholder="Enter Website | example: http://john.com"/>
        </p>

        <p>
            <input onchange="checkAge(this)" name="Age" type="text" placeholder="Your Age" />
        </p>

        <div class="buttons">
            <p><button type="submit">GET STARTED</button></p>
            <p><button onclick="resetForm(this)">RESET</button></p>
        </div>

    </form> <!-- end form -->
</div><!-- /wrapper -->













<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>