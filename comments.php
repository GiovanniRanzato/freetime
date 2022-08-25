<?php 
// Verificare se l'articolo è protetto da password
if(post_password_required()) return;

?>

<div class="cs-card mt-4">
    <div class="cs-card-body">
        <h3>Commenti: <?php echo get_comments_number() ?></h3>
        <?php 
            if(have_comments()) { ?>
                <div class="cs-comment-list">
                <?php wp_list_comments(
                    array(
                        "style" => "div",
                        "avatar_size" => 100,
                        )
                    ); ?>
                </div>
        <?php } ?>
    </div>
    <div class="cs-card-body">
        <?php comment_form(
            array(
                "title_reply_before" => "<h3>",
                "title_reply_after" => "</h3>",
                "fields" => array(
                    "author" =>     '<div class="col-4">
                                        <div class="comment-form-author">
                                            <input type="text" name="author" placeholder="Nome (richiesto)">
                                        </div>
                                    </div>',
                    "email" =>      '<div class="col-4">
                                        <div class="comment-form-author">
                                            <input type="email" name="email" placeholder="Email (richiesto)">
                                        </div>
                                    </div>',
                    "url" =>        '<div class="col-4">
                                        <div class="comment-form-author">
                                            <input type="text" name="url" placeholder="Sito web">
                                        </div>
                                    </div>',
                    "comment" =>    '<div class="col-12">
                                        <div class="comment-textarea">
                                            <textarea name="comment" placeholder="Lascia qui il tuo commento..."></textarea>
                                        </div>
                                    </div>',
                    ),
                "class_form" => "row", 
                "class_submit" => "cs-btn"
                )
            ); ?>

    </div>
</div>
