<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class GenToken extends Command
{
	/**
	 * The signature of the command.
	 *
	 * @var string
	 */
	protected $signature = 'gentoken
		{ url   : The URL of the API server (ie. http://localhost:8080) }
		{ posting : The posting ID to apply for }';

	/**
	 * The description of the command.
	 *
	 * @var string
	 */
	protected $description = "Generate an ApplyByAPI token for Rebilly\n";

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle( \App\Rebilly\Rebilly $rebilly )
	{
		
		$url     = (string) $this->argument( 'url' );
		$posting = (int)    $this->argument( 'posting' );

		$rebilly->genToken( $this, $url, $posting );

	}
}
