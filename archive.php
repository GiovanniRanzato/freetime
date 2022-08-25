<?php
get_header();
if (have_posts()) { ?>
    <?php echo get_template_part("template-parts/hero-section"); ?>
    <main class="cs-main">
        <div class="container cs-main-container">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-8">
                        <?php if (is_archive() && strlen(trim( get_the_archive_description() )) > 0) { ?>
                            <div class="cs-article-card">
                                <div class="cs-card">
                                    <div class="cs-card-body">
                                        <?php the_archive_description(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php while (have_posts()) {
                            the_post();
                            echo get_template_part("template-parts/article-preview");
                        } ?>
                        <div class="cs-pagination">
                            <?php previous_posts_link("<span class='cs-btn cs-btn-inverse'><i class='fas fa-chevron-left'></i> Articoli precedenti</span>"); ?>
                            <!-- <?php the_posts_pagination() ?> -->
                            <?php next_posts_link("<span class='cs-btn cs-btn-inverse'>Articoli sucessivi <i class='fas fa-chevron-right'></i></span>"); ?>
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