<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="CSS/style.css" />
  </head>
  <body>
    <section>
      <div class="container">
        <header>
          <div class="logo">
            <img src="Logo/logo-removebg-preview.png" alt="Logo" />
          </div>
          <nav>
            <ul class="menu" id="menu">
              <li><a href="../Home/index.php" class="btn_login">HOME</a></li>
              <li><a href="login.php" class="btn_login">LOGIN</a></li>
            </ul>
          </nav>
        </header>
        <div class="form-box">
          <div class="form-value">
            <h2>REGISTER</h2>
            <form action="register-proses.php" method="post">
              <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input class="input" type="email" name="email" required />
                <label for="email">Email</label>
              </div>
              <div class="inputbox">
                <ion-icon name="person-outline"></ion-icon>
                <input class="input" type="" name="username" required />
                <label for="username">Username</label>
              </div>
              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input class="input" type="password" name="password" required />
                <label for="password">Password</label>
              </div>
              <div class="forget">
                <label for="remember"><input type="checkbox" name="remember" id="remember" />Remember Me</label>
              </div>
              <button type="submit" class="btn_login" name="register" id="register">DAFTAR</button>
            </form>
          </div>
        </div>
        <footer>
          <h4>&copy; Tribun News 2023</h4>
        </footer>
      </div>
    </section>
    <script src="/Js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  </body>
</html>
