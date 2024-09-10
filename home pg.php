<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.13, a.mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/photo-1552820728-8b83bb6b773f.jpeg" type="image/x-icon">
  <meta name="description" content="Gaming Mp created a vibrant marketplace for buying and selling new and used gaming items. Explore now!">
  <title>Gaming Marketplace Hub</title>
  <link rel="stylesheet" href="assets/style2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style3.css">
  <link rel="stylesheet" href="https://r.mobirisesite.com/451680/assets/socicon/css/styles.css?rnd=1716073343592">
  <link rel="stylesheet" href="assets/theme/css/style1.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="stylesheet" href="assets/theme/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
    <?php
        session_start();
    ?>
  <section data-bs-version="5.1" class="menu menu2 cid-udaAnGe3d8" once="menu" id="menu-5-udaAnGe3d8">
	

	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
						<img src="assets/images/photo-1552820728-8b83bb6b773f.jpeg" alt="" style="height: 4.3rem;">
					</a>
				</span>
				<span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" ></a><p>GamingMP</p>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="./buyer store/formulaire.html">Sell</a>
                        </li>
                    <?php endif; ?>
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="buyer store/test store.PHP" aria-expanded="false">Buy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="about.php">About</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link link text-black display-4" href="./buyer store/cart.php">Cart</a>
					</li>
				</ul>
				
				<div class="navbar-buttons mbr-section-btn">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                        <li class="nav-item">
                            <a class="btn btn-primary display-3" href="logout.php">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="btn btn-primary display-3" href="login/login.html">Join Now</a>
                        </li>
                    <?php endif; ?>
                </div>

			</div>
		</div>
	</nav>
</section>

