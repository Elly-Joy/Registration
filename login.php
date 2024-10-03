<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
 
  <div class="ombre-background"></div>
  <div class="signup">
    <form action="php/admin.php" method="POST">  <h3>Login</h3>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <button class="admin-button" type="submit">Login</button>
    </form>
  </div>
</body>
</html>