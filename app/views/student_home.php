<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dc3a70;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #580124;
            margin-top: 250px;
            font-size: 65px;
            text-shadow: 2px 2px 4px #d5cbcf;
            font-weight: bold;
        }

        p {
            color: #7b0534;
            font-size: 25px;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            padding: 10px 18px;
            margin: 5px;
            background-color: #a60c49;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(201, 170, 170, 0.84);
        }

        a:hover {
            background-color: #330015;
        }
    </style>
</head>
<body>

    <h1>Welcome to my Page!!</h1>

    <p>Explore my student profile and personal details.</p>

    <a href="<?= site_url('student'); ?>">HOME</a> 
    <a href="<?= site_url('student/profile'); ?>">STUDENT PROFILE</a>

</body>
</html>