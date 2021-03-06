<?php
require_once("config/config.php");
if (isset($_SESSION["user_email"]) && $_SESSION["user_email"] != "") {
    // if logged in send to dashboard page	
    redirect("index.php");
}

if (isset($_POST['login'])){

	$email = trim($_POST['email']);
    $password = trim($_POST['password']);
   
	if ($email == "" || $password == "") {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
		redirect("login.php");
    }
	
	$sql = "SELECT * FROM User WHERE email = :email AND password = :password ";
	try {
            $stmt = $DB->prepare($sql);
			$stmt->bindValue(":email", $id);
            $stmt->bindValue(":password", md5($password));
			
			// execute Query
            $stmt->execute();
            $results = $stmt->fetchAll();

			if (count($results) > 0) {
                $_SESSION["errorType"] = "success";
                $_SESSION["errorMsg"] = "You have successfully logged in.";
                $_SESSION["user_email"] = $results[0]["email"];
				redirect("index.php");

            } else {
                $_SESSION["errorType"] = "danger";
                $_SESSION["errorMsg"] = "username or password does not exist.";
            }
        } catch (Exception $ex) {

            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();
			redirect("register.php");
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="icon" href="public/ico/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #6a11cb 0%, #2575fc 100%);
            display: table-cell;
            vertical-align: middle;
            height: 100%;
        }
        html {
            height: 100%;
            display: table;
            margin: auto;
        }
    </style>
</head>
<body>
    <div id="login-page" class="row">
	 <?php  if ($ERROR_MSG <> "") { ?>
                    <div class="col-lg-12">
                        <div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
                            <button data-dismiss="alert" class="close" type="button">x</button>
                            <p><?php echo $ERROR_MSG; ?></p>
                        </div>
                        <div style="height: 10px;">&nbsp;</div>
                    </div>
                <?php } ?>
        <div class="col s12 z-depth-5 card-panel">
        <form action="login.php" method="POST" class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <p class="center login-form-text">Login</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="email" name="email" type="email" class="validate" required />
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" name="password" type="password" class="validate" required />
                    <label for="password" data-error="wrong" data-success="right">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <input type="checkbox" id="remember-me" name="remember-me" />
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light blue col s12" type="submit" name="login">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="./register.html">Register Now!</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a href="./forgot-password.html">Forgot password ?</a></p>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>
</html>