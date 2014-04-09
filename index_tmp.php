<!DOCTYPE html> 
<html> 
	<head> 
	<title>Contact Us</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
</head> 
<body> 



    <section data-role="page" id="page1">
	<div data-role="header">
		<h1>REGISTRO DE USUARIO</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<div class="contact-thankyou" style="display: none;">
			Thank you.  Your message has been sent.  We will get back to you as soon as we can.
		</div>
		<div class="contact-form">
			<p class="mandatory">* indicates Manadatory Field</p>
			<div data-role="fieldcontain" class="text-field">
				<label for="firstname">First Name*:</label>
				<input type="text" name="firstname" value="" placeholder="" class="required" id="firstname" />
			</div>
			<div data-role="fieldcontain" class="text-field">
				<label for="surname">Last Name:</label>
				<input type="text" name="surname" value="" placeholder="" id="surname" />
			</div>
			<div data-role="fieldcontain" class="text-field">
				<label for="email">Email Address*:</label>
				<input type="email" name="email" value="" placeholder="" class="required" id="email"  />
			</div>
			<div data-role="fieldcontain" class="text-field">
				<label for="mobilephone">Mobile Number:</label>
				<input type="number" name="mobilephone" value="" placeholder="" id="mobilephone" />
			</div>
			<div data-role="fieldcontain">
				<label for="state">State:*</label>
					<select name="state" class="required" id="state">
						<option value="" data-placeholder="true">Please select your state</option>
						<option value="ACT">ACT</option>
						<option value="NSW">NSW</option>
						<option value="NT">NT</option>
						<option value="QLD">QLD</option>
						<option value="SA">SA</option>
						<option value="TAS">TAS</option>
						<option value="VIC">VIC</option>
						<option value="WA">WA</option>
					</select>
			</div>
			<div data-role="fieldcontain">
				<label for="message">Message*:</label>
				<textarea name="message" id="message" placeholder="" class="required"></textarea>
			</div>
			<div class="send"><a href="javascript:;" data-role="button" data-theme="a" data-iconpos="right" id="send-feedback">send feedback</a></div>
		</div><!-- //.contact-form -->
	</div><!-- /content -->
        <div data-role="footer">
		<p>Source code by <a href="http://eisabainyo.net/weblog" rel="external">Web Development Blog</a>.  Check out <a href="http://eisabainyo.net/weblog/tips-resources" rel="external">tip &amp; resources</a> for Web Developers.</a></p>
	</div><!-- /footer -->

    </section>
   
       
	

</body>
</html>