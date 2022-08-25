<?php
get_header();
if (have_posts()) { 
    the_post();  ?>
    <?php echo get_template_part("template-parts/hero-section"); ?>
    <main class="cs-main">
        <div class="container cs-main-container">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-8">      
                        <div class="cs-article">
                            <?php the_content() ?>
                            <div class="cs-article-preview-contents-info-tags cs-tags mt-3"><?php the_tags("", " ") ?></div>
                        </div>
                        <!-- COMMENTS -->
                        <?php if(comments_open( ) || get_comments_number() ) {
                            comments_template();
                        } ?>
                        <!-- END COMMENTS -->
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
<?php } else {  ?>
    <div>
        NO DATA FOUND!
    </div>
<?php }   ?>
<?php get_footer() ?>