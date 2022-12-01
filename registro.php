
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="registro.css">
</head>
<body>


<form action="registrarbd.php" method="post">

  <div class="container">

  <div class="form">
  <h2>Registrar</h2>
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <br>
    <button type="submit">Registrar</button>
 
    </div>
    </div>
</form>

</body>
</html>