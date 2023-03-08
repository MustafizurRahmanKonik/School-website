
<html>
<head> 
	<title>Daffodil International University</title>
	

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="headersection templetete clear">
	<div class="name">
			<h2>Daffodil International University</h2>
	</div>
			<div class="logo">
				<img src="images/jb_logo_new.png" alt="Logo"/>
				<!-- <p>Education is the backbone of a nation</p> -->
			</div>
			<!-- <div class="social ">
			<a href="#"><img src="images/dhaka-education-board-logo.png" alt="Dhaka board"/></a>
			<a href="#"><img src="images/jb_logo_new.png" alt="jessore board"/></a>
			<a href="#"><img src="images/ssc-result.jpg" alt="education board result"/></a>
	
	</div> -->
</div>
<div class="navigation templetete">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a id="active" href="about.html">About</a></li>
		<li><a href="contact.html">contact</a></li>
		
		<li><a href="#">Result</a></li>
		<?php 
		session_start();
      			if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
				  echo	'<li><a id="lg" href="/school/php/logout.php">Logout</a></li>';
				} else {
					echo	'<li><a href="/school/php/login.php">Login</a></li>';
				}
				    
        ?>
	</ul>
	<ul>

 
			
	</ul>

	
	
	
		
	
	
</div>

<div class="slider templetete clear">
<div id="tooplate_middle">
    
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="Suspendisse quis velit ac nisl ultrices tristique a eu velit." /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="Fusce eget tellus eget felis ultrices volutpat et vitae mauris." /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="Duis non est nec dui tincidunt pulvinar lacinia vel quam." /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="Phasellus in orci eget neque tristique semper ut ac lacus." /></a>
        </div>
	</div>
</div>
<div class="content templetete clear">
	<div class="maincontent template clear">

	<div class="samepost clear">
	<h2>our post title here....</h2>
	<img src="images/school.jpg" alt="post image"/>
	<p>
	bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.
	</p>
	<div class="readmore clear"><a href="#">Read more</a></div>
	</div>

<div class="samepost clear">
	<h2>our post title here....</h2>
	<img src="images/flower.jpg" alt="post image"/>
	<p>
	bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.
	</p>
	<div class="readmore clear"><a href="#">Read more</a></div>
</div>
<div class="samepost clear">
<h2>our post title here....</h2>
<img src="images/rally.jpg" alt="post image"/>
	<p>
	bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.
	</p>
<div class="readmore clear"><a href="#">Read more</a></div>
</div>
<div class="samepost clear">
	<h2>our post title here....</h2>
	<img src="images/price.jpg" alt="post image"/>
	<p>
	bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.
	</p>
<div class="readmore clear"><a href="#">Read more</a></div>
</div>
<div class="samepost clear">
	<h2>our post title here....</h2>
	<img src="images/bidai.jpg" alt="post image"/>
	<p>
	bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population. bangladesh is a small country.But it has huge population.bangladesh is a small country.But it has huge population.
	</p>
<div class="readmore clear"><a href="#">Read more</a></div>
</div>
</div>

<div class="sidebar clear">
<div class="bardesign clear">
	<h2>NOtice</h2>

	<div>
		<ul>
			<li><a href="#">post one will be go there</a></li>
			<li><a href="#">post two will be go there</a></li>
			<li><a href="#">post three will be go there</a></li>
			<li><a href="#">post four will be go there</a></li>
			<li><a href="#">post five will be go there</a></li>
			<li><a href="#">post six will be go there</a></li>
			</ul>
		</div>
</div>

<div class="bardesign clear">
	<h2>Popular articles</h2>
	

<div class="popular clear">
		<h3><a href="#">Post will be go there..</a></h3>
		<img src="images/rally.jpg" alt="post image"/>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	<h3><a href="#">Post will be go there..</a></h3>
		<img src="images/rally.jpg" alt="post image"/>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	<h3><a href="#">Post will be go there..</a></h3>
		<img src="images/rally.jpg" alt="post image"/>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
</div>
</div>


<div class="bardesign clear">
	<h2>Notice</h2>

	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	<p>
	side bar content is bangladesh is a small country.But it has huge population.bangladesh is a small country.
	</p>
	</div>
</div>
</div>
<div style="clear:both"></div>


<div class="footersection templetete clear">
		<div class="footermenu clear">
		<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">contact</a></li>
	<li><a href="#">Privacy</a></li>
	</ul>
		</div>
		<p>&copy;copyright Daffodil International University</p>
		
</div>
<div class="fixedicon clear">
	<a href="https://www.dhakaeducationboard.gov.bd/"><img src="images/dhaka-education-board-logo.png" alt="dhaka board logo"/></a>
	<a href="https://www.jessoreboard.gov.bd/"><img src="images/jb_logo_new.png" alt="jessore board logo"/></a>
	<a href="http://www.educationboardresults.gov.bd/"><img src="images/ssc-result.jpg" alt="education board result"/></a>
</div>


<script type="text/javascript" src="js/scrolltop.js">
</script>


</body>

</html>