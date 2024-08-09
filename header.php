<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://sst.waterland-bouw.nl/tlkxgtzd.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WP4SKQT');</script>
<!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page-block ' ); ?> id="up">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://sst.waterland-bouw.nl/ns.html?id=GTM-WP4SKQT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="bg-black/[0.5] h-7 fixed top-0 right-0 w-full z-[15]">
        <div class="container grid grid-cols-3 gap-3 h-full">
            <div class="col-span-1 hidden lg:flex items-center h-full">
                <?php if( have_rows('header_links', 'option') ): ?>
                    <?php while( have_rows('header_links', 'option') ): the_row(); ?>
                        <a id="<?php the_sub_field('id_link', 'option') ?>" class="text-white text-16 leading-26 font-heebo-medium md:mr-2 xl:mr-4 last-of-type:mr-0 hover:text-green hover:transition-colors" href="<?php the_sub_field('url_link', 'option') ?>"><?php the_sub_field('naam_link', 'option') ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-span-2 lg:col-span-1 flex lg:justify-center items-center">
                <a href="/">
                    <?php include get_template_directory() . '/img/icons/logo.php'; ?>
                </a>
            </div>
            <div class="col-span-1 hidden lg:flex items-center h-full justify-end">
                <?php if( have_rows('header_rechts', 'option') ): ?>
                    <?php while( have_rows('header_rechts', 'option') ): the_row(); ?>
                        <a id="<?php the_sub_field('id_link', 'option') ?>" class="text-white text-16 leading-26 font-heebo-medium md:mr-2 xl:mr-4 last-of-type:mr-0 hover:text-green hover:transition-colors" href="<?php the_sub_field('url_link', 'option') ?>"><?php the_sub_field('naam_link', 'option') ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-span-1 lg:hidden flex justify-end">
                <button class="hamburger-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <?php include get_template_directory() . '/componenten/navbar.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>


<?php if (get_field('zichtbaarheid', 'option') !== "uit"): ?>   
    <?php if(!isset($_COOKIE["popup"]) || $_COOKIE["popup"] !== "yes") { ?>
        <?php
        $image = get_field('afbeelding_popup', 'option');
        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
        ?>
        <?php
        $link = get_field('link_popup', 'option');
        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
        ?>
        <div class="pop_up fixed top-0 left-0 w-screen flex  z-20 justify-center items-center h-screen overflow-scroll py-5">
            <div class="overlay-mobile open z-[1]"></div>
            <div class="m-auto flex flex-col bg-[#edf1ef] w-full mx-2 px-[0px] pt-0 pb-3 md:max-w-[481px] lg:px-0 lg:pb-2 lg:pt-0 lg:max-w-[594px] rounded-[0px] relative z-[999]">
                <button class="closePopUp absolute top-3 right-3 bg-[#1c4638] rounded-[0px] px-[5px] py-[5px] lg:hover:opacity-80">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.799" height="19.799" viewBox="0 0 19.799 19.799">
                    <g id="Group_431" data-name="Group 431" transform="translate(-8.485 9.899) rotate(-45)">
                        <line id="Line_55" data-name="Line 55" y2="26" transform="translate(13 0)" fill="none" stroke="#fff" stroke-width="2"/>
                        <line id="Line_56" data-name="Line 56" y2="26" transform="translate(26 13) rotate(90)" fill="none" stroke="#fff" stroke-width="2"/>
                    </g>
                    </svg>
                </button>
                <?php if (get_field('afbeelding_popup', 'option')): ?>  
                <div class="h-auto aspect-[16/8] rounded-[0px] overflow-hidden mb-[25px] lg:mb-2">
                    <img class="min-w-full min-h-full object-cover object-center" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                </div>
                <?php else: ?>
                <div class="mt-[80px]"></div>
                <?php endif; ?>
                <div class="px-[15px] md:px-[30px] py-[0px] md:py-[20px]">
                    <?php if (get_field('titel_popup', 'option')): ?>   
                    <h2 class="text-[#1c4638] text-40 leading-40 font-heebo-bold w-full pb-1 md:pb-[10px]"><?php echo get_field('titel_popup', 'option');?></h2>
                    <?php endif; ?>
                    <?php if (get_field('tekst_popup', 'option')): ?>   
                    <div class="text-black text-16 leading-30 font-heebo-regular w-full text-editor"><?php echo get_field('tekst_popup', 'option');?></div>
                    <?php endif; ?>
                    <?php if (get_field('link_popup', 'option')): ?>   
                    <a href="<?php echo $link_url; ?>" class="clip-path-button w-fit px-2 relative text-white bg-dark-green hover:bg-green duration-300 h-[45px] text-16 leading-26 font-medium flex items-center mt-2" target="<?php echo $link_target; ?>"><?php echo $link_text; ?><span class="ml-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="6.75" height="12" viewBox="0 0 6.75 12">
                    <path id="Fill_1" data-name="Fill 1" d="M.469,12a.471.471,0,0,1-.331-.135.457.457,0,0,1,0-.653L5.425,6,.137.789a.457.457,0,0,1,0-.653A.473.473,0,0,1,.8.135L6.75,6,.8,11.865A.471.471,0,0,1,.469,12" fill="#fff"></path>
                    </svg>
                    </span></a>
                    <?php endif; ?>
                </div>
            </div>
           
        </div>
    <?php } ?>
<?php endif; ?>
