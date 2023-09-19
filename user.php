<?php
$conn = new mysqli("localhost", "root", "","pronto");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

</head>
<body>
     <div class="header">
     <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo titl" >  
                            <h1>Pronto <span>Tours</span></h1>   
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>7 days,24 Hours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Contact Us</h3>
                                        <p>+94776657107</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>prontotours@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    
<nav class="navbar navbar-expand-lg navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link color" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link color" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link color" href="pakage.php">Price</a></li>
                <li class="nav-item"><a class="nav-link color" href="booking.php">Booking</a></li>
                <li class="nav-item"><a class="nav-link color" href="contact.php">Contact</a></li>
                <li class="nav-item ml-auto"><a style="margin-left:600px;background-color:white;color:#20b2aa;width:100px;height:35px;
                text-align:center;border-radius:50px;padding: 3px;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='white'; this.style.color='#20b2aa';" 
                class="nav-link color" href="index.php">Logout</a></li>
                
                </li>
            </ul>
        </div>
    </div>
</nav>


<br>
<div class="page-header bg text-center">
    <div class="container ">
        <div class="row">
        <div class="col-12">
            <h1 class="text-white txt">View booking</h1>
        </div>
        </div>
    </div>
</div>
<br>

<?php


$stmt = $conn->prepare("SELECT * FROM booking");
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
   
    echo '<table>
             <tr>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Contact</th>
                 <th>Package</th>
                 <th>Amount</th>
             </tr>';

    
    while ($row = $result->fetch_assoc()) {
       
        echo '<tr>
                 <td>' . $row['name'] . '</td>
                 <td>' . $row['email'] . '</td>
                 <td>' . $row['contact'] . '</td>
                 <td>' . $row['package'] . '</td>
                 <td>' . $row['amount'] . '</td>
             </tr>';
    }

    
    echo '</table>';
} else {
    
    echo 'No data found.';
}


$stmt->close();
$conn->close();
?>


<?php

include 'footer.php';


?>