<?php 

  $google_analytics_tracking_id = get_field( 'google_analytics_tracking_id', 'option' );
  $head_tags = get_field( 'head_tags', 'option' );

?>
<!DOCTYPE html>
<html class="u-h-full" <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="msapplication-tap-highlight" content="no">

<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="<?php bloginfo(); ?>">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo(); ?>">

<?php wp_head(); ?>

<?php if ( $google_analytics_tracking_id ) : ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $google_analytics_tracking_id; ?>"></script>
  <script>
    const gaId = '<?php echo $google_analytics_tracking_id; ?>';
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $google_analytics_tracking_id; ?>');
  </script>
<?php endif; ?>

<?php echo $head_tags ? $head_tags : ''; ?>

</head>

<body <?php body_class( 'js-body' ); ?>>

  <?php get_template_part( 'partials/global/header' ); ?>

  <section class="u-flex-1 u-py-40 md:u-py-80">