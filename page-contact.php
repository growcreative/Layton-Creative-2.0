<?php /* Template Name: Contact */ get_header("contact"); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- section -->
	<section id="Contact" role="main">
		<h1>Contact</h1>
		<hr />
		<article class="group">
			<div id="contact-layton-creative" class="pc50">
				<h2>Say Hello</h2>
				<p><?php the_field('intro_text'); ?></p>
				<?php
				if(isset($_POST['submitted'])) {
				if(trim($_POST['contactName']) === '') {
					$nameError = 'Please enter your name.';
					$hasError = true;
				} else {
					$name = trim($_POST['contactName']);
				}
				if(trim($_POST['email']) === '')  {
					$emailError = 'Please enter your email address.';
					$hasError = true;
				} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
					$emailError = 'You entered an invalid email address.';
					$hasError = true;
				} else {
					$email = trim($_POST['email']);
				}
				if(trim($_POST['comments']) === '') {
					$commentError = 'Please enter a message.';
					$hasError = true;
				} else {
					if(function_exists('stripslashes')) {
						$comments = stripslashes(trim($_POST['comments']));
					} else {
						$comments = trim($_POST['comments']);
					}
				}
				if(!isset($hasError)) {
					$emailTo = get_option('tz_email');
					if (!isset($emailTo) || ($emailTo == '') ){
						$emailTo = 'nathan@sprinkler.net.au';
					}
					$subject = ' From '.$name;
					$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
					$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
					wp_mail($emailTo, $subject, $body, $headers);
					$emailSent = true;
				}
				} ?>
				<?php if(isset($emailSent) && $emailSent == true) { ?>
				<p>Thank you for your enquiry <?php echo $name; ?>.</p>
				<?php } else { ?>
				<?php the_content(); ?>
				<?php if(isset($hasError) || isset($captchaError)) { ?>
				<p class="error">Please fill out fields correctly.<p>
				<?php } ?>
				<form id="contact_us" class="group" name="myemailform" action="<?php the_permalink(); ?>" method="post">														
					<label for="contactName">Name<span>*</span></label>
					<input type="text" class="input" name="contactName" placeholder="Name" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" required/>
					<label for="email">Email Address<span>*</span></label> 
					<input type="email" class="input" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" required/>						
					<label for="email">Message<span>*</span></label> 													
					<textarea class="input message_box" name="comments" placeholder="Message"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>							
					<input id="submit" class="submit" type="submit" name="submitted" value="Send"></input>						
				</form>		
				<?php } ?>
				<address>
					<strong>laytoncreative</strong><br />
					4/95 Victoria Street<br />
					Fitzroy Vic 3065 AU<br />
				</address>
				<address>
					61.423.157.185<br />
					<a href="mailto:hello@laytoncreative.com.au">hello@laytoncreative.com.au</a>
				</address>
			</div>
			<div id="googlemap" class="pc50">
			
			</div> 
			
		</article>
				
	<?php endwhile; endif; ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>	