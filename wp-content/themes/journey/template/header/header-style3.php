<!-- ========================================
     Video Background
========================================-->


<!--<div style="background:url('<?php echo esc_url($ilgelo_options['ilgelo-video-image']['url']); ?>');">-->
	<div id="video_bg" style="width:100%;height:<?php echo esc_attr($ilgelo_options['ilgelo-video-bg-height']); ?>px;"
	 data-vide-bg="mp4: <?php echo  preg_replace('/\\.[^.\\s]{3,4}$/', '', $ilgelo_options['ilgelo-video-mp4']['url']);?>,
	  webm: <?php echo  preg_replace('/\\.[^.\\s]{3,4}$/', '', $ilgelo_options['ilgelo-video-webm']['url']);?>,
	  ogv: <?php echo  preg_replace('/\\.[^.\\s]{3,4}$/', '', $ilgelo_options['ilgelo-video-ogv']['url']);?>,
	  poster: <?php echo  preg_replace('/\\.[^.\\s]{3,4}$/', '', $ilgelo_options['ilgelo-video-image']['url']);?>"
	 data-vide-options="position: 0% 50%">

		<!--<span class="section_mask" style="background-color: <?php echo  $ilgelo_options['ilgelo-color-video-mask']?>; opacity: <?php echo  $ilgelo_options['ilgelo-opacity-video-mask']?>;"></span>-->

		 <?php  include(TEMPLATEPATH."/template/header/header-logo.php"); ?>

	</div>
<!--</div>-->