<html>
  <form method="post" >
      <?php echo (isset($message)? $message : ''); ?>
     firstname: <input name="firstname" type="varchar" />
     
     <br>
     lastname: <input name="lastname" type="varchar" />
     <br>
     Username: <input name="username" type="varchar" />
     <br>
     Password: <input type="password" name="password" />
     <br>
     Email: <input name="email" type="varchar" />
     <br>
     address: <input name="address" type="text" />
     <br>
     mobile: <input name="mobile" type="varchar" />
     <br>
     gender: <input name="gender" type="tinyint" />
     <br>
     <input type="submit" name="action" value="register" />
  </form>
</html>
