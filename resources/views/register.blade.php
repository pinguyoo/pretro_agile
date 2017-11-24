<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<form name="form" method="post" action="/register"  >
  {{ csrf_field() }}
    信箱：<input type="email" name="email" /> <br>
    
    <input type="hidden" name="uname" value="<?php echo '這個帳號可以使用'; ?>">
    密碼：<input type="password" name="password" /> <br>
    再一次輸入密碼：<input type="password" name="password2" /> <br> 
    姓名：<input type="text" name="name" /> <br>
    電話：<input type="text" name="phone" /> <br>
    
<input type="submit" name="button" value="確定" />

</form>
</html>