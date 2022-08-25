<?php
get_header(); ?>
    <?php echo get_template_part("template-parts/hero-section"); ?>
    <main class="cs-main">
        <div class="container cs-main-container">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-8">      
                        <div class="cs-article">
                            <?php the_content() ?>
                            <div>
                            <?php

                            if (have_rows("plus")) {
                                while (have_rows("plus")) { the_row()?>
                                    <p>GGGG</p>
                            <?php
                                }
                            } ?>
                        </div>
                        </div>
                        <div class="cs-pagination">
                            <?php previous_post_link( '%link', '<i class="fas fa-chevron-left"></i> Articolo precedente' ); ?>
                            <?php next_post_link( '%link', 'Articolo sucessivo <i class="fas fa-chevron-right"></i>' ); ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?>

