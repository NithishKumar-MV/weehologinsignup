
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <?php
      include("loginb.php");
      ?>
  </head>
  <body>
    <style>
      body {
        background-image: url("images/backGimg.jpg");
        height: 100vh;
        background-size: cover;
        background-position: center;
      }
    </style>
    <div id="logo-container">
      <img src="images/Weeho.png" alt="Weeho logo" />
    </div>
    <style>
      #logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 20vh; /* Adjust as needed */
      }

      #logo {
        width: 100px; /* Adjust as needed */
        height: auto; /* Preserve the aspect ratio */
      }
      /* Additional styles as needed */
    </style>
    <section class="container forms">
      <div class="form login">
        <div class="form-content">
          <header>Login</header>
          <form action="loginb.php" method="POST">
            <div class="field input-field">
              <input
                type="text"
                placeholder="Email"
                name="uname"
                class="input"
              />
            </div>

            <div class="field input-field">
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="password"
              />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <div class="form-link">
              <a href="#" class="forgot-pass">Forgot password?</a>
            </div>

            <div class="field button-field">
              <button type="submit" name="submit">Login</button>
            </div>
          </form>

          <div class="form-link">
            <span
              >Already have an account?
              <a href="#" class="link signup-link">Signup</a></span
            >
          </div>
        </div>

        <div class="line"></div>
      </div>

      <!-- Signup Form -->

      <div class="form signup">
        <div class="form-content">
          <header>Signup</header>
          <form action="#">
            <div class="field input-field">
              <input type="email" placeholder="Email" class="input" />
            </div>

            <div class="field input-field">
              <input
                type="Create password"
                placeholder="Create Password"
                class="password"
              />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <div class="field input-field">
              <input
                type="Confirm password"
                placeholder="Confirm Password"
                class="password"
              />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <div class="field button-field">
              <button type="button">Signup</button>
            </div>
          </form>

          <div class="form-link">
            <span
              >Already have an account?
              <a href="#" class="link login-link">Login</a></span
            >
          </div>
        </div>

        <div class="line"></div>
      </div>
    </section>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
