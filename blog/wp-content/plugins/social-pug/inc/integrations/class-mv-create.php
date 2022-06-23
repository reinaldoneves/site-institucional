<?php

namespace Mediavine\Grow\Integrations;

use function add_filter;

if ( class_exists( '\Mediavine\Grow\Integrations\Integration' ) ) {
	/**
	 * Class MV_Create
	 *
	 * @package Mediavine\Grow\Integrations
	 */
	class MV_Create extends Integration {

		/** @var string[] */
		public $locations = [];

		/** @var null */
		private static $instance = null;

		/**
		 * @return Container|MV_Create|\Social_Pug|null
		 */
		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self;
				self::$instance->init();
			}

			return self::$instance;
		}

		/**
		 *
		 */
		public function init() {
			if ( $this->should_run() ) {
				add_filter( 'mv_grow_pinterest_bypass_classes', [ $this, 'list_image_bypass' ] );
			}
		}

		/**
		 * @return bool|mixed
		 */
		public function should_run() {
			return class_exists( 'Mediavine\Create\Plugin' );
		}

		/**
		 * Bypass Create List Images
		 *
		 * @param array $classes
		 *
		 * @return array
		 */
		public function list_image_bypass( $classes = [] ) {
			$classes[] = 'mv-list-single-img';

			return $classes;
		}
	}
}
