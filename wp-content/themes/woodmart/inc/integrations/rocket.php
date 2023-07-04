<?php

if ( ! defined( 'WP_ROCKET_VERSION' ) ) {
	return;
}

if ( ! function_exists( 'woodmart_remove_elementor_css_from_exclude' ) ) {
	/**
	 * Remove from CSS exclude Elementor post file..
	 *
	 * @param array $excluded_files Excluded files.
	 *
	 * @return array
	 */
	function woodmart_remove_elementor_css_from_exclude( $excluded_files ) {
		$upload   = wp_get_upload_dir();
		$basepath = wp_parse_url( $upload['baseurl'], PHP_URL_PATH );

		if ( empty( $basepath ) ) {
			return $excluded_files;
		}

		$key = array_search( $basepath . '/elementor/css/(.*).css', $excluded_files, true );

		if ( false !== $key ) {
			unset( $excluded_files[ $key ] );
		}

		return $excluded_files;
	}

	add_action( 'rocket_exclude_css', 'woodmart_remove_elementor_css_from_exclude' );
}

if ( ! function_exists( 'woodmart_delay_js_exclusions' ) ) {
	/**
	 * Exclusions JS files.
	 *
	 * @param array $exclude_delay_js Exclude files.
	 * @return array
	 */
	function woodmart_delay_js_exclusions( $exclude_delay_js ) {
		if ( ! woodmart_get_opt( 'rocket_delay_js_exclusions', false ) ) {
			return $exclude_delay_js;
		}

		return wp_parse_args(
			$exclude_delay_js,
			array(
				'/jquery-?[0-9.](.*)(.min|.slim|.slim.min)?.js',
				'helpers',
				'scrollBar',
				'clickOnScrollButton',
				'searchFullScreen',
				'menuOffsets',
				'menuDropdowns',
				'cartWidget',
				'mobileNavigation',
				'loginSidebar',
				'menuSetUp',
				'cart-fragments',
				'slick',
				'productImages',
				'cookie.min',
				'owl.carousel',
				'owlCarousel',
				'imagesLoaded',
				'ageVerify',
				'magnific-popup',
			)
		);
	}

	add_filter( 'rocket_delay_js_exclusions', 'woodmart_delay_js_exclusions' );
}
