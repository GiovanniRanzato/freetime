<?php 
$args = array(
    "isArticle" => false,
    "title" => "Lorem ipsum dolor sit amet!!",
    "caption" => "Lorem ipsum dolor sit amet!!"
);
get_header(null, $args);
?>
<div class="cs-container cs-main-container">
    <div class="cs-main-contents">
    <h2>Titolo livello 2</h2>
        <h3>Titolo livello 3</h3>
        <h4>Titolo livello 4</h4>
        <h5>Titolo livello 5</h5>
        <h6>Titolo livello 6</h6>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur, cumque, dolor dolores excepturi iste laudantium nostrum officia quisquam quo rem, veniam. Animi asperiores impedit ipsam porro quaerat quasi qui.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga officiis praesentium suscipit tempore vel. Accusantium ad, at autem consequuntur delectus dicta itaque, nobis nostrum odit officia quia quo reprehenderit temporibus!</p>

        <p><a href="#" class="cs-btn">Pulsante</a></p>
        <div class="cs-bg-color-1 p-3">
            <a href="#" class="cs-btn cs-btn-inverse">Pulsante inverso</a>
        </div>
        <div class="cs-bg-color-2 p-3">
            <a href="#" class="cs-btn cs-btn-inverse">Pulsante inverso</a>
        </div>
        <div class="cs-bg-color-3 p-3">
            <a href="#" class="cs-btn cs-btn-inverse">Pulsante inverso</a>
        </div>
        <div class="cs-bg-color-4 p-3">
            <a href="#" class="cs-btn cs-btn-inverse">Pulsante inverso</a>
        </div>

        <p><a href="#" class="cs-link">Testo con link</a></p>

        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias eaque iure magni tempore. At consequatur, culpa debitis, deleniti dignissimos distinctio exercitationem explicabo fuga magni nulla quam saepe sed similique.</p>
        </blockquote>

        <ul>
            <li>Elemento lista</li>
            <li>Elemento lista</li>
            <li>Elemento lista</li>
        </ul>

        <ol>
            <li>Elemento lista</li>
            <li>Elemento lista</li>
            <li>Elemento lista</li>
        </ol>
    </div>
</div>
<?php get_footer() ?>

