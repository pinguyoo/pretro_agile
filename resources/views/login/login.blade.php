<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pretro</title>
  </head>
  <body>
    <form name="form" method="POST" action="{{ url('/login') }}">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      Account :<br>
      <input type="text" name="firstname">
      <br>
      Password :<br>
      <input type="text" name="lastname">
      <br><br>
      <input type="submit" value="Submit">
    </form> 
  </body>
</html> 