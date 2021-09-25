<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class Apply extends Command
{
	/**
	 * The signature of the command.
	 *
	 * @var string
	 */
	protected $signature = 'apply
		{ url   : The URL of the API server (ie. http://localhost:8080) }
		{ token : The token recieved from gentoken }';

	/**
	 * The description of the command.
	 *
	 * @var string
	 */
	protected $description = "Apply to Rebilly via ApplyByAPI\n";

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle( \App\Rebilly\Rebilly $rebilly )
	{
		
		$url   = (string) $this->argument( 'url' );
		$token = (string) $this->argument( 'token' );

		$rebilly->apply( $this, $url, $token );

	}
}
