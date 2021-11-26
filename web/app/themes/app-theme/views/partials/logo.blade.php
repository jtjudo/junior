<?php
/**
 * Displays the site logo. Falls back to the site name.
 *
 * @package MyApp
 */

?>
<div class="header-logo">
	@if ( function_exists( 'has_custom_logo' ) && has_custom_logo() )
		@php the_custom_logo() @endphp
	@endif
</div>
