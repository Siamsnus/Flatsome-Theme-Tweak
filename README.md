Inaktivera Flatsome-skript Det här är en enkel kodsnutt för att inaktivera vissa Flatsome-skript som kan vara överflödiga för din WordPress-webbplats. Genom att inaktivera dessa skript kan du förbättra webbplatsens prestanda.

Beskrivning Koden inaktiverar följande skript:

Countup-scriptet Sticky-sidebar-scriptet Tooltips-scriptet Vendors-popups-scriptet Vendors-slider-scriptet Förhandsläsning av skript Vendors-slider-chunk-scriptet Hur man lägger till koden i functions.php Följ dessa steg för att lägga till koden i din functions.php-fil:

Öppna din WordPress-webbplats mapp. Gå till wp-content/themes/[ditt-tema]-mappen, där [ditt-tema] är namnet på ditt aktiva tema. Öppna functions.php-filen i en textredigerare. Kopiera koden ovan och klistra in den i slutet av functions.php-filen. Spara filen och ladda upp den till din webbserver om du redigerade filen lokalt. Observera att det är rekommenderat att använda ett barn-tema när du gör ändringar i functions.php-filen för att undvika att dina ändringar skrivs över vid framtida uppdateringar av ditt huvudtema.

Efter att ha lagt till koden i functions.php kommer de ovannämnda skripten att inaktiveras, och det kan förbättra prestandan för din WordPress-webbplats.

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


