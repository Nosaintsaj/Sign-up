


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
   <?php

   ?>
<!-- Sign Up Form -->
<div class="container" id="signUpContainer" style="display:none;">
   <h2 class="form-title">Sign Up</h2>
   <form method="post" action="kabobohan">
      <div class="input-group">
         <i class="fas fa-user"></i>
         <input type="text" name="fName" id="fName" placeholder="First Name" required>
         <label for="fName">First Name</label> 
      </div>

      <div class="input-group">
         <i class="fas fa-user"></i>
         <input type="text" name="lName" id="lName" placeholder="Last Name" required>
         <label for="lName">Last Name</label> 
      </div>

      <div class="input-group">
         <i class="fas fa-envelope"></i>
         <input type="email" name="email" id="email" placeholder="Email" required>
         <label for="email">Email</label>
      </div>

      <div class="input-group">
         <i class="fas fa-lock"></i>
         <input type="password" name="password" id="password" placeholder="Password" required>
         <label for="password">Password</label>
      </div>

      <input type="submit" class="btn" id="signUp" name="signUp">
   </form>

   <p class="or">---------- or ----------</p>
   <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
   </div>

   <div class="links">
      <p>Already have an account?</p>
      <a href="login.html">
         <button id="signInButton">Sign In</button>
      </a>
   </div>
</div>

<!-- Sign In Form -->
<div class="container" id="signInContainer">
    <h2 class="form-title">Sign In</h2>
    <form method="post" action="kabobohan">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <p class="recover">
        <a href="#">Recover Password</a>
      </p>

      <input type="submit" class="btn" id="signIn" name="signIn">
    </form>

    <p class="or">---------- or ----------</p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>

    <div class="links">
      <p>Don't have an account yet?</p>
      <button id="signUpButton" class="link-button">Sign Up</button>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
