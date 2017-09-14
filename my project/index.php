<?php
session_start();
include("setting.php");
if(!$con)
	echo "sagar";
else
	echo "salal";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display" />
	<script>
		function check_pass() {
			
			
			if (document.getElementById('password2').value ==
					document.getElementById('password_confirmation2').value) {
					document.getElementById('message').style.color = 'green';
					document.getElementById('message').innerHTML = ' matching';	
					document.getElementById('commit1').disabled = false;
			} else {
				document.getElementById('message').style.color = 'red';
				document.getElementById('message').innerHTML = 'not matching';
				document.getElementById('commit1').disabled = true;
			}
		}
		
		
		function check_username(){
			
			var username=document.getElementById('email2').value;
			console.log(username);
			document.getElementById("commit1").disabled = true;

				$.ajax({ 
					url : "check_username.php",
					type : "POST",
					data : {username: username},        
					success:  function (response) {						
						if (response==0)
						{
							  document.getElementById('qwe').innerHTML = "Valid Username";
							  document.getElementById("commit1").disabled = false;	
							
						}
						else
						{
								  document.getElementById('qwe').innerHTML = "Already Used";
								  document.getElementById("commit1").disabled = true;	
								  
						}
										
												
						 }
					});			
						
			
		}
		
		
	</script>
	
		
</head>




<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="allwhite">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~NAVIGATION BAR~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="navigationBar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href=#Home><img class="img-reponsive" src="images/logo2.png" alt="Kickweb"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#Home">Home</a></li>
                        <li><a href="#HTML">C</a></li>
                        <li><a href="#CSS">C++</a></li>
                        <li><a href="#JavaScript">JAVA</a></li>
                    </ul>
					<ul class="nav navbar-nav navbar-right">
				<?php
					if(!isset($_SESSION['loggedin']) or empty($_SESSION['loggedin']) ){
						echo '
							<li><a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><span class=" glyphicon glyphicon-user ">SignUp</a></li>
							<li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><span class="glyphicon glyphicon-log-in">Login</a></li>';
						
					}
					else{
						echo '<form method=post action="logof.php">
						
								<li><a data-toggle="modal"><span class=" glyphicon 	 ">welcome '.$_SESSION['username'].'</a></li>
							
								<li><span class=" glyphicon glyphicon-user "><input type=submit value=logout></li>
							</form>';
					}
						
				?>	
					</ul>
                </div>
            </div>
        </nav>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CAROUSEL~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="container-fluid" id="pushCarousel"></div>
        <script>
            var x = document.getElementById("navigationBar").offsetHeight;
            document.getElementById("pushCarousel").style.marginTop = x - 1 + 'px';
        </script>
        <div class="container" id="Home">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner carousel-zoom">
                    <div class="active item"><img class="img-responsive" src="images/learn.png">
                        <div class="carousel-caption">
                            <h2>We learn</h2>
                        </div>
                    </div>
                    <div class="item"><img class="img-responsive" src="images/inspire.png">
                        <div class="carousel-caption">
                            <h2>We Code</h2>
                        </div>
                    </div>
                    <div class="item"><img class="img-responsive" src="images/success.png">
                        <div class="carousel-caption">
                            <h2>We Develop</h2>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
                <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
            </div>
        </div>
        <div class="container">
            <div class="row midrow">
                <div class="col-sm-6 intro1 ">
                    <h2>Introduction:</h2>
                    <p>Codevoted is a platform which was developed by Sagar Salal in the year 2017 for students and professionals to learn web-development from basics to advance.It is a question and answer site,where everyone meet to find solutions.As
                        we believe that everyone deserves education Codevoted provides all its content for free.
                    </p>
                </div>
                <div class="col-sm-6 intro2">
                    <center><img src="images/logo.png" height="200px" /></center>
                </div>
            </div>
        </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~PARALLAX DIVISION~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="parallax container">
            <center><br>Start Learning !</center>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~HTML DIV~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="HTML" class="container">

            <div class="row">
                <div class="col-sm-6">
                    <center>
                        <h1>C</h1>
                    </center>

                    <p>C is a general-purpose, imperative computer programming language, supporting structured programming, lexical variable scope and recursion.</p>
                    <br>
                    <center><button type="button" class="btn btn-primary btn-lg" onclick="location.href='C.php';" >Learn Now!</button></center>

                </div>

                <div class="col-sm-6">
                    <center><img class="img-responsive" src="./images/htmllogo.png" /></center>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CSS DIV~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="CSS" class="container">
            <div class="row">

                <div class="col-sm-6">
                    <center><img class="img-responsive" src="./images/csslogo.png" /></center>
                </div>

                <div class="col-sm-6">
                    <center>
                        <h1>C++</h1>
                    </center>

                    <p>C++ (pronounced cee plus plus is a general-purpose programming language. It has imperative, object-oriented and generic programming features.</p>
                    <br>
                    <center><button type="button" class="btn btn-primary btn-lg" onclick="location.href='C++.php';">Learn Now!</button></center>

                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~JAVASCRIPT DIV~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="JavaScript" class="container">
            <div class="row">
                <div class="col-sm-6">
                    <center>
                        <h1>JAVA</h1>
                    </center>

                    <p>Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented and specifically designed to have as few implementation dependencies as possible.</p>
                    <br>
                    <center><button type="button" class="btn btn-primary btn-lg" onclick="location.href='java.php';">Learn Now!</button></center>

                </div>

                <div class="col-sm-6">
                    <center><img class="img-responsive" src="./images/jslogo.png" style=" height:280px;" /></center>
                </div>
            </div>
        </div>
        <br>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~LOGIN & SIGN-UP MODAL~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <div class="modal fade login" id="loginModal" >
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                    <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox" ">
                                    <form method="post" action="login.php" accept-charset="UTF-8">
                                        <input id="email1" class="form-control" type="email" placeholder="Email" name="email1" required>
                                        <input id="password1" class="form-control" type="password" placeholder="Password" name="password1" required>
                                        <?php
											if(isset($_SESSION['username']) and $_SESSION['username']=="salal"){
												
												echo "<span>incorrect password<span>";
											}
										?>
										
										
										<input class="btn btn-default btn-login" type="submit" value="Login">
                                    </form>
                                </div>
                            </div>
                        </div>
						
						
						
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                                <div class="form">
                                    <form method="post" id="signup" html="{:multipart=>true}" data-remote="true" action="register.php" accept-charset="UTF-8">
                                        <input id="email2" class="form-control" required type="email" placeholder="Email" name="email" onblur="check_username();">
                                        <span id="qwe"></span>
										<input id="password2" class="form-control" required type="password" placeholder="Password" value="" name="password" onkeyup="check_pass();">
                                        <input id="password_confirmation2" required class="form-control" type="password" value="" placeholder="Repeat Password" name="password_confirmation" onkeyup="check_pass();"> 
                                        <span id="message"></span>
										<input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" id="commit1">
                                    </form>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                            <span>Already have an account?</span>
                            <a href="javascript: showLoginForm();">Login</a>
                        </div>
					</div>
                </div>
            </div>
        </div>

    </div>
	<?php
			if(isset($_SESSION['username']) and $_SESSION['username']=="salal"){
												
					echo   "<script>
									openLoginModal();
							</script>";
			}
	?>
    <?php
		if(isset($_SESSION['check']) and $_SESSION['check']=="on"){
			$_SESSION['username']="1";
			$_SESSION['check']="off";
			
		}
	?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END OF allwhite DIV~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

</body>

</html>