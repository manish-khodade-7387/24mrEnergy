
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
        <?php
                // Fetch contacts from ContactsModel
                $contactsModel = new \App\Models\ContactsModel();
                $contacts = $contactsModel->getContactsByCity('Pune');
                foreach ($contacts as $contact): ?>

			<li><a target="_blank" href="<?= ($contact['fb']) ?>" title="facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" href="<?= ($contact['linkedin_id']) ?>" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
			<li><a target="_blank" href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="<?= ($contact['youtube']) ?>" title="youtube"><i class="fa fa-youtube-play"></i></a></li>
			<li><a target="_blank" href="#" title="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
			<li><a target="_blank" href="#" title="rss"><i class="fa fa-rss"></i></a></li>

            <?php endforeach; ?>
		</ul>
		<p class="mb-2">©All Rights Reserved, 24 Market reports</p>
		<p>Page Load In : 0.8247</p>
	</div>
	<div class="col-md-12">
		<div class="row">

        <?php
                // Fetch contacts from ContactsModel
                $contactsModel = new \App\Models\ContactsModel();
                $contacts = $contactsModel->getContactsByCity('Pune');
                foreach ($contacts as $contact): ?>

			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-phone-square color-orange mr-1"></i>International</p>+1(646)-781-7170
			</div>
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-phone-square color-orange mr-1"></i>Asia</p><?= ($contact['contact_no']) ?>
			</div>
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-envelope color-orange mr-1"></i>E-mail</p><?= ($contact['emailID']) ?>
			</div>
			<div class="col-md-3 footer-cont">
				<p><i class="fa fa-map-marker color-orange mr-1"></i>Address</p><?= ($contact['address']) ?>
			</div>

            <?php endforeach; ?>
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