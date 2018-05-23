<?php
require_once("config/config.php");
if (isset($_POST['register'])){

	$email = trim($_POST['email']);
	$tele = trim($_POST['tele']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
	
	if ($email == "" || $password1 == "" || $password2 == "") {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
		redirect("login.php");
    }
	if ($password1 != $password2) {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Password Doesn't Match";
		redirect("login.php");
    }
	
	$sql = "SELECT * FROM User WHERE email = :email";
    try {
      
            $stmt = $DB->prepare($sql);

            // bind the values
            $stmt->bindValue(":email", $email);
           
            // execute Query
            $stmt->execute();
            $results = $stmt->fetchAll();

            if (count($results) == 0) {
				$sql = "INSERT INTO User  (email, tele, password) VALUES " . " (:email, :tele, :password)";
				$stmt = $DB->prepare($sql);

				$stmt->bindValue(":email", $email);
				$stmt->bindValue(":tele", $tele);
				$stmt->bindValue(":password", md5($password));
				if($stmt->execute()){
					$_SESSION["errorType"] = "success";
					$_SESSION["errorMsg"] = "You have successfully Register";
					$_SESSION["user_email"] = "";
					redirect("login.php");
				}
				else {
					$_SESSION["errorType"] = "danger";
					$_SESSION["errorMsg"] = "Fail to register try again";
					redirect("register.php");
				}
			}
			else{
				$_SESSION["errorType"] = "danger";
				$_SESSION["errorMsg"] = "Email Already Exist";
				redirect("register.php");
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
        <title>Title</title>
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
        <div class="row">
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
                <form action="register.php" method="POST" >
                    <div class="row">
                        <div class="input-field col s12 center">
                            <p class="center login-form-text">Register</p>
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
                            <i class="material-icons prefix">contact_phone</i>
                            <input id="phone" name="tele" type="number" class="validate" required>
                            <label for="phone" data-error="wrong" data-success="right">Phone</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password" name="password" type="password" class="validate" required />
                            <label for="password" data-error="wrong" data-success="right">Password</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password-again" name="password-again" type="password" data-length="25" required>
                            <label for="password-again">Password again</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light blue col s12" type="submit" name="register">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>