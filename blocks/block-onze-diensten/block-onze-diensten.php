<style>
    .bg-green-50 {
        background: linear-gradient(0deg, #fff 50%, #EDF1EF 50%);
    }
</style>
<!-- BLOK-ONZE-DIENSTEN -->
<section class="py-8 bg-green-50">
    <div class="container flex flex-col mb-4">
        <h2 class="mb-2 text-dark-green text-40 leading-40 font-heebo-bold text-center"><?php the_field('titel');?></h2>
        <p class="text-black text-16 leading-30 font-heebo-regular md:w-[40%] text-center mx-auto"><?php the_field('tekst');?></p>
    </div>
    <div class="container grid grid-cols-3 gap-5">
        <?php
            if( have_rows('diensten_repeater') ):
                while ( have_rows('diensten_repeater') ) : the_row();
                    if( get_row_layout() == 'dienst' ):       
                    ?>
                        <?php
                        $featured_post = get_sub_field('dienst_post_object');
                        $title = get_the_title( $featured_post->ID );
                        $link = get_the_permalink( $featured_post->ID );
                        if( $featured_post ): ?>
                            <div class="col-span-3 md:col-span-1">
                                <a href="<?php echo esc_html( $link ); ?>">
                                    <img class="w-full aspect-video h-100% object-cover" src="<?php the_field('teaser_afbeelding', $featured_post->ID );?>" alt="<?php the_field('teaser_afbeelding_alt', $featured_post->ID );?>">
                                    <div class="h-6 bg-dark-green clip-path-button w-fit pr-4 mt-[-30px] flex items-center">
                                        <h3 class="text-24 leading-24 font-heebo-medium text-white ml-3"><?php echo esc_html( $title ); ?></h3>
                                    </div>
                                    <p class="text-black text-16 leading-30 font-heebo-regular my-4"><?php the_field('teaser_tekst', $featured_post->ID );?></p>
                                    <a class="text-16 leading-24 font-heebo-medium button-informatie flex flex-row items-center" href="<?php echo esc_html( $link ); ?>">Meer informatie <span class="block ml-1"><?php include get_template_directory() . '/img/icons/arrow-informatie.php'; ?></span></a>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php
                    endif;
                // End loop.
                endwhile;
            // No value.
            else :
                // Do something...
            endif;
        ?>
    </div>
</section>