<?php 
	include 'admin/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Front End Project</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/scss/main.css">
</head>
<body>
<header id="header">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-lg visible-xs" href="#">
					<img src="assets/images/logo.png" alt="logo">
				</a>
			</div><!-- navbar-header -->
			 <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left">
					<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM navbar";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
					?>
									<li class="nav-item <?php if($i++ == 0) echo "custom-active"?>">
										<a class="nav-link" href="<?=$result['link']?>"><?=$result['name']?></a>
									</li>
					<?php
								}
							}
						}
					?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Extra
							<span class="caret"></span>
						</a>
					</li>
				</ul><!-- nav navbar-nav navbar-left -->
				<form class="form-inline navbar-form navbar-right">
					<a href="admin/index.php"><button type="button" class="btn btn-login">LOGIN</button></a>
					<button type="sbutton" class="btn btn-signup">SIGN UP</button>
				</form>
			</div><!-- collapse navbar-collapse -->
		</div><!-- container -->
	</nav><!-- navbar -->
</header><!-- header -->
<section id="banner">
	<div class="container text-center ">
		<h1>
			Do not wait — <span>launch</span> your startup now!
		</h1>
		<h5>
			this tempate is flexible enough to suit any kind of startup or new business
		</h5>
		<button type="button" class="btn btn-getStarted">
			<span class="fa fa-shopping-cart"></span>
			GET STARTED
		</button>
		<button type="button" class="btn btn-tour">TAKE TOUR</button>
	</div><!-- container -->
</section><!-- banner -->
<section id="clients">
	<div class="container text-center">
		<ul class="list-inline">
			<?php
				if($db_conn) {
					$sql_select_all = "SELECT * FROM clients";
					$query = mysqli_query($db_conn, $sql_select_all);
					if ($query) {
						while ($result = mysqli_fetch_assoc($query)) {
			?>
					<center>
						<div class="photo">
							<li>
								 <img src="assets/images/<?=$result['image_path']?>">
							</li>
						</div>
					</center>
			<?php
						}
					}
				}
			?>
		</ul>
	</div><!-- container -->
</section><!-- clients -->
<section id="about">
	<div class="container text-center">
		<ul class="nav nav-tabs text-center">
			<li class="liOne active">
				<button class="first-tab ">FIRST TAB</button>
			</li>
			<li class="liTwo">
				<button class="second-tab">SECOND TAB</button>
			</li>
			<li class="liThree">
				<button class="third-tab">THIRD TAB</button>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-panel tab-active" >
				<div class="row" id="first-tab">
					<div class="col-sm-6">
						<img src="assets/images/people.jpg" class="img-responsive">
					</div><!-- col-sm-6 -->
					<div class="col-sm-6">
						<br>
						<h3>FOR EVERY <span>STARTUP</span></h3>
						<p class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</p>
						<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
						<a href="#" class="btn">GET TEMPLATE</a>
						<a href="#" class="btn">SEE ELEMENTS</a>
					</div><!-- col-sm-6 -->
				</div><!-- row -->
			</div><!-- tab-panel -->
			<div class="tab-panel hidden" id="second-tab">
				<div class="row">
					<div class="col-sm-6 pull-right">
						<img src="assets/images/phone.jpg" class="img-responsive">
					</div><!-- col-sm-6 -->
					<div class="col-sm-6">
						<br>
						<h3>NEW AGE <span>TECHNOLOGY</span></h3>
						<p class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</p>
						<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
					</div>   <!-- col-sm-6 -->
				</div>   <!-- row -->
			</div>  <!-- tab-panel -->
			<div class="tab-panel hidden" id="third-tab">
				<div class="section-header">
					<h2>3 EASY STEPS</h2>
					<p class="sub-header">
						Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
						<br>dfs sit atmet sit dolor greand fdanrh sdfs
					</p>
				</div><!-- col-sm-6 -->
				<div class="section-content row">
					<div class="col-sm-4">
						<i class="fa fa-credit-card"></i>
						<span class="heading">PLACE ORDER</span>
						<p class="thin">Sit amet, consectetur adipiscing elit.<br>In hac divisione rem ipsam prorsus probo<br>elegantiam desidero.</p>
					</div><!-- col-sm-4 -->
					<div class="col-sm-4">
						<i class="fa fa-cogs"></i>
						<span class="heading">OUR SYSTEM RUNS</span>
						<p class="thin">Sit amet, consectetur adipiscing elit.<br>In hac divisione rem ipsam prorsus probo<br>elegantiam desidero.</p>
					</div><!-- col-sm-4 -->
					<div class="col-sm-4">
						<i class="fa fa-line-chart"></i>
						<span class="heading">RECEIVE REPORT</span>
						<p class="thin">Sit amet, consectetur adipiscing elit.<br>In hac divisione rem ipsam prorsus probo<br>elegantiam desidero.</p>
					</div><!-- col-sm-4 -->
				</div><!-- section-content row -->
			</div><!-- tab-panel -->
		</div><!-- tab-content -->
	</div><!-- nav nav-tabs -->
	<hr>
