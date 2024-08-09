<section class="relative h-[50vh] max-h-[520px]">
    <div class="absolute h-full w-1/2 background-hero z-[1]"></div>
    <img class="absolute top-0 right-0 w-full h-full object-cover z-[2]" src="<?php the_field('afbeelding');?>" alt="<?php the_field('afbeelding_alt');?>">
    <div class="container flex-col h-full flex justify-center z-[3] relative">
        <h1 class="text-white font-heebo-bold text-45 md:text-80 leading-45 md:leading-80"><?php the_field('titel');?></h1>
        <div class="flex flex-row mt-3">
            <a class="text-white text-12 leading-22 md:text-16 md:leading-26 font-medium flex items-center" href="">Home <span class="ml-1 mr-1"><?php include get_template_directory() . '/img/icons/arrow-button.php'; ?></span></a>
            <p class="text-white text-12 leading-22 md:text-16 md:leading-26 font-medium flex items-center"><?php the_title() ?></p>
        </div>
    </div>
</section>
