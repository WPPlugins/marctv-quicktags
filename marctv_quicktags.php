<?php

/*
  Plugin Name: MarcTV Quicktags
  Plugin URI: http://www.marctv.de/blog/2010/08/25/marctv-wordpress-plugins/
  Description: Displays a bold, italic, add link and quote button on top of the comment form
  Version: 1.9.1
  Author: Marc Tönsing
  Author URI: http://www.marctv.de
  Stable tag: 1.9.1
  License: GPL2
 */

function add_quicktag_scripts() {
  if (comments_open() && is_singular()) {
    wp_enqueue_script(
            "marctv_quicktags", WP_PLUGIN_URL . "/marctv-quicktags/marctv_quicktags.js", array("quicktags", "jquery"), "1.8", 1);

    wp_enqueue_style(
            "marctv_quicktags", WP_PLUGIN_URL . "/marctv-quicktags/marctv_quicktags.css", false, "1.8");

    wp_print_styles('editor-buttons');
  }
}

if (!is_admin()) {
  add_action('wp_print_styles', 'add_quicktag_scripts');
}
?>
