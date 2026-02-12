<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Mental.css">
    <title>Mental Health Result</title>
    <script src="script.js"></script>
</head>

<body>
    <div class="overlay"></div>
    <header class="nav-bar">
        <div class="logo">IQ<span>Vision</span></div>
        <nav class="nav-links">
            <a href="Index.php#home">Home</a>
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
                    Remember me <a href="#">Forgot password</a>
                </label>
            </div>

            <button type="submit" name="submit" class="submit-btn">Log In</button>

            <div class="login-link">
                Don't have an account? <a href="SignUp.php">Sign Up</a>
            </div>

            <?php
            $con = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($con, "mysql_files") or die("Database not connected");

            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];

                $query = mysqli_query($con, "SELECT * FROM iq_tester WHERE Email='$email' AND Password='$password'");
                $row = mysqli_fetch_array($query);

                if ($row) {
                    session_start();
                    $_SESSION["email"] = $email;
                    header("Location: Result Show.php");
                } else {
                    echo "<p style='color:red;'>Invalid email or password</p>";
                }
            }

            // if (isset($_POST["submit"])) {
            //     static $status = 0;

            //     $email = $_POST["email"];
            //     $password = $_POST["password"];

            //     $query = mysqli_query($con, "SELECT Question_1, Question_2, Question_3, Question_4, Question_5, Question_6, Question_7, Question_8, Question_9, Question_10 FROM iq_tester WHERE Email='$email' AND Password='$password'");
            //     $row = mysqli_fetch_array($query);

            //     if ($row["Question_1"] == "32") {
            //         $status++;
            //     }
            //     if ($row["Question_2"] == "Carrot") {
            //         $status++;
            //     }
            //     if ($row["Question_3"] == "School") {
            //         $status++;
            //     }
            //     if ($row["Question_4"] == "E") {
            //         $status++;
            //     }
            //     if ($row["Question_5"] == "Same weight") {
            //         $status++;
            //     }
            //     if ($row["Question_6"] == "N") {
            //         $status++;
            //     }
            //     if ($row["Question_7"] == "12") {
            //         $status++;
            //     }
            //     if ($row["Question_8"] == "Water") {
            //         $status++;
            //     }
            //     if ($row["Question_9"] == "199") {
            //         $status++;
            //     }
            //     if ($row["Question_10"] == "$0.05") {
            //         $status++;
            //     }
            //     if ($status >= 7) {
            //         echo "<p style='color:green;'>You passed the test</p>";
            //     } else {
            //         echo "<p style='color:red;'>You failed the test</p>";
            //     }
            // }

            ?>
        </form>
    </div>
</body>

</html>