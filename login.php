<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>login</h1>
        <form action="validation.php" method="post">
<label>username</label>
<input type="text" name="user" required>
<label>password</label>
<input type="password" name="password" required>
<button type="submit">login</button>
</form>
    </div>
    <div class="container">
    <h1>signup</h1>
    <form action="registration.php" method="post">
<label>username</label>
<input type="text" name="user" required>
<label>password</label>
<input type="password" name="password" required>
<button type="submit">signup</button>
</form>
    </div>
</body>
</html>