<section data-bs-version="5.1" class="header16 cid-udaAnGf7W7 mbr-fullscreen mbr-parallax-background" id="hero-17-udaAnGf7W7">
  
  
  <div class="container-fluid">
    <div class="row">
      <div class="content-wrap col-12 col-md-12">
        <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
          <strong>Game On</strong>
        </h1>
        
        <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">Welcome to the wildest Gaming Marketplace where gamers unite to buy and sell epic treasures!</p>
        <div class="mbr-section-btn">
          <a class="btn btn-white-outline display-7" href="login/login.html">Explore Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="article05 cid-udaAnGfI33" id="about-us-5-udaAnGfI33">
  

  
  

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12">
        <div class="card-wrapper">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-5 image-wrapper">
              <img class="w-100" src="assets/images/photo-1542751371-adc38448a05e.jpeg" alt="">
            </div>
            <div class="col-12 col-lg col-md-12">
              <div class="text-wrapper align-left">
                <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                  <strong>Our Mission</strong>
                </h1>
                <p class="mbr-text mbr-fonts-style mb-3 display-7">At GamingMP, we've created a virtual haven for gamers to trade their gaming gems, whether new or pre-loved.</p>
                <p class="mbr-text mbr-fonts-style mb-3 display-7">Join our vibrant community where the thrill of the game meets the joy of finding the perfect loot.</p>
                <p class="mbr-text mbr-fonts-style display-7">Get ready to level up your gaming experience with GamingMP - the ultimate marketplace for all things gaming!</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="list05 cid-udaAnGfiC7" id="faq-3-udaAnGfiC7">
    
    <div class="container">
        <div class="col-12 mb-5 content-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>FAQs</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 col-lg-8">
                <div class="item features-without-image col-12 active">
                    <div class="item-wrapper">
                        <h5 class="mbr-card-title mbr-fonts-style mt-0 mb-3 display-5">
                            <strong>How can I sell my items?</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-0 mb-3 display-7">Selling on GamingMP is as easy as scoring a headshot! Simply create a listing, set your price, and watch the offers roll in.</p>
                    </div>
                </div>
                <div class="item features-without-image col-12">
                    <div class="item-wrapper">
                        <h5 class="mbr-card-title mbr-fonts-style mt-0 mb-3 display-5">
                            <strong>Is it safe to buy here?</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-0 mb-3 display-7">Absolutely! Our marketplace is guarded by dragons... just kidding! We have robust security measures in place to ensure safe transactions for all gamers.</p>
                    </div>
                </div>
                <div class="item features-without-image col-12">
                    <div class="item-wrapper">
                        <h5 class="mbr-card-title mbr-fonts-style mt-0 mb-3 display-5">
                            <strong>Can I trade my items?</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-0 mb-3 display-7">Trading is the name of the game at GamingMP! Swap, barter, and exchange your way to victory with fellow gamers.</p>
                    </div>
                </div>
                <div class="item features-without-image col-12">
                  <div class="item-wrapper">
                      <h5 class="mbr-card-title mbr-fonts-style mt-0 mb-3 display-5">
                          <strong>What if I have issues with a purchase?</strong></h5>
                      <p class="mbr-text mbr-fonts-style mt-0 mb-3 display-7">Fear not, brave gamer! Our support team is on standby 24/7 to assist you with any quest-related problems you encounter.</p>
                  </div>
              </div>
              <div class="item features-without-image col-12">
                <div class="item-wrapper">
                    <h5 class="mbr-card-title mbr-fonts-style mt-0 mb-3 display-5">
                        <strong>How do I join the community?</strong></h5>
                    <p class="mbr-text mbr-fonts-style mt-0 mb-3 display-7">Becoming part of the GamingMP tribe is simple - just hit the 'Join Now' button and let the gaming adventures begin!</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article13 cid-udaAnGg5kA" id="call-to-action-5-udaAnGg5kA">
    
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style display-2">
                            <strong>Ready to Level Up Your Game?</strong>
                        </h4>
                        <p class="mbr-text mbr-fonts-style mt-4 display-7">Join GamingMP today and embark on a gaming journey like never before! Unleash your inner gamer and start trading now!</p>
                        <div class="mbr-section-btn mt-4">
                        <a class="btn btn-primary display-4" href="login/login.html">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features03 cid-udaAnGgBhk" id="features-7-udaAnGgBhk">
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="item features-image col-12 col-md-6 col-lg-4 active">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1657664072470-99b02c2143f2.jpeg" alt="" title="">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mt-0 mb-2 display-5">
                            <strong>Gaming Hub</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">Explore a world of gaming treasures waiting just for you!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="login/login.html" class="btn item-btn btn-primary display-7">Join the Fun</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1600861194942-f883de0dfe96.jpeg" alt="" title="" data-slide-to="1" data-bs-slide-to="1">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                            <strong>Buy &amp; Sell</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">Trade your way to victory with our gaming marketplace!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="login/login.html" class="btn item-btn btn-primary display-7">Join the Fun</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1580234811497-9df7fd2f357e.jpeg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                            <strong>New &amp; Used</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">Discover hidden gems or unleash the power of the latest tech!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="login/login.html" class="btn item-btn btn-primary display-7">Join the Fun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image02 cid-udaAnGhbh4 mbr-fullscreen mbr-parallax-background" id="image-13-udaAnGhbh4">
    
    
    <div class="container">
        <div class="row"></div>
    </div>
</section>

