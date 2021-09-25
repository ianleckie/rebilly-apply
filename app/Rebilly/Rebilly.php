<?php

namespace App\Rebilly;

class Rebilly {

	public function genToken( $commandObj, $server, $port, $posting ) {

		$commandObj->info( $server );
		$commandObj->info( $port );
		$commandObj->info( $posting );

	}	

}
