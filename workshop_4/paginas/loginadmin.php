<?php
session_start();
if ($_SESSION && $_SESSION['user']){
}

$message = "";
if(!empty($_REQUEST['status'])) {
switch($_REQUEST['status']) {
case 'login':
$message = 'User does not exists';
break;
case 'error':
$message = 'There was a problem inserting the user';
break;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/style.css">

<title>Document</title>
</head>
<body>
<div class="container">
<div class="msg">
<?php echo $message; ?>
</div>
<section>
<h1>Login Administrador</h1>
<form action="login.php" method="POST" class="form-inline" role="form">
<input type="text" name="usuario" placeholder=" usuario" class="usuario">
<input type="password" name="password" placeholder="password" class="contra">
<input type="submit" name="aceptar" value="Login" class="btnaceptLo"> <br>
</form>
</section>
</div>
</body>
</html>