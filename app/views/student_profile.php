<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dc3a70;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 700px;
            margin: 60px auto;
            background-color: #e380a4;
            padding: 40px;
            box-shadow: 4px 4px 8px rgba(201, 170, 170, 0.84);
        }

        h1 {
            text-align: center;
            color: #580124;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px #d5cbcf;
            font-weight: bold;
        }

        .prof-info p {
            font-size: 16px;
            color:  #580124;
            padding: 10px;
            margin: 5px 0;
        }

        .prof-info a {
            color: #580124;
            text-decoration: none;
            margin-left: 5px;
            font-weight: bold;
        }

        .prof-info a:hover {
            color: #330015;
        }

        .nav {
            text-align: center;
            margin-top: 25px;
        }

        .nav a {
            display: inline-block;
            text-decoration: none;
            background-color: #a60c49;
            color: white;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .nav a:hover {
            background-color: #330015;
        }

    </style>
</head>

<body>

    <div class="container">

        <h1>STUDENT INFORMATION</h1>

        <div class="prof-info">

            <p><strong>Student ID:</strong> <?= $student_id ?></p>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Course:</strong> <?= $course ?></p>
            <p><strong>Year Level:</strong> <?= $year ?></p>
            <p><strong>Section:</strong> <?= $section ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Address:</strong> <?= $address ?></p>
            <p><strong>Contact Number:</strong> <?= $contact_number ?></p>
            <p><strong>Skills:</strong> <?= $skills ?></p>
            <p><strong>Hobbies:</strong> <?= $hobbies ?></p>
            <p><strong>Profile Description:</strong> <?= $profile_description ?></p>

            <p>
                <strong>Social Media:</strong>
                <a href="<?= $social_media['facebook'] ?>" target="_blank">
                    Facebook
                </a>
            </p>

        </div>

        <div class="nav">
            <a href="<?= site_url('student'); ?>">HOME</a>
            <a href="<?= site_url('student/profile'); ?>">STUDENT PROFILE</a>
        </div>


    </div>

</body>
</html>