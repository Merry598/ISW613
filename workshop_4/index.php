<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<title>Document</title>
</head>
<body>
<div class="container">
<div class="msg">
</div>
<form action="paginas/login.php" method="POST" class="form-inline" role="form">
<p>
<div class="form-group">
<label class="sr-only" for="">usuario</label>
<input type="text" class="form-control" id="" name="usuario" placeholder="usuario" require>
</div>
</p>
<p>
<div class="form-group">
<label class="sr-only" for="">Password</label>
<input type="password" class="form-control" id="" name="password" placeholder="Password" require>
</div>
</p>
<p>
<button type="submit" class="btn btn-primary">Login</button>
</p>
</form>
</div>
</body>
</html>