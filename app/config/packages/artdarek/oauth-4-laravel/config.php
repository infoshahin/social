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
        'Facebook' => array(
            'client_id'     => '355908991283776',
            'client_secret' => '343a8c31c1618d29c12a99b81bbf1317',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);