<!-- <!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
<link rel="stylesheet" type="text/css" href="style.css">
<body></br>
	<h1>Login and SignUp System Development with MongoDB</h1>
	<form action="actions/actions.php" method="POST">
	<center><h3 style="color:lightblue;">Sign-up page</h3></center>
	<table>
		<input type="text" placeholder="Firstname" name="fname" id="fname" required=""/><br/><br/>

		<input type="text" placeholder="Lastname" name="lname" id="lname" required=""/><br/><br/>

		<input type="email" placeholder="Email" name="email" id="email" required=""/><br/><br/>

		<input type="text" placeholder="Phone No" name="phoneNo" id="phoneNo" maxlength="10" pattern="[0-9]{10}" required=""/><br/><br/>

		<input type="password" placeholder="Password" name="password" id="password" maxlength="8" required=""/><br/><br/>

		<center><input type="submit" name="signup" id="signup" value="Signup"/></center><br/><br/>

	</form>

	<a href="index.php">Already have an account? Login</a>
</table>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        h1 {
            font-size: 30px; 
            color: lightblue; 
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);  */
            text-align: center; 
            margin-bottom: 20px; 
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        form h3 {
            color: lightblue;
            text-align: center;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: lightblue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: lightblue;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: lightblue;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login and SignUp System Development with MongoDB</h1>
        <form action="actions/actions.php" method="POST">
            <h3>Sign-up Page</h3>
            
            <input type="text" placeholder="First Name" name="fname" id="fname" required />
            <input type="text" placeholder="Last Name" name="lname" id="lname" required />
            <input type="email" placeholder="Email" name="email" id="email" required />
            <input type="text" placeholder="Phone No" name="phoneNo" id="phoneNo" maxlength="10" pattern="[0-9]{10}" required />
            <input type="password" placeholder="Password" name="password" id="password" maxlength="8" required />
            
            <input type="submit" name="signup" id="signup" value="Signup" />
            
            <a href="index.php">Already have an account? Login</a>
        </form>
    </div>
</body>
</html>
