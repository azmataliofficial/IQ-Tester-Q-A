<?php
// session_start();  // ✅ PEHLE LINE PE YEH

// $conn = mysqli_connect("localhost", "root", "");
// $db = mysqli_select_db($conn, "mysql_files") or die("Database not connected");

// if (isset($_POST["submit"])) {
//     $email = $_SESSION["email"];  // ✅ Ab yeh work karega

//     $q1 = $_POST["q1"];
//     $q2 = $_POST["q2"];
//     $q3 = $_POST["q3"];
//     $q4 = $_POST["q4"];
//     $q5 = $_POST["q5"];
//     $q6 = $_POST["q6"];
//     $q7 = $_POST["q7"];
//     $q8 = $_POST["q8"];
//     $q9 = $_POST["q9"];
//     $q10 = $_POST["q10"];

//     // ... baki sab variables

//     $query = mysqli_query(
//         $conn,
//         "UPDATE iq_tester SET Question_1='$q1',Question_2='$q2',Question_3='$q3',Question_4='$q4',Question_5='$q5',Question_6='$q6',Question_7='$q7',Question_8='$q8',Question_9='$q9',Question_10='$q10' WHERE Email='$email'"
//     );

//     if ($query) {
//         header("Location: Result Show.php");
//         exit();
//     } else {
//         $error = "Submission failed";
//     }
// }
?>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "mysql_files") or die("Database not connected");

$result = false;
$score = 0;
$popup = "";

