<!DOCTYPE html>
<html>
<head>
<style>
footer {
  margin: 0;
  padding: 5px;
  background: lightgray;
  text-align: center;
}
</style>
<?php
$username = 'username1';
$password = 'password1';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if ($_POST['username'] == $username && $_POST['password'] == $password) {
    
    header('Location: protected.php');
    exit;
  } else {
    $error = 'Invalid username or password';
  }
}


?>


<footer>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" required><br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" required><br><br>
  <input type="submit" value="Login">

  <?php include 'footer.php';?>
</form>
</footer>

<?php if (!empty($error)): ?>
  <p style="color: green;"><?php echo $error; ?></p>
<?php endif; ?>
