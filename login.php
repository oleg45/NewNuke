<?php include("header.php");?>
  <div class="login">
    <h3>Log In Page</h3>
    <hr>
    
    <h4>Sign Up</h4>
    <form action="sign_up.php" method="post">
      <label for="username">Username</label><input type="text" name="username" />
      <label for="email">Email</label><input type="email" name="email" />
      <label for="password">Password</label><input type="password" name="password" />
      <label for="password_confirmation">Password Confirmation</label><input type="password" name="password_confirmation" />
      <input type="submit" value="Sign Up" class="submit" />
    </form>
  </div>

<?php include("footer.php");?>