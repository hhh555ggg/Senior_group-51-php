<?php
session_start();
//chech admin account
$con= mysqli_connect('localhost','root','','mid-project',3306);
$query = mysqli_query($con, 'select * from users');
while($users = mysqli_fetch_assoc($query)) {
    if($users['username'] == 'adminsenior' && $users['email'] == 'admin@admin.com') {
        $adminFlag = true ;
    } else {
        $adminFlag = false ;
    }
}
if($adminFlag == false) {
    $query = mysqli_query($con, "insert into users (name , email , password) values ('adminsenior' , 'admin@admin.com' , 'admin123')");
}







if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$msg = [];
	$flag = 0;
    
    $redflag= 0;

	if (!empty($username)) {
		if (strlen($username) >= 7) {
			if (preg_match('/senior$/', $username)) {
				$flag++;
			} else {
				$msg[] = 'sorry, username must end wih senior';
			}
		} else {
			$msg[] = 'sorry, you must wirte more than 6 character';
		}
	} else {
		$msg[] = 'sorry, the input field name is empty';
	}
	if (!empty($password)) {
		if (strlen($password) >= 5) {
			if (preg_match('/[a-z]/', $username)) {
				$flag++;
			} else {
				$msg[] = 'sorry, you must wirte a correct pattern';
			}
		} else {
			$msg[] = 'sorry, you must wirte more than 4 character';
		}
	} else {
		$msg[] = 'sorry, the input field password is empty';
	}
	if ($flag == 2) {
        $con= mysqli_connect('localhost','root','','mid-project',3306);
        $q= 'select username , email , password from users';
        $exe=mysqli_query($con,$q);
        while($user = mysqli_fetch_assoc($exe) )
        {
            if($user['username']== $username &&  $user['password']== $password)
            {
                $redflag = 1;
				$_SESSION['username'] = $user['username'];

                
            }
        }
        

				
			}
		
        if( $redflag == 1 )
        {
            if ($_SESSION['username'] == 'adminsenior') {
                if ($password == 'admin123') {
                    header('location:dashboard/index.php');
                }
            } else {
                header('location:main_page/index.php');
            }
           
        }
        else{
            echo "<center><h2>user not exist</h2></center>";
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Have an account? <a href="register.php">sign up </a> </h3>
                        
						<form action="#" class="signin-form" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
						</div>
						<p style="color: red; font-size: 30px; text-align: center;">
							<?php
							if (!empty($msg)) {
								foreach ($msg as $m) {
									echo $m . '<br>';
								}
							}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>