
<?php
?>
<html>

<head>     <meta charset="utf-8">     <title>bakaro</title>     
<meta name="viewport" content="width=device-width, initial-scale=1.0">     
<meta name="description" content="">     <meta name="author" content="">     
<link href="<?=_SPPATH._THEMEPATH;?>//css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?=_SPPATH._THEMEPATH;?>////css/style.css" rel="stylesheet">
<link href="<?=_SPPATH._THEMEPATH;?>//color/default.css" rel="stylesheet">
<link rel="<?=_SPPATH;?>/shortcut icon" href="<?=_SPPATH._THEMEPATH;?>/img/bakaro.png">
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
						<a class="brand"><a href="<?=_SPPATH;?>"><img src="<?=_SPPATH._THEMEPATH;?>/img/menu/bak.jpeg" height="200" width="200"></a></a>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="menu" href="#menu">Menu</a></li>
							<li><a title="services" href="#services">Profile</a></li>
							<li><a title="works" href="#frenchise">Franchise</a></li>
							<li><a title="blog" href="#outlet">Outlet</a></li>
							<!-- <li><a title="event" href="#event">Event</a></li> -->
							<li><a title="contact"  href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">

		<header class="clearfix">
			<div class="logo">
				<img src="<?=_SPPATH._THEMEPATH;?>/img/unnamed.png" height="100" width="500" alt="" />
			
			<div class="container">

				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong>BAKARO</strong> 
									</p>
								</li>
								
								<li>
									<p class="home-slide-content">
										Grilled <strong>Beef</strong> Bowl
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										 <strong>Great Taste</strong>  and <strong> Price</strong> 
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer bg4">
		<div class="container">
			<blockquote class="large">
				<?=Efiwebsetting::getData("Text_blockquote");

				?>
						
					</blockquote>
			<div class="row">
				<div class="span6 alignright flyLeft">
					<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("gambar1")?>" height="800" width="700" alt="" />
				</div>
				<div class="span6 aligncenter flyRight">
					<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("gambar2")?>" height="800" width="700" alt="" />
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="menu" class="section spacer">
		<div class="container">
			<h4>Daftar Menu</h4>
			<h2><li>Daftar Makanan</li></h2>
			<!-- Four columns -->
			<div class="row">
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_makanan1")?>" height="400" width="300" alt="" />
						<!-- <h2>Tahun 2015</h2> -->
						<p> 	
							
						</p>
					</div>
				</div>
				<div class="span4 animated flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_makanan3")?>" height="400" width="300" alt="" />
						<!-- <h2>Tahun 2016</h2> -->
						<p>
							
						</p>
					</div>
				</div>
				
					<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_makanan2")?>" height="400" width="300" alt="" />
						<!-- <h2>Tahun 2015</h2> -->
						<p> 	
							
						</p>
					</div>
				</div>
			</div>

			<!-- Four columns -->
			<!--  -->
			<h2><li>Daftar Minuman</li></h2>
			<!-- Four columns -->
			<div class="row">
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_minuman1")?>"  alt="" />
						<h2>   Rp. 6000.-</h2>
						<p>
							
						</p>
					</div>
				</div>
				<div class="span4 animated flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_minuman2")?>"  alt="" />
						<h2> Rp. 6000.-</h2>
						<p>
							
						</p>
					</div>
				</div>
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_minuman")?>"  alt="" />
						<h2> Rp. 6000.-</h2>
						<p>
							
						</p>
					</div>
				</div>

				
			</div>

			<!-- Four columns -->
			<div class="row">
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_minuman4")?>"  alt="" />
						<h2> Rp. 6000.-</h2>
						<p>
							
						</p>
					</div>
				</div>
				<div class="span4 animated flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_minuman5")?>"  alt="" />
						<h2> Rp. 4000.-</h2>
						<p>
							
						</p>
					</div>
				</div>
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("menu_minuman6")?>" alt="" />
						<h2> Rp. 4000.-</h2>
						<p>
							
						</p>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>
			
	<!-- end section: team -->
	<!-- section: services -->
	<section id="services" class="section spacer3">
		<div class="container">
			<h4>Sejarah Singkat</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("profil_gambar1")?>" alt="" />
						<h2>Tahun 2015</h2>
						<p>
							<?=Efiwebsetting::getData("History_text1")?>
						</p>
					</div>
				</div>
				<div class="span4 animated flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("profil_gambar2")?>" alt="" />
						<h2>Tahun 2016</h2>
						<p>
							<?=Efiwebsetting::getData("History_text2")?>
						</p>
					</div>
				</div>
				<div class="span4 animated-fast flyIn">
					<div class="service-box">
						<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("profil_gambar3")?>" alt="" />
						<h2>Tahun 2017</h2>
						<p>
							<?=Efiwebsetting::getData("History_text3")?>
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- end section: services -->
	<!-- section: works -->
	<section id="frenchise" class="section spacer orange">
		<div class="container">
			<h4>Franchise</h4>
			
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="container">
									<div class="span 65 animated-fast flyIn">
								
                                <div class="box wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay:.5s;">
                                	
                    <h1>KONSEP BISNIS FRANCHISE</h1>
                    <p><ul>
	<li>
		<?=Efiwebsetting::getData("franchise_text1")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text2")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text3")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text4")?></li>
