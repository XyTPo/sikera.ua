<?php 
/* Template Name: Homepage Template */ 
get_template_part( 'mobiledetect' ); 
$isMob = new Mobile_Detect;
$isMob =  $isMob->isMobile();
$bodydetectClass = ( $isMob )?"mob-l":"pc-l";
$template_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
<title><?php bloginfo( 'name' ); ?></title>

<meta name="description" content="<?php bloginfo( 'description ' ); ?>" />

<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" sizes="16x16">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon32.ico" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon32.png" sizes="32x32">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if($isMob){ ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php }else{ ?>
<meta name="viewport" content="width=1100">
<?php } ?>
<script>
	var isMob = <?php echo ( $isMob )?"true":"false";?>;
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class($bodydetectClass.' at-top'); ?>>
<div class="page-wrapper">    	
    <?php include( locate_template( 'header.php', false, false ) );  ?>
    <div class="ls-stscreen">
        <div class="c-box">
            <div class="ls-stscreen__title-wrap">
                <div class="ls-stscreen__title-1">
                    СІКЕРА
                </div>
                <div class="ls-stscreen__title-2">
                    СМАК ТИСЯЧОЛІТТЯ
                </div>
            </div>
        </div>
    </div>
    <div style="color: #fff">
    <svg  class="icon shape-codepen">
  <use xlink:href="#mouse-scroll"></use>
</svg>
    </div>    
    <?php include( locate_template( 'footer.php', false, false ) );  ?>
</div>
</body>
</html>
