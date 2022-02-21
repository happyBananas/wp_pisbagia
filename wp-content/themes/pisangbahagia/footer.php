
    <footer class="container full cont-bot bg-doff">
        <div class="footer">
            <div class="foot-content">
                <p class="ft copyright">&#169; 2020 PisangBahagia.com</p>
                <p class="ft copyright">All Rights Reserved</p>
            </div>
            <div class="foot-content">
                <?php
                    $menu = array(
                        'menu' => 'footer',
                        'menu_class' => 'footer-static-sites',
                        'theme_location' => 'footer_menu',
                        'echo' => true
                    );
                    wp_nav_menu( $menu );
                ?>

            </div>
        </div>
    </footer>

    <div class="modal-search">
        <button class="btn-close-modal-top" type="button">
            <i class="fa fa-close"></i>
        </button>
        <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" name="s" class="input-search-top" placeholder="Cari Disini..."/>
        </form>
    </div>

    <div class="modal-loading show">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <button type="button" aria-label="Button Scroll top Top" class="btn-sroll-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>

    <?php wp_footer(); ?>
</body>
</html>