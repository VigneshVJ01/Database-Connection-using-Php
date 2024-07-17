<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email)&& !empty($password) && !is_numeric($email))
        {
            $query = "insert into form (fullname, email, password) values ('$fullname', '$email', '$password')";

            mysqli_query($con, $query);

            echo "<script type ='text/javascript'> alert('Successfully Register')</script>";

        }

        else{
            echo "<script type ='text/javascript'> alert('Please Enter Some Valid Information')</script>";
   
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup for Sellas Innovations</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .signup-container h2 {
            margin-top: 0;
            text-align: center;
            margin-bottom: 20px; 
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
        }

        .checkbox-group label {
            margin-left: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #6a0dad; 
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4b0674; 
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Signup for Stellar Innovations</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="fullname">FullName:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="offers" name="offers">
                <label for="offers">Send me Special offers, personalized recommendations, and learning tips <br> <br></label>
            </div>
            <button type="submit">Signup</button>
        </form>
        <p>Already have an account? <a href="vjlogin.php">Login</a></p>
    </div>
</body>
</html>