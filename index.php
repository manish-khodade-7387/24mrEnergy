
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Pagination CSS */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination li a {
            display: block;
            padding: 8px 12px;
            background-color: #f2f2f2;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
        }

        .pagination li a:hover {
            background-color: #ddd;
        }

        .pagination .active a {
            background-color: #007bff;
            color: #fff;
        }
    </style>

	<title>new website index</title>
		
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700');?>" rel="stylesheet" media="all"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" media="all">
<body>




<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="top-contact">
		<?php foreach ($contacts as $contact): ?>
		<li><img src="assets/images/mail-icon.png"alt="mail" /><?php echo $contact['emailID']; ?></li>
                <li><img src="assets/images/call-icon.png" alt="mail" /><?php echo $contact['contact_no']; ?></li>
                <li><img src="assets/images/call-icon.png" alt="mail" />+91-9169164321 (Asia)</li>
				<?php endforeach; ?>
		</ul>
	</div>
  </div>
</div>


<div class="bg-blue">
<div class="container">
<div class="row">
	<div class="col-md-12">
		<nav>
			<a href="<?=base_url()?>about-us">About us</a>
			<a href="latest-report">Reports store</a>
			<a href="contact-us">Contact us</a>
			<a href="#">faq's</a>
			<a href="#">Tags</a>
		</nav>
	</div>
</div>
</div>
</div>


<div class="head-section">
<div class="container">
<div class="row">
	<div class="col-md-3">
		<a href="<?=base_url()?>" class="logo"><img src="<?=base_url()?>assets/images/logo2.png" alt="logo"/></a>
	</div>
	<div class="col-md-9">
		<div class="cart-login-btn">
			<a href="<?=base_url()?>cart"><i class="fa fa-shopping-cart"></i> Cart <span class="color-orange">(<?= $cartCount ?>)</span></a>
			<a href="#"><i class="fa fa-user-circle-o"></i></a>
		</div>
		<div class="search-bar">
		<form action="<?= base_url('search') ?>" method="get">

			<div class="input-group">
			
				<input type="text" class="form-control" placeholder="Search" name="search_term">
				<div class="input-group-append">
				<button class="btn bg-orange" type="submit"><i class="fa fa-search"></i></button>
				</form>  
	   </div>
		
	</div>
</div>
</div>
</div>


<div class="container banner-image">
<div class="row">
	<div class="col-md-12">
		<h1><span>We Are World's Largest Market</span>Research Reports Store</h1>
		<a href="<?=base_url()?>latest-report">Latest Published Reports</a>
	</div>
</div>
</div>


<div class="light-blue mb-5">
<div class="container">
<div class="row">
	<div class="col-md-3">
		<div class="fore-point"><i class="fa fa-handshake-o color-blue"></i><h4>BUSINESS CONSULTING</h4></div>
	</div>
	<div class="col-md-3">
		<div class="fore-point"><i class="fa fa-pencil-square-o color-blue"></i><h4>CUSTOMIZE RESEARCH</h4></div>
	</div>
	<div class="col-md-3">
		<div class="fore-point"><i class="fa fa-bar-chart color-blue"></i><h4>WIDE VARIETY</h4></div>
	</div>
	<div class="col-md-3">
		<div class="fore-point"><i class="fa fa-rocket color-blue"></i><h4>INDUSTRIAL SUBSCRIPTIONS</h4></div>
	</div>
</div>
</div>
</div>



<section class="bg-map">
<div class="container">
<div class="row mb-4">
	<div class="col-md-12"><h2 class="head-2 text-muted text-center mb-5">WHY <span class="color-orange">24MARKET REPORT</span></h2></div>
	<div class="col-md-3 why24 border-0">
		<div class="">
			<i class="fa fa-search-plus"></i>
			<div class="title color-orange">Comprehensive Research</div>
			<p>Offers Penetrative insights & holistic understanding of the market</p>
		</div>
	</div>
	<div class="col-md-3 why24">
		<div class="">
			<i class="fa fa-database"></i>
			<div class="title color-orange">Data Accuracy & Reliability</div>
			<p>Strictly follows the Research Methodology for flawless results</p>
		</div>
	</div>
	<div class="col-md-3 why24">
		<div class="">
			<i class="fa fa-money"></i>
			<div class="title color-orange">Competitive Pricing</div>
			<p>Ensure the best and affordable pricing</p>
		</div>
	</div>
	<div class="col-md-3 why24">
		<div class="">
			<i class="fa fa-shield"></i>
			<div class="title color-orange">Security & Confidentiality</div>
			<p>All your transactions are secured end-to-end, ensuring a satisfactory purchase</p>
		</div>
	</div>
	
</div>


<div class="row bb-dashed">
	<div class="col-md-12"><h2 class="head-2 text-muted text-center mb-5">Top Consulting Firms and Investment Bank <br><span class="color-blue">Trust Our Intelligence</span> for Advisory </h2></div>
	<ul class="idx-client">
		<li><img src="assets/images/client/BDIP.png" alt="client logo" /></li>
		<li><img src="assets/images/client/bhge.png" alt="client logo" /></li>
		<li><img src="assets/images/client/Braskem.png" alt="client logo" /></li>
		<li><img src="assets/images/client/cdi-global.png" alt="client logo" /></li>
		<li><img src="assets/images/client/Chevron.png" alt="client logo" /></li>
		<li><img src="assets/images/client/Deloitte.png" alt="client logo" /></li>
		<li><img src="assets/images/client/Panasonic.png" alt="client logo" /></li>
		<li><img src="assets/images/client/rochling.png" alt="client logo" /></li>
		<li><img src="assets/images/client/yamaha.png" alt="client logo" /></li>
		<li><img src="assets/images/client/Princeton-Identity-Logo.png" alt="client logo" /></li>
	</ul>
