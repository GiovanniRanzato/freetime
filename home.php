<?php
get_header();
if (have_posts()) { ?>
    <?php echo get_template_part("template-parts/hero-section"); ?>
    <main class="cs-main">
        <div class="container cs-main-container">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-8">
                        <div>
                            <?php while (have_posts()) {
                                the_post();
                                echo get_template_part("template-parts/article-preview");
                            } ?>
                        </div>

                        <div>
                            <?php while (have_posts()) {
                                the_post();
                                echo get_template_part("template-parts/article-preview");
                            } ?>
                        </div>
                        <div class="cs-pagination">
                            <?php previous_posts_link(); ?>
                            <?php next_posts_link(); ?>
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