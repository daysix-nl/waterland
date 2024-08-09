<section class="col-span-2 <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="swiper mySwiper-inner-block">
        <div class="swiper-wrapper">
            <?php if( have_rows('image_slider') ): ?>
                <?php while( have_rows('image_slider') ): the_row(); ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <img class="w-full h-auto aspect-video object-cover modal-image" src="<?php the_sub_field('afbeelding');?>" alt="<?php the_sub_field('afbeelding_alt');?>">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<div id="myModal" class="modal">
  <span class="close">Sluiten</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>