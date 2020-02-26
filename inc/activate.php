<?php
// This file output message if the current version of WP is lower.

function yauza_activate_plugin()
{
    if( version_compare( get_bloginfo( 'version' ), '4.5', '<') )
    {
        wp_die('You must update Wordpress to use this Plugin' );
    }
}
