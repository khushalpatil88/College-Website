<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>collage website</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous" />
</head>

<body>



    <section class="sub-header">
        <nav>
            <a href="index.html"> <img src="images/logo.png" alt="" /></a>
            <div class="nav-links">
                <!-- <i class="fa-solid fa-xmark" onclick="hidemenu()"></i> -->
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                    <li><a href="login.html">LOGIN</a></li>
                </ul>
            </div>
            <!-- <i class="fa-solid fa-bars" onclick="showmenu()"></i> -->
        </nav>
        <h2>create a Acount</h2>

        <form id="registerForm" action="register.php" method="post">
            <div class="container">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required><br>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" id="email" required><br>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="password" required><br>


                <label for="confirmPassword"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="con_psw" id="confirmPassword" required><br>


                <button type="submit">Register</button>
            </div>
        </form>



        <footer>

            <h5>About us</h5>
            <p>We’re a leading research university with a heart. Founded in the decade that the U.S. Constitution was signed, we’re the nation’s oldest Catholic and Jesuit university. We’re a community of people who bridge our disparate experiences and identities. Meet the people and places that make Eduford home.</p>
        </footer>


        <script>
            <?php
            if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
                echo "alert('You are logged in successfully!');";
                // Unset session variable to prevent the alert from being displayed again
                unset($_SESSION['login_success']);
            }
            ?>
            document.getElementById("registerForm").addEventListener("submit", function(event) {
                // Prevent the form from submitting
                event.preventDefault();

                // Retrieve the values of password and confirm password fields
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;

                // Check if passwords match
                if (password === confirmPassword) {
                    // If passwords match, allow form submission
                    document.getElementById("registerForm").submit();
                } else {
                    // If passwords don't match, display an alert
                    alert("Password and Confirm Password do not match");
                }
            });
        </script>
</body>

</html>