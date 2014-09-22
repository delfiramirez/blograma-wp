<?php

// --------------------------------------------
// --  CUSTOM ADMIN CSS LOGIN    --
// --------------------------------------------

function login_enqueue_scripts () {

 echo '<div class="background-cover"></div>

<style type="text/css" media "screen">

.background-cover {
background: url(public/images//2014/08/WPfondo.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
position: fixed;
top: 0;
left: 0;
z-index: 10;
overflow: hidden;
width: 100%;
height: 100%;
}

#login {
z-index: 9999;
position: relative;
}

.login form {
width: 300px;
background:#111;
margin: 0 auto;
position: relative;
z-index: 5;
border-radius: 5px;
background: #fff;
border: 1px solid #fff;
box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.5);
-webkit-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.5);
}

.login form.header span {
font-size: 13px;
line-height: 16px;
color: #678889;
font-weight: 400;
text-shadow: 1px 1px 0 rgba(256, 256, 256, 1.0);
}

.login-form .content {
padding: 0;
position: relative;
z-index: 1;
}

.login form .input {
width: 188px!important;
padding: 15px 25px;
font-weight: 400;
font-size: 14px;
color: #9d9e9e;
text-shadow: 1px 1px 0 rgba(256, 256, 256, 1.0);
border: 1px solid #fff;
border-radius: 5px;
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
-moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
}

.login form .input:hover {
color: #414848;
}

.login form .input:focus {
background: #fdfdfd;
color: #414848;
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
-moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
}

input {
outline: none;
}

.login form .header h1 {

}

a{
padding:0;
margin:0;
}

.login h1 a{
background-image: url(http://segonquart.net/data-fm/icons/blograma.png);
background-size: 80px 80px;
background-position: center top;
background-repeat: no-repeat;
display: block;
margin-bottom: 10px;
text-align: center;
margin-top: 15px;
}

.login h1 a {
background-image: url(http://segonquart.net/data-fm/icons/blograma.png) !important;
}

#login_error, .login .message {
display:none;
}

.wp-core-ui .button-primary {
float:right;
padding: 11px 25px;
font-weight: 300;
font-size: 18px;
color: #fff;
text-shadow: 0px 1px 0 rgba(0, 0, 0, 0.25);
border-radius:5px;
background: #F15A29;
border: 1px solid #fff;
cursor: pointer;
box-shadow: inset 0 0 2px rgba(256, 256, 256, 0.75);
-moz-box-shadow: inset 0 0 2px rgba(256, 256, 256, 0.75);
-webkit-box-shadow: inset 0 0 2px rgba(256, 256, 256, 0.75);
}

.button:active, .submit input:active, .button-secondary:active {
display: block;
float: right;
padding: 10px;
margin-right: 20px;
background: none;
border: none;
cursor: pointer;

font-weight: 300;
font-size: 18px;
color: #414848;
text-shadow: 0px 1px 0 rgba(256, 256, 256, 0.5);
}

.login #nav a, .login #backtoblog a {
color: #fff !important;
text-shadow: none!important;
}

.login #nav a:hover, .login #backtoblog a:hover {
color: #96C800 !important;
text-shadow: none!important;
}

.login #nav, .login #backtoblog {
text-shadow: none!important;
}

.login form .input .password, .login form .input .pass-icon {
margin-top: 25px;
}

.error-password {
top: 73px;
}

.user-icon, .pass-icon, .error-login, .error-password {
width: 46px;
height: 47px;
display: block;
position: absolute;
left: 0px;
padding-right: 2px;
z-index: -3;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
-webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;
}

.user-icon {
top: 0;
background: #171717 url(src/images/user-icon.png) no-repeat center;
}

.pass-icon {
top: 48px;
background: #171717 url(src/images/pass-icon.png) no-repeat center;
}

.input, .user-icon, .pass-icon, .button, .register {
transition: all 0.5s;
-moz-transition: all 0.5s;
-webkit-transition: all 0.5s;
-o-transition: all 0.5s;
-ms-transition: all 0.5s;
}

.login form .footer {
padding: 20px 30px 30px;
overflow: auto;
}

.login form .footer .button {
float:right;
padding: 11px 25px;
font-weight: 300;
font-size: 18px;
color: #fff;
text-shadow: 0px 1px 0 rgba(0, 0, 0, 0.25);
border-radius:5px;
background: #F15A29;
border: 1px solid #fff;
cursor: pointer;
box-shadow: inset 0 0 2px rgba(256, 256, 256, 0.75);
-moz-box-shadow: inset 0 0 2px rgba(256, 256, 256, 0.75);
-webkit-box-shadow: inset 0 0 2px rgba(256, 256, 256, 0.75);
}

