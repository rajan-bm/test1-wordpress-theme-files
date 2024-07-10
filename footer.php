<?php /**
 * 
 * Footer
 * 
 */ ?>
<div class="footer">
    <?php if(is_home() || is_front_page()): ?>
        <p class="footer__api">To Check <a href="<?php echo home_url(); ?>/lists"> CLick Here</a></p>      
    <?php endif; ?>
    <?php if(is_page()): ?>
        <p class="footer__api"> Return To <a href="<?php echo home_url() ;?>"> Home</a></p>      
    <?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>