</div>


</div>
</section>


<section class="banner-client">
<div class="container">
<div class="row">
	<div class="col-md-12">
		<p class="title">What Our Clients Say About Us</p>
		
			<div id="client_rev" class="carousel slide" data-ride="carousel">
			  <!-- The slideshow -->
			  <div class="carousel-inner">
				<div class="carousel-item client-review active">
				<i class="fa fa-quote-right" aria-hidden="true"></i>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				  <div class="review">We are working with these bunch of enthusiastic people for 3 years now. Their enthusiasm and passion towards the work have never faded away and this can be seen in the quality of reports they provide.</div>
				  <div class="review-by">- Investment Manager (United States)</div>
				</div>
				<div class="carousel-item client-review">
				<i class="fa fa-quote-right" aria-hidden="true"></i>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				  <div class="review">We are working with these bunch of enthusiastic people for 3 years now. Their enthusiasm and passion towards the work have never faded </div>
				  <div class="review-by">- Investment Manager (United States)</div>
				</div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#client_rev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#client_rev" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>		
	</div>
</div>
</div>
</section>


<div class="container mb-5">
<div class="row">
	<div class="col-md-8">
		
		<h2 class="head-1 mb-4 text-muted">Latest published reports</h2>

		
		<ul class="report-list" >
		<?php foreach ($latestReports as $report): ?>
                <li>
                    <img src="assets/images/Automotive-and-Transportation.jpg" alt="report cover" />
                    <span>Published On: <?= $report['publishdate']; ?></span>
					<a href="report/<?= $report['reportid']; ?>/<?= urlencode($report['report_title']); ?>" class="title"><?= $report['report_title']; ?></a>
                    <a href="<?=base_url()?>download-sample/<?= $report['reportid']; ?>/<?= urlencode($report['report_title']); ?>" class="sample">Download Sample</a>
                    <a href="latest-report" class="sample active">Read More</a>
                </li>
            <?php endforeach; ?>
			</ul>

		
    </ul>
	<a href="latest-report" class="btn-vall">View all <i class="fa fa-angle-double-right ml-1"></i></a>
	 </div>

	
<div class="col-md-4">
    <p class="head-1 mb-4 text-muted">Find report by category</p>
    <ul class="cate-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="<?= $category['CATEGORYlinks']; ?>"><i class="fa fa-chevron-circle-right"></i><?= $category['category_name']; ?></a></li>
        <?php endforeach; ?>
        <li><a href="#"><i class="fa fa-chevron-circle-right"></i>View all</a></li>
    </ul>
</div>
<!-- Your remaining HTML code -->

</div>
</div>


<footer>
<div class="container">
<div class="row">
	<div class="col-md-8">
		<ul class="footer-link">
			<li>
				<i class="fa fa-circle-o" aria-hidden="true"></i>
				<p class="title">FIND HELP</p>
				<a href="#">Home</a>
				<a href="#">Contact Us</a>
				<a href="#">About us</a>
				<a href="#">Sitemap</a>
			</li>
			<li>
				<i class="fa fa-circle-o" aria-hidden="true"></i>
				<p class="title">LEGAL</p>
				<a href="#">Privacy Policy</a>
				<a href="#">Refund Policy</a>
				<a href="#">Terms of Service</a>
				<a href="#">Research Methodology</a>
			</li>
			<li>
				<i class="fa fa-circle-o" aria-hidden="true"></i>
				<p class="title">EXPLORE</p>
				<a href="#">Browse Categories</a>
				<a href="#">Frequently Asked Questions</a>
				<a href="#">Blog</a>
				<a href="#">Latest reports</a>
			</li>
		</ul>
	</div>
	<div class="col-md-4 text-center">
		<p class="footer-title">Follow us</p>
		<ul class="footer-socail">
		<?php foreach ($contacts as $contact): ?>
			<li><a target="_blank" href="<?php echo $contact['fb']; ?>" title="facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" href="<?php echo $contact['linkedin_id']; ?>" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
			<li><a target="_blank" href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="<?php echo $contact['youtube']; ?>" title="youtube"><i class="fa fa-youtube-play"></i></a></li>
			<li><a target="_blank" href="#" title="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
			<li><a target="_blank" href="#" title="rss"><i class="fa fa-rss"></i></a></li>
			<?php endforeach; ?>
		</ul>
		<p class="mb-2">©All Rights Reserved, 24 Market reports</p>
		<p>Page Load In : 0.8247</p>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-phone-square color-orange mr-1"></i>International</p>+1(646)-781-7170
			</div>
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-phone-square color-orange mr-1"></i>Asia</p>+91 8087042414
			</div>
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-envelope color-orange mr-1"></i>E-mail</p>help@24marketreports.com
			</div>
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-map-marker color-orange mr-1"></i>Address</p>New York City Zone 01, United States
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="py-3"><strong>SECURITY ASSURED</strong> <img src="assets/images/payment-image.png" alt="payment image" height="27" title="secure by"></div>
	</div>
</div>
</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

