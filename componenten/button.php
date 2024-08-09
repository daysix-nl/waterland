<?php 
$link = get_field('button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
?>
    <a
        href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"     
        class="clip-path-button  relative text-white bg-dark-green hover:bg-green duration-300 h-5 text-16 leading-26 font-medium flex items-center"
    >
        <?php echo esc_html( $link_title ); ?>
    </a>
<?php endif; ?>