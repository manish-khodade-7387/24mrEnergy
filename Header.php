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
</head>
<body>




<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="top-contact">
        <?php
                // Fetch contacts from ContactsModel
                $contactsModel = new \App\Models\ContactsModel();
                $contacts = $contactsModel->getContactsByCity('Pune');
                foreach ($contacts as $contact): ?>

			<li><img src="assets/images/mail-icon.png" alt="mail" /><?= ($contact['emailID']) ?></li>
			<li><img src="assets/images/call-icon.png" alt="mail" /><?= ($contact['contact_no']) ?></li>
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
		<a href="<?= base_url() ?>" class="logo"><img src="<?=base_url()?>assets/images/logo2.png" alt="logo"/></a>
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

</body>
</html>