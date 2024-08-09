<div class="mobile-navbar">
    <nav class="flex flex-col mt-10">
        <?php if( have_rows('header_links', 'option') ): ?>
            <?php while( have_rows('header_links', 'option') ): the_row(); ?>
                <a id="<?php the_sub_field('id_link', 'option') ?>" class="text-white text-35 leading-50 font-heebo-medium mr-4 mb-1" href="<?php the_sub_field('url_link', 'option') ?>"><?php the_sub_field('naam_link', 'option') ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if( have_rows('header_rechts', 'option') ): ?>
            <?php while( have_rows('header_rechts', 'option') ): the_row(); ?>
                <a id="<?php the_sub_field('id_link', 'option') ?>" class="text-white text-35 leading-50 font-heebo-medium mr-4 mb-1" href="<?php the_sub_field('url_link', 'option') ?>"><?php the_sub_field('naam_link', 'option') ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </nav>
</div>
<div class="overlay-mobile"></div>