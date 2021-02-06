
    <!--#content-->
    <aside id="footbar" class="site-footbar">
        <div class="s-container">
            <h1 class="site-footer-title">
                <?php echo get_bloginfo( 'name' ); ?>
            </h1>
            <div class="s-grid -d2">
                <?php dynamic_sidebar( 'footbar' ); ?>
            </div>
        </div>
    </aside>
    <div class="site-footer-space"></div>
        <footer id="colophon" class="site-footer">
            <div class="s-container">
                <div class="site-info">
                    Copyright &copy; <?php echo date("Y"); ?> Doctor Marketing by <a href="https://doctormarketingplus.com/" target="_blank" class="link">Philip James</a>. All Rights Reserved.
                </div>
            </div>
        </footer>
    </div>
<!--#page-->
</div>

<?php /* FOR SITE-MEMBER */ ?>
<div class="s-modal-bg"></div>
<?php if($GLOBALS['s_member_url'] != 'none') : ?>
<div class="s-modal s-modal-login" data-s-modal="site-login">
    <span class="s-modal-close"><?php seed_icon('x'); ?></span>
    <?php get_template_part( 'template-parts/account', 'login' ); ?>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>