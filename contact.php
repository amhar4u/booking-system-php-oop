<?php

include 'header.php'
?>

<?php

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //   $email = $_POST['email'];
    //   $subject = $_POST['subject'];
    //   $service = $_POST['service'];

    
    //   $database = new Database($host, $dbName, $username, $password);

    //   $database->connect();

    //   $database->insertDataReview($email, $subject, $service);
    // }

?>
<br>
<div class="page-header bg text-center">
  <div class="container ">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white txt">Contect Us</h1>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>

<div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <h2 style="color: #20b2aa;">Tell About Our Service</h2><br>
        <form method="POST" Action="database/connection.php">
          <div class="form-group">
            <label for="email">Email</label>
            <input style="border-color:#20b2aa;border-width:2px;"type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input style="border-color:#20b2aa;border-width:2px;" type="text" name="subject" class="form-control" id="subject" placeholder="Enter the subject">
          </div>
          <div class="form-group">
            <label for="service">Our Service</label>
            <select style="border-color:#20b2aa;border-width:2px;" class="form-control" name="service" id="service">
              <option value="very poor">Very Poor</option>
              <option value="poor">Poor</option>
              <option value="good">Good</option>
              <option value="very good">Very Good</option>
            </select>
          </div>
                <script type="text/javascript">
                    function showMessage() {
                        alert("Sent Review Successfully.");
                    }
                </script>
          <button type="submit" class="btn " onClick="showMessage()" style= "background-color: #20b2aa;color: #fff; "
        onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#20b2aa'; this.style.color='#fff';">Submit</button>
        </form>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mx-auto">
        <div class="contact-container" style=" background-color: #20b2aa;padding: 20px;color: #fff;box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);"
        onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#20b2aa'; this.style.color='#fff';">
          <h4>Contact Details</h4>
          <p>Name: Pronto Tours</p>
          <p>Email: prontotours@gmail.com</p>
          <p>Contact No: 0776657107</p>
          <p>Opening Time: 7 days, 24 hours</p>
        </div>
      </div>
    </div>
  </div>


<?php

include 'footer.php'

?>