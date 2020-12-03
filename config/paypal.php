<?php
return array(
    // set your paypal credential
    'client_id' => 'ARPaSRTqlov4L4JD5qslc-pQXIwWqomgV0G4bmxShGSI7oTphPLRbNn8EQ2DgOpn37LQN026Kn71aGSe',
    'secret' => 'EJTsGIJIvf7UeuRVxBs-ZG9EEFPqR9D_DzF48fwEfAc_yuhpfKg92msVpu-o5k_MXypzLa0KchrfVI4c',

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