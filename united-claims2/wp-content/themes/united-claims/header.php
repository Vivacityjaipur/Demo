<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title('| ', true, 'right'); ?></title>
<!-- Mobile Specific Metas & Favicons -->
<?php global $minti_data; ?>
<?php if($minti_data['switch_zoom'] == 0) { ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"><?php } else { ?><meta name="viewport" content="width=1200" /><?php } ?>
<?php if(isset($minti_data['media_favicon']['url']) && ($minti_data['media_favicon']['url'] != "")) { ?><link rel="shortcut icon" href="<?php echo esc_url($minti_data['media_favicon']['url']); ?>"><?php } ?>
<?php if(isset($minti_data['media_favicon_iphone']['url']) && ($minti_data['media_favicon_iphone']['url'] != "")) { ?><link rel="apple-touch-icon" href="<?php echo esc_url($minti_data['media_favicon_iphone']['url']); ?>"><?php } ?>
<?php if(isset($minti_data['media_favicon_iphone_retina']['url']) && ($minti_data['media_favicon_iphone_retina']['url'] != "")) { ?><link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url($minti_data['media_favicon_iphone_retina']['url']); ?>"><?php } ?>
<?php if(isset($minti_data['media_favicon_ipad']['url']) && ($minti_data['media_favicon_ipad']['url'] != "")) { ?><link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url($minti_data['media_favicon_ipad']['url']); ?>"><?php } ?>
<?php if(isset($minti_data['media_favicon_ipad_retina']['url']) && ($minti_data['media_favicon_ipad_retina']['url'] != "")) { ?><link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url($minti_data['media_favicon_ipad_retina']['url']); ?>"><?php } ?>
<!-- WordPress Stuff -->
<?php wp_head(); ?>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-79962314-1', 'auto');
  ga('send', 'pageview');
</script>
<meta name="google-site-verification" content="4XtdvM33LoO1NuV3fMfdalcrWxN4JhXupz5CS49KpFg" />
<!-- END Google Analytics -->

</head>

<body <?php body_class('smooth-scroll'); ?>>

	<div class="site-wrapper <?php if($minti_data['select_layoutstyle'] == 'boxed') { echo 'boxed-layout'; } else { echo 'wrapall'; } ?>">

	<?php
	if (get_post_meta( get_the_ID(), 'minti_header', true ) != 'hide') {
		// Include Header
		if($minti_data['header_layout']) {
			get_template_part( 'framework/inc/headers/header-'.$minti_data['header_layout'] );
		} else {
			get_template_part('framework/inc/headers/header-v1.php');
		}

		// Include Titlebar
		//get_template_part( 'framework/inc/titlebar' );
	}
	?>
	<script>
jQuery(document).ready(function(){
  jQuery('.ppsPopupShell').css({
    'left': '0px'
  });
})
</script>
