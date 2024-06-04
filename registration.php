<?php

include_once('include/header.php');
?>


<section id="registration">
    <div class="container">
        <form action="registration-check.php" method="post">
            <h2>Registration On your account</h2>
          <?php
                 if(isset($_SESSION['alert'])){
                    
                 ?>

            <div class="alert" style="background-color: #f95959;color:white;font-size:15px;padding:15px;border-radius:12px">
               <?php
               echo $_SESSION['alert']['message'];
               unset ($_SESSION['alert'])?>
               
               </div>
               
                <?php
                 } 
                ?>
              
            
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="enter you name" name="name" required>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="enter you Email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="enter you password" name="password" required>
            <label for="number">Number</label>
            <input type="text" id="number" placeholder="enter you number" name="number" required>
            <button type="submit" name="registration_submit">Submit</button>
        </form>
    </div>
</section>
<?php


unset($_SESSION['abcd']);
include_once('include/footer.php'); ?>