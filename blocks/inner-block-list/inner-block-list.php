<section class="col-span-2 <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <ul class="list-svg ml-[20px]">
            <?php
                // Check rows existexists.
                if( have_rows('list_repeater') ):
                    // Loop through rows.
                    while( have_rows('list_repeater') ) : the_row(); ?>
                       <li class="text-16 leading-30 font-heebo-normal text-black tekstinnit"><?php the_sub_field('list_repeater_item');?></li>
                    <?php
                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
            ?>
        </ul>
</section>