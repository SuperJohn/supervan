<?php

	/*
	*
	*	about Widget
	*	------------------------------------------------
	*	Il Gelo about
	*
	*/

	// Register widget
	add_action( 'widgets_init', 'ilgelo_about' );
	function ilgelo_about() { return register_widget('ilgelo_about'); }

	class ilgelo_about extends WP_Widget {
		function ilgelo_about() {
			parent::__construct( 'ilgelo_about', $name = 'INDIEGROUND About' );
		}

		function widget( $args, $instance ) {
			global $post;
			extract($args);

			// Widget Options
			$url 	 = $instance['url'];
			$image	 = $instance['image'];
			$text	 = $instance['text'];
			$title	 = $instance['title'];

			?>

			<div class="ig_aboutme">


					<?php
					if (!empty($image)) {
					echo "<div class='ig_cont_image'>";
					echo "<div class='ig_bg_image'></div>";
					echo "     <a class='ig_about' href='". $url . "' >";
					echo "         <img class='img_full_responsive aligncenter' src='". $image."'>";
				     echo "     </a>";
					echo "</div>";

					}
					?>





		    <?php
				echo $before_widget;
			if (!empty($title)) {
				echo "<h6 class='textaligncenter'>".esc_attr($title)."</h6>";
			}
			?>
				<p><?php echo esc_attr($text) ?></p>
			</div>

			<?php

			echo $after_widget;
		}

		/* Widget control update */
		function update( $new_instance, $old_instance ) {
			$instance    = $old_instance;

			$instance['url']  = strip_tags( $new_instance['url'] );
			$instance['image'] = strip_tags( $new_instance['image'] );
			$instance['text'] = strip_tags( $new_instance['text'] );
			$instance['title'] = strip_tags( $new_instance['title'] );
			return $instance;
		}

		/* Widget settings */
		function form( $instance ) {

			    // Set defaults if instance doesn't already exist
			    if ( $instance ) {
					$url  = $instance['url'];
			        $image = $instance['image'];
			        $text = $instance['text'];
			        $title = $instance['title'];
			    } else {
				    // Defaults
					$url  = '';
			        $image = '';
			        $text = '';
			        $title = '';
			    }

				// The widget form
				?>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e('Title:', 'ilgelo'); ?></label>
					<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
				</p>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('url')); ?>"><?php echo __( 'Link url:', 'ilgelo' ); ?></label><br>
					<input id="<?php echo esc_attr($this->get_field_id('url')); ?>" name="<?php echo esc_attr($this->get_field_name('url')); ?>" type="text" value="<?php echo esc_url($url); ?>"  class="widefat" />
				</p>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php echo __( 'Image url:', 'ilgelo' ); ?></label><br>
					<input id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" type="text" value="<?php echo esc_attr($image); ?>"  class="widefat" />
				</p>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php echo __( 'Text:', 'ilgelo' ); ?></label><br>
					<input id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text" value="<?php echo esc_attr($text); ?>"  class="widefat" />

				</p>
		<?php
		}

	}

?>