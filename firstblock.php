<?php

/**
 * Plugin Name: First Block
 * Plugin URI: https://sohye.dev/
 * Description: My first block
 * Author: Sohye Kim
 * Author URI: https://sohye.dev/
 */


function blocks_course_firstblock_init()
{
    register_block_type_from_metadata(__DIR__);
}

add_action("init", "blocks_course_firstblock_init");
