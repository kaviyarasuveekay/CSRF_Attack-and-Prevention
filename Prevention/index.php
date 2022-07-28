<!DOCTYPE html>
<html>
	<head>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="styles.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Cross Site Request Forgery Protection</title>
	
    </head>
	
    <body>
	<center><h1> Prevention of CSRF Attack </h1></center>
		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
        <div class="box">

        <div class="float">
            <form class="form" action="validate1.php" method="post">
                <div class="form-group"><br><br>
                    <label for="username"><b>Username:</b></label><br>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="password"><b>Password:</b></label><br>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="Login" class="btn btn-info btn-md" value="Login">
                </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </div>
	</body> 
</html>