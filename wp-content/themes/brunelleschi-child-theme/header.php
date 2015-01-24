<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 lt-ie9 lt-ie8 lt-ie7" <?php echo language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 lt-ie9 lt-ie8" <?php echo language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 lt-ie9" <?php echo language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php echo language_attributes(); ?>> <!--<![endif]-->
	<head><meta name="p:domain_verify" content="7868edbdfe158a6611cf38e2b0499edf" >
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
		<title><?php brunelleschi_title(); ?></title>
		<?php
			$x_home=get_bloginfo('home');
			echo "<link rel=\"shortcut icon\" href=\"$x_home/favicon.ico\" type=\"image/vnd.microsoft.icon\" />\n";
			echo "<link rel=\"shortcut icon\" href=\"$x_home/favicon.ico\" type=\"image/x-icon\" />\n";
		?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<style type="text/css"> #wrapper { max-width: <?php echo brunelleschi_options('content-width'); ?>px !important;} </style>
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
		?>
		<style><?php if(brunelleschi_options('extra-css')){ echo brunelleschi_options('extra-css'); }?></style>
	</head>
	<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed container">
		<header id="header" class="row clearfix">
			<div style="text-align:center; width:960px; margin-left:auto; margin-right:auto;">
<img id="Image-Maps_7201302171749003" src="http://www.reallyrisa.com/wp-content/uploads/2013/02/reallyrisa_HEADER.jpg" usemap="#Image-Maps_7201302171749003" border="0" width="960" height="237" alt="" />
<map id="_Image-Maps_7201302171749003" name="Image-Maps_7201302171749003">
<area shape="rect" coords="261,199,311,222" href="http://www.reallyrisa.com/category/style/" alt="Style" title="Style"    />
<area shape="rect" coords="337,198,402,221" href="http://www.reallyrisa.com/category/recipes/" alt="Recipes" title="Recipes"    />
<area shape="rect" coords="425,199,490,222" href="http://www.reallyrisa.com/category/travel/" alt="Travel" title="Travel"    />
<area shape="rect" coords="512,199,551,222" href="http://www.reallyrisa.com/category/life/" alt="Life" title="Life"    />
<area shape="rect" coords="576,199,630,222" href="http://www.reallyrisa.com/about-risa/" alt="About Risa" title="About Risa"    />
<area shape="rect" coords="654,200,698,223" href="http://www.reallyrisa.com/faqs/" alt="FAQs" title="FAQs"    />
<area shape="rect" coords="10,10,953,178" href="http://www.reallyrisa.com" alt="Really Risa Home" title="Really Risa Home"    />
<area shape="rect" coords="958,235,960,237" href="http://www.image-maps.com/index.php?aff=mapped_users_7201302171749003" alt="Image Map" title="Image Map" />
</map>

</div>
<script type='text/javascript'>
(function(a,h,a_,l,o,g,y){ /* dev at 2014-01-20 17:01:02 +0000 */
window[a_]={c:o,b:g,u:l};var s=a.createElement(h);s.src=l,e=a.getElementsByTagName(h)[0];e.parentNode.insertBefore(s,e);
})(document,'script','_ahalogy','//w.ahalogy.com/',{client:"68243065972-reallyrisa"});
</script>
		</header><!-- #header -->
		<div id="container" class="row clearfix">