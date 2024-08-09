<section class="col-span-2 grid gap-1 <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <?php
        // Check value exists.
        if( have_rows('accordion_repeater') ):
            // Loop through rows.
            while ( have_rows('accordion_repeater') ) : the_row();
                // Case: Paragraph layout.
                if( get_row_layout() == 'accordion_repeater_item' ): ?>
                    <div class="accordion-item"> 
                        <button class="accordion clip-path-button text-20 leading-24 font-medium px-2 flex items-center text-dark-green"><?php the_sub_field('accordion_repeater_item_titel');?></button>
                        <div class="panel px-2 md:px-4">
                            <p class="py-2 text-16 leading-30 pr-4"><?php the_sub_field('accordion_repeater_item_tekst');?>
                            </p>
                        </div>
                    </div>
                <?php
                endif;
            // End loop.
            endwhile;
        // No value.
        else :
            // Do something...
        endif;
   ?>
</section>