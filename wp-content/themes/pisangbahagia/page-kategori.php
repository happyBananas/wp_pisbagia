<?php get_header(); ?>

    <div class="container main w-100">
        <div class="ft d-flex justify-content-center flex-wrap pt-3 pb-5 px-2">
            <?php
                $alphabet_sm = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' );
                foreach($alphabet_sm as $as):
            ?>
                <a class="mx-lg-1 mr-sm-1 ft-b-6 cl-doff hover-red" onclick="smoothScroll(event)" href="#cat-<?=$as?>"><?=strtoupper( $as );?></a>

            <?php endforeach;?>

        </div>

        <?php foreach($alphabet_sm as $as):?>

            <h1 class="ft-ro content-list-header" id="cat-<?=$as?>"><?=strtoupper( $as );?></h1>
            <div class="content-list d-flex flex-wrap">

                <?php foreach(get_categories() as $cat): ?>

                    <?php if( substr( $cat->name, 0, 1 ) == $as || substr( $cat->name, 0, 1 ) == strtoupper( $as ) ):?>

                        <div><a class="ft" href="<?=get_category_link($cat->cat_ID)?>">#<?=$cat->name?></a></div>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

    </div>

<?php get_footer(); ?>