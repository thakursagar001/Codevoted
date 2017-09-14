
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display" />
	<style>
	
		.col-md-2, .col-md-7 {
				padding-left: 5px;
				padding-right: 5px;
		}
		
		a:link {color: black;}
		
		.col-md-2 {
			width: 22.66666667%;
		}
		
		.col-md-2, .col-md-7 {
			float: left;
			position:relative;
		}
		
		.col-md-7 {
			width: 51.33333333%;
		}
		
		.middle-col {
			min-height: 1000px;
			min-width: 900px;
			border: 1px solid #d6d6d6;
			background: #fff;
		}
		
		aside{
			display:block;
		}
		
		.mainblock{
			background-color:rgba(255,255,255,0.5);
		}

		.mainblock a{
			color:white;
		}		


	</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


	<script>
	
		$(function(){
			
			$('li.mainblock').click(function(){
				
				 var a=$(this).find('a').attr('name');
				 console.log(a);
				$('#contchange').load(a);
			
			})	
		});
	</script>








    <div id="allblack" style="background:url('images//background.png'); background-attachment:fixed; background-repeat: no-repeat; background-size: cover;">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href=index.php><img class="img-reponsive" src="images/logo2.png" alt="Kickweb"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li ><a href="#Home">Home</a></li>
                        <li class="active"><a href="index.php#HTML">C</a></li>
                        <li><a href="index.php#CSS">C++</a></li>
                        <li><a href="index.php#JavaScript">JAVA</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		
		<div style="clear:both;"></div>
		
		<div role="main" class="main">
			<div class="container">
				<div class="row">
				
					<div class="col-md-2"  style="margin-top:45px; color:white;">
						<aside class="sidebar"  style="color:white;">
							
							<ul class="nav nav-list primary left-menu"  style="color:white;" >
								<br>
								
								
							<?php
							
								$myfile=fopen("index/c.txt","r") or die("Unable to open file!");
								$myfile1=fopen("inn/c.txt","r") or die("Unable to open file!");
								$x=fgets($myfile);
								
								echo "<h2>$x</h2>";
								
								while(!feof($myfile) and !feof($myfile1)){
									$x=fgets($myfile);
									$y="matter//C//".$x;
									$z=fgets($myfile1);
									echo "<li class='mainblock'><a   name=$y> $z</a></li>";
									
								}
								fclose($myfile);
								fclose($myfile1);
							?>
							</ul>
							
							
							
							
						</aside>
					</div>
					
					<div class="row">
						<div class="content">
							<div class="col-md-7 middle-col" id="contchange" style="margin-top:60px;">
							
							<center><h1>Overview</h1></center>
							<hr>

							<p>C is a general-purpose, high-level language that was originally developed by Dennis M. Ritchie to develop the UNIX operating system at Bell Labs. C was originally first implemented on the DEC PDP-11 computer in 1972.</p>
							<p>In 1978, Brian Kernighan and Dennis Ritchie produced the first publicly available description of C, now known as the K&amp;R standard.</p>
							<p>The UNIX operating system, the C compiler, and essentially all UNIX application programs have been written in C. C has now become a widely used professional language for various reasons &minus;</p>
							<ul class="list">
							<li>Easy to learn</li>
							<li>Structured language</li>
							<li>It produces efficient programs</li>
							<li>It can handle low-level activities</li>
							<li>It can be compiled on a variety of computer platforms</li>
							</ul>
							<h2>Facts about C</h2>
							<ul class="list">
							<li>C was invented to write an operating system called UNIX.</li>
							<li>C is a successor of B language which was introduced around the early 1970s.</li>
							<li>The language was formalized in 1988 by the American National Standard Institute (ANSI).</li>
							<li>The UNIX OS was totally written in C.</li>
							<li>Today C is the most widely used and popular System Programming Language.</li>
							<li>Most of the state-of-the-art software have been implemented using C.</li>
							<li>Today's most popular Linux OS and RDBMS MySQL have been written in C.</li>
							</ul>
							<h2>Why use C?</h2>
							<p>C was initially used for system development work, particularly the programs that make-up the operating system. C was adopted as a system development language because it produces code that runs nearly as fast as the code written in assembly language. Some examples of the use of C might be &minus;</p>
							<ul class="list">
							<li>Operating Systems</li>
							<li>Language Compilers</li>
							<li>Assemblers</li>
							<li>Text Editors</li>
							<li>Print Spoolers</li>
							<li>Network Drivers</li>
							<li>Modern Programs</li>
							<li>Databases</li>
							<li>Language Interpreters</li>
							<li>Utilities</li>
							</ul>
							<h2>C Programs</h2>
							<p>A C program can vary from 3 lines to millions of lines and it should be written into one or more text files with extension <b>".c"</b>; for example, <i>hello.c</i>. You can use <b>"vi"</b>, <b>"vim"</b> or any other text editor to write your C program into a file.</p>
							<p>This tutorial assumes that you know how to edit a text file and how to write source code inside a program file.</p>

								
							
							
							
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>';
					
		
	</div>
</body>

</html>	