</ul>
</p>
                </div>
                                <div class="box wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay:.5s;">
                    <h1>TAHAPAN MENJADI FRANCHISEE</h1>
                    <p><ul>
	<li>
		<?=Efiwebsetting::getData("franchise_text5")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text6")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text7")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text8")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text9")?></li>
	<li>
		<?=Efiwebsetting::getData("franchise_text10")?></li>
</ul>
</p>
                </div>
							</div>
							</div>
			

							<h4>FORM CALON FRANCHISEE</h>
								<br>
							
								</li>
							<br>

									<div class="blankdivider30">
			</div>
			<div class="container">
			<div class="row">

				<div class="span12">
					<div class="cform" id="contact-form">
					<?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        		<?php } ?>
						<form action="<?=_SPPATH;?>tambah/tambahfranchise" method="post" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"  required />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" required />
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="notelp" id="subject" placeholder="Your Phone" data-rule="minlen:4"  required/>
										<div class="validation"></div>
									</div>

									<div class="field subject form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Your Address" data-rule="minlen:4" required />
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="pesan" rows="5" data-rule="required" placeholder="Message" required ></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Send message" class="btn btn-default pull-right">
								</div>

							</div>
						</form>
					</div>
				</div>

				<!-- ./span12 -->
			</div>
		</div>
		</div>
	</section>                                                                          
	<!-- spacer section -->
<section id="outlet" class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">

				
<font color="#fff">
				<h3> <?=Efiwebsetting::getData("Address1") ?> 
				</h3>
				<h3> <?=Efiwebsetting::getData("Address2") ?> 
				</h3></font>
				</div>
				<div class="span6 aligncenter flyRight">
					<img src="<?=_SPPATH;?>uploads/<?=Efiwebsetting::getData("gambar_maps")?>" height= "10000" width="10000" alt="" />
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->

	<!-- section: blog -->
	<section id="contact" class="section contact"> 
	<div class="container">
		<div class="row">
  <h4 class="text-center">CONTACT</h4>
  <div class="span8 animated-fast flyIn">
  	<!-- <div class="services box"> -->
  <style>
      #map {
        width: 100%;
        height: 400px;
        /*background-color: grey;*/
      }
    </style>
  
    
    <div id="map"></div>

    <script>
      function initMap() {
        var uluru = {lat: -6.306721, lng:106.755524};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeGxDkvcMHvgkHmDIW8UNATgDxcqhF7bg&callback=initMap">
    </script>
</div>
    <div class="span4 animated-fast flyIn">
      <font color="#000000"><p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> <?=Efiwebsetting::getData("Address1") ?></p>
      <p><span class="glyphicon glyphicon-map-marker"></span> <?=Efiwebsetting::getData("Address2") ?></p>
      <p><span class="glyphicon glyphicon-phone"></span>  <?=Efiwebsetting::getData("notelp_bakaro") ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?=Efiwebsetting::getData("email_bakaro") ?></p> </font>
    </div>
    <div class="span4 animated-fast flyIn">
      <div class="row">
      	<form action="<?=_SPPATH;?>tambah/tambahcontact" method="post" >
        <div class="span4">
          <input class="form-control" id="name" name="nama" placeholder="Name" type="text" required>
        </div>
        <div class="span4">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div> 		
      </div>
      <textarea class="span4" id="pesan" name="pesan" placeholder="Comment" rows="5" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
<!-- </form>
 -->
 </div>
</div>
<!-- </div> -->
</div>
  </div>
</div>
</section>


<!-- Add Google Maps -->


   
	<!-- end spacer section -->
	<!-- section: contact -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="https://instagram.com/bakarogrill/"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="https://facebook.com/bakarogrill/"><i class="icon-circled icon-bgdark icon-facebook icon-2x"></i></a></li>
						
					</ul>
					<p class="copyright">
						&copy; . All rights reserved.
					
					</p>
				</div>
			</div> 
		</div>
		<!-- ./container
	</footer> -->
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/jquery.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/jquery.scrollTo.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/jquery.nav.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/jquery.localScroll.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>//js/bootstrap.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/isotope.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/jquery.flexslider.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/inview.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/animate.js"></script>
	<script src="<?=_SPPATH._THEMEPATH;?>/js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114384409-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114384409-1');
</script>