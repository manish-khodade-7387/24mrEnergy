
<!DOCTYPE html>
<html lang="en">
<head>
	<title>new website RD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" media="all"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">	
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" media="all">
	
	

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>




<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="top-contact">
        <?php foreach ($contacts as $contact): ?>
			<li><img src="<?=base_url()?>assets/images/mail-icon.png" alt="mail" /><?php echo $contact['emailID']; ?></li>
			<li><img src="<?=base_url()?>assets/images/call-icon.png" alt="mail" /><?php echo $contact['contact_no']; ?></li>
			<li><img src="<?=base_url()?>assets/images/call-icon.png" alt="mail" />+91-9169164321 (Asia)</li>
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
    <a href="<?= base_url() ?>" class="logo"><img src="<?= base_url() ?>assets/images/logo2.png" alt="logo"/></a>
</div>

	<div class="col-md-9">
		<div class="cart-login-btn">
			<a href="<?=base_url()?>cart"><i class="fa fa-shopping-cart"></i> Cart <span class="color-orange">(<?= $cartCount ?>)</span></a>
			<a href="#"><i class="fa fa-user-circle-o"></i></a>
		</div>
		<div class="search-bar">
			<div class="input-group">
			<form action="<?= base_url('search') ?>" method="get">

<div class="input-group">
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
</div>
</div>




<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="nav breadcrb">
			<li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">Home</a>

			</li>
			<li class="nav-item">
			<a class="nav-link" href="#"><?= $report['market_name']; ?></a>
			</li>
			<li class="nav-item">
			<a class="nav-link disabled" href="#">Global GaN Radio Frequency Devices Market </a>
			</li>
		</ul>
	</div>
	<div class="col-md-12">
		<div class="rd-container">
			<div class="rd-image"><img src="<?=base_url()?>assets/images/rubber-and-plastics.jpg" alt="report cover" /></div>
			<div class="rd-title">
				<h1><?= $report['report_title']; ?></h1>
				<ul>
					<li><?= $report['publishdate']; ?></li>
					<li> Category: <?= $category; ?></li>
					<li><?= $report['no_of_page']; ?> pages</li>
					<li>Report Code : <?= $report['reportid']; ?></li>
				</ul>
			</div>
		</div>
		<div class="share-report">
			Share this report : 
			<a href="#" data-toggle="tooltip" title="on linkedin"><i class="fa fa-linkedin-square"></i></a>
			<a href="#" data-toggle="tooltip" title="on facebook"><i class="fa fa-facebook-square"></i></a>
			<a href="#" data-toggle="tooltip" title="on twitter"><i class="fa fa-twitter-square"></i></a>
			<a href="#" data-toggle="tooltip" title="on twitter"><i class="fa fa-envelope"></i></a>
		</div>
	</div>
	<!--<div class="col-md-4">
		<ul class="btn-rds">
			<li><a href="#"><i class="fa fa-file-text-o"></i> Get Sample Report</a></li>
			<li><a href="#"><i class="fa fa-percent"></i> Check Discount</a></li>
			<li><a href="#"><i class="fa fa-question-circle-o"></i> Any Questions</a></li>
			<li><a href="#"><i class="fa fa-share-alt"></i> Share Report</a></li>
		</ul>
	</div>-->
</div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-8">
		<div class="detail-box">
		<ul class="nav nav-pills nav-justified cust-navpills" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab">Table of Contents</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#figures">List of Table/Figures</a>
			</li>
			<li class="nav-item">
			<a class="nav-link sample-tab" href="<?=base_url()?>download-sample/<?= $report['reportid']; ?>/<?= urlencode($report['report_title']); ?>">Download Sample <i class="fa fa-download ml-2"></i></a>
			</li>
		</ul>
		
		<div class="tab-content">
			<div id="overview" class="container tab-pane active"><br>

            <?php
            
            $lines = explode("\n", $reportsDetails['overview']);
            foreach ($lines as $line) {
                echo "<p>$line</p>";
            }
            ?>
			</div>
			<div id="tab" class="container tab-pane fade"><br>
				<h3>Table Of Content</h3>
                <div class="table-of-content">
            <?php
            // Explode the fetched Table of Content data by each line
            $lines = explode("\n", $reportsDetails['table_of_content']);
            // Iterate through each line and display it as a paragraph
            foreach ($lines as $line) {
                echo "<p>$line</p>";
            }
            ?>
        </div>			
	 </div>
			<div id="figures" class="container tab-pane fade"><br>
				<h3>Menu 2</h3>
				<?php
            // List of Tables
            $lines = explode("\n", $reportsDetails['list_of_table']);
            foreach ($lines as $line) {
                echo "<p>$line</p>";
            }
            ?>
                <?php
            // List of Figures
            $lines = explode("\n", $reportsDetails['list_of_figures']);
            foreach ($lines as $line) {
                echo "<p>$line</p>";
            }
            ?>
			</div>
		</div>
		</div>
	</div>
	
	
	<div class="col-md-4">
		<div class="purchase-box">
		<form action="<?= base_url('addToCart') ?>" method="post">
			<p class="title">BUY FULL REPORT <span>Select Licence type with your requirement and needs</span></p>
                <input type="hidden" name="report_title" value="<?= $report['report_title'] ?>">
                 <input type="hidden" name="report_id" value="<?= $report['reportid'] ?>">

				 

			<select name="purchase">
			<option value="Single User Price-3500">Single User Price : $3500</option>
        <option value="Multi User Price-5000">Multi User Price : $5000</option>
        <option value="Enterprise User License-8000">Enterprise User License : $8000</option>
			</select>
			<button ><a href="<?= base_url('download-sample/' . $report['reportid'] . '/' . urlencode($report['report_title'])) ?>" class="btn btn-primary" name="submit_todo" value="buy_now">BUY NOW</a></button>
			<button type="submit" name="submit_todo" value="add_to_cart" class="addcart">ADD TO CART</button>
		</form>
		</div>
		<div class="company-cover">
			<p class="title">COMPANIES COVERED <span>IN THIS REPORT</p>
			<ul>
				<li>ABB</li>
				<li>Emerson Electric</li>
				<li>Fuji Electric</li>
				<li>General Electric</li>
				<li>Siemens</li>
				<li>Figaro Engineering</li>
				<li>Thermo Fischer Scientific</li>
				<li>Ametek</li>
				<li>California Analytical Instruments</li>
				<li>Dragerwerk AG</li>
				<li>Enerac</li>
				<li>Honeywell International</li>
				<li>Mettler Toledo</li>
				<li>Techint Group</li>
				<li>Yokogawa Electric Corporation</li>
			</ul>
		</div>
		
	</div>
</div>
</div>




<section class="bg-map pt-4 mt-5">
<div class="container">

<div class="row bb-dashed">
	<div class="col-md-12"><h2 class="head-2 text-muted text-center mb-5">Top Consulting Firms and Investment Bank <br><span class="color-blue">Trust Our Intelligence</span> for Advisory </h2></div>
	<ul class="idx-client">
		<li><img src="<?=base_url()?>assets/images/client/BDIP.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/bhge.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/Braskem.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/cdi-global.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/Chevron.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/Deloitte.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/Panasonic.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/rochling.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/yamaha.png" alt="client logo" /></li>
		<li><img src="<?=base_url()?>assets/images/client/Princeton-Identity-Logo.png" alt="client logo" /></li>
	</ul>
</div>


</div>
</section>




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
		<div class="py-3"><strong>SECURITY ASSURED</strong> <img src="<?=base_url()?>assets/images/payment-image.png" alt="payment image" height="27" title="secure by"></div>
	</div>
</div>
</div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>