.login form .footer .button:hover {
background: #171717;
border: 1px solid rgba(256, 256, 256, 0.75);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
-moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.login form .footer .button:focus {
position: relative;
bottom: -1px;
background: #56c2e1;
box-shadow: inset 0 1px 6px rgba(256, 256, 256, 0.75);
-moz-box-shadow: inset 0 1px 6px rgba(256, 256, 256, 0.75);
-webkit-box-shadow: inset 0 1px 6px rgba(256, 256, 256, 0.75);
}


.login form .footer .register {
display: block;
float: right;
padding: 10px;
margin-right: 20px;
background: none;
border: none;
cursor: pointer;
font-weight: 300;
font-size: 18px;
color: #414848;
text-shadow: 0px 1px 0 rgba(256, 256, 256, 0.5);
}

#login-form .footer .register:hover {
color: #3f9db8;
}

#login-form .footer .register:focus {
position: relative;
bottom: -1px;
}

.company {
margin-bottom: 45px;
min-width: 600px;
}

.company a {
width: 100%;
max-width: 600px;
}

.company a img {
left: 50%;
position: relative;
}

.inputs {
background: #FFFFFF;
padding: 0 30px 15px;
}

.error-login, .error-password {
background: url(src/images/error.png) no-repeat scroll center center #171717;
left: -49px;
}

.company {
margin-bottom: 20px;
}

</style>';
}

add_action('login_enqueue_scripts', 'login_enqueue_scripts');

// --------------------------------------------
// -- ADMIN:ADD EXCERPT TO PAGES --
// --------------------------------------------

function blograma_excerpts_to_pages () {
 add_post_type_support('page', 'excerpt');
}

add_action('init', 'blograma_excerpts_to_pages');

// --------------------------------------------
// --  METABOXES ADMIN FOR SEO  --
// --------------------------------------------

function blograma_create () {
 $screens=array('post', 'page');
 foreach ($screens as $screen) {
  add_meta_box('blograma-meta', 'SEO Buscadores', 'blograma_mb_function', $screen, 'normal', 'high');
 }
}

add_action('add_meta_boxes', 'blograma_create');

function blograma_mb_function ($post) {
 $blograma_meta_title      =get_post_meta($post->ID, '_blograma_meta_title', true);
 $blograma_meta_description=get_post_meta($post->ID, '_blograma_meta_description', true);
 wp_nonce_field('blograma_inner_custom_box', 'blograma_inner_custom_box_nonce');
 echo '<div style="margin: 10px 100px; text-align: center">
    <table>
        <tr>
            <td><strong>Title Tag:</strong></td><td>
            <input style="padding: 6px 4px; width: 300px" type="text" name="blograma_meta_title" value="'.esc_attr($blograma_meta_title).'" />
            </td>
        </tr>
        <tr>
            <td><strong>Meta Descripcion:</strong></td><td><textarea  rows="3" cols="50" name="blograma_meta_description">'.esc_attr($blograma_meta_description).'</textarea></td>
        </tr>
    </table>
</div>';
}

function blograma_save_data ($post_id) {

 if (!isset($_POST['blograma_inner_custom_box_nonce']))
  return $post_id;
 $nonce=$_POST['blograma_inner_custom_box_nonce'];
 if (!wp_verify_nonce($nonce, 'blograma_inner_custom_box'))
  return $post_id;
 if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE)
  return $post_id;
 if ('page'==$_POST['post_type']){
  if (!current_user_can('edit_page', $post_id))
   return $post_id;
 } else{
  if (!current_user_can('edit_post', $post_id))
   return $post_id;
 }
 $old_title      =get_post_meta($post_id, '_blograma_meta_title', true);
 $old_description=get_post_meta($post_id, '_blograma_meta_description', true);
 $title          =sanitize_text_field($_POST['blograma_meta_title']);
 $description    =sanitize_text_field($_POST['blograma_meta_description']);
 update_post_meta($post_id, '_blograma_meta_title', $title, $old_title);
 update_post_meta($post_id, '_blograma_meta_description', $description, $old_description);
}

add_action('save_post', 'blograma_save_data');

function blograma_display () {
 global $post;
 $blograma_meta_title      =get_post_meta($post->ID, '_blograma_meta_title', true);
 $blograma_meta_description=get_post_meta($post->ID, '_blograma_meta_description', true);
}

add_action('wp_head', 'blograma_display');

// --------------------------------------------
// --  ADMIN: CLEAR ADMIN BAR  --
// --------------------------------------------

add_action('wp_before_admin_bar_render', 'blograma_admin_bar');

