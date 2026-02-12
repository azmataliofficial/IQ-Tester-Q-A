<?php
session_start();
$email = $_SESSION["email"];

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "mysql_files") or die("Database not connected");

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

    /* Reset and Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    /* Container */
    .container {
        background: var(--bg-color);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        padding: 40px;
        width: 100%;
        max-width: 1200px;
        margin: 20px auto;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Header */
    .header {
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid var(--secondary-color);
    }

    .header h2 {
        color: var(--text-color);
        font-size: 2.2rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    /* User Info */
    .user-info {
        background: linear-gradient(90deg, var(--bg-color), var(--white));
        border: 1px solid var(--secondary-color);
        border-radius: 12px;
        padding: 15px 25px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .user-info strong {
        color: var(--text-color);
        font-size: 1rem;
        font-weight: 600;
        min-width: 60px;
    }

    .user-info span {
        color: var(--text-color);
        font-size: 1.1rem;
        font-weight: 500;
        background: white;
        padding: 8px 16px;
        border-radius: 8px;
        border: 1px solid var(--secondary-color);
        flex: 1;
        word-break: break-all;
    }

    /* Table Wrapper */
    .table-wrapper {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--secondary-color);
        margin-bottom: 30px;
    }

    /* Table Header */
    .table-header {
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        position: sticky;
        top: 0;
        z-index: 10;
    }

    .table-header table {
        width: 100%;
        border-collapse: collapse;
    }

    .table-header th {
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 18px 15px;
        text-align: center;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .table-header th:last-child {
        border-right: none;
    }

    /* Table Body */
    .table-body {
        max-height: 300px;
        overflow-y: auto;
        background: var(--bg-color);
    }

    .table-body table {
        width: 100%;
        border-collapse: collapse;
    }

    .table-body td {
        padding: 20px 15px;
        text-align: center;
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--text-color);
        border-bottom: 1px solid var(--secondary-color);
        border-right: 1px solid var(--secondary-color);
        background: white;
    }

    .table-body td:last-child {
        border-right: none;
    }

    .table-body tr:last-child td {
        border-bottom: none;
    }

    /* Table Scrollbar */
    .table-body::-webkit-scrollbar {
        width: 8px;
    }

    .table-body::-webkit-scrollbar-track {
        background: var(--bg-color);
    }

    .table-body::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 4px;
    }

    .table-body::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
    }

    /* Button Wrapper */
    .btn-wrapper {
        text-align: center;
        margin-top: 30px;
    }

    .back-btn {
        display: inline-block;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        color: white;
        text-decoration: none;
        padding: 14px 35px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(var(--primary-color), 0.3);
        border: none;
        cursor: pointer;
    }

    .back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(var(--primary-color), 0.4);
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .back-btn:active {
        transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        body {
            padding: 10px;
        }

        .container {
            padding: 25px;
            border-radius: 16px;
        }

        .header h2 {
            font-size: 1.8rem;
        }

        .user-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
            padding: 12px;
        }

        .user-info strong {
            min-width: auto;
        }

        .user-info span {
            width: 100%;
        }

        .table-header th {
            padding: 15px 10px;
            font-size: 0.85rem;
        }

        .table-body td {
            padding: 15px 10px;
            font-size: 1.1rem;
        }

        .back-btn {
            padding: 12px 25px;
            font-size: 0.95rem;
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .header h2 {
            font-size: 1.5rem;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .table-header table,
        .table-body table {
            min-width: 800px;
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
    <div class="container">
        <div class="header">
            <h2>🎯 Your Test Results</h2>
        </div>

        <div class="user-info">
            <strong>Email:&nbsp;&nbsp;</strong> <?php echo ($email); ?>
        </div>

        <div class="table-wrapper">
            <div class="table-header">
                <table>
                    <thead>
                        <tr>
                            <th>Answer 1</th>
                            <th>Answer 2</th>
                            <th>Answer 3</th>
                            <th>Answer 4</th>
                            <th>Answer 5</th>
                            <th>Answer 6</th>
                            <th>Answer 7</th>
                            <th>Answer 8</th>
                            <th>Answer 9</th>
                            <th>Answer 10</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-body">
                <table>
                    <tbody>
                        <?php
                        $query = mysqli_query($con, "SELECT * FROM iq_tester WHERE Email='$email'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td class="form-data"><?php echo $row["Question_1"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_2"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_3"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_4"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_5"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_6"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_7"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_8"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_9"]; ?></td>
                                <td class="form-data"><?php echo $row["Question_10"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="btn-wrapper">
            <a href="Index.php" class="back-btn">← Back to Home</a>
        </div>
    </div>
</body>

</html>