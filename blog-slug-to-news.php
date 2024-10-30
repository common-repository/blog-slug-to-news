<?php
/**
 * Plugin Name: Change Blog to News
 * Plugin URI: danielsantoro.com/contact
 * Description: Changes the default "Blog" slug in URLs and administration sections to "News"
 * Version: 1.0.0
 * Author: Daniel Santoro
 * Author URI: danielsantoro.com
 */
/*  Copyright 2014  danielsantoro.com  (email : contact@danielsantoro.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function chrpica_blog_to_news() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News Posts';
    $submenu['edit.php'][10][0] = 'Add News Post';
    $submenu['edit.php'][16][0] = 'News Tags';
    echo '';
}
function chrpica_change_news_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News Post';
    $labels->add_new = 'Add News Post';
    $labels->add_new_item = 'Add News Post';
    $labels->edit_item = 'Edit News Post';
    $labels->new_item = 'News Post';
    $labels->view_item = 'View News Post';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News Posts found';
    $labels->not_found_in_trash = 'No News Posts found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
 
add_action( 'admin_menu', 'chrpica_blog_to_news' );
add_action( 'init', 'chrpica_change_news_object' );