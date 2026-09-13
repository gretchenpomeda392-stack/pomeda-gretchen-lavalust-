<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<style>
    body {
        font-family: "Times New Roman", serif;
        background-color: #dbeafe;
        margin: 0;
        padding: 0;

        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .login-container {
        background-color: white;
        width: 400px;
        padding: 30px;
        border: 2px solid #2563eb;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    h1 {
        text-align: center;
        color: #1e3a8a;
        margin-bottom: 25px;
    }

    label {
        display: block;
        color: #1e3a8a;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #2563eb;
        border-radius: 6px;
        box-sizing: border-box;
        font-family: "Times New Roman", serif;
        font-size: 16px;
    }

    input:focus {
        outline: none;
        border: 2px solid #1e3a8a;
    }

    .submit-container {
        text-align: center;
        margin-top: 10px;
    }

    button {
        background-color: #2563eb;
        color: white;
        border: none;
        padding: 10px 30px;
        border-radius: 6px;
        cursor: pointer;
        font-family: "Times New Roman", serif;
        font-size: 16px;
    }

    button:hover {
        background-color: #1e3a8a;
    }
</style>
</head>
<body>

<div class="login-container">
    <h1>Login</h1>
    <form action="<?= site_url('login') ?>" method="POST">
        <label for="username">Username</label>
        <input 
            type="text" 
            id="username" 
            name="username" 
            placeholder="Enter username"
            required
        >

        <label for="password">Password</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Enter password"
            required
        >

        <label for="confirm_password">Confirm Password</label>
        <input 
            type="password" 
            id="confirm_password" 
            name="confirm_password" 
            placeholder="Confirm password"
            required
        >

        <div class="submit-container">
            <button type="submit">Submit</button>
        </div>

    </form>

</div>
</body>
</html>
