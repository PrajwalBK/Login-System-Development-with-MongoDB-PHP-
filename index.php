 <!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
	
	<form action="actions/login.php" method="POST">
	<center><h3 style="color:lightblue;">Login and sign-up page using PHP & MongoDB</h3></center> </br>
		<table>

		<input type="email" placeholder="Email" name="email" id="email" required=""/><br/><br/>

		<input type="password" placeholder="Password" name="password" maxlength="8" id="password" required=""/><br/><br/>

		<center><input type="submit" name="login" id="login" value="Login"/></center><br/><br/>

	</form>
	<a href="signup.php">New customer? Create account</a>
	</table>
	
</body>
</html> 

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        h1 {
            font-size: 50px; /* Make the font size larger */
            color: #4CAF50; /* Set a primary color (e.g., green) */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add a shadow effect */
            text-align: center; /* Center-align the text */
            margin-bottom: 20px; /* Add some spacing below the heading */
        }
    </style> 
</head>
<body>
    
    <form action="actions/login.php" method="POST">
        <center>
            <h3 style="color:lightblue;">Login and sign-up page using PHP & MongoDB</h3>
        </center>
        <br/>
        <table>
            <input type="email" placeholder="Email" name="email" id="email" required=""/><br/><br/>
            <input type="password" placeholder="Password" name="password" maxlength="8" id="password" required=""/><br/><br/>
            <center>
                <input type="submit" name="login" id="login" value="Login"/>
            </center>
            <br/><br/>
        </table>
    </form>
    <center>
        <a href="signup.php">New customer? Create account</a>
    </center>
</body>
</html> -->
