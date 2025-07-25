 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Event Management System - ERAS</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
        <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">WELLCOME TO THE ERAS</span>
                <span class="site-heading-lower">EVENT MANAGEMENT SERVICE</span>
            </h1>
        </header>
        <?php
    $name = $_POST['person_name'];
    $email = $_POST['person_email'];

    echo "Welcome $name, and your email is $email";
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? 'Guest';
    echo "Hello, " . htmlspecialchars($username);
    }   else {
    echo "Invalid request";
    }
    ?>


?>
