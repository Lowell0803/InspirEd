<!DOCTYPE html>
<html>
<head>
    <title>InspirEd - Login</title>
    <link rel="stylesheet" href="css\login.css">

    <link rel="icon" type="image/x-icon" href="img\logo1.ico">
</head>
<body>
<div class="container">
    <div class="box form-box">
        <header>Login</header>
        <form action="includes/check_login.php" method="post">
            <div class="field input">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="e.g Juan Dela Cruz">
            </div>

            <div class="field input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="********">
            </div>

            <div class="field">
                <input type="submit" value="Login" name="submit" class="btn">
            </div>
        </form>
        <a href="index.php" id="back-to-home">← Back to Home</a>
    </div>
</div>

<!-- JS CODE -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');

        usernameInput.addEventListener('focus', function() {
            if (usernameInput.value.trim() === '') {
                usernameInput.placeholder = '';
            }
        });

        usernameInput.addEventListener('blur', function() {
            if (usernameInput.value.trim() === '') {
                usernameInput.placeholder = 'e.g Juan Dela Cruz';
            }
        });

        passwordInput.addEventListener('focus', function() {
            if (passwordInput.value.trim() === '') {
                passwordInput.placeholder = '';
            }
        });

        passwordInput.addEventListener('blur', function() {
            if (passwordInput.value.trim() === '') {
                passwordInput.placeholder = '******';
            }
        });
    });
</script>

</body>
</html>