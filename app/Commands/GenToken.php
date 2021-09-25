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
		{ server  : The URL of the API server }
		{ port    : The port of the API server }
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
		
		$server  = (string) $this->argument( 'server' );
		$port    = (int)    $this->argument( 'port' );
		$posting = (int)    $this->argument( 'posting' );

		$rebilly->genToken( $this, $server, $port, $posting );

	}
}