function blograma_admin_bar () {
 global $wp_admin_bar;

 $wp_admin_bar->remove_node('about');
 $wp_admin_bar->remove_node('wporg');
 $wp_admin_bar->remove_node('feedback');
 $wp_admin_bar->remove_node('view-site');
 $wp_admin_bar->remove_menu('comments');
 $wp_admin_bar->remove_menu('new-content');
 $wp_admin_bar->remove_menu('user-info');
 $wp_admin_bar->remove_menu('edit-profile');
}

// --------------------------------------------
// --  ADMIN :REMOVE TAB OPTIONS -
// --------------------------------------------

add_filter('screen_options_show_screen', '__return_false');

// --------------------------------------------
// --  REMOVE NAV SUB MENUS  --
// --------------------------------------------

function blograma_remove_submenus () {
 global $submenu;
 unset($submenu['themes.php'][5]);
 unset($submenu['options-general.php'][25]);
 unset($submenu['tools.php'][5]);
 unset($submenu['tools.php'][10]);
 unset($submenu['tools.php'][15]);
}

add_action('admin_menu', 'blograma_remove_submenus');

// --------------------------------------------
// ADMIN: remove version info from head and feeds  --
// --------------------------------------------

function blograma_complete_version_removal () {
 return '';
}

add_filter('the_generator', 'blograma_complete_version_removal');
add_filter('the_content_more_link', 'remove_more_jump_link');

// --------------------------------------------
// ADMIN:  REMOVE AUTHOR COLUMN FROM PAGES LIST  --
// --------------------------------------------

remove_action('wp_head', 'wp_generator');
add_filter('login_errors', create_function('$a', "return null;"));
add_action('admin_menu', 'blograma_meta_boxes');

function blograma_meta_boxes () {
 remove_meta_box('commentsdiv', 'post', 'normal');
 remove_meta_box('revisionsdiv', 'post', 'normal');
 remove_meta_box('slugdiv', 'post', 'normal');
 remove_meta_box('trackbacksdiv', 'post', 'normal');
 remove_meta_box('commentstatusdiv', 'post', 'normal');
 remove_meta_box('authordiv', 'page', 'normal');
}

// --------------------------------------------
// ADMIN:  Remove admin name in comments class
// --------------------------------------------

function remove_comment_author_class ($classes) {
 foreach ($classes as $key=> $class) {
  if (strstr($class, "comment-author-")){
   unset($classes[$key]);
  }
 }
 return $classes;
}

add_filter('comment_class', 'remove_comment_author_class');

// --------------------------------------------
// -- ADMIN: REMOVE MENU ITEMS
// --------------------------------------------

function remove_admin_menu_items () {
 $remove_menu_items=array(
     __('Dashboard'),
     __('Escritorio'),
     __('Comments'),
     __('Tools'),
     __('Feedback'),
     __('Posts'),
         //__('Plugins')
 );
 global $menu;
 end($menu);
 while (prev($menu)) {
  $item=explode(' ', $menu[key($menu)][0]);
  if (in_array($item[0]!=NULL?$item[0]:"", $remove_menu_items)){
   unset($menu[key($menu)]);
  }
 }
}

add_action('admin_menu', 'remove_admin_menu_items');

// --------------------------------------------
// -- ADMIN // force one-column dashboard
// --------------------------------------------

function blograma_screen_layout_columns ($columns) {
 $columns['dashboard']=1;
 return $columns;
}

add_filter('screen_layout_columns', 'blograma_screen_layout_columns');

function blograma_screen_layout_dashboard () {
 return 1;
}

add_filter('get_user_option_screen_layout_dashboard', 'shapeSpace_screen_layout_dashboard');

// --------------------------------------------
// -- ADMIN// force one-column posts
// --------------------------------------------

function blograma_screen_layout_columns ($columns) {
 $columns['post']=1;
 return $columns;
}

add_filter('screen_layout_columns', 'blograma_screen_layout_columns');

function blograma_screen_layout_post () {
 return 1;
}

add_filter('get_user_option_screen_layout_post', 'blograma_screen_layout_post');

// --------------------------------------------
// --  ADMIN: REMOVE DASHBOARD WIDGETS --
// --------------------------------------------
function remove_dashboard_meta () {
 remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
 remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
 remove_meta_box('dashboard_primary', 'dashboard', 'normal');
 remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
 remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
 remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
}

add_action('admin_init', 'remove_dashboard_meta');

// --------------------------------------------
// --  ADMIN: MOODIFY FOOTER ADMIN  --
// --------------------------------------------