if (isset($_POST["submit"])) {

    $email = $_SESSION["email"];

    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $q9 = $_POST["q9"];
    $q10 = $_POST["q10"];

    // ✅ Correct Answers
    if ($q1 == "Delhi") $score++;
    if ($q2 == "Mars") $score++;
    if ($q3 == "Mahatma Gandhi") $score++;
    if ($q4 == "Pacific Ocean") $score++;
    if ($q5 == "Tiger") $score++;
    if ($q6 == "Rabindranath Tagore") $score++;
    if ($q7 == "Nitrogen") $score++;
    if ($q8 == "China") $score++;
    if ($q9 == "Australia") $score++;
    if ($q10 == "Mangalyaan") $score++;

    // Save answers
    mysqli_query(
        $conn,
        "UPDATE iq_tester SET Question_1='$q1',Question_2='$q2',Question_3='$q3',Question_4='$q4',Question_5='$q5',Question_6='$q6',Question_7='$q7',Question_8='$q8',Question_9='$q9',Question_10='$q10'WHERE Email='$email'"
    );

    // Result logic
    if ($score >= 6) {
        $popup = "🎉 PASS! You scored $score / 10";
    } else {
        $popup = "❌ FAIL! You scored $score / 10 ,You need more practice to pass. Better luck next time!";
    }

    $result = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQVision - Check Your IQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Mental.css">
    <script src="script.js"></script>
</head>
<style>
    :root {
        --primary-color: #F97316;
        --secondary-color: #FBBF24;
        --text-color: #1F2937;
        --bg-color: #FFFBEB;
        --accent-color: #EA580C;
        --white: #ffffff;
    }

    /* Test Container */
    .test-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 30px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .test-title {
        text-align: center;
        color: var(--white);
        font-size: 2.2rem;
        margin-bottom: 30px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    /* Question Cards */
    .question {
        background: var(--white);
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .question:hover {
        transform: translateY(-5px);
    }

    .question h3 {
        color: var(--text-color);
        font-size: 1.2rem;
        margin-bottom: 15px;
        border-left: 4px solid var(--primary-color);
        padding-left: 10px;
    }

    /* Answer Options */
    .ans {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .ans label {
        display: flex;
        align-items: center;
        padding: 12px 15px;
        background: var(--bg-color);
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .ans label:hover {
        background: var(--accent-color);
        border-color: var(--primary-color);
    }

    .ans input[type="radio"] {
        margin-right: 10px;
        width: 18px;
        height: 18px;
        accent-color: var(--primary-color);
    }

    /* Submit Button */
    .submit-container {
        text-align: center;
        margin-top: 30px;
    }

    .primary.btn {
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        color: var(--white);
        border: none;
        padding: 15px 40px;
        font-size: 1.1rem;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(var(--primary-color), 0.4);
        border: 2px solid var(--primary-color);
    }

    .primary.btn:hover {
        transform: scale(1.05);
        border: none;
        box-shadow: 0 8px 20px rgba(var(--primary-color), 0.6);
    }

    /* Radio Button Selection Effect */
    .ans input[type="radio"]:checked+span {
        font-weight: bold;
        color: var(--primary-color);
    }

    .ans label:has(input[type="radio"]:checked) {
        background: var(--bg-color);
        border-color: var(--primary-color);
        box-shadow: 0 3px 10px rgba(var(--primary-color), 0.2);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .test-container {
            margin: 20px;
            padding: 20px;
        }

        .ans {
            grid-template-columns: 1fr;
        }

        .question h3 {
            font-size: 1.1rem;
        }

        .primary.btn {
            padding: 12px 30px;
            font-size: 1rem;
        }
    }
</style>

<body>
    <!-- Header Section -->
    <header class="nav-bar">
        <div class="logo">IQ<span>Vision</span></div>
        <i class="fa-solid fa-bars menu-toggle"></i>
        <nav class="nav-links">
            <a href="Index.php#home">Home</a>
            <a href="Index.php#about">About Test</a>
            <a href="Index.php#contact">Contact</a>
            <a href="Login.php" class="nav-btn">Login</a>
        </nav>
    </header>

    <section class="test-container">
        <h2 class="test-title">🧠 IQ Assessment Test</h2>

        <form action="" method="post" class="iq-questions">

            <!-- Question 1 (Beginner) -->
            <div class="question">
                <h3>1. What is the capital of India?</h3>
                <div class="ans">
                    <label><input type="radio" name="q1" value="Mumbai"> A) Mumbai</label>
                    <label><input type="radio" name="q1" value="Delhi"> B) Delhi</label>
                    <label><input type="radio" name="q1" value="Chennai"> C) Chennai</label>
                    <label><input type="radio" name="q1" value="Kolkata"> D) Kolkata</label>
                    <!-- Answer: Delhi -->
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question">
                <h3>2. Which planet is known as the Red Planet?</h3>
                <div class="ans">
                    <label><input type="radio" name="q2" value="Earth"> A) Earth</label>
                    <label><input type="radio" name="q2" value="Mars"> B) Mars</label>
                    <label><input type="radio" name="q2" value="Jupiter"> C) Jupiter</label>
                    <label><input type="radio" name="q2" value="Venus"> D) Venus</label>
                    <!-- Answer: Mars -->
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question">
                <h3>3. Who is known as the Father of the Nation in India?</h3>
                <div class="ans">
                    <label><input type="radio" name="q3" value="Jawaharlal Nehru"> A) Jawaharlal Nehru</label>
                    <label><input type="radio" name="q3" value="Mahatma Gandhi"> B) Mahatma Gandhi</label>
                    <label><input type="radio" name="q3" value="Subhash Chandra Bose"> C) Subhash Chandra Bose</label>
                    <label><input type="radio" name="q3" value="Sardar Patel"> D) Sardar Patel</label>
                    <!-- Answer: Mahatma Gandhi -->
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question">
                <h3>4. What is the largest ocean in the world?</h3>
                <div class="ans">
                    <label><input type="radio" name="q4" value="Indian Ocean"> A) Indian Ocean</label>
                    <label><input type="radio" name="q4" value="Pacific Ocean"> B) Pacific Ocean</label>
                    <label><input type="radio" name="q4" value="Atlantic Ocean"> C) Atlantic Ocean</label>
                    <label><input type="radio" name="q4" value="Arctic Ocean"> D) Arctic Ocean</label>
                    <!-- Answer: Pacific Ocean -->
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question">
                <h3>5. Which is the national animal of India?</h3>
                <div class="ans">
                    <label><input type="radio" name="q5" value="Elephant"> A) Elephant</label>
                    <label><input type="radio" name="q5" value="Lion"> B) Lion</label>
                    <label><input type="radio" name="q5" value="Tiger"> C) Tiger</label>
                    <label><input type="radio" name="q5" value="Leopard"> D) Leopard</label>
                    <!-- Answer: Tiger -->
                </div>
            </div>

            <!-- Question 6 (Medium) -->
            <div class="question">
                <h3>6. Who wrote the national anthem of India?</h3>
                <div class="ans">
                    <label><input type="radio" name="q6" value="Rabindranath Tagore"> A) Rabindranath Tagore</label>
                    <label><input type="radio" name="q6" value="Munshi Premchand"> B) Munshi Premchand</label>
                    <label><input type="radio" name="q6" value="Swami Vivekananda"> C) Swami Vivekananda</label>
                    <label><input type="radio" name="q6" value="A.P.J Abdul Kalam"> D) A. P. J. Abdul Kalam</label>
                    <!-- Answer: Rabindranath Tagore -->
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question">
                <h3>7. Which gas is most abundant in Earth’s atmosphere?</h3>
                <div class="ans">
                    <label><input type="radio" name="q7" value="Oxygen"> A) Oxygen</label>
                    <label><input type="radio" name="q7" value="Nitrogen"> B) Nitrogen</label>
                    <label><input type="radio" name="q7" value="Carbon Dioxide"> C) Carbon Dioxide</label>
                    <label><input type="radio" name="q7" value="Hydrogen"> D) Hydrogen</label>
                    <!-- Answer: Nitrogen -->
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question">
                <h3>8. Which country invented paper?</h3>
                <div class="ans">
                    <label><input type="radio" name="q8" value="India"> A) India</label>
                    <label><input type="radio" name="q8" value="China"> B) China</label>
                    <label><input type="radio" name="q8" value="Egypt"> C) Egypt</label>
                    <label><input type="radio" name="q8" value="Greece"> D) Greece</label>
                    <!-- Answer: China -->
                </div>
            </div>

            <!-- Question 9 (Advanced) -->
            <div class="question">
                <h3>9. Which is the smallest continent in the world?</h3>
                <div class="ans">
                    <label><input type="radio" name="q9" value="Europe"> A) Europe</label>
                    <label><input type="radio" name="q9" value="Australia"> B) Australia</label>
                    <label><input type="radio" name="q9" value="Antarctica"> C) Antarctica</label>
                    <label><input type="radio" name="q9" value="SouthAmerica"> D) South America</label>
                    <!-- Answer: Australia -->
                </div>
            </div>

            <!-- Question 10 (Advanced) -->
            <div class="question">
                <h3>10. Which Indian satellite was the first mission to Mars?</h3>
                <div class="ans">
                    <label><input type="radio" name="q10" value="Chandrayaan-1"> A) Chandrayaan-1</label>
                    <label><input type="radio" name="q10" value="Mangalyaan"> B) Mangalyaan</label>
                    <label><input type="radio" name="q10" value="Gaganyaan"> C) Gaganyaan</label>
                    <label><input type="radio" name="q10" value="Aryabhata"> D) Aryabhata</label>
                    <!-- Answer: Mangalyaan -->
                </div>
            </div>



            <!-- Submit Button -->
            <div class="submit-container">
                <button type="submit" class="primary btn" name="submit">Submit Test →</button>
            </div>
        </form>
    </section>
    <?php if ($result == true) { ?>
        <script>
            alert("<?php echo $popup; ?>");
        </script>
    <?php } ?>

</body>

</html>