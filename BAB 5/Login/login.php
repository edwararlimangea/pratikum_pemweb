<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: /dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = 'user';
    $password = 'pass';

    $inputUsername = $_POST['username'] ?? '';
    $inputPassword = $_POST['password'] ?? '';

    if ($inputUsername === $username && $inputPassword === $password) {

        $_SESSION['loggedin'] = true;
        header('Location: /dashboard.php');
        exit;
    } else {
        $error = 'Username atau password salah';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
<section>
    <div class="container">
        <header>
            <div class="logo">
                <img src="/logo-removebg-preview.png" alt="" />
            </div>
            <nav>
                <ul class="menu" id="menu">
                    <li><a href="/Home/index.html" class="btn_login">HOME</a></li>
                    <li><a href="/Register/index.html" class="btn_register">REGISTER</a></li>
                </ul>
            </nav>
        </header>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2>LOGIN</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline" id="OnClick"></ion-icon>
                        <input type="email" name="username" required />
                        <label for="" id="DOM">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline" id="onclick"></ion-icon>
                        <input type="password" name="password" id="password-input" />
                        <label for="" id="AddEventListener">Password</label>
                    </div>
                    <?php if (isset($error)) : ?>
                        <div class="error"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <div class="forget">
                        <label for=""><input type="checkbox" />Remember Me</label>
                        <a href="#" id="Lupa">Forget Password?</a>
                    </div>
                    <button type="submit" id="Login">Log in</button>
                    <div class="register">
                        <p1>
                            Tidak Punya Akun
                            <a href="#" id="PromptBox">Register</a>
                        </p1>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <h4 id="Prompt_Box">&copy; Tribun News 2024</h4>
        </footer>
    </div>
</section>
<script src="/Js/script.js"></script>
<script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
></script>
</body>
</html>
