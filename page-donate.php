<?php
/*
 * Template Name: Donate
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hero hero-text">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<p class="page-intro"><?php the_field('tagline'); ?></p>

	<form method="post" action="#" class="donate-form" novalidate="">
			<fieldset class="donate-step donate-range-container" id="donate-step-1">
				<div class="field-container">
					<label for="donate-range" class="field-instruction is-vishidden ui-slider" id="donate-range-label">Choose amount to donate</label>
					<div class="ui-slider"><input type="number" data-type="range" class="donate-range ui-slider-input" id="donate-range" value="1" min="1" max="100" data-parsley-id="8463"><ul class="parsley-errors-list" id="parsley-id-8463"></ul><div role="application" class="ui-slider-track ui-btn-down-c ui-btn-corner-all"><div class="ui-slider-bg ui-btn-active ui-btn-corner-all" style="width: 0%;"></div><a href="#" class="ui-slider-handle ui-btn ui-btn-up-c ui-shadow ui-btn-corner-all" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="c" role="slider" aria-valuemin="1" aria-valuemax="100" aria-valuenow="1" aria-valuetext="1" title="1" aria-labelledby="donate-range-label" style="left: 0%;">$1</a></div></div>
					<div class="donate-slider-message">Every dollar helps. 96% of donated money goes directly to feeding the hungry.</div>
				</div>
				<div class="field-container checkbox-container">
					<input type="checkbox" id="donate-monthly" data-parsley-multiple="donate-monthly" data-parsley-id="9075">
					<label for="donate-monthly">Yes, I would like to donate this amount monthly</label>
				</div><ul class="parsley-errors-list" id="parsley-id-multiple-donate-monthly"></ul>
				<a href="#donate-step-2" id="donate-step-2-link" class="btn btn-wide">Next</a>
			</fieldset><!--end .donate-step-->

			<fieldset class="donate-step closed" id="donate-step-2">
				<legend><span class="form-step">2</span> Enter your information:</legend>
				<div class="g g-2up">
					<div class="field-container gi">
						<label for="donate-name">Name</label>
						<input type="text" id="donate-name" placeholder="First Last" autocomplete="off" required="" data-parsley-id="7411"><ul class="parsley-errors-list" id="parsley-id-7411"></ul>
					</div>
					<div class="field-container gi">
						<label for="donate-email">E-mail</label>
						<input type="email" id="donate-email" placeholder="your@email.com" required="" data-parsley-id="2702"><ul class="parsley-errors-list" id="parsley-id-2702"></ul>
					</div>
					<div class="field-container gi">
						<label for="donate-address">Address</label>
						<input type="text" id="donate-address" placeholder="123 Main St" autocomplete="off" required="" data-parsley-id="3706"><ul class="parsley-errors-list" id="parsley-id-3706"></ul>
					</div>
					<div class="field-container gi">
						<label for="donate-address-2">Address 2</label>
						<input type="text" id="donate-address-2" placeholder="Apt #, Suite, etc" autocomplete="off" required="" data-parsley-id="0644"><ul class="parsley-errors-list" id="parsley-id-0644"></ul>
					</div>
					<div class="field-container gi">
						<label for="donate-city">City</label>
						<input type="text" id="donate-city" placeholder="Pittsburgh" autocomplete="off" required="" data-parsley-id="6358"><ul class="parsley-errors-list" id="parsley-id-6358"></ul>
					</div>
					<div class="field-container gi">
						<label for="donate-state">State</label>
						<select id="donate-state" name="donate-state" required="" data-parsley-id="2695">
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA" selected="selected">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select><ul class="parsley-errors-list" id="parsley-id-2695"></ul>
					</div>
				</div><!--end .g-2up-->
				<a href="#donate-step-3" class="btn">Next Step</a>
			</fieldset><!--end .donate-step-->

			<fieldset class="donate-step closed" id="donate-step-3">
				<legend><span class="form-step">3</span> Enter payment information:</legend>
				<div class="field-container radio-container">
					<input type="radio" name="payment-type" id="payment-cc" data-parsley-multiple="payment-type" data-parsley-id="3778"><label for="payment-cc">Credit Card</label>
					<input type="radio" name="payment-type" id="payment-bank" data-parsley-multiple="payment-type" data-parsley-id="3778"><label for="payment-bank">Bank Account</label>
				</div><ul class="parsley-errors-list" id="parsley-id-multiple-payment-type"></ul>
				<div class="field-container">
					<label for="payment-cc-num">Credit Card Number</label>
					<input type="number" pattern="[0-9]*" id="payment-cc-num" placeholder="Enter Credit Card Number" required="" data-parsley-id="7300"><ul class="parsley-errors-list" id="parsley-id-7300"></ul>
				</div>
				<div class="field-container">
					<label for="payment-cc-num">CVV Number</label>
					<input type="number" pattern="[0-9]*" id="payment-cc-cvv" placeholder="123" required="" data-parsley-id="5451"><ul class="parsley-errors-list" id="parsley-id-5451"></ul>
				</div>
				<div class="field-container">
					<label for="payment-cc-month">Expiration Month</label>
					<select id="payment-cc-month" required="" data-parsley-id="9546">
						<option value="00">Choose Month</option>
						<option value="01">01 - January</option>
					    <option value="02">02 - February</option>
					    <option value="03">03 - March</option>
					    <option value="04">04 - April</option>
					    <option value="05">05 - May</option>
					    <option value="06">06 - June</option>
					    <option value="07">07 - July</option>
					    <option value="08">08 - August</option>
					    <option value="09">09 - September</option>
					    <option value="10">10 - October</option>
					    <option value="11">11 - November</option>
					    <option value="12">12 - December</option>
					</select><ul class="parsley-errors-list" id="parsley-id-9546"></ul>
				</div>
				<div class="field-container">
					<label for="payment-cc-month">Expiration Year</label>
					<select id="payment-cc-month" required="" data-parsley-id="0595">
						<option value="00">Choose Year</option>
						<option value="2014">2014</option>
					    <option value="2015">2015</option>
					    <option value="2016">2016</option>
					    <option value="2017">2017</option>
					    <option value="2018">2018</option>
					    <option value="2019">2019</option>
					    <option value="2019">2020</option>
					</select><ul class="parsley-errors-list" id="parsley-id-0595"></ul>
				</div>
				<div class="message">
					Norton Secured, powered by VeriSign
				</div>
				<button class="donate-submit btn">Submit Donation</button>
			</fieldset><!--end .donate-step-->
	</form><!--end .donate-form-->		
</div>
<div class="lc">
	<h2>More Ways to Give</h2>
	<div class="g g-3up">
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Planned Giving</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Donate food</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">View our store</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Tribute Gifts</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">Donate Credit Card Reward Points</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
		<div class="gi">
			<div class="block block-thumb">
				<a href="#" class="b-inner">
					<div class="b-img">
	<img src="../../images/fpo_square.png" alt="Square Thumbnail">							</div>
					<div class="b-text">
						<h2 class="b-title">In-Kind Donations</h2>
						<p class="b-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, voluptate.</p>
					</div>
				</a>
			</div>				</div>
	</div><!--end .g-3up-->
	<hr>
	<section class="section section-block">
		<div class="section-img">
<img src="../../images/fpo_hero.png" alt="Hero Image">				</div>
		<div class="section-body">
			<h2 class="section-title">Volunteer</h2>
			<p class="section-desc">Can't make a financial donation? Donate your time and make a difference consectetur adipisicing elit. Tempore, enim, id! Iste repellendus quidem nesciunt.</p>
			<ul class="text-list">
				<li><a href="#">Volunteer opportunities</a></li>
				<li><a href="#">Upcoming Events</a></li>
				<li><a href="#">Organize a food drive</a></li>
			</ul>
		</div>
	</section>
</div>
<section class="section section-block">
				<div class="section-img">
		<img src="../../images/fpo_hero.png" alt="Hero Image">				</div>
				<div class="section-body">
					<h2 class="section-title">Volunteer</h2>
					<p class="section-desc">Can't make a financial donation? Donate your time and make a difference consectetur adipisicing elit. Tempore, enim, id! Iste repellendus quidem nesciunt.</p>
					<ul class="text-list">
						<li><a href="#">Volunteer opportunities</a></li>
						<li><a href="#">Upcoming Events</a></li>
						<li><a href="#">Organize a food drive</a></li>
					</ul>
				</div>
			</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>