</section><!-- about -->
<section id="process">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 pull-right">
				<img src="assets/images/content_image1.png" class="img-responsive">
			</div><!-- col-sm-6 -->
			<div class="col-sm-6">
				<br><br>
				<h3>NEW AGE <span>TECHNOLOGY</span></h3>
				<p class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</p>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
			</div><!-- col-sm-6 -->
			<hr class="clearfix">
			<div class="col-sm-6">
				<img src="assets/images/helmet.jpg" class="img-responsive">
			</div><!-- col-sm-6 -->
			<div class="col-sm-6">
				<br><br>
				<h3>HANG <span class="highlight">ON TO</span> YER HELMET</h3>
				<p class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</p>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
			</div><!-- col-sm-6 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- process -->
<section id="features">
	<div class="container">
		<div class="tabs row">
			<div class="col-md-4 col-sm-12">
				<ul class="list-unstyled">
					<li class="active">
						<a href="#home">
							<div class="tab-info">
								<div class="tab-title">Lorem Dolor</div>
								<div class="tab-desc">Sit amet, consectetur adipiscing elit<br>hac divisione rem ipsam prorsus</div>
							</div><!-- tab-info -->
						</a>
					</li>
					<li>
						<a href="#profile">
							<div class="tab-info">
								<div class="tab-title">Lorem Dolor</div>
								<div class="tab-desc">Sit amet, consectetur adipiscing elit<br>hac divisione rem ipsam prorsus</div>
							</div><!-- tab-info -->
						</a>
					</li>
					<li>
						<a href="#messages">
							<div class="tab-info">
								<div class="tab-title">Lorem Dolor</div>
								<div class="tab-desc">Sit amet, consectetur adipiscing elit<br>hac divisione rem ipsam prorsus</div>
							</div><!-- tab-info -->
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-8 col-sm-12">
				<div class="tab-pane active" id="home">
					<img src="assets/images/rich_features_1.png" class="img-responsive">
				</div><!-- tab-pane -->
				<div class="tab-pane" id="profile">
					<img src="assets/images/rich_features_2.png" class="img-responsive">
				</div><!-- tab-pane -->
				<div class="tab-pane" id="message">
					<img src="assets/images/rich_features_3.png" class="img-responsive">
				</div><!-- tab-pane -->
			</div><!-- tabs-content -->
		</div><!-- tabs -->
	</div><!-- container -->
</section><!-- features -->
<section id="features-list">
	<div class="container text-center">
			<?php
				if($db_conn) {
					$sql_select_all = "SELECT * FROM features_list";
					$query = mysqli_query($db_conn, $sql_select_all);
					if ($query) {
						$i = 0;
						while ($result = mysqli_fetch_assoc($query)) {
			?>
			<?php
						if($i++ % 4 == 0) {
			?>
							<div class="clearfix">
			<?php
						}
			?>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="wrapper text-center">
									<i class="<?=$result['icon_class']?>" aria-hidden="true"></i>
									<span class="heading"><?=$result['heading']?></span>
									<p><?=$result['description']?></p>
								</div><!-- text-center -->
							</div><!-- col-md-3 col-sm-6 col-xs-12 -->
			<?php
						if($i % 4 == 0) {
			?>
							</div><!-- clearfix -->
			<?php
						}
			?>
			<?php
						}
					}
				}
			?>
	</div><!-- container text-center -->
