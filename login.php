<!DOCTYPE html>
<html>
<head>
		
	<title>ClassRoom</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 
	
<body>

	<style>
	body{
		background-color: darkorange;
	}
	
		
		#ClassRoom{
			margin-top: 1%;
			margin-left: 0.5%;
			width: 99%;
			border: 2px;
			background: darkturquoise;
			padding: 0.5%;
			border-radius: 25px;
			border: 2px ;
		}


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 4px 16px;
    margin-left:12%;
    cursor: pointer;
    width: 70%;

}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width:15%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
		#Student{
			box-sizing: content-box;
			width: 13%;			
			height: 450px;
			padding: 3%;
			border: 8px solid forestgreen;
		 
			background: white;
			margin-left: 0.5%;
		}

		#Master{
			box-sizing: content-box;
			width: 13%;
			padding: 3%;
			height: 450px;
			margin-left: 79%;
			
			border: 8px solid forestgreen;
			
			margin-top:-40%;
			margin-right: 0.5%;
			background: white;
		
		}
		#Main-Box{
			box-sizing: content-box;
			width: 29.5%;
			height: 170px;
			padding: 14%;
			border: 5px ;
			margin-left: 21%;
			margin-top:-40.5%;
			background: white;
			border-radius: 25px;

		}
		.nav ul{
		list-style-type: none;
		padding: 0 ;
		margin: 0;
		overflow: hidden;
		position: relative;
		font-family: Arial;

	}
	.nav a {
   
    font-size: 25px;
    font-family: serif;
    color: black;
    text-align: center;
    padding: 10px 10px;
    text-decoration: none;
    margin-left: -50%;
    
}

	.nav ul li:nth-child(1){
		float: right;
	}
	.nav ul li:nth-child(2){
		float: right;
		}
.nav ul li:nth-child(3){
		float: right;
		}

	.nav ul li a:hover{
		color: #4CAF50;
	}
.name{
	        border: 2px;
			width: 100%;
			height: 0.5%;
			margin-left: -16%;
			margin-top: -10%;
			background: black;
			padding: 25px;
			border-radius: 27px;
			border: 2px solid black;
		}
		h1{ 
			margin-top:-9%;
			text-align: center;
			font-style: serif;
			color: #ccc;
			font-size: 130%;
		}
		h3{  
			margin-top: -25%;
			margin-left: 25%;
			font-family:  Comic Sans MS;
			color:coral;
			font-size: 120%;
			font-style: bold;

		}
		img{
			width: 99%;

			margin-left: 1%;
			margin-top: 10%;
		}

.name1{
			width: 40%;
			height: 25PX;
			margin-left: -39%;
			margin-top: -1%;
			background: black;
			padding: 3%;
			border-radius: 27px;
			
		}
		a:hover{
			color: coral;
		}
		.name2{
			width: 40%;
			height: -1%;
			margin-left: 25%;
			margin-top: -18.9%;
			background: black;
			padding: 3%;
			border-radius: 27px;
			
		}
		.name3{
			width: 40%;
			height: -1%;
			margin-left: 90%;
			margin-top: -18.9%;
			background: black;
			padding: 3%;
			border-radius: 27px;
			
		}
		.name4{
			width: 40%;
			height: -1%;
			margin-left: -38%;
			margin-top: 5%;
			background: black;
			padding: 3%;
			border-radius: 27px;
			
		}
		.name5{
			width: 40%;
			height: -1%;
			margin-left:26%;
			margin-top: -18.9%;
			background: black;
			padding: 3%;
			border-radius: 27px;
			
		}
		.name6{
			width: 40%;
			height: -1%;
			margin-left: 91%;
			margin-top: -18.9%;
			background: black;
			padding: 3%;
			border-radius: 27px;
			
		}

		
	</style>
</head>
<body>
	<div  id="ClassRoom" ><!--header-->
		


		<div class="nav">
		
		<ul>
			<li>
				<a href="login.html"><img style="width: 70%;" src="images/login.png"></a>
			</li>
			<li>
				<a href="question.html"><img style="width: 70%;" src="images/question.png"></a>
