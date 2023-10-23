<?php

/**
 * Registers block patterns and categories.
 *
 * @since Medicare FSE
 *
 * @return void
 */

function medicare_fse_block_pattern_category() {

	$block_pattern_categories = array(
		'medicare-fse' => array( 'label' => esc_html__( 'Ascendoor Patterns', 'medicare-fse' ) ),
	);

	$block_pattern_categories = apply_filters( 'medicare_fse_block_pattern_category', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'medicare_fse_block_pattern_category' );
