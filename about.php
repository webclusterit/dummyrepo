<!DOCTYPE html>
<html>

<head>
	<title>About us Page</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity=
"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
		crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous">
	</script>

    <style>
            *{
	margin:0;
	padding:0;
}
	
html{	
	scroll-behaviour:smooth;
}
	
:root{	
	--navbar-height:59px;
}
	
/* This is for the logo of the company */
.logo{
	width:20%;	
	
	/* It is used to make the logo to
	be displayed along with the ul
	list horizontally */
	display:flex;
	justify-content:center;
	align-items:center;
}
	
.logo img{	
	width:33%;
	
	/* The logo image will have a border,
	that has a width of 2px and the color
	of the border is white */
	border:2px solid white;

	/* Now we will add a border radius of
	5px to make the logo image circular */
	border-radius:50px;
}
	
.navbar{
	
	/* To make all those logo image and the
	list to be displayed horizontally */
	display:flex;
	align-items:center;
	justify-content:center;
	position:sticky;
	top:0;
	
	/* When we will take our mouse to those
	lists or image the cursor will be pointer */
	cursor: pointer;
}
	
.nav-list{
	width:70%;
	
	/* It is to display the list in horizontal */
	display:flex;
}
	
.nav-list li{	

	/* This will remove the style of bulleted list */
	list-style:none;

	/* This will create a space between the items */	
	padding:2px 6px;
}
	
.nav-list li a{
	
	/* This is to remove the underline of the
	text that appears when we use the anchor tag */	
	text-decoration:none;
	
	/* This is to display the color of
	those anchor text white */
	color:white;
}
	
/* When the user will point their mouse towards
any anchor text they will find a different color */	
.nav-list li a:hover{
	color:grey;
}
	
.rightNav{
	width:50;
	
	/* We will find the search box along with
	the search button will be shifted to right */
	text-align:right;
}
	
#search{
	padding:5px;
	
	/* The size of the font that will be appearing
	in the search box when the user will try to
	search something */
	font-size:17px;
	
	/* The border of the search box has a width
	of 2px and the type of the border is solid.
	The color of the border will be grey */
	border:2px solid grey;
	
	/* We will use a border-radius to make the
	search box give a better looking shape than
	rectangular shape */
	border-radius:9px;
}
	
.background{
	
	/* The background image will change whenever
	we load the page */
	background: grey;
	
	/* This will make the background that have
	been added will be darken */
	background-blend-mode:darken;
	background-size:cover;
}
	
.firstsection{
	
	/* It is to make the height of the
	viewport to be 100 */
	height:100vh;
}
	
.box-main{
	
	/* This is to display the contact us and the
	sentences below it to be displayed in flex */
	display:flex;
	justify-content:center;
	align-items:center;
	
	/* This is to display the text to have
	a color of white */
	color:white;
	max-width:50%;
	
	/* Now we will set the margin to auto */
	/* This will make all the text to be
	displayed at the center of the page */
	margin:auto;
	
	/* This will make the text to display at
	the center of the page vertically */
	height:80%;
}
	
.firstHalf{	
	width:75%;
	display:flex;
	
	/* It is to specify the direction of
	the flexible items */
	flex-direction:column;
	justify-content:center
}
	
.firstHalf img{	
	display:flex;
	border-radius:9050px;
}
	
/* This is used to make the text to
appear bigger */
/* Now we have used a font here to distinguish
itself from the next text */
.text-big{
	font-family: 'Piazzolla', serif;
	
	/* The text to have a style of bold */
	font-weight: bold;
	
	/* The size of the text to be appearing as
	bigger to distinguish itself from the text
	in the class text-small */
	font-size: 41px;
	
	/* The text to be aligned at center */
	text-align:center;
}
	
.text-small{	
	font-family: 'Sansita Swashed', cursive;
	font-size: 18px;
	text-align:center;
}
	
#service{	
	margin:34px;
	display:flex;
}
	
#service .box{
	
	/* This is for the background of the box
	to make all the boxes seperatable from
	each other */
	padding:300px;
	margin:3px 6px;
	
	/* To make the box have a better looking
	than rectangular shape */
	border-radius:28px;
}
	
