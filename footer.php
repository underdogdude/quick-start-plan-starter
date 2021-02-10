    <!--#content-->
    <aside id="footbar" class="site-footbar">
        <div class="s-container footer-1">
            <?php dynamic_sidebar( 'footbar' ); ?>
        </div>
        <div class="footer-2">
            <div class="s-container">
                <div class="-inner">
                    <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/PJ-media.svg" alt="' . get_the_title() . '" />';
                    ?>
                    <?php
                        $menus = wp_get_nav_menu_items('Main Menu'); 
                        if($menus) { 
                            echo '<ul class="footer-nav">';
                            foreach( $menus as $menu ) {
                                if( $menu->menu_item_parent == 0 ) {
                                    echo '<li><a href="' . $menu->url . '" class="title">' . $menu->title . '</a></li>';
                                }
                            }
                            echo '</ul>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </aside>
    <div class="site-footer-space"></div>
        <footer id="colophon" class="site-footer">
            <div class="s-container">
                <div class="site-info">
                    Copyright &copy; <?php echo date("Y"); ?><strong> Philip James</strong>. All Rights Reserved.
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