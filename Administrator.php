<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Mental.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Administrator-page</title>
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
                <h2>Admin - Block</h2>
                <p>This page access by admin</p>
            </div>

            <div class="form-group">
                <div class="input-with-icon">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control" id="username" name="emp_id" placeholder="Enter Username" required>
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
                    Forgot password <a href="#">Click to reset</a>
                </label>
            </div>

            <button type="submit" name="submit" class="submit-btn">Log In</button>

            <?php
            if (isset($_POST["submit"])) {
                $emp_id = $_POST["emp_id"];
                $password = $_POST["password"];

                if ($emp_id == "admin" && $password == "admin") {
                    header("Location: Show admin.php");
                } else {
                    echo "<p style='color:red;'>Invalid administrator ID or password</p>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>