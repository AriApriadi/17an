<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="../assets/img/2.png">
        </div>
        <div class="login-content">
            <form method="post" action="../action/login.php">
                <img src="../assets/img/avatar.svg">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <input type="text" class="input" name="username" id="username" required placeholder="USERNAME">
                   </div>
                </div>
                <div class="input-div pass">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
                        <input type="password" class="input" name="password" id="password" required placeholder="PASSWORD">
                   </div>
                </div>
                <a href="../index.php">Kembali</a>
                <input type="submit" class="btn" value="login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>
