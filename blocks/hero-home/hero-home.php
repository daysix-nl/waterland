<!-- HERO-HOME -->
<section class="bg-[#EDF1EF]">
    <section class="relative h-screen">
        <div class="absolute h-full w-1/2 background-hero z-[1]"></div>
        <img class="absolute top-0 right-0 w-full h-full object-cover z-[2]" src="<?php the_field('afbeelding');?>" alt="<?php the_field('afbeelding_alt');?>">
        <div class="container flex-col h-full flex justify-center z-[3] relative">
            <h1 class="text-white font-heebo-bold text-45 md:text-80 leading-45 md:leading-80 max-w-[575px] md:pr-12"><?php the_field('titel');?></h1>
            <a class="clip-path-button w-fit px-2 relative text-white bg-dark-green hover:bg-green duration-300 h-[45px] text-16 leading-26 font-medium flex items-center mt-3" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><?php the_field('button_tekst');?> <span class="ml-2 pr-2"><?php include get_template_directory() . '/img/icons/arrow-button.php'; ?></span></a>
        </div>
    </section>
    <section class="mt-[-60px] z-[4] relative">
        <div class="container">
            <div class="py-6 bg-dark-green grid grid-cols-1 md:grid-cols-2 gap-[55px]">
                <div class="col-span-1 relative">
                    <img class="w-full h-full object-cover img-clip-path z-10 relative" src="<?php the_field('intro_afbeelding');?>" alt="<?php the_field('intro_afbeelding_alt');?>">
                    <div id="parallax-element" class="absolute right-0 bottom-8 image-full">
                        <?php include get_template_directory() . '/img/icons/logo-green.php'; ?>
                    </div>
                </div>
                <div class="col-span-1 flex flex-col md:pr-10 my-auto px-4 md:px-0">
                    <h2 class="mb-2 text-white text-40 leading-40 font-heebo-bold md:pr-5"><?php the_field('intro_titel');?></h2>
                    <p class="text-white text-16 leading-30 font-heebo-regular"><?php the_field('intro_tekst');?></p>
                    <a class="clip-path-button border-2 border-green w-fit px-2 relative text-white bg-dark-green hover:bg-green duration-300 h-[45px] text-16 leading-26 font-medium flex items-center mt-4" href="<?php the_field('intro_button_link');?>" id="<?php the_field('intro_button_id');?>"><?php the_field('intro_button_tekst');?> <span class="ml-2 pr-2"><?php include get_template_directory() . '/img/icons/arrow-button.php'; ?></span> <span class="bg-green clip-hoek"></span></a>
                </div>
            </div>
        </div>
    </section>
</section>
<script>
  // Initialize the scrollTrigger plugin
  gsap.registerPlugin(ScrollTrigger);

  gsap.to("#parallax-element", {
    y: 50,
    scrollTrigger: {
    //   trigger: "#parallax-element",
      start: "top 0px",
      end: "bottom 0px",
      scrub: 0.5,
    //   markers: true,
    },
  });
</script>
