<?php 
$args = array(
    "isArticle" => false,
    "title" => "Maybe you take the wrong path...",
    "caption" => "... or maybe the server wasn't able to find the page you ask for",
    "imgcover" => TEMPLATE_URI."media/bg_notfound.jpeg",
);

get_header(null, $args);
get_footer();
