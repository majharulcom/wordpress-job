<div class="et_pb_section  et_pb_section_0 et_section_regular blog-banner" style="background:url('<?php echo get_stylesheet_directory_uri();?>/img/blog-banner.jpg')">
	<div class=" et_pb_row et_pb_row_0">
		<div class="et_pb_column et_pb_column_4_4  et_pb_column_0">
			<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0">
			
				<?php if(is_single()) : ?>

				   <h2><?php the_title(); ?></h2>
				   
				<?php else : ?>
				
					<h2><?php esc_html_e('Musings Blog', ''); ?></h2>
					
				<?php endif; ?>
				
 			</div>
		</div>
	</div>
</div>