</section><!-- features-list -->
<section id="newsletter">
	<div class="container text-center">
		<div class="col-sm-12 col-lg-5">
			<div class="news-left">
				<h2>GET LIVE UPDATES</h2>
				<p>No spam promise - only latest news and prices!</p>
			</div><!-- news-left -->
		</div><!-- col-sm-12 col-lg-5 -->
		<div class="col-sm-12 col-lg-7">
			<div class="news-right">
				<div class="form-group form-inline">
					<input size="15" type="text" class="form-control required" name="FULLNAME" placeholder="Your name">
					<input size="25" type="email" class="form-control required" name="EMAIL" placeholder="your@email.com">
					<input type="submit" class="btn" value="SUBSCRIBE">
				</div><!-- form-group form-inline -->
			</div><!-- news-right -->
		</div><!-- col-sm-12 col-lg-7 -->
	</div><!-- container text-center -->
</section><!-- newsletter -->
<section id="product">
	<div class="container text-center">
		<div class="section-header">
			<h2>PRODUCT <span>PACKAGES</span></h2>
			<p class="sub-header">
				Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
				<br>dfs sit atmet sit dolor greand fdanrh sdfs
			</p>
		</div><!-- section-header -->
		<div class="section-content row">
			<div class="col-sm-4">
				<div class="package-column disabled">
					<div class="package-title">Individual</div>
					<div class="package-price">
						<div class="price"><span class="currency">$</span>19</div>
						<div class="period">per month</div>
					</div><!-- package-price -->
					<div class="package-detail">
						<ul class="list-unstyled">
							<li><strong>Free</strong> Domain</li>
							<li><strong>Unlimited</strong> Websites</li>
							<li><strong>Unlimited</strong> Bandwidth</li>
							<li><strong>Unlimited</strong> Disk Space</li>
						</ul>
						<a href="#" class="btn">Get started</a>
					</div><!-- package-detail -->
				</div><!-- package-column disabled -->
			</div><!-- col-sm-4 -->
			<div class="col-sm-4">
				<div class="package-column">
					<div class="package-title">Studio</div>
					<div class="package-price">
						<div class="price"><span class="currency">$</span>29</div>
						<div class="period">per month</div>
					</div><!-- package-price -->
					<div class="package-detail">
						<ul class="list-unstyled">
							<li><strong>Free</strong> Domain</li>
							<li><strong>Unlimited</strong> Websites</li>
							<li><strong>Unlimited</strong> Bandwidth</li>
							<li><strong>Unlimited</strong> Disk Space</li>
						</ul>
						<a href="#" class="btn">Get started</a>
					</div><!-- package-detail -->
				</div><!-- package-column-->
			</div><!-- col-sm-4 -->
			<div class="col-sm-4">
				<div class="package-column">
					<div class="package-title">Enterprise</div>
					<div class="package-price">
						<div class="price"><span class="currency">$</span>49</div>
						<div class="period">per month</div>
					</div><!-- package-price -->
					<div class="package-detail">
						<ul class="list-unstyled">
							<li><strong>Free</strong> Domain</li>
							<li><strong>Unlimited</strong> Websites</li>
							<li><strong>Unlimited</strong> Bandwidth</li>
							<li><strong>Unlimited</strong> Disk Space</li>
						</ul>
						<a href="#" class="btn">Get started</a>
					</div><!-- package-detail -->
				</div><!-- package-column-->
			</div><!-- col-sm-4 -->
		</div><!-- section-content row -->
	</div><!-- container -->
</section><!-- product -->
<section id="awards">
	<div class="container text-center">
		<div class="section-header">
			<h2><span>OUR</span> AWARDS</h2>
			<p>
				Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
				<br>dfs sit atmet sit dolor greand fdanrh sdfs
			</p>
		</div><!-- section-header -->
		<div class="section-content">
			<ul class="list-inline">
				<?php
					if($db_conn) {
						$sql_select_all = "SELECT * FROM awards";
						$query = mysqli_query($db_conn, $sql_select_all);
						if ($query) {
							while ($result = mysqli_fetch_assoc($query)) {
				?>
								<li>
									<a href="<?=$result['link']?>">
										<img src="assets/images/<?=$result['image_path']?>">
									</a>
								</li>
				<?php
							}
						}
					}
				?>
			</ul>
		</div><!-- section-content -->
	</div><!-- container -->
</section><!-- awards -->
<section id="feedback">
	<div class="container text-center">
		<div class="section-header">
			<h2>WHAT <span>CLIENTS</span> SAY</h2>
		</div><!-- section-header -->
		<div class="section-content">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="slider">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.
					</blockquote>
				</div><!-- slider -->
			</div><!-- col-sm-10 col-sm-offset-1 -->
		</div><!-- section-content -->
	</div><!-- container -->
