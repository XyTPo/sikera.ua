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
	<header class="header">
		<div class="c-box header__box">
			<?php if($isMob){ ?>
			<div class="mobile-header-nav">
				<div class="mobile-cursection-lbl">
					<span>&nbsp;</span>
				</div>
				<div class="mobile-menu-trigger">
					<hr /><hr /><hr />
				</div>
				<div class="mobile-nextsection-trigger">&nbsp;</div>
			</div>
			<?php } ?> 
            <div class="header__logo">
                <a class="header__logo-link" href="/">
                    <img class="header__logo-img fits" src="<?php echo $template_url;?>/img/logo.png">
                </a>
            </div>
			<div class="header__nav">
                <div class="header__nav-inner">
                    <div class="header__nav-item">
                        <a class="header__nav-link" href="#">Продукція</a>
                    </div>
                    <div class="header__nav-item">
                        <a class="header__nav-link" href="#">Блог</a>
                    </div>
                    <div class="header__nav-item">
                        <a class="header__nav-link" href="#">Про компанію</a>
                    </div>
                    <div class="header__nav-item">
                        <a class="header__nav-link" href="#">Контакти</a>
                    </div>
                    <div class="header__nav-item langswitch">
                        <a class="header__nav-link langswitch__trigger" href="#">укр</a>
                        <div class="langswitch__select">
                            <div class="langswitch__select-item">
                                укр
                            </div>
                            <div class="langswitch__select-item">
                                рус
                            </div>
                            <div class="langswitch__select-item">
                                en
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</header>
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
    <footer>
        <?php
        wp_footer(); 
        ?>
    </footer>
    <script>
        jQuery( document ).ready(function($) {
            $('.langswitch__trigger').click(function(e){
                $(this).parents('.langswitch').toggleClass('show-lang-select');
                e.preventDefault();
            });
            $('.langswitch__select-item').click(function(e){
                $(this).parents('.langswitch').toggleClass('show-lang-select');
                e.preventDefault();
            });
        });
    </script>
</div>
</body>
</html>
