<?php

/**
 * Adds Contact Widget.
 */

class pathways_Footer_Widgets extends WP_Widget{

	/**
	 * Register widget with WordPress.

	 */

	function __construct(){
		$widget_ops = array( 'info' => esc_html__('Pathways Contact.', 'pathways'),'customize_selective_refresh' => true, );
 		parent:: __construct('pathways_Footer_Widgets', esc_html__('1. Pathways Contact', 'pathways'),$widget_ops );
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */

	public function widget($args, $instance){

		extract($args);

		$title = apply_filters('widget_title', $instance['title']);
		$phone_number = !empty($instance['phone_number']) ? $instance['phone_number'] : '';
		$email_address = !empty($instance['email_address']) ? $instance['email_address'] : '';
		echo $before_widget;
		
		if($title) {
			echo $before_title.$title.$after_title;
		}
		
		?>
		    <div class="email-phone">
				<ul>
					<li><a href="mailto:<?php echo esc_attr($instance['email_address']); ?>"><?php echo esc_attr($instance['email_address']); ?></a></li>
					<li><a href="tel:<?php echo esc_attr($instance['phone_number']); ?>"><?php echo esc_attr($instance['phone_number']); ?></a></li>
				</ul>
			</div>

			<div class="footer-socials"> 
				<ul class="et-social-icons">
					<?php if($instance['linkedin_link']):?>
						<li class="et-social-icon et-social-linkedin">
							<a href="<?php echo esc_attr($instance['linkedin_link']); ?>" target="_blank" class="icon"><span>Linkedin</span></a>
						</li>
					<?php endif; ?>	
					<?php if($instance['twitter_link']):?>
						<li class="et-social-icon et-social-twitter">
							<a href="<?php echo esc_attr($instance['twitter_link']); ?>" target="_blank" class="icon"><span>Twitter</span></a>
						</li>
					<?php endif; ?>	
					<?php if($instance['facebook_link']):?>
						<li class="et-social-icon et-social-facebook">
							<a href="<?php echo esc_attr($instance['facebook_link']); ?>" target="_blank" class="icon"><span>Facebook</span></a>
						</li>
					<?php endif; ?>	
					<?php if($instance['youtube_link']):?>
						<li class="et-social-icon et-social-youtube">
							<a href="<?php echo esc_attr($instance['youtube_link']); ?>" target="_blank" class="icon"><span>Youtube</span></a>
						</li>
					<?php endif; ?>	
					<?php if($instance['pinterest_link']):?>
						<li class="et-social-icon et-social-pinterest">
							<a href="<?php echo esc_attr($instance['pinterest_link']); ?>" target="_blank" class="icon"><span>pinterest</span></a>
						</li>
					<?php endif; ?>	
				</ul>
			</div>
			
		<?php
		echo $after_widget;
	}

	/**

	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */

	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['phone_number'] = ( !empty($new_instance['phone_number']) ) ? strip_tags ( $new_instance['phone_number'] ) : '';
		$instance['email_address'] = ( !empty($new_instance['email_address']) ) ? strip_tags ( $new_instance['email_address'] ) : '';
		$instance['linkedin_link'] = ( !empty($new_instance['linkedin_link']) ) ? strip_tags ( $new_instance['linkedin_link'] ) : '';
		$instance['twitter_link'] = ( !empty($new_instance['twitter_link']) ) ? strip_tags ( $new_instance['twitter_link'] ) : '';
		$instance['facebook_link'] = ( !empty($new_instance['facebook_link']) ) ? strip_tags ( $new_instance['facebook_link'] ) : '';
		$instance['youtube_link'] = ( !empty($new_instance['youtube_link']) ) ? strip_tags ( $new_instance['youtube_link'] ) : '';
		$instance['pinterest_link'] = ( !empty($new_instance['pinterest_link']) ) ? strip_tags ( $new_instance['pinterest_link'] ) : '';
		
		return $instance;

	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */

	public function form($instance){
		$email_address = !empty($instance['email_address']) ? $instance['email_address'] : '';
		$phone_number = !empty($instance['phone_number']) ? $instance['phone_number'] : '';
		$linkedin_link = !empty($instance['linkedin_link']) ? $instance['linkedin_link'] : '';
		$twitter_link = !empty($instance['twitter_link']) ? $instance['twitter_link'] : '';
		$facebook_link = !empty($instance['facebook_link']) ? $instance['facebook_link'] : '';
		$youtube_link = !empty($instance['youtube_link']) ? $instance['youtube_link'] : '';
		$pinterest_link = !empty($instance['pinterest_link']) ? $instance['pinterest_link'] : '';
        ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','unify'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('email_address')); ?>"><?php esc_html_e('Email Address:' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('email_address')); ?>" name="<?php echo esc_attr($this->get_field_name('email_address')); ?>" value="<?php echo esc_attr($email_address); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('phone_number')); ?>"><?php esc_html_e('Phone Number:' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('phone_number')); ?>" name="<?php echo esc_attr($this->get_field_name('phone_number')); ?>" value="<?php echo esc_attr($phone_number); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('linkedin_link')); ?>"><?php esc_html_e('Enter Linkedin Profile URL' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('linkedin_link')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin_link')); ?>" value="<?php echo esc_attr($linkedin_link); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('twitter_link')); ?>"><?php esc_html_e('Enter Twitter Profile URL' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('twitter_link')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter_link')); ?>" value="<?php echo esc_attr($twitter_link); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('facebook_link')); ?>"><?php esc_html_e('Enter Facebook Profile URL' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('facebook_link')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook_link')); ?>" value="<?php echo esc_attr($facebook_link); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('youtube_link')); ?>"><?php esc_html_e('Enter Youtube Profile URL' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('youtube_link')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube_link')); ?>" value="<?php echo esc_attr($youtube_link); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('pinterest_link')); ?>"><?php esc_html_e('Enter Pinterest Profile URL' ,'pathways') ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('pinterest_link')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest_link')); ?>" value="<?php echo esc_attr($pinterest_link); ?>" />
		</p>
		
	<?php
	}
}

add_action('widgets_init', 'pathways_footer_widgets');

function pathways_footer_widgets(){
	register_widget('pathways_Footer_Widgets');
}

?>