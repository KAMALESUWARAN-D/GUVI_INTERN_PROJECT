<!DOCTYPE html>
<html en="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style1.css" />
        
    </head>
    <body>
        <div class="container">
            <div class="form">
            <h4>Profile</h4>
            <span>
            <?php 
            session_start();
            echo "NAME:";
            echo $_SESSION["uname"];
            echo "<br>";
            echo "EMAIL-ID:";
            echo $_SESSION["email"];
            echo "<br>";
            echo "PHONE NUMBER:";
            echo $_SESSION["number"];
            echo "<br>";
            ?></span>
            <div class="login-signup">
            <a href="login.php">Logout</a>
            </div>
            </div>
        </div>
    <body>
</html>