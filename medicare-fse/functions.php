<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medicare FSE
 * @since 1.0.0
 */

if ( ! defined( 'MEDICARE_FSE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MEDICARE_FSE_VERSION', '1.0.1' );
}

if ( ! function_exists( 'medicare_fse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Medicare FSE 1.0.0
	 *
	 * @return void
	 */
	function medicare_fse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on medicare-fse, use a find and replace
		* to change 'medicare-fse' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'medicare-fse', get_template_directory() . '/languages' );

	}

endif;
add_action( 'after_setup_theme', 'medicare_fse_support' );

if ( ! function_exists( 'medicare_fse_get_fonts_url' ) ) :
	/**
	 * Return Google fonts URL.
	 */
	function medicare_fse_get_fonts_url() {
		$fonts_url = '';

		$font_families = array(
			'Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap',
			'Roboto:wght@100;300;400;500;700;900&display=swap',
			'Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap',
			'Merriweather:wght@300;400;700;900&display=swap',
			'Inter:wght@200;300;400;500;600;700;800;900&display=swap',
		);

		if ( ! empty( $font_families ) ) {

			$query_args = array(
				'family'  => implode( '&family=', $font_families ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		return $fonts_url;
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function medicare_fse_scripts() {

	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Fontawesome style.
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome' . $min . '.css', array(), '4.7.0' );

	// Main style.
	wp_enqueue_style( 'medicare-fse-style', get_template_directory_uri() . '/style.css', array(), MEDICARE_FSE_VERSION );

	// Google fonts.
	wp_enqueue_style( 'medicare-fse-google-fonts', wptt_get_webfont_url( medicare_fse_get_fonts_url() ), array(), null );

	// Custom js.
	wp_enqueue_script( 'medicare-fse-custom-script', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array( 'jquery' ), MEDICARE_FSE_VERSION );

}
add_action( 'wp_enqueue_scripts', 'medicare_fse_scripts' );

function medicare_fse_editor_styles() {

	add_editor_style(
		array(
			medicare_fse_get_fonts_url(),
		)
	);

}
add_action( 'admin_init', 'medicare_fse_editor_styles' );

/**
 * Add block patterns.
 */
require get_template_directory() . '/block-patterns.php';

/**
 * Webfont Loader.
 */
require get_template_directory() . '/inc/wptt-webfont-loader.php';

/*
 * Admin Notice.
 */
function medicare_fse_notice() {

	$theme_data = wp_get_theme();

	$go_to_pro         = 'https://ascendoor.com/themes/medicare-fse-pro/';
	$demo_url          = 'https://demos.ascendoor.com/medicare-fse/';
	$theme_info        = $theme_data->get( 'ThemeURI' );
	$documentation_url = 'https://docs.ascendoor.com/docs/medicare-fse/';
	$theme_support     = $theme_data->get( 'AuthorURI' ) . 'contact/';

	?>
	<div class="notice notice-success is-dismissible">
		<p><?php esc_html_e( 'Thank you for installing the Medicare FSE theme!', 'medicare-fse' ); ?></p>
		<p>
			<a class="button-primary" href="<?php echo esc_url( $go_to_pro ); ?>" target="_blank"><?php esc_html_e( 'Go to pro', 'medicare-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $demo_url ); ?>" target="_blank"><?php esc_html_e( 'Theme Demo', 'medicare-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $theme_info ); ?>" target="_blank"><?php esc_html_e( 'Theme Information', 'medicare-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $documentation_url ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'medicare-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $theme_support ); ?>" target="_blank"><?php esc_html_e( 'Support?', 'medicare-fse' ); ?></a>
		</p>
	</div>

	<?php
}

add_action( 'admin_notices', 'medicare_fse_notice' );
