<?php /* Template Name: Contact */ get_header(); ?>

    <section class="header-bottom background-wave">
        <div class="wrapper">
            <h2>Objekt</h2>
            <!-- hero image1 -->
            <span class="image-shape1">
                <svg width="732" height="530" viewBox="0 0 732 530">
                    <defs>
                        <mask id="mask-hero1" maskUnits="objectBoundingBox">
                            <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-hero.png" />
                        </mask>
                    </defs>
                    <image mask="url(#mask-hero1)" width="732" height="527" xlink:href="<?php echo get_template_directory_uri(); ?>/images/accommodation1-2.png" />
                </svg>
            </span>
            <!-- hero image2 -->
            <span class="image-shape2">
                <svg width="732" height="530" viewBox="0 0 732 530">
                    <defs>
                        <mask id="mask-hero2" maskUnits="objectBoundingBox">
                            <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-hero.png" />
                        </mask>
                    </defs>
                    <image mask="url(#mask-hero2)" width="732" height="527" xlink:href="<?php echo get_template_directory_uri(); ?>/images/accommodation1-2.png" />
                </svg>
            </span>
        </div>
    </section>

    <section class="contact">
        <div class="wrapper col-2">
            <div class="text">
                <ul>
                    <li><strong>CENTAR SOKOL d.o.o.</strong></strong></li>
                    <li>Kralja Zvonimira 5</li>
                    <li>Osijek – Croatia (Europe)</li>
                </ul>
                <ul>
                    <li>T: +385 31 213 538</li>
                    <li>E: booking@zito.com</li>
                    <li> W: www.sokolcamp.com</li>
                </ul>
                <ul>
                    <li>Facebook  —  Instagram  —  Twitter</li>
                </ul>
            </div>
            <div class="contact-form">
                <img class="sheet1" src="<?php echo get_template_directory_uri(); ?>/images/sheet-yellow.png" alt="yellow-sheet">
                <img class="sheet2" src="<?php echo get_template_directory_uri(); ?>/images/mask-green.png" alt="green-shape">
                <img src="<?php echo get_template_directory_uri(); ?>/images/" alt="">
               <h4>Kontaktirajte nas</h4>
               <form action="post">
                    <label for="">Ime i prezime <br>
                        <input type="text" name="name">
                    </label><br>
                    <label for="">E-mail adresa <br> <input type="text" name="name">
                     </label><br>
                     <label for="">Poruka <br>
                         <textarea name="message" id="message" rows="3"></textarea>
                     </label><br>
                     <input type="submit" value="Posalji">
               </form>
             
            </div>
        </div>
        <!-- end wrapper -->
    </section>
    <!-- end section -->

<section class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.596025640945!2d18.68635031572713!3d45.558451535170036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7bac87a94e7%3A0xa3f520ff5406cd95!2sUl.+kralja+Zvonimira+5%2C+31000%2C+Osijek%2C+Croatia!5e0!3m2!1sen!2srs!4v1543172224459" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<?php get_footer(); ?>