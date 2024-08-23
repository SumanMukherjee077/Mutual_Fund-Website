<!DOCTYPE html>
<html>
    <title>Signup</title>
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
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		
		.container {
			width: 50%;
			margin: 40px auto;
			background-color: #fff;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.form-group {
			margin-bottom: 20px;
		}
		
		.label {
			display: block;
			margin-bottom: 10px;
		}
		
		.input-field {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		
		.button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		.button:hover {
			background-color: #3e8e41;
		}
		
		.login-button {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Signup</h2>
		<form method="POST" action="login_register.php">
			<div class="form-group">
				<label class="label" for="username">Name:</label>
				<input type="text" id="username" class="input-field"  name="username" required>
			</div>
			<div class="form-group">
				<label class="label" for="email">Email:</label>
				<input type="email" id="email" class="input-field" name="email" required>
			</div>
			<div class="form-group">
				<label class="label" for="password">Password:</label>
				<input type="password" id="password" class="input-field" name="password" required>
			</div>
			<button class="button" type="submit" name="register" onclick="document.location='login.php'">Signup</button>
			<p>Already have an account?     <button   class="button" onclick="document.location='login.php'">Login</button>

		</form>
	</div>
 

</body>
</html>