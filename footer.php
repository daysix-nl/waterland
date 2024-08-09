<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="">
    <section class="footer-block">
        <div class="container">
            <div class="grid grid-cols-5 gap-5 bg-dark-green ">
                <div class="col-span-5 md:col-span-2 py-8 pl-5 pr-0">
                    <h3 class="mb-2 text-white text-40 leading-40 font-heebo-bold pr-2"><?php the_field('titel', 'option'); ?></h3>
                    <p class="text-white text-16 leading-30 font-heebo-regular pr-5"><?php the_field('tekst_block', 'option'); ?></p>
                    <div class="flex flex-col md:flex-row flex-wrap justify-between">
                        <a id="<?php the_field('id_link_1', 'option'); ?>" class="clip-path-button border-2 border-green w-fit px-2 relative text-white bg-dark-green hover:bg-green duration-300 h-[45px] text-16 leading-26 font-medium flex items-center mt-4" href="<?php the_field('url_link_1', 'option'); ?>"><?php the_field('naam_link_1_', 'option'); ?> <span class="ml-2 pr-2"><?php include get_template_directory() . '/img/icons/arrow-button.php'; ?></span> <span class="bg-green clip-hoek"></span></a>
                        <a id="<?php the_field('id_link_2', 'option'); ?>" class="clip-path-button border-2 border-green w-fit px-2 relative text-white bg-dark-green hover:bg-green duration-300 h-[45px] text-16 leading-26 font-medium flex items-center mt-4" href="<?php the_field('url_link_2', 'option'); ?>"><?php the_field('naam_link_2', 'option'); ?> <span class="ml-2 pr-2"><?php include get_template_directory() . '/img/icons/arrow-button.php'; ?></span> <span class="bg-green clip-hoek"></span></a>
                    </div>
                </div>
                <div class="col-span-5 md:col-span-3 relative hidden md:block">
                    <img class="w-full absolute top-0 right-0 h-full object-cover img-footer-clip-path z-[9]" src="<?php the_field('image_1', 'option'); ?>" alt="<?php the_field('alt_image_1', 'option'); ?>">
                    <img class=" h-full object-cover absolute top-0 right-0 img-footer-clip-path z-10 w-1/2" src="<?php the_field('image_2', 'option'); ?>" alt="<?php the_field('alt_image_2', 'option'); ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="my-8 relative overflow-hidden">
        <div class="right-[-50px] top-0 h-full absolute max-w-[225px]">
            <?php include get_template_directory() . '/img/icons/logo-w-footer.php'; ?>
        </div>
        <div class="container grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-9 gap-3 relative z-[5]">
            <div class="flex flex-col col-span-2">
                <?php include get_template_directory() . '/img/icons/logo-footer.php'; ?>
                <p class="text-16 leading-30 font-heebo-regular text-black mt-4"><?php the_field('tekst', 'option'); ?></p>
            </div>
            <div class=" hidden md:flex h-full relative col-span-1 overflow-hiddens max-h-[190px]">
                <?php include get_template_directory() . '/img/icons/line.php'; ?>
            </div>
            <div class="flex flex-col col-span-2">
                <h4 class="text-16 leading-30 font-heebo-bold text-dark-green">Neem contact op</h4>
                <?php if (get_field('telefoonnummer', 'option')): ?>
                    <a class="text-16 leading-30 font-heebo-regular text-black hover:text-dark-green hover:transition-colors" href="tel:+<?php the_field('telefoonnummer', 'option') ?>"><?php the_field('telefoonnummer', 'option') ?></a>
                <?php endif; ?>
                <?php if (get_field('e-mailadress', 'option')): ?>
                    <a class="text-16 leading-30 font-heebo-regular text-black hover:text-dark-green hover:transition-colors" href="mailto:<?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
                <?php endif; ?>
                <div class="mt-4 flex flex-row">
                    <?php if (get_field('facebook', 'option')): ?>
                        <a class="mr-[15px] footer-icons" href="<?php the_field('facebook', 'option') ?>" target="_blank">
                            <?php include get_template_directory() . '/img/icons/facebook.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('instagram', 'option')): ?>
                        <a class="mr-[15px] footer-icons" href="<?php the_field('instagram', 'option') ?>" target="_blank">
                            <?php include get_template_directory() . '/img/icons/instagram.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('linkedin', 'option')): ?>
                        <a class="footer-icons" href="<?php the_field('linkedin', 'option') ?>" target="_blank">
                            <?php include get_template_directory() . '/img/icons/linkedin.php'; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex flex-col col-span-2">
                <?php if( have_rows('row_3', 'option') ): ?>
                    <?php while( have_rows('row_3', 'option') ): the_row(); ?>
                        <a id="<?php the_sub_field('id_link', 'option') ?>" class="text-16 leading-30 font-heebo-regular text-black hover:text-dark-green hover:transition-colors" href="<?php the_sub_field('url_link', 'option') ?>"><?php the_sub_field('naam_link', 'option') ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flex flex-col col-span-2">
                <?php if( have_rows('row_4', 'option') ): ?>
                    <?php while( have_rows('row_4', 'option') ): the_row(); ?>
                        <a id="<?php the_sub_field('id_link', 'option') ?>" class="text-16 leading-30 font-heebo-regular text-black hover:text-dark-green hover:transition-colors" href="<?php the_sub_field('url_link', 'option') ?>"><?php the_sub_field('naam_link', 'option') ?></a>
                    <?php endwhile; ?> 
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="py-2 bg-dark-green">
        <div class="container grid grid-cols-1 md:grid-cols-2">
            <p class="text-white text-16 leading-30 font-heebo-regular text-center md:text-start">© <?php echo date("Y") ?>, Waterland - Alle rechten voorbehouden.</p>
            <a href="https://digitalfc.nl" target="_blank" class="flex text-center justify-center md:justify-end text-white text-16 leading-30 font-heebo-regular">Website made by Digital FC</a>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>