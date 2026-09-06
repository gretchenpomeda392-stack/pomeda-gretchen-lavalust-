<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 25px;
        }
        .container {
            width: 100%;
            max-width: 1000px;
        }

        h1 {
            color: #0b387b;
            margin-bottom: 8px;
            font-size: 30px;
            text-align: center;
        }
        .sub {
            color: #4a6fa5;
            font-size: 16px;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 400;
        }
        .table-container {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead {
            background: #064388;
            color: white;
        }
        th {
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;

            color: #333;
            text-align: center;
            font-size: 15px;
        }
        @media (max-width: 768px) {

            body {
                padding: 15px;
            }

            h1 {
                font-size: 22px;
            }

            .subtitle {
                font-size: 14px;
            }

            th,
            td {
                padding: 8px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Users View</h1>
        <p class="sub"> List of Registered Users</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id']; ?></td>
                            <td><?= $user['firstname']; ?></td>
                            <td><?= $user['lastname']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['username']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>