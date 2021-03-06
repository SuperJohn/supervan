	<div class="container-full">
		<div class="container container_up margin-40">
			<div class="row">
				<div class="col-md-12">
					<div class="container_fluid xsmall_padding category_bg  margin-20">
						<div class="textaligncenter title_category">
							<span><?php echo __("Browsing Category", "ilgelo"); ?></span>
					     </div><!-- End .container_fluid -->
						<h2 class="textaligncenter title_category">
							<?php
								if ( is_category() ) :
									single_cat_title();
								endif;
							?>
						</h2>
					</div><!-- End .container_fluid -->
					<?php
						$paged = ilgelo_getpage();
						$custom_args = array(
							'post_type' => 'post',
							'posts_per_page' => get_option('posts_per_page'),
							'paged' => $paged,
							'cat' => get_query_var('cat')
						);

						echo ilgelo_createtemplate(TEMPLATE_BLOG_CLASSIC_FULL, $custom_args)
					?>
				</div><!--  END col-md-9 -->
			</div><!--  .row -->
		</div><!--  .container -->
	</div><!--  .container-full -->