<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="form-value">
                    <h2>LOGIN</h2>
                    <form action="login-proses.php" method="post">
                        <div class="inputbox">
                            <ion-icon name="person-outline" id="OnClick"></ion-icon>
                            <input class="input" type="" name="username" required />
                            <label for="" id="DOM">Username</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline" id="onclick"></ion-icon>
                            <input type="password" name="password" id="password-input" />
                            <label for="" id="AddEventListener">Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox" />Remember Me</label>
                            <a href="#" id="Lupa">Forget Password?</a>
                        </div>
                        <button type="submit" class="btn_login" name="login" id="login"> Login</button>
                        <div class="register">
                            <p1>Tidak Punya Akun <a href="register.php" id="PromptBox">Register</a>
                        </p1>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <h4 id="Prompt_Box">&copy; Tribun News 2024</h4>
        </footer>
    </div>
<script src="../Js/script.js"></script>
<script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
></script>
</body>
</html>
