<!DOCTYPE html>
<html lang="en">
<head>
	<title>Downloadsample</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" media="all"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">	
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" media="all">	
</head>
<body>




<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="top-contact">
			<li><img src="<?=base_url()?>assets/images/mail-icon.png" alt="mail" />help@intelmarketresearch.com</li>
			<li><img src="<?=base_url()?>assets/images/call-icon.png" alt="mail" />+91-9169164321 (Asia)</li>
			<li><img src="<?=base_url()?>assets/images/call-icon.png" alt="mail" />+91-9169164321 (Asia)</li>
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

<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="nav breadcrb mb-4">
			<li class="nav-item">
			<a class="nav-link" href="<?= base_url(); ?>">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#"><h1><?= $report['report_title']; ?></h1></a>
			</li>
			<li class="nav-item">
			<a class="nav-link disabled" href="<?=base_url()?>download-sample/<?= $report['reportid']; ?>/<?= urlencode($report['report_title']); ?>">Download Sample</a>
			</li>
		</ul>
		<h1 class="head-1 mb-4 text-muted">DOWNLOAD SAMPLE</h1>
	</div>
	<div class="col-md-8">
		<div class="sample-form">
		<h1><?= $report['report_title']; ?></h1>			<ul>
		<li><?= $report['publishdate']; ?></li>
		<li> Category: <?= $category; ?></li>
				<li><?= $report['no_of_page']; ?> pages</li>
				<li>Report Code :<?= $report['reportid']; ?></li>
			</ul>
			<div class="text-right"><span class="text-danger">*</span>Required Information</div>

			
			<form method="post" action="<?= base_url('download-sample/thanks') ?>" id="myForm">



			<div class="row">
			<div class="form-group col-md-6">
				<label for="name">Full Name <span class="text-danger">*</span>:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="Full_Name" required>
			</div>
			<div class="form-group col-md-6">
				<label for="email">Business E-mail <span class="text-danger">*</span>:</label>
				<input type="text" class="form-control" id="email" placeholder="Enter Business Email" name="Business_Email" required>
			</div>
			<div class="form-group col-md-6">
				<label for="email">Company Name <span class="text-danger">*</span>:</label>
				<input type="text" class="form-control" id="email" placeholder="Enter Company Name" name="Company_Name" required>
			</div>
			<div class="form-group col-md-6">
				<label for="email">Job Role <span class="text-danger">*</span>:</label>
				<input type="text" class="form-control" id="email" placeholder="Enter Job Role" name="Job_Role" required>
			</div>

			<div class="form-group col-md-6">
            <label for="countryCode">Country Code <span class="text-danger">*</span>:</label>
            <select class="form-control" id="countryCode" name="Country_Code" required>
                <option value="">--Select country code--</option>
                <option value="+93">Afghanistan (+93)</option>
                <option value="+355">Albania (+355)</option>
                <option value="+213">Algeria (+213)</option>
                <option value="+1-684">American Samoa (+1-684)</option>
                <option value="+376">Andorra (+376)</option>
                <!-- Add more country codes as needed -->
            </select>
        </div>

			<div class="form-group col-md-6">
				<label for="email">Contact Number <span class="text-danger">*</span>:</label>
				<input type="text" class="form-control" id="email" placeholder="Enter Contact Number" name="Contact_Number" required>
			</div>

      <!-- <?php include 'generate_captcha.php'; ?> -->
        <div class="form-group col-md-6 text-right">
            <label for="captcha">Enter the security code <span class="text-danger">*</span>:</label>
            <?php $captchaCode = rand(1000, 9999); ?>
            <span class="captch-code"><?= $captchaCode ?></span>
            <input type="hidden" id="generatedCode" value="<?= $captchaCode ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="securityCode">Enter given security code <span class="text-danger">*</span>:</label>
            <input type="text" class="form-control" id="securityCode" placeholder="Enter security code" name="Security_Code" required>
        </div>
		<!-- Add a hidden input field to store the report ID -->
       <input type="hidden" name="report_id" value="<?= $report['reportid']; ?>">
	   <input type="hidden" name="report_title" value="<?= $report['report_title']; ?>">
	 <!--  <input type="hidden" name="publishdate" value="<?= $report['publishdate']; ?>">
	   <input type="hidden" name="no_of_page" value="<?= $report['no_of_page']; ?>">
	   <input type="hidden" name="market_name" value="<?= $report['market_name']; ?>"> -->

        <div class="form-group col-md-12">
            <button type="submit">PROCEED TO DOWNLOAD</button>
        </div>
		
    </div>
</form>

<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
        event.preventDefault();
        validateAndSubmit();
    });

    function validateAndSubmit() {
        var enteredCode = document.getElementById("securityCode").value;
        var generatedCode = document.getElementById("generatedCode").value;

        if (enteredCode === generatedCode) {
            document.getElementById("myForm").submit();
        } else {
            alert("Entered security code does not match the generated one. Please try again.");
        }
    }
</script>


<script>
    function validateForm() {
        var countryCode = document.getElementById("countryCode").value;
        if (!countryCode) {
            alert("Please select a country code.");
            return;
        }

        // If all validations pass, submit the form
        document.getElementById("myForm").submit();
    }
</script>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="download-step">
			<p class="title">You are 2 steps from your free sample</p>
			<ul>
				<li class="active"><span>1</span>Fill your details</li>
				<li><span>2</span>Verify your details</li>
				<li><span>3</span>Download sample instantly</li>
			</ul>
		</div>
		<div class="sample-include">
			<p class="title">SAMPLE REPORT INCLUDES</p>
			<ul>
				<li>Industry Market Size</li>
				<li>SWOT Analysis</li>
				<li>Industry Major Players</li>
				<li>Revenue Forecasts</li>
				<li>Historical and Forecast Growth</li>
				<li>Profitability Analysis</li>
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
			<li><a target="_blank" href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
			<li><a target="_blank" href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="#" title="youtube"><i class="fa fa-youtube-play"></i></a></li>
			<li><a target="_blank" href="#" title="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
			<li><a target="_blank" href="#" title="rss"><i class="fa fa-rss"></i></a></li>
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
		<div class="py-3"><strong>SECURITY ASSURED</strong> <img src="<?base_url()?>assets/images/payment-image.png" alt="payment image" height="27" title="secure by"></div>
	</div>
</div>
</div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>