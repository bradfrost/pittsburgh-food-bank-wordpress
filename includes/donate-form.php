<?php 
	global $post;
	
	//If this page is a child of the donate page
	if ( $post->post_parent == '17' && $post->ID != '2161' ) {
		$postID = $post->ID;
	} else {
		$postID = 1833; 
	}
?>
<form method="post" action="https://secure2.convio.net/gpcfb/site/CRDonationAPI" class="donate-form luminateApi donate-form" id="donate-form" data-luminateApi='{"callback": "donateCallback"}'>
	<input type="hidden" name="method" value="donate" />
    <input type="hidden" name="form_id" value="<?php the_field('form_id',$postID); ?>" data-monthly-id="<?php the_field('monthly_form_id',$postID); ?>" />
    <input type="hidden" name="validate" value="true" />
    <input type="hidden" name="df_preview" value="true" />
    <input type="hidden" name="billing.name.first" id="billing-first-name" value="" />
    <input type="hidden" name="billing.name.last" id="billing-last-name" value="" />
    
	<fieldset class="donate-step" id="donate-step-1">
		<h4 class="donate-step-legend"><span class="form-step">1</span> <span class="donate-step-message">Choose an amount to donate:</span></h4>
		
		<ul class="chicklet-list">
			<?php
				if( have_rows('donate_widget_values',$postID) ):
				$i = 1;
			    while ( have_rows('donate_widget_values',$postID) ) : the_row(); 
			?>  
			<li>
				<input type="radio" id="donate-amount-<?php echo $i; ?>" name="level_id" value="<?php the_sub_field('level_id',$postID); ?>" data-onetime-value="<?php the_sub_field('level_id',$postID); ?>" data-monthly-value="<?php the_sub_field('monthly_level_id',$postID); ?>" <?php if($i==2) { echo 'checked'; } ?> />
				<label for="donate-amount-<?php echo $i; ?>" data-amount="<?php the_sub_field('donate_amount',$postID); ?>" data-message="<?php the_sub_field('donate_impact'); ?>">$<?php the_sub_field('donate_amount',$postID); ?></label>
				
				<?php $i++; ?>
			</li>
			<?php 
			    endwhile;
			    endif;
			?>	
			<li>
				<input type="radio" id="donate-amount-other" name="level_id" value="<?php the_field('other_level_id',$postID); ?>" data-onetime-value="<?php the_field('other_level_id',$postID); ?>" data-monthly-value="<?php the_field('other_monthly_level_id',$postID); ?>" style="display: none;" />
				<div class="input-container" data-message="Every dollar you donate helps end hunger.">
					<span class="input-addon">$</span><input type="text" id="other-amount" placeholder="Other" name="other_amount" />
				</div>
			</li>
		</ul>
		
		<div class="field-container checkbox-container">
			<input type="checkbox" id="donate-monthly" />
			<label for="donate-monthly">I would like to make this a monthly donation</label>
		</div>
	</fieldset><!--end .donate-step-->

	<fieldset class="donate-step" id="donate-step-2">

		<h4 class="donate-step-legend"><span class="form-step">2</span> Enter your information:</h4>
		<div class="g g-2up">
			<div class="field-container gi">
				<label for="donate-name">Full Name</label>
				<input type="text" id="donate-name" placeholder="Firstname Lastname" autocomplete="name" name="fullname" required pattern="[a-zA-Z0-9\s]+" data-parsley-pattern="[a-zA-Z0-9\s]+" data-parsley-error-message="Please enter your first and last name" />
			</div>
			<div class="field-container gi">
				<label for="donate-email">E-mail</label>
				<input type="email" id="donate-email" placeholder="your@email.com" required data-parsley-error-message="Please enter a valid e-mail address" name="donor.email" autocomplete="email" />
			</div>
			<div class="field-container gi">
				<label for="donate-address">Address</label>
				<input type="text" id="donate-address" placeholder="123 Main St, Apt 2" required data-parsley-error-message="Please enter your street address" name="billing.address.street1" />
			</div>
			<div class="field-container gi">
				<label for="donate-zip">ZIP</label>
				<input type="text" id="donate-zip" placeholder="15201" autocomplete="off" required data-parsley-error-message="Please enter a valid ZIP code" pattern="[0-9]*" name="billing.address.zip" />
			</div>
			<div class="field-container gi field-container-city">
				<label for="donate-city">City</label>
				<input type="text" id="donate-city" placeholder="Pittsburgh" autocomplete="off" required data-parsley-error-message="Please enter your city" name="billing.address.city" />
			</div>
			<div class="field-container gi field-container-state">
				<label for="donate-state">State</label>
				<input type="text" id="donate-state" placeholder="PA" autocomplete="off" name="billing.address.state" required />
			</div>
		</div><!--end .g-2up-->
	</fieldset><!--end .donate-step-->
	
	<fieldset class="donate-step" id="donate-step-3">
		<h4 class="donate-step-legend"><span class="form-step">3</span> Enter your billing info:</h4>
		
		<div class="radio-container" id="payment-type-radio">
			<label><input type="radio" name="payment_type" checked="checked" data-payment-type="payment-type-cc" /> Credit Card</label>
			<label><input type="radio" name="payment_type"  data-payment-type="payment-type-bank" /> Bank Account</label>
		</div>
		
		<div class="payment-type active" id="payment-type-cc">
			<h4>Credit Card Info</h4>
			<div class="credit-card-group">
				<label for="card-number">Credit Card Number</label>
				<input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="card-number" id="card-number" name="card_number" autocomplete="cc-number">
				<label for="card-expiration">Credit Card Expiration</label>
				<input placeholder="MM/YYYY"  type="text" class="card-expiration" id="card-expiration" name="card_exp_date">
				<label for="card-cvv">CVV Number</label>
				<input placeholder="CVV" pattern="[0-9]*" type="text" class="card-cvv" id="card-cvv" name="card_cvv" autocomplete="cc-csc">
			</div><!--end .credit-card-group-->
		</div><!--end .payment-type-bank-->
		
		<div class="payment-type" id="payment-type-bank">
			<div class="g g-2up">
				<div class="field-container gi">
					<label for="bank-routing">Routing Number</label>
					<input type="text" id="bank-routing" placeholder="036001808" pattern="[0-9]*" autocomplete="off" name="ach_routing" />
				</div>
				<div class="field-container gi">
					<label for="bank-account">Bank Account Number</label>
					<input type="text" id="bank-account" placeholder="0175380001" pattern="[0-9]*" name="ach_account" />
				</div>
			</div><!--end .g-2up-->
		</div><!--end .payment-container-bank-->
	</fieldset><!--end .donate-step-->
	<button class="donate-submit btn btn-alt"><span class="donate-submit-text">Donate</span> <span class="icon-arrow-right5"></span></button>
</form><!--end .donate-form-->