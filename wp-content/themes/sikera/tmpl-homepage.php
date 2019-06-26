<?php 
/* Template Name: Homepage Template */ 
get_template_part( 'mobiledetect' ); 
$isMob = new Mobile_Detect;
$isMob =  $isMob->isMobile();
$bodydetectClass = ( $isMob )?"mob-l":"pc-l";
$template_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

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
                <a href="#" class="button">
                    <span class="button__content">
                        продукція
                    </span>
                    <span class="button__arrow"></span>
                </a>
                <div class="ls-stscreen__mouse">                    
                    <svg  class="ls-stscreen__mouse-svg">
                        <use xlink:href="#mouse-scroll"></use>
                    </svg>
                    <div  class="ls-stscreen__mouse-arrow"></div>
                    <div  class="ls-stscreen__mouse-text">scroll</div>
                </div>
            </div>
        </div>
    </div>  
    <div class="ls-about">
        <div class="c-box ls-about__c-box">                            
            <img class="ls-about__tophex" src="<?php echo $template_url;?>/img/hexagon-1.png">
            <div class="ls-about__col ls-about__content">
                <div class="ls-about__content-inner">
                    <div class="ls-about__title">
                        сікера
                    </div>
                    <div class="ls-about__text">
                        медовий напій природного бродіння без додавання спирту. Це результат точно вивіреного рецепту та виключної якості власної, натуральної сировини. За допомогою солодкого, наповненим сонцем меду та соковитих плодів ми створюємо оригінальний напій. Ви шукаєте витончений аромат ягід та фруктів у вині? У сікері вони є!
                    </div>
                </div>
            </div>
            <div class="ls-about__col ls-about__image" style="background-image: url(<?php echo $template_url; ?>/img/ls-about-img.jpg)"></div>
        </div>
    </div>
    <div class="ls-spec">
        <div class="c-box ls-spec__c-box">
            <img class="ls-spec__tophex" src="<?php echo $template_url;?>/img/hexagon-2.png">
            <div class="ls-spec__label">
                Чим ми займаємося
            </div>
            <div class="ls-spec__cols-wrap">
                <div class="ls-spec__cols-item">
                    <div class="ls-spec__cols-item-inner">
                        <div class="ls-spec__cols-img">
                            <img class="fits" src="<?php echo $template_url;?>/img/spec-i1.png">
                        </div>
                        <div class="ls-spec__cols-title">
                            Плоди
                        </div>
                        <div class="ls-spec__cols-text">
                            Вирощуємо соковиті ягоди та фрукти в екологічно чистій місцевості, вдалечині від забрудненого міста
                        </div>
                    </div>
                </div>
                <div class="ls-spec__cols-item">
                    <div class="ls-spec__cols-item-inner">
                        <div class="ls-spec__cols-img">
                            <img class="fits" src="<?php echo $template_url;?>/img/spec-i2.png">
                        </div>
                        <div class="ls-spec__cols-title">
                            Мед
                        </div>
                        <div class="ls-spec__cols-text">
                            Бережно, з любов’ю<br> збираємо ароматний, найякісніший мед
                        </div>
                    </div>
                </div>
                <div class="ls-spec__cols-item">
                    <div class="ls-spec__cols-item-inner">
                        <div class="ls-spec__cols-img">
                            <img class="fits" src="<?php echo $template_url;?>/img/spec-i3.png">
                        </div>
                        <div class="ls-spec__cols-title">
                            Лабораторія
                        </div>
                        <div class="ls-spec__cols-text">
                            Проводимо лабораторні аналізи та контролюємо якість на кожному етапі виробництва
                        </div>
                    </div>
                </div>
                <div class="ls-spec__cols-item">
                    <div class="ls-spec__cols-item-inner">
                        <div class="ls-spec__cols-img">
                            <img class="fits" src="<?php echo $template_url;?>/img/spec-i4.png">
                        </div>
                        <div class="ls-spec__cols-title">
                            Продукт
                        </div>
                        <div class="ls-spec__cols-text">
                            Виготовляємо винятковий продукт, сповнений натхнення, пристрасті та неймовірної віри в те, що ми робимо!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ls-goods">
        <div class="c-box ls-goods__c-box">
            <div class="ls-goods__c-box-inner">
                <img class="ls-goods__tophex" src="<?php echo $template_url;?>/img/hexagon-3.png">
                <div class="ls-goods__label">
                    <div class="ls-goods__label-inner">
                        наша продукція
                    </div>
                </div>
                <div class="ls-goods__slider-wrap">
                    <div class="ls-goods__slider-block owl-carousel">
                        <?php
                            $indexGoodsArg = array(
                                'post_type'      => 'goods',
                                'posts_per_page' =>  -1,
                                'order'          => 'DESC',
                                'orderby'        => 'date',
                            );						
                            $indexGood = new WP_Query( $indexGoodsArg );	
                            $indexGoodCounter = 0;		
                            if ( $indexGood->have_posts() ) :  while ( $indexGood->have_posts() ) : $indexGood->the_post(); 
                            $attachmenturl = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                            $attachmenturl = ($attachmenturl) ? $attachmenturl[0] : get_template_directory_uri().'/img/nophoto.jpg';
                            $indexGoodCounter++?>				
                            
                        <a class="ls-goods__slider-item" href="<?php the_permalink(); ?>">
                            <img src="<?php echo $attachmenturl; ?>">	
                        </a>
                        <?php endwhile; endif; wp_reset_query(); ?>	
                    </div>
                </div>
                <div class="ls-goods__allbtn">
                    <div class="ls-goods__allbtn-inner">
                        <a href="#" class="button">
                            <span class="button__content">
                                продукція
                            </span>
                            <span class="button__arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ls-news">
        <div class="c-box ls-news__c-box">                            
            <img class="ls-news__tophex" src="<?php echo $template_url;?>/img/hexagon-3.png">
            <div class="ls-news__title">
                новини
            </div>
            <div class="ls-news__block clearfix">
                <?php
                $indexNewsArg = array(
                    'post_type'      => 'news',
                    'posts_per_page' =>  5,
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                );						
                $indexNews = new WP_Query( $indexNewsArg );	
                $indexNewsCounter = 0;		
                if ( $indexNews->have_posts() ) :  while ( $indexNews->have_posts() ) : $indexNews->the_post(); 
                $attachmenturl = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                $attachmenturl = ($attachmenturl) ? $attachmenturl[0] : get_template_directory_uri().'/img/nophoto.jpg';
                $indexNewsCounter = 0;		
                $indexServiceCounter++?>	
            
                <div class="ls-news__item">
                    <div class="ls-news__item-inner" style="background-image: url(<?php echo $attachmenturl; ?>)">
                        <div class="ls-news__ct">
                            <a href="<?php the_permalink(); ?>" class="ls-news__ct-inner ddd">
                                <div class="ls-news__ct-block">
                                    <div class="ls-news__ct-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="ls-news__ct-text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>	
                <div class="ls-news__item">
                    <div class="ls-news__item-inner" style="background-image: url(<?php echo $template_url;?>/img/news-all.jpg)">
                        <div class="ls-news__ct ls-news__ct-allnews">
                            <a class="ls-news__ct-inner ddd">
                                <div class="ls-news__ct-block">
                                    <div class="ls-news__ct-allnews-title">
                                        <span class="ls-news__ct-allnews-content">всі новини</span>
                                        <span class="ls-news__ct-allnews-arrow"></span>
                                    </div>                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ls-form">
        <div class="c-box ls-form__c-box"> 
            <img class="ls-form__tophex" src="<?php echo $template_url;?>/img/hexagon-1.png">
            <div class="ls-form__lcol">                      
                <div class="ls-form__form-wrap styled-forms">                      
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Contact form"]'); ?>
                </div>
            </div>
            <div class="ls-form__rcol">
                <div class="ls-form__title">
                    будемо ближчі
                </div>
                <div class="ls-form__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    of the highest class
                </div>
                <div class="ls-form__einfo">
                    <div class="ls-form__einfo-title">
                        адреса
                    </div>
                    <div class="ls-form__einfo-text">
                        07401<br>
                        м.Бровари, вул.Дмитра Янченка, 2
                    </div>
                </div>
                <div class="ls-form__einfo">
                    <div class="ls-form__einfo-title">
                        Телефон
                    </div>
                    <div class="ls-form__einfo-text">
                        +38(097)683-7904
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include( locate_template( 'footer.php', false, false ) );  ?>
</div>
</body>
</html>
