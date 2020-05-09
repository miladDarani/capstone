<?php

//7. add config file
require __DIR__ . "/../config.php";
$title = "Register";
require __DIR__ . "/../includes/header_inc.php";
?>




<!-- 11. Add the value to values field to make them sticky -->
<div class="container">

    <form name="form1" id="form1" action="handle.php" method="post" novalidate>

            <h1><?=$title?> with S O U N D C O M E T:</h1>
            <div class="box1">
                <p>  
                    <label for="first_name">First Name</label><br />
                    <input name="first_name" type="text" placeholder="First Name *" maxlength="45"  value="<?=old('first_name', $post)?>" /> <?=err('first_name', $errors)?>
                 
                </p>

                <p>  
                    <label for="last_name">Last Name</label><br />
                    <input name="last_name" type="text" placeholder="Last Name *" maxlength="45"  value="<?=old('last_name', $post)?>" /><?=err('last_name', $errors)?>
                </p>

                 <p>  
                    <label for="nick_name">Nick Name</label><br />
                    <input name="nick_name" type="text" placeholder="Nick Name *"  maxlength="45" value="<?=old('nick_name', $post)?>" /><?=err('nick_name', $errors)?>
                </p>
            
            
            
            
             <p>
                <label for="street">Street</label><br />
                <input name="street" id="street" type="text" placeholder="Type your street address *"  value="<?=old('street', $post)?>" maxlength="145" /><?=err('street', $errors)?>
            </p>


             <p>
                <label for="city">City</label><br />
              <input name="city" id="city" type="text" placeholder="City *" maxlength="145" value="<?=old('city', $post)?>" /><?=err('city', $errors)?>
            </p>

            <p>
                <label for="postal_code">Postal Code</label><br />
                <input name="postal_code" type="text" maxlength="7" placeholder="Postal Code i.e R2J1L5 or 90210 *"  value="<?=old('postal_code', $post)?>" /><?=err('postal_code', $errors)?>
            </p>

            <p>
              <label for="province">Province</label><br />  
              <input name="province" id="province" type="text" placeholder="Province or State i.e ON or NY *"  value="<?=old('province', $post)?>" maxlength="50"/><?=err('province', $errors)?>
            </p>
            


            
        </div> 
       
        <!-- /.box1 -->
        <div class="box2">

       
             <p>
              <label for="country">Country</label><br />
              <select id="country" name="country" class="custom-select">
                  <option value="Canada">Canada</option>
                  <option value="USA">USA</option>
                  
                </select>
            </p>

            <p>
                <label for="phone">Phone</label><br />
                <input name="phone" type="text" maxlength="20" placeholder="Phone Number *"  value="<?=old('phone', $post)?>" /><?=err('street', $errors)?>
            </p>

            <p>
              <label for="email">E-Mail</label><br />
              <input name="email" id="email" type="text" maxlength="45" placeholder="Type your e-mail address *"  value="<?=old('email', $post)?>" /><?=err('email', $errors)?>
            </p>

            <p>
              <label for="email2">Confirm E-Mail</label><br />
              <input name="email2" id="email2" type="text" maxlength="45" placeholder="Type your e-mail address again *"  value="<?=old('email2', $post)?>" /><?=err('email2', $errors)?>
            </p>


    

            <p>
              <label for="password">Password</label><br />
              <input name="password" id="password" type="text" maxlength="255" placeholder="Type your Password *"  value="" /><?=err('password', $errors)?>
            </p>

            <p>
              <label for="password2">Confirm Password</label><br />
              <input name="password2" id="password2" type="text" maxlength="255" placeholder="Type your Password again *"  value="" /><?=err('password2', $errors)?>
            </p>



            <p>
                <label for="age">Age</label><br />
                <input name="age" type="text" placeholder="Your Age" maxlength="3"  value="<?=old('age', $post)?>" /><?=err('age', $errors)?>
            </p>

           <div class="btn-div-sm"><p><button class='submit-button' type="submit">SUBMIT</button></p></div>
        </div>  
        
        <!-- /.box2 -->

      
    </form> <!-- end form -->

</div>














<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>