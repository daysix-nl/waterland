<div class="container">
    <div class="w-full h-[2px] bg-black"></div>
</div>
<section class="py-8">
    <div class="container grid grid-cols-3 gap-5">
        <?php
        $catt = get_field('thiscategorie');
            $loop = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
                 'cat' => $catt,
                // 'category_name' => $catt,
                // 'taxonomy' => $taxonomy,
      
                )
            );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <div class="col-span-3 md:col-span-1">
                <div>
                    <a href="<?php the_permalink() ?>">
                        <img class="w-full aspect-video h-100% object-cover" src="<?php the_field('teaser_afbeelding', $post_id);?>" alt="<?php the_field('teaser_afbeelding_alt');?>">
                        <div class="h-6 bg-dark-green clip-path-button w-fit pr-4 mt-[-30px] flex items-center">
                            <h3 class="text-24 leading-24 font-heebo-medium text-white ml-3"><?php the_title();?></h3>
                        </div>
                        <p class="text-black text-16 leading-30 font-heebo-regular my-4"><?php the_field('teaser_tekst', $post_id);?></p>
                        <a class="text-16 leading-24 font-heebo-medium button-informatie flex flex-row items-center" href="<?php the_permalink() ?>">Meer informatie <span class="block ml-1"><?php include get_template_directory() . '/img/icons/arrow-informatie.php'; ?></span></a>
                    </a>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>