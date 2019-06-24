
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