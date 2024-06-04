<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Add your CSS links here -->
</head>
<body>
    <?php include 'Header.php'; ?>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="head-2">
                    <h1 class="title">Shopping<span> Cart</span></h1> 
                </div>
            </div>
            <div class="col-md-8">
                <?php if (!empty($cartItems)): ?>
                    <!-- If cart has items -->
                    <ul class="report-list">
                        <?php foreach ($cartItems as $item): ?>
                            <li>
                                <h2 class="title"><?= $item['report_title']; ?></h2>
                                <span>Purchase Option: <?= $item['purchase_option']; ?></span>
                                <!-- Form to remove item from cart -->
                                <form action="<?= base_url('cart/removeItem'); ?>" method="post">
                                    <input type="hidden" name="cart_id" value="<?= $item['id']; ?>">
                                    <button type="submit">Remove</button>
                                </form>
                                
                                <p>SELECT LICENCE
						
                                <form action="<?= base_url('cart/updatePurchaseOption'); ?>" method="post">
                                     <input type="hidden" name="cart_id" value="<?= $item['id']; ?>">
                                        <label for="purchase_option">Select License:</label>
                                        <select class="form-control" id="purchase_option" name="purchase_option" onChange="this.form.submit()">
                                            
                                        <option value="3500" <?php if ($item['purchase_option'] == '3500') echo 'selected'; ?>>$3500 - Single User Price</option>
                                        <option value="5000" <?php if ($item['purchase_option'] == '5000') echo 'selected'; ?>>$5000 - Multi User Price</option>
                                        <option value="8000" <?php if ($item['purchase_option'] == '8000') echo 'selected'; ?>>$8000 - Enterprise Price</option>
                                        </select>
                                </form>



                            </li>
                           
                        <?php endforeach; ?>
                       
                    </ul>
                <?php else: ?>
                    <!-- If cart is empty -->
                    <h2 class="text-primary"><strong>Shopping cart is empty!</strong></h2>
                    <p class="text-muted">You have no items in your shopping cart.<br>
                    Click here <i class="fa fa-hand-o-down text-primary" style="font-size:20px"></i> to continue shopping.</p>
                    <a href="<?= base_url('latest-report'); ?>" class="btn-1"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;CONTINUE SHOPPING</a>
                <?php endif; ?>
                
                   
                    Click here <i class="fa fa-hand-o-down text-primary" style="font-size:20px"></i> to continue shopping.</p>
                    <a href="<?= base_url('latest-report'); ?>" class="btn-1"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;CONTINUE SHOPPING</a>
            </div>


            <div class="col-md-4">
		<p class="head-1 mb-4 text-muted">CART ITEM</p>
		<div class="checkout-item">
		
			
			<div class="total">
				<p>Sub Total <span>$4225</span></p>
				<p>Other Charges <span>$00</span></p>
				<p>Discount <span>$00</span></p>
			</div>
			<div class="g-total">
				<p>Amount Payable <span>$4225</span></p>
			</div>
		</div>
	</div>

            <!-- Display the count of items in the cart 
            <div class="col-md-4">
                <div class="cart-count-box">
                    <p>Cart Count: <?= $cartCount ?></p>
                </div>
            </div>
              -->

        </div>
    </div>

    <?php include 'Footer.php'; ?>
</body>
</html>
