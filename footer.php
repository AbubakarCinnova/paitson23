<footer class="full-row">

    <footer class="full-row main-footer text-white">
        <div class="container">
            <div class="col-md-5 col-sm-12 col-xs-12 footer-item">

                <h3>About Us</h3>
                <p><img src="<?php echo $base_url ?>/img/footer-logo.png" width="150"></p>
                <p class="light">"When brothers Bob and Stanley Paitson started their heating and hardware business in
                    1922, they had no idea the impact their small business would have on generations of Wabash Valley
                    homes and businesses... "</p>

            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 footer-item">
                <h3>Service Areas</h3>
                <ul class="footer-list" style="display: flex; flex-wrap: wrap;">
                    <div class="item-list-inner">
                        <li><a href="<?php echo $base_url ?>/service-area/terre-haute-Indiana.php">- Terre Haute</a>
                        </li>
                        <li><a href="<?php echo $base_url ?>/service-area/clinton-indiana.php">- Clinton</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/dana-indiana.php">- Dana</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/rockville-indiana.php">- Rockville</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/brazil-indiana.php">- Brazil</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/clay-city.php">- Clay City</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/linton-indiana.php">- Linton</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/jasonville-indiana.php">- Jasonville</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/sullivan-indiana.php">- Sullivan</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/greencastle-indiana.php">- Greencastle</a>
                        </li>
                    </div>
                    <div>

                        <li><a href="<?php echo $base_url ?>/service-area/robinson-illinois.php">- Robinson</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/casey-illinois.php">- Casey</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/marshall-illinois.php">- Marshall</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/paris-illinois.php">- Paris</a></li>

                        <li><a href="<?php echo $base_url ?>/service-area/chrisman-illinois.php">- Chrisman</a></li>

                    </div>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 footer-item">
                <h3 class="contact-footer">Contact Us</h3>
                <p><strong>Address:</strong> <br>
                    1200 Wabash Avenue, <br> Terre Haute,<br> Indiana 47807,<br> customerservice@paitson.com <br>
                    (812) 232-2347</p>
                <p><a href="<?php echo $base_url ?>/privacy.php">Terms of Service and Privacy Policy</a></p>
                <!--  <p><a href="https://www.facebook.com/888797jack/" class="facebook-icon current">facebook </a></p> -->

            </div>


            </ul>
        </div>
        </div>
    </footer>

    <footer class="full-row mini-footer">
        <div class="container">

            <div class="text-center col-xs-12 footer-item copyrights text-muted">
                <p>Copyright All Rights Reserved.</p>
            </div>

        </div>
    </footer>
</footer>


<script>
window.jQuery || document.write('<script src="<?php echo $base_url ?>/js/jquery-1.11.3.min.js"><\/script>')
</script>

<!-- Bootstrap JS -->
<script src="<?php echo $base_url ?>/js/bootstrap/bootstrap.min.js"></script>

<!-- Lightbox JS -->
<!-- <script src="<?php echo $base_url ?>/js/bootstrap-lightbox3/ekko-lightbox.min.js"></script> -->

<!-- Datetimepicker JS -->
<!-- <script src="<?php echo $base_url ?>/js/moment.js"></script>
<script src="<?php echo $base_url ?>/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script> -->

<!-- Owl Carousel JS -->
<script src="<?php echo $base_url ?>/js/owlcarousel/owl.carousel.min.js"></script>


<!-- Custom JS -->
<script src="<?php echo $base_url ?>/js/plugins.js"></script>
<script src="<?php echo $base_url ?>/js/main.js"></script>

<script>
jQuery(document).ready(function($) {
    /*    var owl = $("#owl-demo");

       owl.owlCarousel({
           items: 3, //10 items above 1000px browser width
           itemsDesktop: [1000, 3], //5 items between 1000px and 901px
           itemsDesktopSmall: [900, 2], // betweem 900px and 601px
           itemsTablet: [600, 1], //2 items between 600 and 0
           itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
           autoPlay: 3000, //Set AutoPlay to 3 seconds
       }); */


    var test = $("#testmonial");

    test.owlCarousel({
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1000, 1], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 1], // betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        autoPlay: 3000, //Set AutoPlay to 3 seconds
    });


});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133676341-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-133676341-1');
  </script> -->
<script type="text/javascript">
jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {

    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

});
</script>

<script type="text/javascript">
$('.dropdown').hover(function() {

    $('.dropdown-toggle', this).trigger('click');
});
</script>

<script type="text/javascript">
jQuery('navbar-nav li').hover(function() {

    jQuery(this).find('.dropdown-menu').stop(true, true).show();

    jQuery(this).addClass('open');

}, function() {

    jQuery(this).find('.dropdown-menu').stop(true, true).hide();

    jQuery(this).removeClass('open');

});
</script>



</body>

</html>