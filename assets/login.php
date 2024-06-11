<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .container.login {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .form-container, .image-container {
            flex: 1;
            padding: 20px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container">
    
</div>
<header class="header" data-header>
    <div class="container">

      <a href="" class="logo">
        <h2>webNestle</h2>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">
        <div class="container">
          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-navbar-link>Home</a>
            </li>

            <li>
              <a href="#features" class="navbar-link" data-navbar-link>Features</a>
            </li>

            <li>
              <a href="#service" class="navbar-link" data-navbar-link>Service</a>
            </li>

            <li>
              <a href="#blog" class="navbar-link" data-navbar-link>Blog</a>
            </li>

            <li>
              <a href="#newsletter" class="navbar-link" data-navbar-link>Newsletter</a>
            </li>

          </ul>
        </div>
      </nav>

      <button class="btn btn-secondary">
        <span> <a style = "color : white;"  href="login.php"> Get Started </a></span>
        <ion-icon name="chevron-forward-outline"></ion-icon>
      </button>

    </div>
</header> 


<!-- Body part -->

<div class="container login">
        <div class="form-container">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required />
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required />
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline">
                                    <input type="radio" name="gender" value="m" id="male" required /> Male
                                </label>
                                <label for="female" class="radio-inline">
                                    <input type="radio" name="gender" value="f" id="female" required /> Female
                                </label>
                                <label for="others" class="radio-inline">
                                    <input type="radio" name="gender" value="o" id="others" required /> Others
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="text" class="form-control" id="number" name="phone" required />
                        </div>
                        <input type="submit" class="btn btn-primary" />
                    </form>
                </div>
                <div class="panel-footer text-right">
                    <small>&copy; GUB web Team</small>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img src="assets/images/login.gif" alt="Login Image">
        </div>
</div>

</body>
</html>
