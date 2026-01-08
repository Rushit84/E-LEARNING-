<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login E-learning</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Background Gradient Animation */
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(-45deg, #1d2671, #c33764, #0f9b0f, #1f4037);
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

        /* Login Form Styling */
        .form-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 320px;
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
            background: #ff4b2b;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background: #ff416c;
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
            color: #ffe259;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>E-Learning Login</h2>
        <form method="POST">
            <input type="text" name="student_name" placeholder="Student Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <a href="signup.php">Don't have an account? Sign Up</a>
        </form>
    </div>
</body>

</html>
