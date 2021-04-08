<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <br/>
    <div class="container" style="width:500px; background-color:skyblue">  
        <h3 align="center">Login</h3>  
        <br />  
        <form method="post">  
            <label>Username</label>  
            <input type="text" name="username" class="form-control" />  
            <br />  
            <label>Password</label>  
            <input type="password" name="password" class="form-control" />  
            <br />  
            <input type="submit" name="login" value="Login" class="btn btn-info" />  
            <br />  
            <p align="center">Don't have account? <a href="register.php">Register</a></p>
            <p align="center"><a href="forget.php">Forget Password?</a></p>  
        </form>
    </div> 
</body>
</html>