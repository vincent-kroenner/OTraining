<?php

require('inc/theme-enqueue.php');


// Remove the 32px Push Down from the Admin Bar : https://css-tricks.com/snippets/wordpress/remove-the-28px-push-down-from-the-admin-bar/
add_action('get_header', 'my_filter_head');

function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}


