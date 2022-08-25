<?php

$heroBgStyle = "background-image: url(".TEMPLATE_URI."media/bg_hero.png)";
if ( ( is_single() || is_page() ) && has_post_thumbnail() ) {
    $heroBgStyle = "background-image: url( ".get_the_post_thumbnail_url()." )";
}
?>

<section class="cs-hero">
    <div class="cs-hero-bg" style="<?php echo $heroBgStyle ?>"></div>
    <div class="cs-container cs-hero-container">
        <div class="cs-hero-contents">
            <!-- only for aricles -->
            <?php if (is_single() && has_category()) { ?>
                <div class="cs-hero-category cs-color-1">
                    <span class="cs-hero-category-icon"><i class="fas fa-gamepad"></i></span>
                    <span class="cs-hero-category-name"><?php the_category(" | ") ?></span>
                </div>
            <?php } ?>
            <!-- title (mandatory) -->
            <h1 class="cs-hero-title">
                <?php 
                    if(is_front_page()) bloginfo('title');  
                    else if(is_archive()) echo get_the_archive_title();
                    else if(is_search()) echo 'Risultati della ricerca: "'.get_search_query().'"';
                    else the_title();
                ?>
            </h1>
            <!-- bradcrums  -->
            <?php if (is_single() || is_page()) { ?>
                <div class="cs-hero-bradcrums-container">
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                </div>
            <?php } ?>
            <!-- title caption -->
            <?php if (is_front_page()) { ?>
                <div class="cs-hero-caption">
                    <?php bloginfo('description');  ?>
                </div>
            <?php } ?>
            <?php if (is_single()) { ?>
                <div class="cs-desktop-only">
                    <div class="cs-hero-article-info">
                        <div class="cs-hero-article-info-avatar"><?php echo get_avatar(get_the_author_meta('ID')); ?></div>
                        <div class="cs-hero-article-info-text">
                            <div class="cs-hero-article-info-text-author"><i class="fas fa-at"></i> <?php the_author_posts_link() ?></div>
                            <div class="cs-hero-article-info-text-date"><i class="fas fa-calendar-week"></i> <?php echo get_the_date() ?> <i class="fas fa-clock"></i> <?php the_time() ?></div>
                        </div>
                    </div>
                </div>
                <div class="cs-mobile-only">
                    <div class="cs-hero-article-info">
                        <div class="cs-hero-article-info-text">
                            <span class="cs-hero-article-info-text-author"><i class="fas fa-at"></i> <?php the_author_posts_link() ?></span>
                            <span class="cs-hero-article-info-text-date"><i class="fas fa-calendar-week"></i> <?php echo get_the_date() ?> <i class="fas fa-clock"></i> <?php the_time() ?></span>
                        </div>
                    </div>
                </div>
        </div>
    <?php } ?>
    </div>
</section>