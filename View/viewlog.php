<html>
  <form method="post">
      <?php echo (isset($message)? $message : ''); ?>
     Username: <input name="username" type="text" />
     Password: <input type="password" name="password" />
     <input type="submit" name="action" value="login" />

  </form>
</html>