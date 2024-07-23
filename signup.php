<?php include('include/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        /* Main content styles */
        main {
            padding: 20px;
        }

        main h2 {
            text-align: center;
        }

        /* Form styles */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form input[type="phone"],
        form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }

        /* Google OAuth button styles */
        .google-btn {
            background-color: #dd4b39;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .google-btn:hover {
            background-color: #c23321;
        }

        /* Error message styles */
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <main>
        <!-- Signup form -->
        <h2>Signup Form</h2>

        <form action="process_signup.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="conpassword">Confirm Password:</label>
            <input type="password" id="conpassword" name="conpassword" placeholder="Confirm your password" required>

            <button type="submit" name="signup">Sign Up</button>

            <div>
                <p>Already have an account? <a href="signin.php">Sign In</a></p>
            </div>
        </form>
    </main>
</body>
</html>

<?php include('include/footer.php') ?>
