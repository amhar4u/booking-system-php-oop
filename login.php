<?php
   include 'header.php';
?>
<br>

<div class="page-header bg text-center">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white txt">Login Here</h1>
            </div>
        </div>
    </div>
</div>
<br><br>
    <div class="shadow-box">
        <form method="POST" action="database/logindb.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
               <center> <input type="submit" value="Login"></center>
            </div>
        </form>
    </div>
<br>
<?php

include 'footer.php';

?>