</a>
			</li>
			<li>
				<a href="assignment.html"><img style="width: 70%;" src="images/list.png"></a>
			</li>
			<li><div><form>
  <input style="    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    margin-left: 27%;
    margin-top: -15%;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;" type="text" name="search" placeholder="Search..">
</form>
</div></li>

		</ul>

	

	</div>
	</div><!--end header-->
	<a href="index.html" style="text-decoration: none;"><h1 style="margin-top: -3%; margin-right:77%; font:italic bold 40px/35px Georgia, serif; color:grey;" >ClassRoom</h1></a>
	
	<div id="Student"><!--student-->
	<div class="name">
		<div><a href="student.html" style="text-decoration: none;"> <h1>STUDENT ZONE</h1></a></div>
			
			<img src="images/man.png">

		</div>
		<div>
		<img style="width: 29%;margin-top: 110%;margin-left: -10%" src="images/box.png">
		<h3>New at classroom?</h3>
	</div>
	<div>
		<img style="width: 29%;margin-top: -5%;margin-left: -10%" src="images/box.png">
		<a href="about.html" style="text-decoration: none;"><h3>Know about us!</h3></a>
	</div>
	<div>
		<img style="width: 29%;margin-top: 9%;margin-left: -10%" src="images/box.png">
		<a href="contact.html" style="text-decoration: none;"><h3>Get in touch</h3></a>
	</div>
	<div>
		<img style="width: 29%;margin-top: 10%;margin-left: -10%" src="images/box.png">
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><h1>Login</h1></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/man.png" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button style="margin-left: 1%;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	</div>
	
      

		
	</div><!---end student-->
	<div id="Master"><!--master-->
		<svg height="300" width="300" style="margin-top: 85%;margin-left: 10%;">
           <a href="master.html" style="text-decoration: none;"> <circle cx="80" cy="80" r="70" stroke="black" stroke-width="6" fill="red" /></a>
            <h2 style="color: black;margin-top: -145%;margin-left: 26%;color: #ccc;font-size: 190%;">MASTER</h2>
            <h2 style="color: black;margin-top: -10%;margin-left: 37%;color: #ccc;font-size: 190%;">ZONE</h2>


       </svg> 
 
		
	</div><!--end master-->
	<div id="Main-Box"><!--middle-->
		<div >		
			<div><!-- gallery-->
		  <img src="images/gallery.png" style="margin-left:-40%;margin-top: -50%;width: 45%;" >
		  <div class="name1">
			<div><h1><a href="gallery.html" style="text-decoration: none;">GALLERY<h1></a></div>
		</div>
		</div><!--end  gallery-->

		  <div><!-- video-->
		  <img src="images/video.png" style="margin-left:25%;margin-top: -85%;width: 45%;" >
		  <div class="name2">
			<h1><a href="videos.html" style="text-decoration: none;">VIDEO</h1></a>
		</div><!-- end video-->
	</div>

	<div><!-- books-->
		  <img src="images/books.png" style="margin-left:90%;margin-top: -85%;width: 45%;" >
		  <div class="name3">
			<h1 ><a href="books.html" style="text-decoration: none;">BOOKS</h1></a>
		</div>
		  	</div> <!-- end books -->
		  </div>


		  <div>	<!-- note-->
		  <img src="images/note.png" style="margin-left:-40%;margin-top: 10%;width: 45%;" >
		  <div class="name4">
			<h1><a href="notes.html" style="text-decoration: none;">NOTES</h1></a>
		</div>
		  </div><!-- end note -->

		  <div><!-- cw-->
		  <img src="images/cw.png" style="margin-left:25%;margin-top: -93%;width: 45%;" >
		  <div class="name5">
			<h1><a href="cw.html" style="text-decoration: none;">CLASS-WORK</h1></a>
		</div>
		  </div><!-- end cw -->

		  <div><!-- xm-->
		  	<img src="images/xm.png" style="margin-left:90%;margin-top: -95%;width: 45%;" >
		  	<div class="name6">
			<h1><a href="exam.html" style="text-decoration: none;">EXAM/QUIZ</h1></a>
		</div>
		  	</div><!-- end xm -->
		


		
	</div><!--end middle-->


<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</p>
						
					</div>						
				</div>
			
			</footer>	
			<!-- End footer Area -->	


</body>
</html>
