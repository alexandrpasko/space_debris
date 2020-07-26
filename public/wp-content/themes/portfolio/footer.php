        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Alexandr Pasko 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <!-- social media icons -->
                        <?php wp_nav_menu(['menu' => 'sm-nav']) ?>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <!-- footer links -->
                        <?php wp_nav_menu(['menu' => 'footer-nav']) ?>
                    </div>
                </div>
            </div>
        </footer>      

        <?php wp_footer(); ?>
    </body>
</html>
