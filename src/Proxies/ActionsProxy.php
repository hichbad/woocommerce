<?php
/**
 * ActionsProxy class file.
 *
 * @package Automattic/WooCommerce/Tools/Proxies
 */

namespace Automattic\WooCommerce\Proxies;

/**
 * Proxy for interacting with WordPress actions and filters.
 *
 * This class should be used instead of directly accessing the WordPress functions, to ease unit testing.
 *
 * @package Automattic\WooCommerce\Tools\Proxies
 *
 * @public
 */
class ActionsProxy {

	/**
	 * Retrieve the number of times an action is fired.
	 *
	 * @param string $tag The name of the action hook.
	 *
	 * @return int The number of times action hook $tag is fired.
	 */
	public function didAction( $tag ) {
		return did_action( $tag );
	}

	/**
	 * Calls the callback functions that have been added to a filter hook.
	 *
	 * @param string $tag     The name of the filter hook.
	 * @param mixed  $value   The value to filter.
	 * @param mixed  ...$parameters Additional parameters to pass to the callback functions.
	 *
	 * @return mixed The filtered value after all hooked functions are applied to it.
	 */
	public function applyFilters( $tag, $value, ...$parameters ) {
		return apply_filters( $tag, $value, ...$parameters );
	}

	// TODO: Add the rest of the actions and filters related methods.
}