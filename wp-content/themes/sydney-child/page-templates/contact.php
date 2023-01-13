<?php
/*
Template Name: Contact

Voor mijzelf:
if( have_rows('call_to_action_group') ):
while( have_rows('call_to_action_group') ) : the_row();

<?php endwhile; endif; ?>
*/

$linkforlocatie = get_field('locatie-contact');
$linkforphone = get_field('telefoonnummer-contact');
$linkformail = get_field('e-mail-contact');
$portofolio = get_field('mini_portofolio-contact');

get_header(); ?>

<br>
<div>
    <h2 style="visibility: hidden">  </h2>
</div>
<div id="contact">
    <div id="contact-content">
        <div id="contact-c1">
            <?php if( get_field('titel-contact') ): ?>
                <h2 class="titel-contact"><?php the_field('titel-contact'); ?><span style="color: #EF4830">.</span></h2>
            <?php endif; ?>
            <div id="contact-locatie">
            <?php
            if( have_rows('locatie-contact') ):
            while( have_rows('locatie-contact') ) : the_row();
            ?>
            <?php if( $linkforlocatie ): ?>
                <a class="link-locatie-contact" href="<?php echo esc_url( $linkforlocatie['link-locatie-contact']); ?>">
                    <i class="fas fa-map-pin"></i>
                    <?php the_sub_field('tekst_locatie-contact'); ?>
                </a>
            <?php endif; ?>             
            <?php endwhile; endif; ?>
            </div>

            <div id="telefoon-mail-contact">
            <?php
            if( have_rows('telefoonnummer-contact') ):
            while( have_rows('telefoonnummer-contact') ) : the_row();
            ?>
            <?php if( $linkforphone ): ?>
                <a class="link_telefoonnummer-contact" href="<?php echo esc_url( $linkforphone['link_telefoonnummer-contact']); ?>">
                    <i class="fas fa-phone-alt"></i>
                    <?php the_sub_field('tekst_telefoonnummer-contact'); ?>
                </a>
            <?php endif; ?> 
                
            <?php endwhile; endif; ?>
            <?php
            if( have_rows('e-mail-contact') ):
            while( have_rows('e-mail-contact') ) : the_row();
            ?>
            <?php if( $linkformail ): ?>
                <a class="link_e-mail-contact" href="<?php echo esc_url( $linkformail['link_e-mail-contact']); ?>">
                    <i class="fas fa-envelope"></i>
                    <?php the_sub_field('tekst_e-mail-contact'); ?>
                </a>
            <?php endif; ?> 
                
            <?php endwhile; endif; ?>
            </div>

            <div id="kvk-btw-contact">
            <?php
            if( have_rows('kvk-btw-nummer-contact') ):
            while( have_rows('kvk-btw-nummer-contact') ) : the_row();
            ?>

                <?php if( get_sub_field('kvk-nummer-contact') ): ?>   
                    <p class="kvk-nummer-contact"><i class="fas fa-building"></i><?php the_sub_field('kvk-nummer-contact'); ?></p>
                <?php endif; ?>
                <?php if( get_sub_field('btw_nummer-contact') ): ?>
                    <p class="btw_nummer-contact"><?php the_sub_field('btw_nummer-contact'); ?></p>
                <?php endif; ?>
                
            <?php endwhile; endif; ?>
            </div>

            <div id="google-maps">
            <?php if( get_field('google_maps-contact') ): ?>
                <?php the_field('google_maps-contact'); ?>
            <?php endif; ?>
            </div>

        </div>
        <div id="contact-c2">
            <div id="portofolio-contact">
                <?php
                if( have_rows('mini_portofolio-contact') ):
                while( have_rows('mini_portofolio-contact') ) : the_row();
                ?>
                <div id="foto-contact-selfie">
                    <?php if( $portofolio ): ?>
                        <img class="foto-contact" src="<?php echo esc_url( $portofolio['Foto-contact']); ?>" />
                    <?php endif; ?>
                </div>
                <div id="foto-contact-informatie">
                    <?php if( get_sub_field('regel_1-contact') ): ?>     
                        <h5 class="regel_1-contact"><?php the_sub_field('regel_1-contact'); ?></h5>
                    <?php endif; ?>
                    <?php if( get_sub_field('regel_2-contact') ): ?>   
                        <p class="regel_2-contact"><?php the_sub_field('regel_2-contact'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('regel_3-contact') ): ?>
                        <p class="regel_3-contact"><em><?php the_sub_field('regel_3-contact'); ?></em></p>
                    <?php endif; ?>
                </div> 
                <?php endwhile; endif; ?>
            </div>
            <div id="contact-form">
                <?php if( get_field('contact_form-contact') ): ?>
                    <?php the_field('contact_form-contact'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

