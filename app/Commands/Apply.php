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
        { server  : The URL of the API server }
        { port    : The port of the API server }
        { token   : The token recieved from gentoken }';

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
        
        $server = (string) $this->argument( 'server' );
        $port   = (int)    $this->argument( 'port' );
        $token  = (string) $this->argument( 'token' );

        $rebilly->apply( $this, $server, $port, $token );

    }
}
