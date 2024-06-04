<div class="form-group col-md-6 text-right">
<label for="captcha">Enter the security code <span class="text-danger">*</span>:</label>
<?php $captchaCode = rand(1000, 9999); ?>
<span class="captch-code"><?= $captchaCode ?></span>
<input type="hidden" name="captcha_code" value="<?= $captchaCode ?>">   
</div>