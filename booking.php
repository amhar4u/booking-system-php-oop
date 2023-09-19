<?php

include 'header.php'

?>

<?php


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $contact = $_POST['contact'];
//     $package = $_POST['package'];
//     $amount=$_POST['amount'];
  
   
//     $database = new Database($host, $dbName, $username, $password);
  
//     $database->connect();
  
//     $database->insertDataBooking($name,$email, $contact, $package,$amount);
//   }
?>

    <br>
    <div class="page-header bg text-center">
    <div class="container ">
        <div class="row">
        <div class="col-12">
            <h1 class="text-white txt">Book Here</h1>
        </div>
        </div>
    </div>
    </div>
    <br>
    <div class="form-container">
        <form method="POST" Action="database/connection.php">
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-input">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-input">
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" id="contact" name="contact" class="form-input">
            </div>
            <div class="form-group">
                <label for="country" class="form-label">Package:</label>
                <select id="package" name="package" class="form-select">
                    <option value="">Select a Pakage</option>
                    <option value="gold">Gold</option>
                    <option value="silver">Silver</option>
                    <option value="brownce">Brownce</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount" class="form-label">Amount:</label>
                <input type="text" id="amount" name="amount" class="form-input">
            </div>
                 <script type="text/javascript">
                    function showMessage() {
                        alert(" Booking Successfully.");
                    }
                </script>
           <center><button type="submit" onClick="showMessage()" class="form-button" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#20b2aa'; this.style.color='#fff';">Submit</button></center> 
        </form>
    </div>

<?php

include 'footer.php'

?>