function modify_footer_admin () {
 echo "Website enhanced by <a href='http://segonquart.net'>Delfi Ramirez - Segonquart Studio</a>.";
}

add_filter('admin_footer_text', 'modify_footer_admin');

function blograma_remove_version () {
 remove_filter('update_footer', 'core_update_footer');
}

add_filter('admin_menu', 'blograma_remove_version');

// --------------------------------------------
// ADMIN: REPLACE HOWDY --
// --------------------------------------------

function replace_howdy ($wp_admin_bar) {
 $my_account=$wp_admin_bar->get_node('my-account');
 $newtitle  =str_replace('Howdy,', 'OHLA', $my_account->title);
 $wp_admin_bar->add_node(array(
     'id'   =>'my-account',
     'title'=>$newtitle,
 ));
}

add_filter('admin_bar_menu', 'replace_howdy', 25);

// --------------------------------------------
// --  ENABLE SLIMPACK   --
// --------------------------------------------

add_filter('use_default_gallery_style', '__return_null');
add_filter('jetpack_enable_open_graph', '__return_false', 99);
defined('JETPACK__API_BASE') or define('JETPACK__API_BASE', 'https://jetpack.wordpress.com/jetpack.');
define('JETPACK__API_VERSION', 1);
remove_action('wp_head', 'jetpack_og_tags');

// --------------------------------------------
// ADMIN:  CLEAR SLIMPACK UNNEEDED  --
// --------------------------------------------

function remove_jetpack_styles () {
 wp_deregister_style('AtD_style');
 wp_deregister_style('jetpack-carousel');
 wp_deregister_style('grunion.css');
 wp_deregister_style('the-neverending-homepage');
 wp_deregister_style('infinity-twentyten');
 wp_deregister_style('infinity-twentyeleven');
 wp_deregister_style('infinity-twentytwelve');
 wp_deregister_style('noticons');
 wp_deregister_style('post-by-email');
 wp_deregister_style('publicize');
 wp_deregister_style('sharedaddy');
 wp_deregister_style('sharing');
 wp_deregister_style('stats_reports_css');
 wp_deregister_style('jetpack-widgets');
}

add_action('wp_print_styles', 'remove_jetpack_styles');

function remove_jetpack_scripts () {
 if (!is_single()){
  wp_deregister_script('sharedaddy');
  wp_deregister_script('sharing');
 }
}

add_action('wp_print_scripts', 'remove_jetpack_scripts', 100);

// --------------------------------------------
// --  CLEANER  --
// --------------------------------------------

function clean_header () {
 wp_deregister_script('comment-reply');
}

add_action('init', 'clean_header');
add_action('init', 'remheadlink');

function bfm_headlink () {
 remove_action('wp_head', 'rsd_link');
 remove_action('wp_head', 'wlwmanifest_link');
 remove_action('wp_head', 'wp_generator');
 remove_action('wp_head', 'wp_shortlink_wp_head');
 remove_action('wp_head', 'feed_links_extra', 3);
 remove_action('wp_head', 'feed_links', 2);
 remove_action('wp_head', 'wlwmanifest_link');
}

unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);

// --------------------------------------------
// --  CUSTOM FILTER BODY TYPES  --
// --------------------------------------------

add_filter('body_class', 'blograma_body_class', 10, 2);

function blograma_body_class ($wp_classes, $extra_classes) {

 $whitelist =array('custom-background', 'content-left', 'has-sidebar', 'custom-background--full');
 $wp_classes=array_intersect($wp_classes, $whitelist);
 return array_merge($wp_classes, (array) $extra_classes);
}

add_filter('pre_get_posts', 'namespace_add_custom_types');

// --------------------------------------------
// --  CUSTOM FILTER POST TYPES  --
// --------------------------------------------

function namespace_add_custom_types ($query) {
 if (is_category()||is_tag()&&empty($query->query_vars['suppress_filters'])){
  $query->set('post_type', array(
      'post', 'nav_menu_item', 'libros', 'audiotheme-video', 'audiotheme-record', 'noticias'
  ));
  return $query;
 }
}

add_filter('getarchives_where', 'blograma_getarchives_where_filter', 10, 2);

function blograma_getarchives_where_filter ($where, $r) {
 $args      =array('public'=>true, '_builtin'=>false);
 $output    ='names';
 $operator  ='and';
 $post_types=get_post_types($args, $output, $operator);
 $post_types=array_merge($post_types, array('post', 'libros', 'audiotheme-video', 'audiotheme-record', 'noticias'));
 $post_types="'".implode("' , '", $post_types)."'";
 return str_replace("post_type = 'post'", "post_type IN ( $post_types )", $where);
}
?>