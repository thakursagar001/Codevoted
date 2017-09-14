
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
                        <li><a href="index.php#HTML">C</a></li>
                        <li class="active"><a href="index.php#CSS">C++</a></li>
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
				
					<div class="col-md-2"  style="margin-top:45px; color:black;">
						<aside class="sidebar"  style="color:black;">
							
							<ul class="nav nav-list primary left-menu"  style="color:white;" >
								<br>
								
								
							<?php
							
								$myfile=fopen("index/c++.txt","r") or die("Unable to open file!");
								$myfile1=fopen("inn/c++.txt","r") or die("Unable to open file!");
								$x=fgets($myfile);
								echo "<h3>$x</h3>";
								
								while(!feof($myfile) and !feof($myfile1)){
									$x=fgets($myfile);
									$y="matter//C++//".$x;
									$z=fgets($myfile1);
									echo "<li class='mainblock'><a name=$y> $z</a></li>";
									
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
							<p>C++ is a statically typed, compiled, general-purpose, case-sensitive, free-form programming language that supports procedural, object-oriented, and generic programming.</p>
							<p>C++ is regarded as a <b>middle-level</b> language, as it comprises a combination of both high-level and low-level language features.</p>
							<p>C++ was developed by Bjarne Stroustrup starting in 1979 at Bell Labs in Murray Hill, New Jersey, as an enhancement to the C language and originally named C with Classes but later it was renamed C++ in 1983.</p>
							<p>C++ is a superset of C, and that virtually any legal C program is a legal C++ program.</p>
							<p><b>Note:</b> A programming language is said to use static typing when type checking is performed during compile-time as opposed to run-time.</p>
							<h2>Object-Oriented Programming</h2>
							<p>C++ fully supports object-oriented programming, including the four pillars of object-oriented development:</p>
							<ul class="list">
							<li><p>Encapsulation</p></li>
							<li><p>Data hiding</p></li>
							<li><p>Inheritance</p></li>
							<li><p>Polymorphism</p></li>
							</ul>
							<h2>Standard Libraries</h2>
							<p>Standard C++ consists of three important parts:</p>
							<ul class="list">
							<li><p>The core language giving all the building blocks including variables, data types and literals, etc.</p></li>
							<li><p>The C++ Standard Library giving a rich set of functions manipulating files, strings, etc.</p></li>
							<li><p>The Standard Template Library (STL) giving a rich set of methods manipulating data structures, etc.</p></li>
							</ul>
							<h2>The ANSI Standard</h2>
							<p>The ANSI standard is an attempt to ensure that C++ is portable -- that code you write for Microsoft's compiler will compile without errors, using a compiler on a Mac, UNIX, a Windows box, or an Alpha.</p>
							<p>The ANSI standard has been stable for a while, and all the major C++ compiler manufacturers support the ANSI standard.</p>
							<h2>Learning C++</h2>
							<p>The most important thing to do when learning C++ is to focus on concepts and not get lost in language technical details.</p>
							<p>The purpose of learning a programming language is to become a better programmer; that is, to become more effective at designing and implementing new systems and at maintaining old ones.</p>
							<p>C++ supports a variety of programming styles. You can write in the style of Fortran, C, Smalltalk, etc., in any language. Each style can achieve its aims effectively while maintaining runtime and space efficiency.</p>
							<h2>Use of C++</h2>
							<p>C++ is used by hundreds of thousands of programmers in essentially every application domain.</p>
							<p>C++ is being highly used to write device drivers and other softwares that rely on direct manipulation of hardware under realtime constraints.</p>
							<p>C++ is widely used for teaching and research because it is clean enough for successful teaching of basic concepts.</p>
							<p>Anyone who has used either an Apple Macintosh or a PC running Windows has indirectly used C++ because the primary user interfaces of these systems are written in C++.</p>

								
							
							
							
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>';
					
		
	</div>
</body>

</html>	