<section data-bs-version="5.1" class="article07 cid-udaAnGi4IH mbr-parallax-background" id="generic-text-16-udaAnGi4IH">
  

  
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="card col-md-12 col-lg-10">
        <div class="card-wrapper">
          <h3 class="card-title mbr-fonts-style mbr-white mt-3 mb-4 display-2">
            <strong>Welcome to Gaming Mp</strong>
          </h3>
          <div class="row card-box align-left">
            <div class="item features-without-image col-12">
              <div class="item-wrapper">
                
                <p class="mbr-text mbr-fonts-style display-7">Step into a realm where gamers unite to trade, battle, and conquer!</p>
              </div>
            </div>
            <div class="item features-without-image col-12">
              <div class="item-wrapper">
                
                <p class="mbr-text mbr-fonts-style display-7">At Gaming Mp, the thrill of the hunt for rare items awaits you.</p>
              </div>
            </div>
            <div class="item features-without-image col-12">
              <div class="item-wrapper">
                
                <p class="mbr-text mbr-fonts-style display-7">Join the community where every click could lead to your next gaming triumph!</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="features023 cid-udaAnGiZXb" id="metrics-1-udaAnGiZXb">

    

    
    
    <div class="container">
        
        <div class="row content-row justify-content-center">
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-2 mb-md-3">
                        <span class="num mbr-fonts-style display-1">
                            <strong>100K+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Happy Gamers</strong>
                    </h4>
                    
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-2 mb-md-3">
                        <span class="num mbr-fonts-style display-1">
                            <strong>500+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Items Listed</strong>
                    </h4>
                    
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-2 mb-md-3">
                        <span class="num mbr-fonts-style display-1">
                            <strong>24/7</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Gaming Adventure</strong>
                    </h4>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="pricing02 cid-udaAnGiYFs" id="product-list-9-udaAnGiYFs">
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Featured Products</strong>
                    </h4>
                    
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_hd5_h93_9776036446238_240509-cobra-pro-white-2-1500x1000-6.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Razer Cobra Pro - White</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">150DT</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Unleash its power in your next quest and become a gaming legend!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="../game-store/login/login.html" class="btn item-btn btn-primary display-7">Get It</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_hdc_h3d_9729772847134_230130-dav3pro-hyperpolling-smooth-touch-1500x1000-1.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>DeathAdder V3 Pro - Black - Smooth-Touch - 8000 Hz</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">180DT</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Forge your destiny with this epic controllers set fit for a hero!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="../game-store/login/login.html" class="btn item-btn btn-primary display-7">Get It</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Razer BlackWidow V4 Pro - Orange Switch - +Black</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">125DT</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Master the ancient arts with this mechanical keyboard of wonders!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="../game-store/login/login.html" class="btn item-btn btn-primary display-7">Get It</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1612287230202-1ff1d85d1bdf.jpeg">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Dragon's Breath Xbox controller</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">130DT</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Unleash the fury of dragons with this potent elixir of power!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="../game-store/login/login.html" class="btn item-btn btn-primary display-7">Get It</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1550745165-9bc0b252726f.jpeg">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Items for dicoration</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">70DT</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Dicorate your desk with things personalized items tailored just for you!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="../game-store/login/login.html" class="btn item-btn btn-primary display-7">Get It</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1564049489314-60d154ff107d.jpeg">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Box phone accessories</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">80DT</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Harness the fiery essence of the phone with this legendary box of accessories!</p>
                        <div class="mbr-section-btn item-footer">
                            <a href="../game-store/login/login.html" class="btn item-btn btn-primary display-7">Get It</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="people02 cid-udaAnGiNWN" id="testimonials-10-udaAnGiNWN">
	

	
	
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-12 content-head">
				<h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
					<strong>Rave</strong>
				</h3>
				<h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-4 display-7">Join the gaming revolution with Gaming Mp - where gamers unite!</h5>
			</div>
		</div>
		<div class="row">
				<div class="item features-without-image col-12 col-md-6 col-lg-4 mb-5">
					<div class="item-wrapper">
						<div class="card-box align-center">
							<div class="iconfont-wrapper mb-3">
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
							</div>
							<h5 class="card-title mbr-fonts-style mb-3 display-7">Gaming Mp is a game-changer! I found rare treasures and sold my loot in a flash.</h5>
							<p class="card-text mbr-fonts-style mb-0 display-7">Max Power</p>
						</div>
					</div>
				</div>
				<div class="item features-without-image col-12 col-md-6 col-lg-4 mb-5">
					<div class="item-wrapper">
						<div class="card-box align-center">
							<div class="iconfont-wrapper mb-3">
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
							</div>
							<h5 class="card-title mbr-fonts-style mb-3 display-7">Gaming Mp turned my old gear into gold! The community here rocks!</h5>
							<p class="card-text mbr-fonts-style mb-0 display-7">Luna Star</p>
						</div>
					</div>
				</div>
				<div class="item features-without-image col-12 col-md-6 col-lg-4 mb-5">
					<div class="item-wrapper">
						<div class="card-box align-center">
							<div class="iconfont-wrapper mb-3">
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
								<span class="mbr-iconfont mobi-mbri-star mobi-mbri"></span>
							</div>
							<h5 class="card-title mbr-fonts-style mb-3 display-7">I leveled up my gaming experience with Gaming Mp. It's a virtual paradise!</h5>
							<p class="card-text mbr-fonts-style mb-0 display-7">Blaze Runner</p>
						</div>
					</div>
				</div>
			</div>
		<div class="row mt-0 mt-md-5">
			<div class="col-12 align-center">
				<div class="mbr-section-btn">
					<a class="btn btn-primary display-7" href="login/login.html">Start Gaming Adventure</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="features03 cid-udaAnGiSUw" id="events-1-udaAnGiSUw">
  
  
  <div class="container-fluid">
    <div class="row justify-content-center mb-5">
      <div class="col-12 content-head">
        <div class="mbr-section-head">
          <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <strong>Epic Events</strong>
          </h4>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="item features-image col-12 col-md-6 col-lg-3 active">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="assets/images/photo-1520092352425-9699926a9b0b.jpeg" alt="" title="">
          </div>
          <div class="item-content align-left">
            <h5 class="item-title mbr-fonts-style mt-0 mb-2 display-5">
              <strong>Game Auction Extravaganza</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">May 25, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Get ready to bid on legendary items and score epic deals at our exclusive auction event!</p>
            <div class="mbr-section-btn item-footer">
              <a href="login/login.html" class="btn item-btn btn-primary display-7">Join</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item features-image col-12 col-md-6 col-lg-3">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="assets/images/photo-1593305841991-05c297ba4575.jpeg" alt="" title="" data-slide-to="1" data-bs-slide-to="1">
          </div>
          <div class="item-content align-left">
            <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
              <strong>Retro Game Night Bash</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">June 8, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Dust off your classic consoles and join us for a night of nostalgia and friendly competition!</p>
            <div class="mbr-section-btn item-footer">
              <a href="login/login.html" class="btn item-btn btn-primary display-7">Join</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item features-image col-12 col-md-6 col-lg-3">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="assets/images/photo-1579373903781-fd5c0c30c4cd.jpeg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
          </div>
          <div class="item-content align-left">
            <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
              <strong>Cosplay Clash Royale</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">June 22, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Show off your best cosplay creations and battle it out for the crown of cosplay royalty!</p>
            <div class="mbr-section-btn item-footer">
              <a href="login/login.html" class="btn item-btn btn-primary display-7">Join</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item features-image col-12 col-md-6 col-lg-3">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="assets/images/photo-1560419015-7c427e8ae5ba.jpeg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
          </div>
          <div class="item-content align-left">
            <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
              <strong>Virtual Reality Fest</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">July 6, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Immerse yourself in a world of VR wonders and experience gaming like never before!</p>
            <div class="mbr-section-btn item-footer">
              <a href="login/login.html" class="btn item-btn btn-primary display-7">Join</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="gallery07 cid-udaAnGiyfp" id="gallery-14-udaAnGiyfp">
  
  
  <div class="container-fluid gallery-wrapper">
    <div class="row justify-content-center">
      <div class="col-12 content-head">
        
      </div>
    </div>
    <div class="grid-container">
      <div class="grid-container-3 moving-left" style="transform: translate3d(-200px, 0px, 0px);">
        <div class="grid-item">
          <img src="assets/images/photo-1534423861386-85a16f5d13fd.jpeg" alt="">
        </div>
        <div class="grid-item">
          <img src="assets/images/photo-1616588589676-62b3bd4ff6d2.jpeg" alt="">
        </div>
        <div class="grid-item">
          <img src="assets/images/photo-1493711662062-fa541adb3fc8.jpeg" alt="">
        </div>
        <div class="grid-item">
          <img src="assets/images/photo-1519669556878-63bdad8a1a49.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="people03 cid-udaAnGj1Dg" id="team-1-udaAnGj1Dg">
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Meet Us</strong>
                    </h4>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1519866663826-7e1967cb3eec.jpeg" alt="" title="">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Louay</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style mb-3 display-7">Chief Gaming Guru</h6>
                        
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1681075401974-907cc62a4373.jpeg" alt="" title="">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Feriel</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style mb-3 display-7">Pixel Princess</h6>
                        
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img src="assets/images/photo-1581803118522-7b72a50f7e9f.jpeg" alt="" title="">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Ayhem</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style mb-3 display-7">Master of Quests</h6>
                        
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                       <img src="assets/images/photo-1677520338280-664ae23816eb.jpeg" alt="" title="" data-slide-to="3" data-bs-slide-to="3">
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Rym</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style mb-3 display-7">Virtual Visionary</h6>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="social4 cid-udaAnGjgQw" id="follow-us-1-udaAnGjgQw">
    
    
    

    <div class="container">
        <div class="media-container-row">
            <div class="col-12">
                <h3 class="mbr-section-title align-center mb-5 mbr-fonts-style display-2">
                    <strong>Stay Connected</strong>
                </h3>
                <div class="social-list align-center">
                    <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="https://www.facebook.com/david.rami.5268/">
                        <span class="socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper bg-instagram m-2" href="https://www.instagram.com/unfavrami/" target="_blank">
                        <span class="socicon-instagram socicon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="clients04 cid-udaAnGj3tz" id="clients-1-udaAnGj3tz">
    
    
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-12 content-head">
                <div class="mbr-section-head">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Gaming Mp Marketplace</strong>
                    </h4>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2 active">
                <div class="item-wrapper">
                    <div class="">
                        <img src="assets/images/photo-1596622723231-b20320c7346b.jpeg" alt="" title="" data-slide-to="1" data-bs-slide-to="1">
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="">
                        <img src="assets/images/photo-1554463529-e27854014799.jpeg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="">
                        <img src="assets/images/photo-1579041925709-798d7d0fed1d.jpeg" alt="" title="" data-slide-to="3" data-bs-slide-to="3">
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="">
                        <img src="assets/images/photo-1502828331539-51c709e80300.jpeg" alt="" title="" data-slide-to="4" data-bs-slide-to="4">
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="">
                        <img src="assets/images/photo-1529612700005-e35377bf1415.jpeg" alt="" title="" data-slide-to="5" data-bs-slide-to="5">
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="">
                        <img src="assets/images/photo-1651044450619-5ce74d316987.jpeg" alt="" title="" data-slide-to="6" data-bs-slide-to="6">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-udaAnGjb8Z" id="contact-form-2-udaAnGjb8Z">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Join the Gaming Fun</strong>
                    </h3>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
            <form action="send_email.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-contact-form-2-udaAnGjb8Z">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-contact-form-2-udaAnGjb8Z">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-contact-form-2-udaAnGjb8Z"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-primary display-7">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts01 cid-udaAnGkHpP" id="contacts-1-udaAnGkHpP">
    

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Get in Touch</strong>
                    </h3>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-without-image col-12 col-md-6 active">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="" class="text-black">+216 25 888 812</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="GamingMP@gmail.com" class="text-black">GamingMP@gamingmp.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Address</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">Tunis, Tunisia</p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Working Hours</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">24/7 Gaming Madness</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-udaAnGkn2L" once="footers" id="footer-3-udaAnGkn2L">

        

    

    <div class="container">
        <div class="row">
            <div class="row-links">
                <ul class="header-menu">
                  
                  
                  
                  
                <li class="header-menu-item mbr-fonts-style display-5">
                    <a href="about.php" class="text-white">About</a>
                  </li><li class="header-menu-item mbr-fonts-style display-5">
                    <a href="terms.php" class="text-white">Terms</a>
                  </li><li class="header-menu-item mbr-fonts-style display-5">
                    <a href="privacy.php" class="text-white">Privacy</a>
                  </li><li class="header-menu-item mbr-fonts-style display-5">
                    <a href="contact.php" class="text-white">Contact</a>
                  </li></ul>
              </div>

            <div class="col-12 mt-4">
                <div class="social-row">
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont socicon socicon-facebook display-7"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont socicon socicon-linkedin"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont socicon socicon-twitch"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <p class="mbr-fonts-style copyright display-7">© 2024 Gaming Mp. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/parallax/jarallax.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/scrollgallery/scroll-gallery.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  
</body>
</html>