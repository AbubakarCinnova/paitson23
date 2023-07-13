<footer class="full-row">

    <footer class="full-row main-footer text-white">
        <div class="container">
            <div class="col-md-5 col-sm-12 col-xs-12 footer-item">

                <h3>About Us</h3>
                <!-- <p><img src="<?php echo $base_url ?>/img/premier dealer.jpg" style="width:70%"></p> -->
                <p class="light">At Jack's Heating and Cooling, we aim to exceed client expectations by employing the
                    best customer service people and holding ourselves to only the highest level of customer care. Our
                    friendly customer service people will answer all your questions, scheduling service, financing and
                    guide you through the install and rebate process.</p>

            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 footer-item">
                <h3>Service Areas</h3>
                <ul class="footer-list" style="display: flex; flex-wrap: wrap;">
                    <div class="item-list-inner">
                        <li><a href="/service-area/davison.php">Davison</a></li>
                        <li><a href="/service-area/goodrich.php">Goodrich</a></li>
                        <li><a href="/service-area/imlay-city.php">Imlay City</a></li>
                        <li><a href="/service-area/almont.php">Almont</a></li>
                        <li><a href="/service-area/north-branch.php">North Branch</a></li>
                        <li><a href="/service-area/metamora.php">Metamora</a></li>
                        <li><a href="/service-area/cass-city.php">Cass City</a></li>
                        <li><a href="/service-area/sandusky.php">Sandusky</a></li>
                        <li><a href="/service-area/ortonville.php">Ortonville</a></li>
                        <li><a href="/service-area/marlette.php">Marlette</a></li>
                    </div>
                    <div>
                        <li><a href="/service-area/lake-orion.php">Lake Orion</a></li>
                        <li><a href="/service-area/vassar.php">Vassar</a></li>
                        <li><a href="/service-area/oxford.php">Oxford</a></li>
                        <li><a href="/service-area/grand-blanc.php">Grand Blanc</a></li>
                        <li><a href="/service-area/lapeer.php">Lapeer</a></li>
                        <li><a href="/service-area/caro.php">Caro</a></li>
                        <li><a href="/service-area/oakland-township.php">Oakland Township</a></li>
                        <li><a href="/service-area/brandon-township.php">Brandon Township</a></li>
                    </div>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 footer-item">
                <h3 class="contact-footer">Contact Us</h3>
                <p><strong>LAPEER OFFICE</strong> <br>
                    Address: 1567 Imlay City Rd Suite B - Lapeer, MI 48446 <br>
                    (810) 664-8451</p>
                <p><strong>CARO OFFICE</strong> <br>
                    Address: 1820 W. Caro Rd - Caro, MI 48723 <br>
                    (989) 672-8451</p>
                <p><a href="<?php echo $base_url ?>/privacy.php">Terms of Service and Privacy Policy</a></p>
                <p><a href="https://www.facebook.com/888797jack/" class="facebook-icon current">facebook </a></p>

            </div>


            </ul>
        </div>
        </div>
    </footer>

    <footer class="full-row mini-footer">
        <div class="container">

            <div class="text-center col-xs-12 footer-item copyrights text-muted">
                <p>All Rights Reserved. Copyright Jack's Heating and Cooling</p>
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