function disable_flatsome_scripts() {
// Inaktivera laddningen av countup-scriptet
wp_dequeue_script( 'flatsome-countup' );
wp_deregister_script( 'flatsome-countup' );

// Inaktivera laddningen av sticky-sidebar-scriptet
wp_dequeue_script( 'flatsome-sticky-sidebar' );
wp_deregister_script( 'flatsome-sticky-sidebar' );

// Inaktivera laddningen av tooltips-scriptet
wp_dequeue_script( 'flatsome-tooltips' );
wp_deregister_script( 'flatsome-tooltips' );

// Inaktivera laddningen av vendors-popups-scriptet
wp_dequeue_script( 'flatsome-vendors-popups' );
wp_deregister_script( 'flatsome-vendors-popups' );

// Inaktivera laddningen av vendors-slider-scriptet
wp_dequeue_script( 'flatsome-vendors-slider' );
wp_deregister_script( 'flatsome-vendors-slider' );

// Inaktivera förhandsläsningen av scripten
remove_action( 'wp_head', 'flatsome_prefetch_scripts', 10 );

// Inaktivera laddningen av vendors-slider chunk-scriptet
wp_dequeue_script( 'flatsome-vendors-slider-chunk' );
wp_deregister_script( 'flatsome-vendors-slider-chunk' );
}

add_action( 'wp_enqueue_scripts', 'disable_flatsome_scripts', 9999 );
