<?php
/*
Template Name: Home
*/

$link1 = get_field('link_1-home');
$link2 = get_field('link_2-home');
$link3 = get_field('link_3-home');
$link4 = get_field('slider_1_link');
$link5 = get_field('slider_2_link');
$link6 = get_field('slider_3_link');
$link7 = get_field('link_1_1');
$link8 = get_field('link_2_1');
$link9 = get_field('link_2_2');

get_header(); ?>


<div id="firstpart">
    <div id="firstpart-c1">  
        <div id="firstpart-c1-c1">
            <?php if( get_field('afbeelding-p1') ): ?>
                <img class="afbeelding-p1" src="<?php the_field('afbeelding-p1'); ?>" />
            <?php endif; ?>
        </div>
        <div id="firstpart-c1-c2">
            <?php if( get_field('afbeelding_playbutton') ): ?>
                <a target="blank" href="http://localhost/Helemaal-de-bom/wp-content/uploads/2023/01/How-to-Screen-Record-in-Windows-10-or-Windows-11-_-Toms-Hardware-Google-Chrome-2023-01-10-10-43-49.mp4"><img class="afbeelding_playbutton" src="<?php the_field('afbeelding_playbutton'); ?>" /><a>
            <?php endif; ?>
        </div>
    </div>
    <div id="firstpart-c2">
        <?php if( get_field('titel_1-p1') ): ?>
			<h2 class="titel-home-regel1"><?php the_field('titel_1-p1'); ?><span style="color: #EF4830">.</span></h2>
		<?php endif; ?>
        <?php if( get_field('titel_2-p1') ): ?>
			<h2 class="titel-home-regel2"><?php the_field('titel_2-p1'); ?><span style="color: #EF4830">.</span></h2>
		<?php endif; ?>
        <div id="orange-text">
            <?php if( get_field('titel_3-p1') ): ?>
                <h2 class="titel-home-regel3-1"><?php the_field('titel_3-p1'); ?><span style="color: #305BAA"><?php the_field('titel_oranje-p1'); ?></span><span style="color: #EF4830">.</span></h2>
            <?php endif; ?>
        </div>
        <div id="home-link-desktop">
            <?php if( get_field('icon_naast_link-home') ): ?>
                <img class="icon_naast_link-home" src="<?php the_field('icon_naast_link-home'); ?>" />
            <?php endif; ?>
            <?php if( $link1 ): ?>
                <a class="link-home-p1" href="<?php echo esc_url( $link1 ); ?>"><?php the_field('tekst_link_1-home'); ?></a>
            <?php endif; ?>
            <?php if( get_field('icon_naast_link-home') ): ?>
                <img class="icon_naast_link-home" src="<?php the_field('icon_naast_link-home'); ?>" />
            <?php endif; ?>
            <?php if( $link2 ): ?>
                <a class="link-home-p1" href="<?php echo esc_url( $link2 ); ?>"><?php the_field('tekst_link_2-home'); ?></a>
            <?php endif; ?>
            <?php if( get_field('icon_naast_link-home') ): ?>
                <img class="icon_naast_link-home" src="<?php the_field('icon_naast_link-home'); ?>" />
            <?php endif; ?>
            <?php if( $link3 ): ?>
                <a class="link-home-p1" href="<?php echo esc_url( $link3 ); ?>"><?php the_field('tekst_link_3-home'); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="home-link-mobile">
        <?php if( get_field('icon_naast_link-home') ): ?>
            <img class="icon_naast_link-home" src="<?php the_field('icon_naast_link-home'); ?>" />
        <?php endif; ?>
        <?php if( $link1 ): ?>
            <a class="link-home-p1" href="<?php echo esc_url( $link1 ); ?>"><?php the_field('tekst_link_1-home'); ?></a>
        <?php endif; ?>
        <?php if( get_field('icon_naast_link-home') ): ?>
            <img class="icon_naast_link-home" src="<?php the_field('icon_naast_link-home'); ?>" />
        <?php endif; ?>
        <?php if( $link2 ): ?>
            <a class="link-home-p1" href="<?php echo esc_url( $link2 ); ?>"><?php the_field('tekst_link_2-home'); ?></a>
        <?php endif; ?>
        <?php if( get_field('icon_naast_link-home') ): ?>
            <img class="icon_naast_link-home" src="<?php the_field('icon_naast_link-home'); ?>" />
        <?php endif; ?>
        <?php if( $link3 ): ?>
            <a class="link-home-p1" href="<?php echo esc_url( $link3 ); ?>"><?php the_field('tekst_link_3-home'); ?></a>
        <?php endif; ?>
