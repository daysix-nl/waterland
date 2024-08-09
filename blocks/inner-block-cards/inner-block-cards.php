<section class="col-span-2 <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="bg-[#EDF1EF] clip-path-button p-4 flex flex-row w-full h-fit">
        <div>
            <?php include get_template_directory() . '/img/icons/card-svg.php'; ?>
        </div>
        <div class="ml-4 w-2/3">
            <p class="font-normal text-black text-16 leading-30"><?php the_field('tekst');?></p>
            <p class="font-bold text-black text-16 leading-30 mt-[5px]"><?php the_field('naam');?></p>
        </div>
    </div>
</section>