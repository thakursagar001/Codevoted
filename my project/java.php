
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
                        <li><a href="index.php#CSS">C++</a></li>
                        <li class="active"><a href="index.php#JavaScript">JAVA</a></li>
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
							
								$myfile=fopen("index/java.txt","r") or die("Unable to open file!");
								$myfile1=fopen("inn/c++.txt","r") or die("Unable to open file!");
								$x=fgets($myfile);
								echo "<h3>$x</h3>";
								
								while(!feof($myfile) and !feof($myfile1)){
									$x=fgets($myfile);
									$y="matter//JAVA//".$x;
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
									<p>Java programming language was originally developed by Sun Microsystems which was initiated by James Gosling and released in 1995 as core component of Sun Microsystems' Java platform (Java 1.0 [J2SE]).</p>
									<p>The latest release of the Java Standard Edition is Java SE 8. With the advancement of Java and its widespread popularity, multiple configurations were built to suit various types of platforms. For example: J2EE for Enterprise Applications, J2ME for Mobile Applications.</p>
									<p>The new J2 versions were renamed as Java SE, Java EE, and Java ME respectively. Java is guaranteed to be <b>Write Once, Run Anywhere.</b></p>
									<p>Java is &minus;</p>
									<ul class="list">
									<li><p><b>Object Oriented</b> &minus; In Java, everything is an Object. Java can be easily extended since it is based on the Object model.</p></li>
									<li><p><b>Platform Independent</b> &minus; Unlike many other programming languages including C and C&plus;&plus;, when Java is compiled, it is not compiled into platform specific machine, rather into platform independent byte code. This byte code is distributed over the web and interpreted by the Virtual Machine (JVM) on whichever platform it is being run on.</p></li>
									<li><p><b>Simple</b> &minus; Java is designed to be easy to learn. If you understand the basic concept of OOP Java, it would be easy to master.</p></li>
									<li><p><b>Secure</b> &minus; With Java's secure feature it enables to develop virus-free, tamper-free systems. Authentication techniques are based on public-key encryption.</p></li>
									<li><p><b>Architecture-neutral</b> &minus; Java compiler generates an architecture-neutral object file format, which makes the compiled code executable on many processors, with the presence of Java runtime system.</p></li>
									<li><p><b>Portable</b> &minus; Being architecture-neutral and having no implementation dependent aspects of the specification makes Java portable. Compiler in Java is written in ANSI C with a clean portability boundary, which is a POSIX subset.</p></li>
									<li><p><b>Robust</b> &minus; Java makes an effort to eliminate error prone situations by emphasizing mainly on compile time error checking and runtime checking.</p></li>
									<li><p><b>Multithreaded</b> &minus; With Java's multithreaded feature it is possible to write programs that can perform many tasks simultaneously. This design feature allows the developers to construct interactive applications that can run smoothly.</p></li>
									<li><p><b>Interpreted</b> &minus; Java byte code is translated on the fly to native machine instructions and is not stored anywhere. The development process is more rapid and analytical since the linking is an incremental and light-weight process.</p></li>
									<li><p><b>High Performance</b> &minus; With the use of Just-In-Time compilers, Java enables high performance.</p></li>
									<li><p><b>Distributed</b> &minus; Java is designed for the distributed environment of the internet.</p></li>
									<li><p><b>Dynamic</b> &minus; Java is considered to be more dynamic than C or C&plus;&plus; since it is designed to adapt to an evolving environment. Java programs can carry extensive amount of run-time information that can be used to verify and resolve accesses to objects on run-time.</p></li>
									</ul>
									<h2>History of Java</h2>
									<p>James Gosling initiated Java language project in June 1991 for use in one of his many set-top box projects. The language, initially called ‘Oak’ after an oak tree that stood outside Gosling's office, also went by the name ‘Green’ and ended up later being renamed as Java, from a list of random words.</p>
									<p>Sun released the first public implementation as Java 1.0 in 1995. It promised <b>Write Once, Run Anywhere</b> (WORA), providing no-cost run-times on popular platforms.</p>
									<p>On 13 November, 2006, Sun released much of Java as free and open source software under the terms of the GNU General Public License (GPL).</p>
									<p>On 8 May, 2007, Sun finished the process, making all of Java's core code free and open-source, aside from a small portion of code to which Sun did not hold the copyright.</p>
									<h2>Tools You Will Need</h2>
									<p>For performing the examples discussed in this tutorial, you will need a Pentium 200-MHz computer with a minimum of 64 MB of RAM (128 MB of RAM recommended).</p>
									<p>You will also need the following softwares &minus;</p>
									<ul class="list">
									<li>Linux 7.1 or Windows xp/7/8 operating system</li>
									<li>Java JDK 8</li>
									<li>Microsoft Notepad or any other text editor</li>
									</ul>
									<p>This tutorial will provide the necessary skills to create GUI, networking, and web applications using Java.</p>
									<h2>Try It Option</h2>
									<p>We have provided you with an option to compile and execute available code online. Just click the <b>Try it</b> button avaiable at the top-right corner of the code window to compile and execute the available code. There are certain examples which cannot be executed online, so we have skipped those examples.</p>
									<pre class="prettyprint notranslate tryit">
									public class MyFirstJavaProgram {

									   public static void main(String []args) {
										  System.out.println("Hello World");
									   }
									} 
									</pre>
									<p>There may be a case that you do not see the result of the compiled/executed code. In such case, you can re-try to compile and execute the code using <b>execute</b> button available in the compilation pop-up window.</p>
									<h2>What is Next?</h2>
									<p>The next chapter will guide you to how you can obtain Java and its documentation. Finally, it instructs you on how to install Java and prepare an environment to develop Java applications.</p>
									<hr />
								
							
							
							
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>';
					
		
	</div>
</body>

</html>	