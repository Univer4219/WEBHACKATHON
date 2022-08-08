<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <script src="form.js"></script>
    <h1>Create Account</h1>
    <center>
     <form  action="todolist.html" method="post">
        <legend>Sign Up</legend>    
        <div>
            <label for="username">Username</label>
        </div>
        <input type="username" name="username" id="username" placeholder="username" size="15">
        <div>
            <label for="email">Email</label>
        </div>
        <input type="email" id="email" placeholder="email" required size="20">
        <div>
            <label for="password">Password</label>
        </div>
        <div><input type="password" name="password" id="password" placeholder="password" size="20"></div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
     </form>
    </center>
</body>
</html>