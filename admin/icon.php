<?php
 
function add_orginal_hov_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-orginal-hover div.wp-menu-image:before {
content: "\f167";
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_orginal_hov_menu_icons_styles' );
?>