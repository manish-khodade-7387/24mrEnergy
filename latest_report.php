<!DOCTYPE html>
<html lang="en">
<head>

<style>
		.pagination-container {
    white-space: nowrap;
}

.pagination-container .btn {
    display: inline-block;
    margin-right: 5px; /* Adjust as needed */
}

	</style>
	<title>new website latest report</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" media="all"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all">	
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" media="all">	


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
		<a href="<?= base_url() ?>" class="logo"><img src="<?=base_url()?>assets/images/logo2.png" alt="logo"/></a>
	</div>
	<div class="col-md-9">
		<div class="cart-login-btn">
			<a href="<?=base_url()?>cart"><i class="fa fa-shopping-cart"></i> Cart <span class="color-orange">(<?= $cartCount ?>)</span></a>
			<a href="#"><i class="fa fa-user-circle-o"></i></a>
		</div>
		<div class="search-bar">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-append">
				<button class="btn bg-orange" type="submit"><i class="fa fa-search"></i></button>  
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
		<ul class="nav breadcrb mb-4">
			<li class="nav-item">
			<a class="nav-link" href="<?= base_url() ?>">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link disabled" href="#">Latest Reports</a>
			</li>
		</ul>
	</div>
	<div class="col-md-8">
    <h2 class="head-1 mb-4 text-muted">Latest published reports</h2>

    <ul class="report-list" id="reportList">
        <!-- Latest reports will be loaded here -->
    </ul>

    <div id="paginationLinks" class="text-center mb-4 pagination-container">
    <!-- Pagination links will be loaded here -->
</div>


</div>
<script>
    $(document).ready(function() {
        var page = 1;
        var perPage = 3; // Define the number of items per page

        // Function to load reports via AJAX
        function loadReports(page, perPage) {
            $.ajax({
                url: '<?php echo base_url('load-reports'); ?>/' + page + '?perPage=' + perPage,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var reports = response.reports;
                    var totalReports = response.totalReports;
                    var totalPages = Math.ceil(totalReports / perPage);

                    if (reports.length > 0) {
                        var reportList = $('#reportList');
                        reportList.empty();

                        $.each(reports, function(index, report) {
                            var listItem = '<li>' +

                                '<img src="<?= base_url() ?>assets/images/Automotive-and-Transportation.jpg" alt="report cover" />' +
                                '<span>Published On: ' + report.publishdate + '</span>' +
                                '<a href="<?= base_url() ?>report/' + report.reportid + '/' + encodeURIComponent(report.report_title) + '" class="title">' + report.report_title + '</a>' +
                                '<a href="<?= base_url() ?>download-sample/' + report.reportid + '/' + encodeURIComponent(report.report_title) + '" class="sample">Download Sample</a>' +
                                '<a href="<?= base_url() ?>latest-report" class="sample active">Read More</a>' +
                                '</li>';

                            reportList.append(listItem);
                        });

                        // Generate pagination links
                        var paginationLinks = '';
                        for (var i = 1; i <= totalPages; i++) {
                            paginationLinks += '<button class="btn btn-link page-link" data-page="' + i + '">' + i + '</button>';
                        }
                        $('#paginationLinks').html(paginationLinks);

                        // Attach click event to pagination links
                        $('.page-link').click(function() {
                            var pageNum = parseInt($(this).data('page'));
                            loadReports(pageNum, perPage);
                        });
                    } else {
                        $('#paginationLinks').html(''); // Clear pagination links when there are no reports
                    }
                }
            });
        }

        // Load initial set of reports
        loadReports(page, perPage);
    });
</script>
	<div class="col-md-4">
		<p class="head-1 mb-4 text-muted">Find report by category</p>
		<ul class="cate-list">
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Life Sciences</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Aerospace & Defense</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Food and Beverages</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Energy and Natural Resources</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Manufacturing & Construction</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Consumer Goods and Services</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>ICT & Media</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Business and Finance</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Agriculture</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>Automotive and Transportation</a></li>
			<li><a href="#"><i class="fa fa-chevron-circle-right"></i>View all</a></li>
		</ul>
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
		<div class="py-3"><strong>SECURITY ASSURED</strong> <img src="assets/images/payment-image.png" alt="payment image" height="27" title="secure by"></div>
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