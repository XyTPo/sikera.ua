    
<?php include( locate_template( 'img/spritesvg.svg', false, false ) );  ?>
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