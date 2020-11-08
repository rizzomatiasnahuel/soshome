<?php
return array(
    // set your paypal credential
    'client_id' => 'AcUedl_xv6hXMxa_oO0c1uWyI5XLbOU2k31AeJu2HdihhtL6NuAThyrqXghPY5QrNbBGd9EXM61644Y3',
    'secret' => 'ECvB4taPcGAKDURwDEm1QSLX5wkghAIkAh35TNL3RYp6t8O5a_Nmc5orwAUu_aSs8ceYukt0n7mQsZoU',

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
        'http.ConnectionTimeOut' => 30,

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
        'log.LogLevel' => 'ERROR'
    ),
);