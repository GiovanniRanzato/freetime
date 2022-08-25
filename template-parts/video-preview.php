<div class="cs-video-card">
    <div class="cs-card">
        <div class="cs-categories">
            <?php the_category(" | ") ?>
        </div>
        <div class="cs-video-media">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo TEMPLATE_URI ?>media/bg_article.jpg" alt="default post thumbnail" />
            <?php } ?>
        </div>
        <div class="cs-card-body">
            <div class="cs-article-preview">
                <div class="cs-article-preview-info">
                    <!-- <div class="cs-article-preview-author cs-desktop-only">
                        <?php echo get_avatar(get_the_author_meta('ID')); ?>
                    </div> -->
                    <ul class="cs-article-preview-info-authordatetime">
                        <li class="cs-article-preview-info-author"><i class="fas fa-at"></i> <?php echo get_the_author_link() ?></li>
                        <li class="cs-article-preview-info-date"><i class="fas fa-calendar-week"></i> <?php echo get_the_date() ?> <i class="fas fa-clock"></i> <?php the_time() ?></li>
                    </ul>
                </div>
                <div class="cs-article-preview-contents">
                    <a href="<?php echo get_the_permalink() ?>">
                        <h3 class="cs-article-preview-contents-title"><?php the_title() ?></h3>
                    </a>
                    <div class="cs-article-preview-contents-text">
                        <?php
                        the_excerpt();
                        ?>
                    </div>
                    <div class="cs-article-preview-contents-info-tags cs-tags"><?php the_tags("", " ") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>