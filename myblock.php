<?php
/**
 * Plugin Name: My Block
 * Plugin URI: http://gas-webmaster.ru
 * Description: Gutenberg Block
 * Author: Glazurin Alexey
 * Author URI: http://gas-webmaster.ru
 */

function gas_myblock_init()
{
	register_block_type_from_metadata(__DIR__);
}

add_action('init', 'gas_myblock_init');