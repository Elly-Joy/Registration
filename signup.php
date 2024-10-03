<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up</title>
</head>
<body>

  <div class="ombre-background"></div>
      <div class="signup">
        <h3>Sign Up</h3>
    <form action="php/signup.php" method="post">  
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      

      <label for="email"> Email Address:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone_no">Phone Number:</label>
      <input type="tel" id="phone_no" name="phone_no" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <button class="sup-button" type="submit">Register</button>

      <p>Already have an account? <a href="login.php">Log in here</a></p>
    </form>
</div>
</body>
</html>