/* This is for the image that we have
used in the box */
#service .box img{
	margin-top:20px;
	
	/* This is for the height of the image
	that is required for the page */
	height:150px;
	margin:auto;
	display:block;
	
	/* This is to make the image obtain
	a circular shape */
	border-radius:200px;
}
	
#service .box p{
	
	/* This is for the text that we have
	written to define the image that we
	have used */
	font-family:sans-serif;
	
	/* This is to make the text to be
	aligned at center */
	text-align:center;
}
	
#services{
	margin:34px;
	display:flex;
}
	
#services .box{

	/* This is for the background of the box
	to make all the boxes seperatable from
	each other */
	padding:300px;
	margin:3px 6px;
	
	/* To make the box have a better looking
	than rectangular shape*/
	border-radius:28px;
}

/* This is for the image that we have
used in the box*/
#services .box img{
	margin-top:20px;
	
	/* This is for the height of the image
	that is required for the page */
	height:150px;
	margin:auto;
	display:block;
	
	/* This is to make the image obtain
	a circular shape */
	border-radius:200px;
}
	
#services .box p{

	/* This is for the text that we have written
	to define the image that we have used */
	font-family:sans-serif;
	
	/* This is to make the text to be
	aligned at center */
	text-align:center;
}
	
.btn{
	padding:8px 20px;
	margin:7px 0;
	
	/* The radius of the border will have a width of
	2px and the type of border will be solid. The
	border will have a border of white depending on
	what type of image we have used as background */
	border:2px solid white;
	
	/* Here we have used border-radius to make
	the search button appear better */
	border-radius:8px;
	
	/* To make the button have the color
	of background */
	background:none;
	
	/* To make the text of the button have
	the color of white */
	color:white;
	cursor:pointer;
}
	
.btn-sm{
	padding:6px 10px;
	vertical-align: middle;
}
	
/* This is used here in case if we want to
make the text appear at center */
.center{
	text-align: center;
}
	
.text-footer {
	text-align: center;
	padding: 30px 0;
	font-family: 'Ubuntu', sans-serif;
	display: flex;
	justify-content: center;
}

    </style>
</head>

<body>
	<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo"><img src=""></div>
			<li><a href="#Home">Home</a></li>
			<li><a href="#Food">Food</a></li>
			<li><a href="#AboutUs">AboutUs</a></li>
			<li><a href="#ContactUs">Contact Us</a></li>
		</ul>

		<div class="rightNav">
			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>
	</nav>

	<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
				<p class="text-big">About US</p>

				<p class="text-small">
					Here you will get to know the team
					members of our company
				</p>

				<br>
				
				<p class="center"><a href="#Order"
					style="text-decoration:none;color:white;">
					Below are the people who
					works in our company</a>
				</p>

			</div>
		</div>
	</section>

	<section class="service">
		<h1 class="h-primary center" style=
			"margin-top:30px;text-align:center;">
			Our Team
		</h1>
		
		<div id="service">
			<div class="box">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20201231132740/Capture.PNG"
					alt="picture not displayed">
				<br>

				<p class="center">
					<a href="#xyz"
						style="text-decoration:none;color:black;
						font-weight:bold;font-family: 'Langar', cursive;">
						xyz
					</a>
				</p>


				<br>
				
<p>CEO and the Founder</p>

			</div>

			<div class="box">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20201231132740/Capture.PNG"
					alt="picture not displayed">
				<br>

				<p class="center">
					<a href="#abc"
						style="text-decoration:none;color:black;
						font-weight:bold;font-family: 'Langar', cursive;">
						abc
					</a>
				</p>


				<br>
				
<p>co-founder</p>

				<br>
				
<p>You can contact him: -</p>

				
<p>Foodscalablility@gmail.com</p>

			</div>
		</div>
	</section>

	<section class="services">
		<div id="services">
			<div class="box">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20201231132740/Capture.PNG"
					alt="picture not displayed">
				<br>
				<p class="center">
					<a href="#xyz" style="text-decoration:none;
						color:black;font-weight:bold;
						font-family: 'Langar', cursive;">
						asw
					</a>
				</p>

				<br>

				
<p>Food Manager of the company </p>

			</div>
		</div>
	</section>
	
	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>

	</footer>
</body>

</html>
