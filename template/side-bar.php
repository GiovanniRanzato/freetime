<?php /* Template Name: side bar template */ ?>
<?php
$args = array(
    "isArticle" => true,
    "title" => "Lorem ipsum dolor sit amet!!",
    "imgcover" => TEMPLATE_URI . "media/bg_article.jpg"
);
get_header(null, $args);
if (have_posts()) { ?>
    <?php echo get_template_part("template-parts/hero-section"); ?>
    <main class="cs-main">
        <div class="cs-container cs-main-container">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cs-main-contents">
                            <?php the_content() ?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>
<?php get_footer(); ?>