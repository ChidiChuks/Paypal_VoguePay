<?php

return array (

    /** set your paypal credential **/
'client_id' =>'ARyLivAopHLI51GFegWseCMYQbXCo03jtVd0AdWBJFqwwkR5fjMmlWMApRr_OfGXxuKWE-slZGgszwHC',
'secret' => 'EILocXC-Hvnbq9I8DT122Mm_Tggjm5WUyb37Gdzlir8TGLGZC9AsR2oH7INI4FVk0mOcpX1lF60771fA',
/**
* SDK configuration 
*/
'settings' => array(
	/**
	* Available option 'sandbox' or 'live'
	*/
	'mode' => 'sandbox',
	/**
	* Specify the max request time in seconds
	*/
	'http.ConnectionTimeOut' => 1000,
	/**
	* Whether want to log to a file
	*/
	'log.LogEnabled' => true,
	/**
	* Specify the file that want to write on
	*/
	'log.FileName' => storage_path() . '/logs/paypal.log',
	/**
	* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
	*
	* Logging is most verbose in the 'FINE' level and decreases as you
	* proceed towards ERROR
	*/
	'log.LogLevel' => 'FINE'
	),
    
);