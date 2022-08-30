<!DOCTYPE html>
<html en="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style1.css" />
        <script type="text/javascript" src="script1.js"></script>
    </head>

    <body>
    <form action="connect.php" method="post">
        <form name="register" action="Profile.php" onsubmit="return reg()" >
            <div class="container">
                <div class="form">
                    <div class="tilte">
                        <h4>Registration</h4>
                    </div>
                    <div class="input-field">
                        <label>Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-field">
                        <label>Email Id</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email id" required>
                    </div>
                    <div class="input-field">
                        <label>Phone number</label>
                        <input type="text"  name="number" id="number" placeholder="Enter your Phone number" required>
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password"  name="pwd1" id="pwd1" placeholder="Enter the password" required>
                    </div>
                    <div class="input-field">
                        <label>Re-enter Password</label>
                        <input type="password" name="pwd2" id="pwd2" placeholder="Re-enter the password" required>
                    </div>
                    <div class="input-field button">
                        <input type="submit"  name="register" id="register" value="Register">
                    </div>
                </div>
                <div class="login-signup">
                    <span class="text">Already account
                    <a href="login.php" class="text signin-text">Sign in</a>
                    </span>
                </div>
            </div>
        </form>
    </form>
    </body>
</html>