</section><!-- feedback -->
<section id="feedback-controls">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="flex-manual">
				<div class="col-xs-12 col-sm-4 wrap">
					<div class="switch flex-active">
						<img alt="client" src="assets/images/profile-1.jpg" class="sm-pic img-circle pull-left" width="69" height="70">
						<p>
							<span class="highlight">AMY WARNER</span><br>Investor at <span class="highlight">Pear Inc.</span>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 wrap">
					<div class="switch pull-left">
						<img alt="client" src="assets/images/profile-2.jpg" class="sm-pic img-circle pull-left" width="69" height="70">
						<p>
							<span class="highlight">JOHN DOESOME</span><br>Accountant at <span class="highlight">Vell Inc.</span>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 wrap">
					<div class="switch">
						<img alt="client" src="assets/images/profile-1.jpg" class="sm-pic img-circle pull-left" width="68" height="69">
						<p>
							<span class="highlight">PETER MOOSOME</span><br>VP Marketing at <span class="highlight">Footbook</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- container -->
</section><!-- feedback-controls -->
<section id="team">
	<div class="container text-center">
		<div class="section-header">
			<h2>BEHIND <span class="highlight">THE</span> SCENES</h2>
			<p class="sub-header">
				Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
				<br>dfs sit atmet sit dolor greand fdanrh sdfs
			</p>
			<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil<br> ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae<br> qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.<br> Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,<br> nihilamane umquam magnum ac cognitione.</p>
		</div><!-- section-header -->
		<div class="section-content row">
			<?php
				if($db_conn) {
					$sql_select_all = "SELECT * FROM team";
					$query = mysqli_query($db_conn, $sql_select_all);
					if ($query) {
						while ($result = mysqli_fetch_assoc($query)) {
			?>
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="team-member">
									<div class="photo-wrapper">
										<div class="overlay-wrapper">
											<img src="assets/images/<?=$result['image_path']?>" alt="">
											<div class="covering"></div>
										</div><!-- overlay-wrapper -->
									</div><!-- photo-wrapper -->
									<h5 class="name"><?=$result['name']?></h5>
									<p class="position"><?=$result['position']?></p>
								</div><!-- team-member -->
							</div><!-- col-md-3 col-sm-3 col-xs-6 -->
			<?php
						}
					}
				}
			?>			
		</div><!-- section-content row -->
	</div><!-- container -->
</section><!-- team -->
<section id="guarantee">
	<div class="container">
		<div class="col-md-12 col-lg-9">
			<i class="fa fa-volume-up pull-left" aria-hidden="true"></i>
			<div class="pull-left">
				<h2>LAUNCH YOUR STARTUP NOW!</h2>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
			</div><!-- content -->
		</div><!-- col-md-12 col-lg-9 -->
		<div class="col-md-12 col-lg-3">
			<a href="#" class="btn pull-left">GET THIS TEMPLATE</a>
		</div><!-- col-md-12 col-lg-3 -->
	</div><!-- container -->
</section><!-- guarantee -->
<section id="footer">
	<div class="container">
		<div class="footer-content row">
		<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM information";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
					?>
			<div class="col-sm-4 col-xs-12">
				<div class="logo-wrapper">
					<img width="130" height="31" src="assets/images/<?=$result['image_path']?>" alt="">
				</div>
				<p><?=$result['content']?></p>
				<p><strong><?=$result['writer']?></strong>.</p>
			</div>

<?php
								}
							}
						}
					?>
		
			<!-- col-sm-4 col-xs-12 -->
			<div class="col-sm-5 col-xs-12 text-center">
				<strong class="heading">Social Networks</strong>
				<ul class="list-inline">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul><!-- list-inline -->
				<ul class="list-inline">
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				</ul><!-- list-inline -->
			</div><!-- col-sm-5 col-xs-12 -->
			<div class="col-sm-3 col-xs-12">
				<strong class="heading">Our Contacts</strong>
				<ul class="list-unstyled">
				<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM contact";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
					?>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?=$result['mail']?>"><?=$result['mail']?></a></li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><?=$result['adress']?></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><?=$result['phone_number']?></li>
					<?php
								}
							}
						}
					?>
	
				</ul>
			</div><!-- col-sm-3 col-xs-12 -->
		</div><!-- footer-content -->
		<div class="copyright">startup.ly 2014. All rights reserved.</div>
	</div><!-- container -->
</section><!-- section -->
<div class="up-arrow">
	<i class="fa fa-angle-up fa-3x"></i>
</div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>