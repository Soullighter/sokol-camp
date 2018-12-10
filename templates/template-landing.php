<?php /* Template Name: Landing */ get_header('landing'); ?>
 <div class="landing-page">
            <div class="col1" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/landing-page-1.jpg;)">
                <div class="wrap">
                <div>
                        <h1>Sokol Camp</h1>
                        <h5>Profesinalci i timovi</h5>
                        <p>Sokol Camp objedinjuje moderne dvorane i vrhunsku opremu sa uslugom smještaja i prehrane
                            gimnastičara, te na taj način nudi kompletnu uslugu gimnastičkim klubovima i reprezentacijama.</p>
                        <div class="button"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'home' ) ) ); ?>">Ulaz</a></div>
                    </div>
                </div>
                   
            </div>
            <div class="col2" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/landing-page-2.jpg;)">
                <div class="wrap">
                <div>
                        <h1>Sokol centar</h1>
                        <h5>Rekreativci i amateri</h5>
                        <p>Sokol Centar raspolaže sa nekoliko modernih dvorana koje svojom opremom nude raznolikost
                            treninga i programa za sve uzraste, a sve pod vodstvom iskusnih i stručnih trenera.</p>
                        <div class="button"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>">Ulaz</a></div>
                    </div>
                </div>
                   
            </div>
    </div>
<?php get_footer('landing'); ?>