<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman", Times, serif;
            background-color: #dbeafe;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 430px;
            background-color: #ffffff;
            border: 2px solid #2563eb;
            border-radius: 15px;
            padding: 35px 40px;
            box-shadow: 0 8px 20px rgba(30, 58, 138, 0.18);
        }

        h1 {
            text-align: center;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 28px;
            font-size: 30px;
        }

        .message {
            padding: 10px 12px;
            border-radius: 7px;
            margin-bottom: 18px;
            text-align: center;
            font-size: 15px;
        }

        .error {
            color: #b91c1c;
            background-color: #fee2e2;
            border: 1px solid #fca5a5;
        }

        .success {
            color: #166534;
            background-color: #dcfce7;
            border: 1px solid #86efac;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #1e3a8a;
            font-weight: bold;
            margin-bottom: 7px;
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #93c5fd;
            border-radius: 7px;
            font-family: "Times New Roman", Times, serif;
            font-size: 16px;
            outline: none;
            background-color: #f8fbff;
        }

        input:focus {
            border-color: #cbd5e1;
            background-color: #f8fafc;
            box-shadow: none;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: none;
            border-radius: 7px;
            background-color: #2563eb;
            color: white;
            font-family: "Times New Roman", Times, serif;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        .register-link {
            text-align: center;
            margin-top: 22px;
        }

        .register-link a {
            color: #2563eb;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
        }

    </style>
</head>

<body>

    <div class="login-container">

        <h1>Login</h1>

        <?php if (isset($error)): ?>
            <div class="message error">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if (isset($success)): ?>
            <div class="message success">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= base_url('index.php/login') ?>">

            <div class="form-group">
                <label for="username">Username:</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </div>

            <button type="submit">Login</button>

        </form>

        <div class="register-link">
            <a href="<?= base_url('index.php/register') ?>">
                Don't have an account? Create!
            </a>
        </div>

    </div>

</body>
</html>