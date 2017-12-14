<?php get_header(); ?>
		<div id="fh5co-main">
			<?php 
				$gallery_toggle = get_theme_mod( 'frontpage_gallery_toggle' );

				if ( isset( $gallery_toggle ) && ($gallery_toggle == 1) ) {
					$output = "<div class=\"fh5co-gallery\">";
					
					for ($i = 1; $i <= 16; $i++) {
						$imageUrl = get_theme_mod('showcase_image'.$i, '');
						if ($imageUrl !== '') {
							$output .= "<a class=\"gallery-item gallery_front\" href='".$imageUrl."'>";
							$output .= "<img src='".$imageUrl."' alt=\"".get_the_title(attachment_url_to_postid($imageUrl))."\"></img>";
							$output .= "<span class=\"overlay\">";
							$output .= "<h2>".get_the_title(attachment_url_to_postid($imageUrl))."</h2>";
							//display description as well
							//$output .= "<span>".get_post(attachment_url_to_postid($imageUrl))->post_content."</span>";
							//$output .= "</span>";
							$output .= "</a>";
						}
					}
					
					$output .= "</div>";
					
					echo $output;
				}
			?>
			
			<?php 
				$services_toggle = get_theme_mod( 'frontpage_services_toggle' );

				if ( isset( $services_toggle ) && ($services_toggle == 1) ) {
					
					$output = "<div class=\"fh5co-narrow-content\">";
					$output .= "<h2 class=\"fh5co-heading animate-box\" data-animate-effect=\"fadeInLeft\">".get_theme_mod('frontpage_services_heading', 'Services')."</h2>";
					$output .= "<div class=\"row\">";
					
					for ($i = 1; $i <= 4; $i++) {
						$serviceFont = get_theme_mod('frontpage_services_icon'.$i);
						$serviceTitle = get_theme_mod('frontpage_services_title'.$i);
						$serviceText = get_theme_mod('frontpage_services_text'.$i);
						if ($serviceFont !== '' || $serviceTitle !== '' || $serviceText !== '') {
							
							$output .= "<div class=\"col-md-6\">";
							$output .= "<div class=\"fh5co-feature animate-box\" data-animate-effect=\"fadeInLeft\">";
							$output .= "<div class=\"fh5co-icon\">";
							$output .= "<i class=\"".$serviceFont."\"></i>";
							$output .= "</div>";
							$output .= "<div class=\"fh5co-text\">";
							$output .= "<h3>".$serviceTitle."</h3>";
							$output .= "<p>".$serviceText."</p>";
							$output .= "</div>";
							$output .= "</div>";
							$output .= "</div>";
						}
					}
					
					$output .= "</div>";
					$output .= "</div>";
				
					echo $output;
				}
			?>

			<?php 
				$testimonials_toggle = get_theme_mod( 'frontpage_testimonials_toggle' );

				if ( isset( $testimonials_toggle ) && ($testimonials_toggle == 1) ) {
					
					$output = "<div class=\"fh5co-testimonial\" >";
					$output .= "<div class=\"fh5co-narrow-content\">";
					$output .= "<div class=\"owl-carousel-fullwidth animate-box\" data-animate-effect=\"fadeInLeft\">";
					
					for ($i = 1; $i <= 3; $i++) {
						$testimonialImage = get_theme_mod('frontpage_testimonials_image'.$i);
						$testimonialQuote = get_theme_mod('frontpage_testimonials_quote'.$i);
						$testimonialAuthor = get_theme_mod('frontpage_testimonials_author'.$i);
						if ($testimonialImage !== '' || $testimonialQuote !== '' || $testimonialAuthor !== '') {
							
							$output .= "<div class=\"item\">";
							$output .= "<figure>";
							$output .= "<img src=\"".$testimonialImage."\" alt=\"".get_bloginfo('name')."\">";
							$output .= "</figure>";
							$output .= "<p class=\"text-center quote\">&ldquo;".$testimonialQuote."&rdquo; <cite class=\"author\">&mdash; ".$testimonialAuthor."</cite></p>";
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
				$counters_toggle = get_theme_mod( 'frontpage_counters_toggle' );

				if ( isset( $counters_toggle ) && ($counters_toggle == 1) ) {
					
					$output = "<div class=\"fh5co-counters\" style=\"background-image: url(".get_theme_mod('frontpage_counters_background_image').");\" data-stellar-background-ratio=\"0.5\" id=\"counter-animate\">";
					$output .= "<div class=\"fh5co-narrow-content animate-box\">";
					$output .= "<div class=\"row\" >";
					
					for ($i = 1; $i <= 3; $i++) {
						$counterLabel = get_theme_mod('frontpage_counters_label'.$i);
						$counterAmount = get_theme_mod('frontpage_counters_amount'.$i);
						if ($counterLabel !== '' || $counterAmount !== '') {						
							$output .= "<div class=\"col-md-4 text-center\">";
							$output .= "<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"".$counterAmount."\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>";
							$output .= "<span class=\"fh5co-counter-label\">".$counterLabel."</span>";
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
				$call_for_action_toggle = get_theme_mod( 'frontpage_call_for_action_toggle' );

				if ( isset( $call_for_action_toggle ) && ($call_for_action_toggle == 1) ) {
					
					$cfaHeading = get_theme_mod('frontpage_call_for_action_heading');
					$cfaText = get_theme_mod('frontpage_call_for_action_text');
					$cfaBtnUrl = get_theme_mod('frontpage_call_for_action_btn_url');
					$cfaBtnText = get_theme_mod('frontpage_call_for_action_btn_text');
					
					$output = "<div class=\"fh5co-narrow-content\">";
					$output .= "<div class=\"row\">";
					$output .= "<div class=\"col-md-4 animate-box\" data-animate-effect=\"fadeInLeft\">";
					$output .= "<h1 class=\"fh5co-heading-colored\">".$cfaHeading."</h1>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "<div class=\"row\">";
					$output .= "<div class=\"col-md-12 animate-box\" data-animate-effect=\"fadeInLeft\">";
					$output .= "<p class=\"fh5co-lead\">".$cfaText."</p>";
					$output .= "<p><a href=\"".$cfaBtnUrl."\" class=\"btn btn-primary btn-outline\">".$cfaBtnText."</a></p>";
					$output .= "</div>";
					$output .= "</div>";
					$output .= "</div>";
				
					echo $output;
				}
			?>
			
		</div>
	

    <script src="<?php bloginfo('template_url'); ?>/js/halkaBox.min.js"></script>
    <script>
        window.onload = function () {
            halkaBox.run("gallery_front", {
                animation: "fade",
                theme: "dark",
                hideButtons: false,
                preload: 0
            });
        };
    </script>
<?php get_footer(); ?>