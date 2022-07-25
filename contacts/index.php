<?php
global $title;
global $description;
$title="Write to us now. We can't wait to work with you";
$description="Send us a message and a member of our team will be in touch with you soon.";
include "../header.php"?>
	

	<div class="container standart_padding100">
		<div class="double_with_text">
			
			<div class="double_with_text_data"><h1>Contact us</h1>
				<div class="contact_data_top"><b>We’d love to connect with you!</b></div>
				<div class="contact_data">Send us a message and a member of our team will be in touch with you soon.</div>
				<form id="contactform" data-go="/ajax/contacts.php">
					<div class="double_line_form">
						<div class="form_line">
							<input type="text" name="first_name" required value="">
							<label>First Name*</label>
						</div>
						<div class="form_line">
							<input type="text" name="last_name"  value="">
							<label>Last Name</label>
						</div>
					</div>
					<div class="double_line_form">
						<div class="form_line">
							<input type="email" name="email" required value="">
							<label>Email*</label>
						</div>
						<div class="form_line">
							<input type="text" name="phone" required value="">
							<label>Phone number*</label>
						</div>
					</div>
					<div class="form_line">
						<textarea name="comment"></textarea>
						<label>Add description of inquiry</label>
					</div>
					
					<div class="notat">* Required fields</div>
					
					<button class=" main_button">Submit</button>
				</form>
	</div>
			<div class="double_with_text_image"><img src="/assets/images/contacts.webp" alt=""/></div>
		</div>
		
	</div>
<?php include "../footer.php"?>