<div class="container">
    <div class="w-full h-[2px] bg-black"></div>
</div>
<section class="py-8 custom-block">

    <div class="container">
        
        <div class="mb-6 hidden md:block">
            <?php        
                $args = array(
                'post_type'                => 'projects',
                'orderby'                  => 'name',
                'order'                    => 'ASC',
                'hide_empty'               => 1,
                'hierarchical'             => 1,
                'pad_counts'               => false );

                $categories = get_categories($args); 
            ?>        
            <ul class="grid md:grid-cols-3 lg:grid-cols-4 gap-3 pr-4">
                <?php foreach($categories as $category): ?>
                    <li class="bg-[#EDF1EF] clip-path-button-projects mx-2 w-full h-[45px] col-span-1 justify-center items-center flex text-16 text-dark-green font-medium"><a href="?group=<?= $category->slug; ?>" id="group"><?= $category->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <?php 
                $catSlug = $_GET['group'] ?? '';;
                $product = new WP_Query([
                    'post_type' => 'projects',
                    'posts_per_page' => -1,
   

                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $catSlug,
                    )
                    ),
                    'order_by' => 'date',
                    'order' => 'desc',
                ]);
            ?>

            <?php if($product->have_posts()): ?>
                <?php while($product->have_posts()) : $product->the_post(); $post_id = get_the_ID(); ?>
			  <?php 
                        $image_rows = get_field('image', $post_id);
                        $image_count = count($image_rows);
                        if($image_count > 1):
                        ?>
                    <a href="<?php the_permalink($post_id); ?>"><div class="col-span-3 md:col-span-1">
                      
                        <div class="swiper mySwiper-projects relative">
                            <div class="swiper-wrapper">
                                
                                <?php if( have_rows('image', $post_id) ): ?>
                                    <?php while( have_rows('image' , $post_id) ): the_row(); ?>
                                            <div class="swiper-slide relative">
                                                <?php 
                                                $image = get_sub_field('image', $post_id);
                                                if( !empty( $image ) ): ?>
                                                    <img class="w-full object-cover h-[250px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <h3 class="text-white text-24 leading-28 font-semibold absolute bottom-3 left-4 right-2 z-10"><?php the_title();?></h3>
                            <div class="swiper-button-next-custom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9.234" viewBox="0 0 14 9.234">
                                    <path id="Fill_1" data-name="Fill 1" d="M-.833,0,0,1-7.2,7,0,13l-.833,1-8.4-7Z" transform="rotate(-90)"/>
                                </svg>
                            </div>
                            <div class="swiper-button-prev-custom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9.234" viewBox="0 0 14 9.234">
                                    <path id="Fill_1" data-name="Fill 1" d="M.833,0,0,1,7.2,7,0,13l.833,1,8.4-7Z" transform="translate(14) rotate(90)"/>
                                </svg>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php if( have_rows('image', $post_id) ): ?>
                            <?php while( have_rows('image' , $post_id) ): the_row(); ?>
                                    <div class="relative">
                                        <?php 
                                        $image = get_sub_field('image', $post_id);
                                        if( !empty( $image ) ): ?>
                                            <img class="w-full object-cover h-[250px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                        <h3 class="text-white text-24 leading-28 font-semibold absolute bottom-3 left-4 z-10"><?php the_title();?></h3>
                                    </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    </div></a>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

