<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo(template_directory); ?>/color1.css" title="color1" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo(template_directory); ?>/color2.css" title="color2" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo(template_directory); ?>/color3.css" title="color3" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo(template_directory); ?>/color4.css" title="color4" />
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo(template_directory); ?>/favicon.ico" />
<script type="text/javascript" src="<?php bloginfo(template_directory); ?>/colorChooser.js"></script>

<!--[if !IE6]>
<style type="text/css">
/* PNG Transparency Fix */

#header {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader (src='<?php bloginfo(template_directory); ?>/images/header.png',sizingMethod='scale');
}

#footer {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader (src='<?php bloginfo(template_directory); ?>/images/footer.png',sizingMethod='scale');
}

#sidebar {
	margin:0 10px 0 0;
}

</style>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>
<body>

<div id="page">

<div id="header">
	<div class="bump">
		<h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		 <p><?php bloginfo('description'); ?></p>
	</div>
	
<div id="search">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
	
</div>
