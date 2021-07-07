<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Apni University | Course List</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
	
	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page" class="theia-exception">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="admission.html" class="login">Admission</a></li>
			<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
			<li class="hidden_tablet"><a href="login.html" class="btn_1 rounded">Login</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.html">Home</a></span>

				</li>
				<li><span><a href="courses-list-sidebar.php">Courses</a></span>
				</li>
				<li><span><a href="contacts.html">Contact</a></span>
				</li>
				<li><span><a href="media-gallery.html">University Life</a></span>
				</li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="courses" style="background-image: url(img/uni1.jpg);">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span> courses</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li>
						<div class="layout_view">
							<a href="courses-grid.html"><i class="icon-th"></i></a>
							<a href="#0" class="active"><i class="icon-th-list"></i></a>
						</div>
					</li>
					<li>
						<select name="orderby" class="selectbox">
							<option value="category">Category</option>
							<option value="category 2">Literature</option>
							<option value="category 3">Architecture</option>
							<option value="category 4">Economy</option>
							</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col"> <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Category</h6>
								<ul>
										<?php

										$conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
										 
										// Check connection
										if($conn === false){
											die("ERROR: Could not connect. "
												. mysqli_connect_error());
										}
										
										$i =1;
										$qry = $conn->query("SELECT * from department");
										$rows_count_value = mysqli_num_rows($qry);
										?>
																			
									<li>
										<label>
											<input type="checkbox" class="icheck" checked>all <small>(<?php echo $rows_count_value ?>)</small>
										</label>
									</li>

									<li>
									<?php while($row=$qry->fetch_assoc()):?>
										<label>
											<input type="checkbox" class="icheck"><?php echo $row['department']?>
										</label>
										<br>
									</li>
									<?php endwhile; ?>	
								</ul>
							</div>
							
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9" id="list_sidebar">
	
					<?php

					$conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
										 
										// Check connection
										if($conn === false){
											die("ERROR: Could not connect. "
												. mysqli_connect_error());
										}
										
										$i =1;
										$qry = $conn->query("SELECT * from department");
					 while($row=$qry->fetch_assoc()):?>
				<div class="box_list wow">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure class="block-reveal">
									<div class="block-horizzontal"></div>
									<a href="#"><img src="http://localhost/UniversityWebProject/img/course.png" alt=""></a>
									<div class="preview"><span>Preview course</span></div>
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<a href="#0" class="wish_bt"></a>
									<div class="price"></div>
									<small>Category</small>
									<h3><?php echo $row['department']?></h3>
									<p><?php echo $row['description']?></p>
									<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
								</div>
								<ul>
									<li><a href="admission.html">Enroll now</a></li>
								</ul>
							</div>
						</div>
					 <br> <br><br>
					</div>

					<?php endwhile; ?>	

					<!-- /box_list -->

					<!-- /box_list -->
					<p class="text-center add_top_60"><a href="#0" class="btn_1 rounded">Load more</a></p>
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Cum appareat maiestatis interpretaris et, et sit.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments and Refunds</h4>
							<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Quality Standards</h4>
							<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Admission</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="#0">Login</a></li>
						<li><a href="#0">Register</a></li>
						<li><a href="#0">News &amp; Events</a></li>
						<li><a href="#0">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@ApniUniversity.com"><i class="ti-email"></i> info@ApniUniversity.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
							<input type="submit" value="Submit" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2021 Apni University</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
  
</body>
</html>