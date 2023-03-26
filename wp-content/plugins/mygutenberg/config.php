<?php
function create_block_gutenpride_block_init() {
    register_block_type("block-custom");
}
add_action( 'init', 'create_block_gutenpride_block_init' );