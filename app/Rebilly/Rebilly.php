<?php

namespace App\Rebilly;

class Rebilly {

	private $command_obj;

	public function genToken( \App\Commands\GenToken $command_obj, $post_url, $posting ) {

		$this->command_obj = $command_obj;

		// simple & direct
		$curl_cmd = 'curl -s -X POST ' . $post_url . '/gentoken/' .
						' -H "Content-Type: application/json"' .
						' -d \'{"posting": ' . $posting . '}\'';

		$this->doCURL( $curl_cmd );

	}

	public function apply( \App\Commands\Apply $command_obj, $post_url, $token ) {

		$this->command_obj = $command_obj;

		// simple & direct
		$curl_cmd = 'curl -s -X POST ' . $post_url . '/apply/' .
						' -F "token=' . $token . '"';
						
		$my_info = json_decode( file_get_contents( 'my-info.json' ) );

		foreach( $my_info AS $prop => $data ) {
			$curl_cmd .= ' -F "' . $prop . '=' . $data . '"';
		}

		$this->doCURL( $curl_cmd );

	}

	// exec curl command and send output to app
	private function doCURL( $cmd ) {

		exec( $cmd, $output );

		foreach( $output AS $output_line ) {

			$this->command_obj->info( $output_line );

		}

	}

}
