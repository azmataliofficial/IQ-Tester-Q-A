<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Mental.css">
    <title>Admin Dashboard - IQVision</title>
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

    /* Button */
    .btn {
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        color: white;
        border: none;
        padding: 14px 32px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: block;
        margin: 0 auto 40px;
        box-shadow: 0 4px 15px rgba(255, 115, 22, 0.3);
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(255, 115, 22, 0.4);
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));   
    }

    .btn:active {
        transform: translateY(-1px);
    }

    /* Records Table */
    .records {
        background: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
        max-height: 600px;
        overflow-y: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 1200px;
    }

    thead {
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        color: white;
        position: sticky;
        top: 0;
        z-index: 10;
    }

    thead th {
        padding: 18px 15px;
        text-align: left;
        font-weight: 600;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    thead th:last-child {
        border-right: none;
    }

    tbody tr {
        border-bottom: 1px solid var(--bg-color);
        transition: all 0.3s ease;
    }

    tbody tr:hover {
        background: var(--bg-color);
        transform: scale(1.005);
    }

    tbody td {
        padding: 16px 15px;
        color: var(--text-color);
        font-size: 0.95rem;
        border-right: 1px solid var(--bg-color);
    }

    tbody td:last-child {
        border-right: none;
    }

    /* Table Scrollbar */
    .records::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    .records::-webkit-scrollbar-track {
        background: var(--bg-color);
        border-radius: 4px;
    }

    .records::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 4px;
    }

    .records::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));   
    }

    /* Loading State */
    .loading {
        text-align: center;
        padding: 40px;
        color: var(--text-color);
        font-style: italic;
    }

    /* No Records Message */
    .no-records {
        text-align: center;
        padding: 40px;
        color: var(--accent-color);
        font-size: 1.2rem;
        background: var(--bg-color);
        border-radius: 10px;
        margin: 20px 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .nav-bar {
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .nav-links {
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .container {
            padding: 20px;
        }

        .title {
            font-size: 2rem;
        }

        .records {
            padding: 10px;
        }

        table {
            font-size: 0.85rem;
        }

        thead th,
        tbody td {
            padding: 12px 8px;
        }
    }

    @media (max-width: 480px) {
        .logo {
            font-size: 1.8rem;
        }

        .title {
            font-size: 1.6rem;
        }

        .btn {
            padding: 12px 24px;
            font-size: 1rem;
        }

        .nav-links a {
            padding: 8px 16px;
            font-size: 0.95rem;
        }
    }

    /* Table Row Colors */
    tbody tr:nth-child(even) {
        background: var(--bg-color);
    }

    tbody tr:nth-child(even):hover {
        background: var(--hover-color);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .container {
        animation: fadeIn 0.5s ease-out;
    }
</style>

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

    <section class="container">
        <h2 class="title">Administrator Dashboard</h2>
        <form method="POST">
            <input type="submit" class="btn" name="submit" value="Load Records">
        </form>

        <div class="records">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email ID</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Q5</th>
                        <th>Q6</th>
                        <th>Q7</th>
                        <th>Q8</th>
                        <th>Q9</th>
                        <th>Q10</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($con, "mysql_files") or die("Database not connected");

                    if (isset($_POST["submit"])) {
                        $query = mysqli_query($con, "SELECT * FROM iq_tester");
                        $hasRecords = false;

                        while ($row = mysqli_fetch_array($query)) {
                            $hasRecords = true;
                    ?>
                            <tr>
                                <td><?php echo $row["First_Name"]; ?></td>
                                <td><?php echo $row["Last_Name"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Password"]; ?></td>
                                <td><?php echo $row["Phone_Number"]; ?></td>
                                <td><?php echo $row["Question_1"]; ?></td>
                                <td><?php echo $row["Question_2"]; ?></td>
                                <td><?php echo $row["Question_3"]; ?></td>
                                <td><?php echo $row["Question_4"]; ?></td>
                                <td><?php echo $row["Question_5"]; ?></td>
                                <td><?php echo $row["Question_6"]; ?></td>
                                <td><?php echo $row["Question_7"]; ?></td>
                                <td><?php echo $row["Question_8"]; ?></td>
                                <td><?php echo $row["Question_9"]; ?></td>
                                <td><?php echo $row["Question_10"]; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>