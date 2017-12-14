<?php
	/*
	Template Name: Contact Us

	*/


	//response generation function

	$response = "";

	//function to generate response
	function contact_form_generate_response($type, $message){

		global $response;

		if($type == "success") 
			$response = "<div class='success' style=\"color: #7ac143;\">{$message}</div>";
		else 
			$response = "<div class='error' style=\"color: #fc4646;\">{$message}</div>";

	}

	//response messages
	$not_human       = "Human verification incorrect.";
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";

	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$phone = $_POST['message_phone'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];

	//php mailer variables
	$to = get_theme_mod('contact_section_form_email');
	if(empty($to))
		$to = get_option('admin_email');
	$subject = "Someone sent a message from ".get_bloginfo('name');
	$headers = 'From: '. $email . "\r\n" .
	'Reply-To: ' . $email . "\r\n";

	if(!$human == 0) {
		if($human != 2)
			contact_form_generate_response("error", $not_human); //not human!
		else {

			//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				contact_form_generate_response("error", $email_invalid);
			else //email is valid
			{
				//validate presence of name and message
				if(empty($name) || empty($message)){
				  contact_form_generate_response("error", $missing_content);
				}
				else //ready to go!
				{
					if (!empty($phone))
						$message = "Phone: " . $phone . "\n" . $message;
					$sent = wp_mail($to, $subject, strip_tags($message), $headers);
					if($sent) contact_form_generate_response("success", $message_sent); //message sent!
					else contact_form_generate_response("error", $message_unsent); //message wasn't sent
				}
			}
		}
	}
	else if ($_POST['submitted']) contact_form_generate_response("error", $missing_content);

	get_header(); 

?>

<div id="fh5co-main">
			<?php 
				$mapShortCode = get_theme_mod('contact_section_map_shortcode');
				if ( !empty($mapShortCode) ) {
					echo "<div id=\"map\">";
					echo do_shortcode(stripslashes($mapShortCode));
					echo "</div>";
				}
			?>
			
			<?php 
				$contact_info_toggle = get_theme_mod( 'contact_info_toggle' );

				if ( isset( $contact_info_toggle ) && ($contact_info_toggle == 1) ) {
					
					$infoEmail = get_theme_mod('contact_section_info_email');
					$infoAddress = get_theme_mod('contact_section_info_address');
					$infoPhone = get_theme_mod('contact_section_info_phone');
					
					$output = "<div class=\"fh5co-more-contact\">";
					$output .= "<div class=\"fh5co-narrow-content\">";
					$output .= "<div class=\"row\">";
					
					$x = 0;
					if (!empty($infoEmail))
						$x = $x + 1;
					if (!empty($infoAddress))
						$x = $x + 1;
					if (!empty($infoPhone))
						$x = $x + 1;
					
					if ($x != 0) {
						
						if (!empty($infoEmail)) {
							$output .= "<div class=\"col-md-". 12/$x ."\">";
							$output .= "<div class=\"fh5co-feature fh5co-feature-sm animate-box\" data-animate-effect=\"fadeInLeft\">";
							$output .= "<div class=\"fh5co-icon\">";
							$output .= "<i class=\"icon-envelope-o\"></i>";
							$output .= "</div>";
							$output .= "<div class=\"fh5co-text\">";
							$output .= "<p><a href=\"mailto:".$infoEmail."\">".$infoEmail."</a></p>";
							$output .= "</div>";
							$output .= "</div>";
							$output .= "</div>";
						}
						
						if (!empty($infoAddress)) {
							$output .= "<div class=\"col-md-". 12/$x ."\">";
							$output .= "<div class=\"fh5co-feature fh5co-feature-sm animate-box\" data-animate-effect=\"fadeInLeft\">";
							$output .= "<div class=\"fh5co-icon\">";
							$output .= "<i class=\"icon-map-o\"></i>";
							$output .= "</div>";
							$output .= "<div class=\"fh5co-text\">";
							$output .= "<p>".$infoAddress."</p>";
							$output .= "</div>";
							$output .= "</div>";
							$output .= "</div>";
							
						}
						
						if (!empty($infoPhone)) {
							$output .= "<div class=\"col-md-". 12/$x ."\">";
							$output .= "<div class=\"fh5co-feature fh5co-feature-sm animate-box\" data-animate-effect=\"fadeInLeft\">";
							$output .= "<div class=\"fh5co-icon\">";
							$output .= "<i class=\"icon-phone\"></i>";
							$output .= "</div>";
							$output .= "<div class=\"fh5co-text\">";
							$output .= "<p><a href=\"tel://".$infoPhone."\">".$infoPhone."</a></p>";
							$output .= "</div>";
							$output .= "</div>";
							$output .= "</div>";
						}
					}
					
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</div>";
					echo $output;
				}
			?>
			
			<?php 
				$contact_info_toggle = get_theme_mod( 'contact_info_toggle' );
				if ( isset( $contact_info_toggle ) && ($contact_info_toggle == 1) ) {
					$formHeading = get_theme_mod('contact_section_form_heading');	
					
					$output = "<div class=\"fh5co-narrow-content animate-box\" data-animate-effect=\"fadeInLeft\">";
						
					$output .= "<div class=\"row\">";
					$output .= "<div class=\"col-md-4\">";
					$output .= "<h1>".$formHeading."</h1>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= $response;
					$output .= "<form action=\"". get_permalink() ."\" method=\"post\">";
					$output .= "<div class=\"row\">";
					$output .= "<div class=\"col-md-12\">";
					$output .= "<div class=\"row\">";
					$output .= "<div class=\"col-md-6\">";
					$output .= "<div class=\"form-group\">";
					$output .= "<input type=\"text\" class=\"form-control\" placeholder=\"Name*\" name=\"message_name\" value=\"". esc_attr($_POST['message_name']) ."\">";
					$output .= "</div>";
					$output .= "<div class=\"form-group\">";
					$output .= "<input type=\"text\" class=\"form-control\" placeholder=\"Email*\" name=\"message_email\" value=\"". esc_attr($_POST['message_email'])."\">";
					$output .= "</div>";
					$output .= "<div class=\"form-group\">";
					$output .= "<input type=\"text\" class=\"form-control\" placeholder=\"Phone\" name=\"message_phone\" value=\"". esc_attr($_POST['message_phone']) ."\">";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "<div class=\"col-md-6\">";
					$output .= "<div class=\"form-group\">";
					$output .= "<textarea id=\"message\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Message*\" name=\"message_text\">".esc_textarea($_POST['message_text'])."</textarea>";
					$output .= "</div>";
					$output .= "<div class=\"form-group\">";
					$output .= "<div class=\"col-md-6\">";
					$output .= "<input type=\"hidden\" name=\"submitted\" value=\"1\">";
					$output .= "<input type=\"submit\" class=\"btn btn-primary btn-md\" value=\"Send Message\">";
					$output .= "</div>";
					$output .= "<div class=\"col-md-6\">";
					$output .= "<input type=\"text\" class=\"form-control\" placeholder=\"Human test*: 1 + 1 = ?\" name=\"message_human\">";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</form>";
					$output .= "</div>";
					
					echo $output;
				}
			?>
			
		</div>

<?php get_footer(); ?>