<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="google-site-verification" content="fxjwtU2Zb1Xw4FSZouVU64y-0VVDA8jbd20XSDEzfGs" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PTNX8WS');</script>
	<!-- End Google Tag Manager -->
	<!-- Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-41138567-10"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-41138567-10');
	</script>
	<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1251260205326229');
  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1251260205326229&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNX8WS"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>

	<div class="site-wrapper">

		<div class="hover_overlay_body"></div>

		<?php if (get_post_meta( getbowtied_page_id(), 'header_meta_box_check', true ) != 'off'): ?>

			<?php if ( 1 == GBT_Opt::getOption('topbar_toggle') ) : ?>
				<?php get_template_part( 'template-parts/headers/header-topbar' ) ?>
			<?php endif; ?>

			<?php get_template_part( 'template-parts/headers/header', GBT_Opt::getOption('header_template') ) ?>

			<div class="sticky_header_placeholder">

				<?php if ( ( 1 == GBT_Opt::getOption('header_sticky_topbar') ) && ( 1 == GBT_Opt::getOption('topbar_toggle') ) ) : ?>

					<?php get_template_part( 'template-parts/headers/header-topbar' ) ?>

				<?php endif; ?>

				<?php if ( 1 == GBT_Opt::getOption('header_sticky_visibility') ) : ?>

					<?php if (GETBOWTIED_WOOCOMMERCE_IS_ACTIVE) { ?>

						<?php if ( is_single() && !is_product() ) { ?>

							<?php get_template_part( 'template-parts/headers/header-sticky-blog' ) ?>

						<?php } elseif ( is_product() ) { ?>

							<?php get_template_part( 'template-parts/headers/header-sticky-product' ) ?>

						<?php } else { ?>

							<?php //get_template_part( 'template-parts/headers/header-sticky') ?>
							<?php get_template_part( 'template-parts/headers/header-sticky', GBT_Opt::getOption('header_template') ) ?>

						<?php } ?>

					<?php } else { ?>

						<?php if ( 'post' == get_post_type() ) { ?>

							<?php get_template_part( 'template-parts/headers/header-sticky-blog' ) ?>

						<?php } else { ?>

							<?php //get_template_part( 'template-parts/headers/header-sticky') ?>
							<?php get_template_part( 'template-parts/headers/header-sticky', GBT_Opt::getOption('header_template') ) ?>

						<?php } ?>

					<?php } ?>

				<?php endif; ?>

			</div>

			<?php get_template_part( 'template-parts/headers/header-mobiles' ) ?>

		<?php endif; ?>

		<div class="site-content-wrapper">
