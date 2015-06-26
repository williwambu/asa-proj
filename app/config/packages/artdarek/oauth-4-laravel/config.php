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
            'client_id'     => '1451051468548150',
            'client_secret' => '1109d6c2d00026a27ac059abc43691ea',
            'scope'         => array(),
        ),
        'Google' => array(
            'client_id'     => '1043244687822-k8po9iu719lktui8j2b835b71qakfs1p.apps.googleusercontent.com',
            'client_secret' => 'v5hQGW_Yd_7cYzoVEite9RBH',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),
    )

);