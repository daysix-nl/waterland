<style>
    @media only screen and (max-width: 1032px) {
        .footer-block {
            display: none;
        }
    }
</style>

<section class="">

    <div class="container grid grid-cols-3 gap-5 my-8">
        <div class="col-span-3 lg:col-span-2">
             <?php include get_template_directory() . '/componenten/inner-blocks.php'; ?>

        </div>
        <div class="col-span-3 lg:col-span-1 ">
            <div class="min-h grid gap-4">
                <div class="px-4 py-6 bg-dark-green h-min order-last lg:order-[unset]">
                    <h3 class="mb-2 text-white text-40 leading-40 font-heebo-bold"><?php the_field('titel_sidebar', 'option'); ?></h3>
                    <p class="text-white text-16 leading-30 font-heebo-regular"><?php the_field('tekst_sidebar', 'option'); ?></p>
                    <div class="my-3 flex flex-col">
                        <a class="text-white text-16 leading-30 font-heebo-regular" href="tel:+<?php the_field('telefoonnummer', 'option'); ?>"><?php the_field('telefoonnummer', 'option'); ?></a>
                        <a class="text-white text-16 leading-30 font-heebo-regular" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                    </div>
                    <a id="<?php the_field('id_link_sidebar', 'option'); ?>" class="clip-path-button border-2 border-green w-fit px-2 relative text-white bg-dark-green hover:bg-green duration-300 h-[45px] text-16 leading-26 font-medium flex items-center mt-4" href="<?php the_field('url_link_sidebar', 'option'); ?>"><?php the_field('naam_link_sidebar', 'option'); ?> <span class="ml-2 pr-2"><?php include get_template_directory() . '/img/icons/arrow-button.php'; ?></span> <span class="bg-green clip-hoek"></span></a>
                </div>

  


                <?php

                // Check value exists.
                if( have_rows('menu_blok', 'option') ):

                    // Loop through rows.
                    while ( have_rows('menu_blok', 'option') ) : the_row(); ?>

                        <div class="bg-[#EDF1EF] h-min">
                            <div class="h-6 bg-dark-green clip-path-button w-fit pr-4 flex items-center">
                                <h3 class="text-24 leading-24 font-heebo-medium text-white ml-3"><?php the_sub_field('menu_blok_item_titel', 'option');?></h3>
                            </div>
                            <div class="py-6 px-4">
                                <ul class="list-svg">

                                <?php

                                // Check rows existexists.
                                if( have_rows('menu_blok_item_link_repeater', 'option') ):

                                    // Loop through rows.
                                    while( have_rows('menu_blok_item_link_repeater', 'option') ) : the_row(); ?>

                                       <li class="text-black text-16 leading-30 font-heebo-regular"><a href="<?php the_sub_field('menu_blok_item_link_repeater_link', 'option');?>"><?php the_sub_field('menu_blok_item_link_repeater_titel', 'option');?></a></li>

                                    <?php
                                    // End loop.
                                    endwhile;

                                // No value.
                                else :
                                    // Do something...
                                endif; ?>
                    
                                        
                                
                                </ul>
                            </div>
                        </div>

                       <?php

                      

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif; ?>

             


            </div>
        </div>
     </div>
</section>