</div>
<div id="tweede-gedeelte">
    <div id="red-arrow">
        <?php if( get_field('rode_pijl_naar_beneden-p2') ): ?>
            <a href="#information-p2" ><img class="rode_pijl_naar_beneden-p2" src="<?php the_field('rode_pijl_naar_beneden-p2'); ?>" /></a>
        <?php endif; ?>
    </div>
    <div id="information-p2">
        <?php if( get_field('titel-information-p2') ): ?>
            <h2 class="titel-information-p2"><?php the_field('titel-information-p2'); ?><span style="color: #EF4830">.</span></h2>
         <?php endif; ?>
         <?php if( get_field('informatie-p2') ): ?>
            <p class="informatie-p2"><?php the_field('informatie-p2'); ?><span>.</span></p>
         <?php endif; ?>
    </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
        <img src="<?php the_field('slider_afbeelding_1'); ?>" style="width:100%">
        <a href="<?php echo esc_url( $link4 ); ?>"><div class="numbertext"><?php the_field('slider-1-titel'); ?></div></a>
        <a href="<?php echo esc_url( $link4 ); ?>"><div class="text"><?php the_field('slider_1_tekst'); ?></div></a>
        </div>

        <div class="mySlides fade">
        <img src="<?php the_field('slider_afbeelding_2'); ?>" style="width:100%">
        <a href="<?php echo esc_url( $link5 ); ?>"><div class="numbertext"><?php the_field('slider-2-titel'); ?></div></a>
        <a href="<?php echo esc_url( $link5); ?>"><div class="text"><?php the_field('slider_2_tekst'); ?></div></a>
        </div>

        <div class="mySlides fade">
        <img src="<?php the_field('slider_afbeelding_3'); ?>" style="width:100%">
        <a href="<?php echo esc_url( $link6 ); ?>"><div class="numbertext"><?php the_field('slider-3-titel'); ?></div></a>
        <a href="<?php echo esc_url( $link6 ); ?>"><div class="text"><?php the_field('slider_3_tekst'); ?></div></a>
        </div>


        <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

        </div>
        <br>

        <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        </div>
    </div>
</div>
<div style="background-image: linear-gradient( #305baae0, #305baae0 ), url(<?php the_field('achtergrond-p4'); ?>)" id="home-p3">
    <div id="home-p3-content">
        <div id="home-p3-information">
            <?php if( get_field('titel_vierde_gedeelte') ): ?>
                <h2 class="titel_vierde_gedeelte"><?php the_field('titel_vierde_gedeelte'); ?><span style="color: #EF4830">.</span></h2>
            <?php endif; ?>
            <?php if( get_field('informatie_vierde_gedeelte') ): ?>
                <p class="informatie_vierde_gedeelte"><?php the_field('informatie_vierde_gedeelte'); ?><span>.</span></p>
            <?php endif; ?>
        </div>
        <div id="home-p3-column1">
            <?php if( get_field('titel-p4_1') ): ?>
                <h2 class="titel-p4_1"><?php the_field('titel-p4_1'); ?><span style="color: #EF4830">.</span></h2>
            <?php endif; ?>
            <?php if( get_field('informatie_1_1') ): ?>
                <p class="informatie_1_1"><?php the_field('informatie_1_1'); ?><span>.</span></p>
            <?php endif; ?>
            <?php if( $link7 ): ?>
                <a class="tekst_link_1" href="<?php echo esc_url( $link7 ); ?>"><?php the_field('tekst_link_1'); ?></a>
            <?php endif; ?>
        </div>
        <div id="home-p3-column2">
            <?php if( get_field('titel-p4_2') ): ?>
                <h2 class="titel-p4_2"><?php the_field('titel-p4_2'); ?><span style="color: #EF4830">.</span></h2>
            <?php endif; ?>
            <?php if( get_field('informatie_2_1') ): ?>
                <p class="informatie_2_1"><?php the_field('informatie_2_1'); ?><span>.</span></p>
            <?php endif; ?>
            <?php if( $link8 ): ?>
                <a class="tekst_link_2" href="<?php echo esc_url( $link8 ); ?>"><?php the_field('tekst_link_2'); ?></a>
            <?php endif; ?>
        </div>
        <div id="home-p3-column3">
            <?php if( get_field('titel-p4_3') ): ?>
                <h2 class="titel-p4_3"><?php the_field('titel-p4_3'); ?><span style="color: #EF4830">.</span></h2>
            <?php endif; ?>
            <?php if( get_field('informatie_3_1') ): ?>
                <p class="informatie_3_1"><?php the_field('informatie_3_1'); ?><span>.</span></p>
            <?php endif; ?>
            <?php if( $link9 ): ?>
                <a class="tekst_link_3" href="<?php echo esc_url( $link9 ); ?>"><?php the_field('tekst_link_3'); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 10000); // Change image every 10 seconds
            }
        </script>
        <script>
            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
        </script>


<?php get_footer(); ?>

