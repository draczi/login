<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <div class="page-wrapper">
      <div class="well">
        <h2>Register</h2>
        <ul class="errors">
          <li>There is an error</li>
        </ul>

        <form class="" action="register.php" method="post">
          <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" id="first_name" placeholder="First name">
          </div>
          <div class="form-group">
            <label for="first_name">Last name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Passwords">
          </div>
          <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Passwords">
          </div>

          <div class="button-wrapper">
            <button class="btn btn-primary" >Register</button>
          </div>

          <p>Already have an account? <a href="login.php">Log In</a></p>
        </form>
      </div>

    </div>
  </body>
</html>
