
<footer class="footer">
    <div class="c-box footer__c-box">
        <div class="footer__logo">
            <a class="footer__logo-link" href="/">
                <img class="footer__logo-img fits" src="<?php echo $template_url;?>/img/logo.png">
            </a>
        </div>
        <div class="footer__links">
            <a class="footer__links-item" href="/">
                <span class="footer__links-icon">           
                    <svg  class="footer__links-icon-phone">
                        <use xlink:href="#si-phone"></use>
                    </svg>
                </span>
                <span class="footer__links-icon">
                    +38(097)683-7904
                </span>
            </a>
            <a class="footer__links-item" href="/">
                <span class="footer__links-icon">           
                    <svg  class="footer__links-icon-mail">
                        <use xlink:href="#si-mail"></use>
                    </svg>
                </span>
                <span class="footer__links-text">
                    office.honeyspas@gmail.com
                </span>
            </a>
            <a class="footer__links-item" href="/">
                <span class="footer__links-icon">           
                    <svg  class="footer__links-icon-instagram">
                        <use xlink:href="#si-instagram"></use>
                    </svg>
                </span>
            </a>
            <a class="footer__links-item" href="/">
                <span class="footer__links-icon">           
                    <svg  class="footer__links-icon-facebook">
                        <use xlink:href="#si-facebook"></use>
                    </svg>
                </span>
            </a>
        </div>
    </div>
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