<?php
/*
Template Name: Parallax Blog
*/
?>
<?php get_header(); ?>
	<?php ilgelo_post_author() ?>
	<?php ilgelo_post_slide() ?>

<div class="container-full">
	<div id="blog"><?php echo ilgelo_blogpx(0); ?></div>
	<div class="clear"></div>
	<div style="display:none" id="blog-wait">
		<center><i class="fa fa-refresh fa-spin"></i></center>
	</div>
	<div class="load_more_post textaligncenter" id="blog-loadmore">
		<a class="button_cont  button_large" style="margin-top: 40px; margin-bottom: 30px;" href="javascript:ilgelo_blogpx_loadMore();">
			<?php echo __("VIEW MORE", "ilgelo"); ?>
		</a>
	</div>
</div><!--  .container -->

<script type="text/javascript">
	var _pagbs = 1;
	function ilgelo_blogpx_loadMore() {
		_pagbs+=1;
		jQuery("#blog-wait").css("display","block");
		jQuery("#blog-loadmore").css("display","none");
		jQuery.ajax({
			url: "<?php echo site_url()?>/wp-admin/admin-ajax.php",
			type:"POST",
			data: "action=ilgelo_blogsscrollpx&page_no="+_pagbs,
			success: function(html){
				jQuery("#blog-wait").css("display","none");
				if (html.trim()!="") {
					jQuery("#blog").append(html);
					jQuery("#blog-loadmore").css("display","block");
				}
				jQuery(document).ready(function(){
					jQuery(".parallax-element").parallax();
					jQuery(window).trigger("resize");
				});
			}
		});
	}
	//jQuery(".parallax-element").parallax();
</script>


<?php get_footer(); ?>