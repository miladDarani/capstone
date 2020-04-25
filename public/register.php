<?php
require __DIR__ . "/../config.php";
$title = "Register";
require __DIR__ . "/../includes/header_inc.php";
?>

<div id="box">
    <h1 class="header"><?=$title?></h1>
</div>

<div id="error-div">
    <div id="txt"></div>
</div>
<div class="container">

    <form name="form1" id="form1" action="handle.php" method="post" novalidate>

        

<!-- First name & Last name -->

            

           
            <div class="box1">
                <p>  
                    <label for="first_name">First Name</label><br />
                    <input name="first_name" type="text" placeholder="First Name *" required value="" />
                 
                </p>
                <p>  
                    <label for="last_name">Last Name</label><br />
                    <input name="last_name" type="text" placeholder="Last Name *" required value="" />
                </p>

                 <p>  
                    <label for="last_name">Nick Name</label><br />
                    <input name="last_name" type="text" placeholder="Last Name *" required value="" />
                </p>
            
            
            
            
             <p>
                <label for="street">Street</label><br />
                <input name="street" id="street" type="text" placeholder="Type your street address *" required value="" />
            </p>


             <p>
                <label for="city">City</label><br />
              <input name="city" id="city" type="text" placeholder="City *" required value="" />
            </p>

            <p>
                <label for="postal_code">Postal Code</label><br />
                <input name="postal_code" type="text" placeholder="Postal Code i.e R2J1L5 or 90210 *" required value="" />
            </p>

            <p>
              <label for="province">Province</label><br />  
              <input name="province" id="province" type="text" placeholder="Province or State i.e ON or NY *" required value="" />
            </p>
            


            <p><button type="submit">SUBMIT</button></p>
        </div> 
        <!-- /.box1 -->
        <div class="box2">

       
             <p>
              <label for="country">Country</label><br />
              <input name="country" id="country" type="text" placeholder="Country *" required value="" />
            </p>

            <p>
                <label for="phone">Phone</label><br />
                <input name="phone" type="text" placeholder="Phone Number *" required value="" />
            </p>

            <p>
              <label for="email">E-Mail</label><br />
              <input name="email" id="email" type="text" placeholder="Type your e-mail address *" required value="" />
            </p>

            <p>
              <label for="email">Confirm E-Mail</label><br />
              <input name="email2" id="email2" type="text" placeholder="Type your e-mail address again *" required value="" />
            </p>


    

            <p>
              <label for="password">Password</label><br />
              <input name="password" id="password" type="text" placeholder="Type your Password *" required value="" />
            </p>

            <p>
              <label for="email">Confirm Password</label><br />
              <input name="password2" id="password2" type="text" placeholder="Type your Password again *" required value="" />
            </p>


     





            <p>
                <label for="age">Age</label><br />
                <input name="age" type="text" placeholder="Your Age"  value="" />
            </p>

            <p><button>RESET</button></p>
        </div>  
        <!-- /.box2 -->
            <div class="buttons">
                
                
            </div>
      
    </form> <!-- end form -->
</div>














<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>