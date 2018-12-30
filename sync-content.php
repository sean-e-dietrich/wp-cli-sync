<?php

$sync = function($args, $assoc_args) {
	WP_CLI::success( $args[0] );
}

WP_CLI::add_command( 'sync', $sync );
