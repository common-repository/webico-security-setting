<?php
function wbc_custom_menu_page_removing() {
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'index.php' );
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'sitepress-multilingual-cms/menu/languages.php' );    //Pages
    remove_menu_page( 'itsec' );    //Pages
}
add_action( 'admin_menu', 'wbc_custom_menu_page_removing' );


add_filter('acf/settings/show_admin', '__return_false');
