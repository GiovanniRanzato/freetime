<div class="cs-sidebar cs-desktop-only">
    <div class="cs-widgets-container">
        <h4 class="mb-3">Cerca</h4>
        <?php echo get_search_form(); ?>
    </div>
    <div class="cs-widgets-container">
        <h4 class="mb-3">Categorie</h4>
        <ul class="cs-nav-footer">
            <li class="cs-nav-footer-item cs-color-1"><i class="fas fa-gamepad"></i><a href="">Games</a></li>
            <li class="cs-nav-footer-item cs-color-2"><i class="fas fa-book"></i><a href="">Books</a></li>
            <li class="cs-nav-footer-item cs-color-3"><i class="fas fa-film"></i><a href="">Movie</a></li>
            <li class="cs-nav-footer-item cs-color-4"><i class="fas fa-dice"></i><a href="">Tabletop</a></li>
        </ul>
    </div>
    <div>
        <h4 class="cs-widgets-container">Social</h4>
        <ul class="cs-nav-footer mb-0">
            <li class="cs-nav-footer-item cs-color-fb"><i class="fab fa-facebook-square"></i><a href="">facebook</a></li>
            <li class="cs-nav-footer-item cs-color-in"><i class="fab fa-instagram"></i><a href="">instagram</a></li>
            <li class="cs-nav-footer-item cs-color-yt"><i class="fab fa-youtube"></i><a href="">youtube</a></li>
        </ul>
    </div>

    <?php
    if (function_exists("dynamic_sidebar")) {
        dynamic_sidebar("sidebar-widgets");
    }
    ?>
</div>