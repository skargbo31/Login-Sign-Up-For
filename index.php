<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="wlc">
        <h3>Login Here</h3>
    </div>
    <article>
        <section>
            <!-- Welcome -->  
            <form action="login.php" method="post">

                <div>
                <label for="">UserName</label>
                <input type="text" name="uname" placeholder="Please Enter User Name">
                </div>

                <div>
                    <label for="">Password</label>
                <input type="password" name="password" placeholder="Please Enter Password">
                </div>

                <div class="forget">
                    <a href="">Forget Password</a>
                    <a href="signup.php">Sign up</a>
                </div>
                <div class="btn">
                    <button type="submit">Login</button>
                </div>
            </form>
            
        </section>
    </article>
</body>
</html>