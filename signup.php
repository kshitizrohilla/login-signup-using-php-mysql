<!DOCTYPE html>
<html>
<head>
  <title>SignUp Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <h1>SignUp Page</h1>
  <div class="container">
    <form action="process_signup.php" method="POST" novalidate>
      <input autocomplete="off" type="username" placeholder="Username" name="username">
      <br><br>
      <input autocomplete="off" type="email" placeholder="Email" name="email">
      <br><br>
      <input autocomplete="off" type="password" placeholder="Password" id="password" name="password">
      <br><br>
      <input autocomplete="off" type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
      <br><br>
      <button>SignUp</button>
    </form>
</div>
</body>
</html>