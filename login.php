<!DOCTYPE html>
<html>
    <title>Login</title>
    <body>
      
        <style>
            *{
                padding: 0;
                margin: 0;
                
            }
            #btn{
                text-align: center;
                height: 78px;
                background-color: rgb(2, 2, 2);
                
                
                
                
            }
            .fb{
                background-color: rgb(186, 154, 11);
                border-radius: 25px;
                font-size: 18px;
                height: 35px;
                width: 65px;
            }
            a{
                margin-right: 130px;
                font-size: 18px;
                
                text-decoration: none;
                color: aliceblue;
                padding-bottom: 20px;
            }
            #bb{
                display: inline;
                color: aliceblue;
                margin-right: 90px;
                font-size: 20px;
                font-family: serif;
            }
            #top
            {
                background-color: brown;
                height: 45px;
                width: 120px;
                border-radius: 25px;
            }
            p
            {
              line-height: 1.8;           
            }
          
          
            </style>
        

    <div id="btn">
            
    <img src="logo.png" alt="Bull" height="40px">

    <p id="bb">Big Bull</p>

    <a href="index.php">Home</a>
    <a href="calculator.html">Calculator</a>
    <a href="Bm.html">Best Mutual Funds</a>
	<a href="bp.html">Best Platforms</a>
    <a href="contact.html">Contact Us</a>
    <button   class="fb" onclick="document.location='signup.php'">Signup</button>
    <button   class="fb" onclick="document.location='login.php'">Login</button>

    </div>
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="login-form" method="POST" action="login_register.php">
            <div class="form-group">
                <label for="email_username">Email or Username:</label>
                <input type="text" id="email_username" name="email_username" placeholder="Email or Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login">Login</button>
            
            <p>You haven't any account?</p> 
            
            <button   class="button" onclick="document.location='signup.php'">Signup</button>
        </form>
    </div>
</body>
</html>