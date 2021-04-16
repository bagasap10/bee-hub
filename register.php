<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">   
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BeeHub</title>
</head>
<body>
    <header>
        <div id="header-left">
            <img src="./assets/menu icon.png" alt="">
        </div>
        <div id="header-center">
            <img src="./assets/icon.png" alt="">
            <h1 class="orange">BeeHub</h1>
        </div>
        <div id="header-right">
            <div class="link">
                <a href="">Login</a>
            </div>
            <div class="link">
                <a href="">Register</a>
            </div>
        </div>
    </header>

<!-- Register Form -->

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4"></div>
            <form action="register.php" method="post">
                <h3 class="text-center">Register</h3>

                <div class="from-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control from-control-lg">
                </div>

                <div class="from-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control from-control-lg">
                </div>

                <div class="from-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control from-control-lg">
                </div>

                <div class="from-group">
                    <label for="passwordconf">Confirm Password</label>
                    <input type="password" name="passwordconf" class="form-control from-control-lg">
                </div>

                <div class="form-group">
                    <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up </button>
                </div>
                <p class="text-center">Already a member?<a href="./login.php">Sign In</a></p>
            </form>
            </div>
        </div>
    </div>



</body>
</html>