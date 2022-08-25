
    <footer class="cs-footer">
        <div class="cs-footer-main cs-container">
            <div class="cs-footer-container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 cs-nav-footer-container">
                        <h4>Ultimi articoli</h4>
                        <ul class="cs-nav-footer">
                            <li class="cs-nav-footer-item"><a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li class="cs-nav-footer-item"><a href="">Lorem ipsum dolor sit.</a></li>
                            <li class="cs-nav-footer-item"><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li class="cs-nav-footer-item"><a href="">Lorem ipsum dolor sit amet.</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 cs-nav-footer-container">
                        <h4>Categorie</h4>
                        <?php wp_nav_menu( array(
                            "theme_location" => "category",
                            "menu_class" => "cs-nav-footer",
                        )); ?>
                        <ul class="cs-nav-footer">
                            <li class="cs-nav-footer-item cs-color-1"><i class="fas fa-gamepad"></i><a href="" >Games</a></li>
                            <li class="cs-nav-footer-item cs-color-2"><i class="fas fa-book-open"></i><a href="">Books</a></li>
                            <li class="cs-nav-footer-item cs-color-3"><i class="fas fa-film"></i><a href="">Movie</a></li>
                            <li class="cs-nav-footer-item cs-color-4"><i class="fas fa-dice"></i><a href="">Tabletop</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 cs-nav-footer-container">
                        <h4>Social</h4>
                        <?php wp_nav_menu( array(
                            "theme_location" => "social",
                            "menu_class" => "cs-nav-footer",
                        )); ?>
                        <ul class="cs-nav-footer">
                            <li class="cs-nav-footer-item cs-color-fb"><i class="fab fa-facebook-square"></i><a href="">facebook</a></li>
                            <li class="cs-nav-footer-item cs-color-in"><i class="fab fa-instagram"></i><a href="">instagram</a></li>
                            <li class="cs-nav-footer-item cs-color-yt"><i class="fab fa-youtube"></i><a href="">youtube</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 cs-nav-footer-container ">
                        <div class="cs-footer-logo-container">
                            <div>
                                <h4>Cerca</h4>
                                <form action="#" method="post">
                                    <div class="cs-inline-text-input">
                                        <input type="text" placeholder="cerca...">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="cs-footer-logo mt-5">
                                <a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo TEMPLATE_URI ?>media/logo.png" alt="logo" /></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="cs-footer-bottom ">
            <div class="cs-container cs-footer-container">
                <div>Copyright <?php echo date("Y") ?> © Freetime</div>
                <div><a href="#">Privacy policy</a> - <a href="#">Cookie policy</a></div>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
    </body>
</html>