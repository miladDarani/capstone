<?php

//7. add config file
require __DIR__ . "/../config.php";
$title = "Register";
require __DIR__ . "/../includes/header_inc.php";
?>



<div id="error-div">
    <div id="txt">
        <!-- 8. if there are errors do this: -->
        <?php if(count($errors) > 0) : ?>
            
           <div class="errors">
               <ul>
                   <?php foreach ($errors as $error) : ?>

                        <li><?=$error?></li>

                   <?php endforeach; ?>  
               </ul>
           </div>
        
        <?php endif; ?>
       
    </div>
</div>
<!-- 11. Add the value to values field to make them sticky -->
<div class="container">
    <div id="box">
    <h1 class="header"><?=$title?></h1>
</div>
    <form name="form1" id="form1" action="handle.php" method="post" novalidate>


            <div class="box1">
                <p>  
                    <label for="first_name">First Name</label><br />
                    <input name="first_name" type="text" placeholder="First Name *"  value="<?=old('first_name', $post)?>" />
                 
                </p>

                <p>  
                    <label for="last_name">Last Name</label><br />
                    <input name="last_name" type="text" placeholder="Last Name *"  value="<?=old('last_name', $post)?>" />
                </p>

                 <p>  
                    <label for="nick_name">Nick Name</label><br />
                    <input name="nick_name" type="text" placeholder="Nick Name *"  value="<?=old('nick_name', $post)?>" />
                </p>
            
            
            
            
             <p>
                <label for="street">Street</label><br />
                <input name="street" id="street" type="text" placeholder="Type your street address *"  value="<?=old('street', $post)?>" />
            </p>


             <p>
                <label for="city">City</label><br />
              <input name="city" id="city" type="text" placeholder="City *"  value="<?=old('city', $post)?>" />
            </p>

            <p>
                <label for="postal_code">Postal Code</label><br />
                <input name="postal_code" type="text" placeholder="Postal Code i.e R2J1L5 or 90210 *"  value="<?=old('postal_code', $post)?>" />
            </p>

            <p>
              <label for="province">Province</label><br />  
              <input name="province" id="province" type="text" placeholder="Province or State i.e ON or NY *"  value="<?=old('province', $post)?>" />
            </p>
            


            <p><button type="submit">SUBMIT</button></p>
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
                <input name="phone" type="text" placeholder="Phone Number *"  value="<?=old('phone', $post)?>" />
            </p>

            <p>
              <label for="email">E-Mail</label><br />
              <input name="email" id="email" type="text" placeholder="Type your e-mail address *"  value="<?=old('email', $post)?>" />
            </p>

            <p>
              <label for="email">Confirm E-Mail</label><br />
              <input name="email2" id="email2" type="text" placeholder="Type your e-mail address again *"  value="<?=old('email2', $post)?>" />
            </p>


    

            <p>
              <label for="password">Password</label><br />
              <input name="password" id="password" type="text" placeholder="Type your Password *"  value="" />
            </p>

            <p>
              <label for="password2">Confirm Password</label><br />
              <input name="password2" id="password2" type="text" placeholder="Type your Password again *"  value="" />
            </p>


     





            <p>
                <label for="age">Age</label><br />
                <input name="age" type="text" placeholder="Your Age"  value="<?=old('age', $post)?>" />
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