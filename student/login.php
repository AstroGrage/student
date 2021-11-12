<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management system</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="image/red_logo.png" /> </a>
            <div class="nav-links">
                <i class="fa fa-window-close"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars"></i>
        </nav>

        <!-- ======= Hero Section ======= -->
        <?php

        if (isset($_GET['error'])) {
            echo ("<h5 class='text-danger'>" . $_GET['error'] . "</h5>");
        }

        ?>
        <!--Login-->

        <div class="container text-center text-md-left" data-aos="fade-up">
            <div class="container">

                <h3 class="login-heading mb-4">Please supply valid login credentials</h3>
                <?php

                if (isset($_GET['error'])) {
                    echo ("<h5 class='text-danger'>" . $_GET['error'] . "</h5>");
                }

                ?>
                <div class="user">
                    <form action="process.php" method="POST">
                        <label for="inputUser">Username:</label>
                        <input type="text" class="form-control" name="fullname" placeholder="fullname:" required autofocus>

                        </br>

                        <label for="inputPass">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <br>
                        <input type="submit" name="submit" value="Login" class="btn btn-success btn-lg btn-block">
                </div>
                </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
                </form>
            </div>
        </div>
</body>

</html>