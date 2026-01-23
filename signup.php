<?php
$conn = new mysqli("localhost", "root", "", "elearning1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['student_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];

    // 🔎 Check if email already exists
    $check = $conn->prepare("SELECT id FROM students WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        // Email already exists
        echo "<script>alert('Email already registered. Please use another email or login.'); window.location='signup.php';</script>";
    } else {
        // Insert new user
        $sql = $conn->prepare("INSERT INTO students (student_name, email, password, city, mobile) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $name, $email, $password, $city, $mobile);

        if ($sql->execute()) {
            echo "<script>alert('Signup successful. Redirecting to login page'); window.location='login.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $check->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup - E-Learning</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* 🌈 Animated Gradient Background */
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(-45deg, #ff512f, #dd2476, #24c6dc, #514a9d);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* 📝 Form Container Styling */
        .form-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container h2 {
            color: #fff;
            margin-bottom: 20px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            outline: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.85);
            font-size: 14px;
        }

        .form-container input[type="submit"] {
            width: 95%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background: #36d1dc;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background: #5b86e5;
        }

        .form-container a {
            display: block;
            margin-top: 15px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .form-container a:hover {
            color: #ffde59;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>E-Learning Signup</h2>
        <form method="POST">
            <input type="text" name="student_name" placeholder="Student Name" required>
            <input type="email" name="email" placeholder="Email ID" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="city" placeholder="City">
            <input type="text" name="mobile" placeholder="Mobile Number">
            <input type="submit" value="Sign Up">
            <a href="login.php">Already registered? Login</a>
        </form>
    </div>
</body>

</html>
