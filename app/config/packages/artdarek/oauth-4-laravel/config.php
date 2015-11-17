<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        
        'Google' => array(
			    'client_id'     => '426907591843-17nsu1lhu9v9ai9h08a3kg86jddk074i.apps.googleusercontent.com',
			    'client_secret' => 'FJjKKyXE6v4K3kZ56tz3rMan',
			    'scope'         => array('userinfo_email', 'userinfo_profile'),
			),  		

	)

);