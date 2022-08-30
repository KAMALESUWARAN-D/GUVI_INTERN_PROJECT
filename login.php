<!DOCTYPE html>
<html en="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style1.css" />
        <script type="text/javascript" src="script1.js"></script>
    </head>

    <body>
    <form action="select.php" method="post">
    <form name="login" action="Profile.php" onsubmit="return log()">
        <div class="container">
            <div class="form">
                    <div class="tilte">
                    <h4>LOGIN</h4>
                    </div>
                    <div class="input-field">
                        <label>User name:</label>
                        <input type="email" name="uname" id="uname" placeholder="Enter your email" required>
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Enter your password" required>
                    </div>
                    <div class="input-field button">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </div>
                <div id="Error"></div>
                <div class="login-signup">
                    <span class="text">Not a account
                    <a href="Register.php" class="text signup-text">Signup now</a>
                    </span>
                </div>
            </div>       
        </div>
    </form>
    </form>
    </body>

</html>