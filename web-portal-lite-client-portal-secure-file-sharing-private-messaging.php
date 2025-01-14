<?php
/*
Plugin Name: WP-Client Lite :: Client Portals, File Sharing, Messaging & Invoicing
Plugin URI: http://www.WP-Client.com
Description:  WP-Client Lite is a Client Portal Management Plugin that gives you the power to add a private and secure client portal to your existing WordPress site. Create clients yourself, or allow them to self-register, and give clients access to private pages and other resources. Upgrade to PRO for more features like file sharing, private messaging, invoicing, and much more.
Author: WP-Client.com
Version: 1.1.1
Author URI: http://www.WP-Client.com
*/


class wpcclientlite {}


if ( class_exists( "WPC_Client_Common" ) ) {
    echo "You can not use Lite and Pro versions of the plugin at the same time.";
    exit;
} else {
    //current plugin version
    define( 'WPC_CLIENT_LITE_VER', '1.1.1' );
    define( 'WP_PASSWORD_GENERATOR_VERSION_WPCLIENT', '2.2' );

    // The text domain for strings localization
    define( 'WPC_CLIENT_TEXT_DOMAIN', 'wp-client' );

    require_once 'includes/class.common.php';

    if ( defined( 'DOING_AJAX' ) ) {
        require_once 'includes/class.admin_common.php';
        require_once 'includes/class.ajax.php';
    } elseif ( is_admin() ) {
        require_once 'includes/class.admin_common.php';
        require_once 'includes/class.admin_menu.php';
        require_once 'includes/class.admin_meta_boxes.php';
        require_once 'includes/class.admin.php';
    } else {
        require_once 'includes/class.user_common.php';
        require_once 'includes/class.user_shortcodes.php';
        require_once 'includes/class.user.php';
    }

    /////////// Add widget login/logout ///////////////
    require_once 'includes/widget.php';

    /////////// Add widget Portal Page list ///////////////
    require_once 'includes/widget_pp.php';

}