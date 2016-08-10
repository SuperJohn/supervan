	<?php
			$icons_social_library = "1";

			if (!empty($ilgelo_options['ilgelo-social-library'])) {
				$icons_social_library=$ilgelo_options['ilgelo-social-library'];
			}

			if ($icons_social_library=="1") {
				/* Mono Social Icons  http://drinchev.github.io/monosocialiconsfont/ */
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-facebook'],"<span class='symbol'>roundedfacebook</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-twitter'],"<span class='symbol'>roundedtwitterbird</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-google'],"<span class='symbol'>roundedgoogleplus</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-behance'],"<span class='symbol'>roundedbehance</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-dribbble'],"<span class='symbol'>roundeddribble</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-linkedin'],"<span class='symbol'>roundedlinkedin</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-flickr'],"<span class='symbol'>roundedflickr</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-vimeo'],"<span class='symbol'>roundedvimeo</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-soundcloud'],"<span class='symbol'>roundedsoundcloud</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-deviantart'],"<span class='symbol'>roundeddeviantart</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-instagram'],"<span class='symbol'>roundedinstagram</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-pinterest'],"<span class='symbol'>roundedpinterest</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-youtube'],"<span class='symbol'>roundedyoutube</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-tumblr'],"<span class='symbol'>roundedtumblr</span>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-rss'],"<span class='symbol'>roundedblip</span>");
			} else if ($icons_social_library=="2") {
				/* Fort Awesome Social Icons  http://fortawesome.github.io/Font-Awesome/icon/ */
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-facebook'],"<i class='fa fa-facebook'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-twitter'],"<i class='fa fa-twitter'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-google'],"<i class='fa fa-google-plus'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-behance'],"<i class='fa fa-behance'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-dribbble'],"<i class='fa fa-dribbble'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-linkedin'],"<i class='fa fa-linkedin'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-flickr'],"<i class='fa fa-flickr'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-vimeo'],"<i class='fa fa-vimeo'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-soundcloud'],"<i class='fa fa-soundcloud'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-deviantart'],"<i class='fa fa-deviantart'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-instagram'],"<i class='fa fa-instagram'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-pinterest'],"<i class='fa fa-pinterest'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-youtube'],"<i class='fa fa-youtube'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-tumblr'],"<i class='fa fa-tumblr'></i>");
				echo indie_social_getecho_header($ilgelo_options['Ilgelo-social-rss'],"<i class='fa fa-rss'></i>");
			}
		?>



