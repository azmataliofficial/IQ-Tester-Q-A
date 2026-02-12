<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Mental.css">
    <title>Sign In</title>
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
                <h2>Log-In</h2>
                <p>Unlock your IQ Level.</p>
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

            <div class="terms">
                <input type="checkbox" id="agreeTerms" required>
                <label for="agreeTerms">
                    Remember me <a href="Forgot password.php">Forgot password</a>
                </label>
            </div>

            <button type="submit" name="submit" class="submit-btn">Log In</button>

            <div class="login-link">
                Don't have an account? <a href="SignUp.php">Sign Up</a>
            </div>
            <?php
            $conn = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($conn, "mysql_files") or die("Database not connected");

            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];

                $query = mysqli_query($conn, "SELECT * FROM iq_tester WHERE Email='$email' AND Password='$password'");
                $row = mysqli_fetch_array($query);

                if ($row) {
                    session_start();
                    $_SESSION["email"] = $email;
                    header("Location: Test.php");
                } else {
                    echo "Invalid email or password";
                }
            }

            ?>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>