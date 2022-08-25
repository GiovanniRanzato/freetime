<?php
get_header();
if (have_posts()) { ?>
    <?php echo get_template_part("template-parts/hero-section"); ?>
    <main class="cs-main">
        <div class="container cs-main-container">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-8">  
                    <?php 
                        $args = array(
                            "post_type" => "post",
                            "posts_per_page" => 3,
                            "order" => "DESC",
                            "orderby" => "date",
                        );

                        $loop = new WP_Query($args); 
                        if ( $loop->have_posts() ) { 
                            while(  $loop->have_posts() ) {
                                $loop->the_post();
                                echo get_template_part("template-parts/video-preview");
                            }
                        }
                        wp_reset_query();
                        wp_reset_postdata();
                        ?>    
                        <?php 
                        $args = array(
                            "post_type" => "post",
                            "posts_per_page" => 3,
                            "order" => "DESC",
                            "orderby" => "date",
                        );

                        $loop = new WP_Query($args); 
                        if ( $loop->have_posts() ) { 
                            while(  $loop->have_posts() ) {
                                $loop->the_post();
                                echo get_template_part("template-parts/article-preview");
                            }
                        }
                        wp_reset_query();
                        wp_reset_postdata();
                        ?>   
                        <div>
                            <?php 
                            // while (have_posts()) { 
                                //the_post(); 
                                //echo get_template_part("template-parts/article-preview");
                            //} ?> 
                        </div> 
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