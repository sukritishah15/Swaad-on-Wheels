<?php
	require "header.php";
?>

	<main>
		
	<!--Carousel Image Slider-->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<!--Carousel-indicators are for the horizontal bars that appear at the bottom of the slider sections, which indicate that out of all the images in the slider, at which image we are currently-->
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="i1.jpg">
			</div>
			<div class="carousel-item">
				<img src="i2.jpg">
			</div>
			<div class="carousel-item">
				<img src="i3.jpg">
			</div>
		</div>

		<a class="carousel-control-prev" href="#slides" data-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
  		</a>
  		<a class="carousel-control-next" href="#slides" data-slide="next">
    		<span class="carousel-control-next-icon"></span>
  		</a>
	</div>

<!--Jumbotron-->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h3 class="text-info text-center">One stop for food of your choice</h3><br>

				<h1 class="text-dark text-center font-weight-bolder" id="myH">Hungry?</h1>

					<script>
						function myFunction() {

							setTimeout(myFunction, 2000);

							var x = document.getElementById("myH");
  							if (x.innerHTML === "Hungry?") {
    							x.innerHTML = "Unexpected guests?";
  							} 
  							else if (x.innerHTML === "Unexpected guests?") {
    							x.innerHTML = "Cooking gone wrong?";
  							} 
  							else if (x.innerHTML === "Cooking gone wrong?") {
    							x.innerHTML = "Late night at office?";
  							} 
  							else if (x.innerHTML === "Late night at office?") {
    							x.innerHTML = "Movie Marathon?";
  							} 
  							else if (x.innerHTML === "Movie Marathon?") {
    							x.innerHTML = "Game Night?";
  							} 
  							else{
    							x.innerHTML = "Hungry?";
  							} 
						}
					</script>

				<h3 class="text-success text-center">Order food online, here, at &#2360;&#x094D;&#2357;&#x093E;&#x0926; on wheels </h3>
			</div>
		</div>
	</div>
	</main>

<?php
	require "footer.php";
?>
