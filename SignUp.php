<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Mental.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Sign-Up Page</title>
    <script src="script.js"></script>
</head>
<body>
    <div class="overlay"></div>
    <header class="nav-bar">
        <div class="logo">IQ<span>Vision</span></div>
        <nav class="nav-links">
            <a href="Index.php">Home</a>
            <a href="Index.php#about">About test</a>
            <a href="Index.php#contact">Contact</a>
        </nav>
    </header>
    <div class="container">
        <form class="signup-form" id="signupForm" method="post">
            <div class="form-header">
                <h2>Create Account</h2>
                <p>Sign up to get started with your free account</p>
            </div>

            <div class="form-group">
                <div class="input-with-icon">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control" id="firstName" name="fname" placeholder="First Name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="input-with-icon">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control" id="lastName" name="lname" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="input-with-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
            </div>

            <div class="form-group">
                <div class="input-with-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <button type="button" class="password-toggle" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <div class="input-with-icon">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" class="form-control" id="contactNumber" name="phnumber" placeholder="Mobile Number" required>
                </div>
            </div>

            <div class="terms">
                <input type="checkbox" id="agreeTerms" required>
                <label for="agreeTerms">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
            </div>

            <button type="submit" name="submit" class="submit-btn">Create Account</button>

            <div class="divider">
                <span>Or sign up with</span>
            </div>

            <div class="login-link">
                Already have an account? <a href="Login.php">Log In</a>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "mysql_files") or die("Please check database name.");

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phnumber = $_POST['phnumber'];
                $sql = "INSERT INTO iq_tester (First_Name, Last_Name, Email, Password, Phone_Number) VALUES ('$fname', '$lname', '$email', '$password', '$phnumber')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<p style='color: green;text-align:center;'>Sign-Up Successful</p>";
                } else {
                    echo "<p style='color: red;text-align:center;'>Sign-Up Failed</p>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>