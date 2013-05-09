<?php
/**
 * Extended for the Exception handling which are not being caught by the application
 * @author abhishek
 */
class MY_Exceptions extends CI_Exceptions{

    function __construct() {
        parent::__construct();
    }

    /**
     * although it does what the core function do but it catches all the uncaught exceptions
     * @see system/core/CI_Exceptions::show_error()
     */
    function show_error($heading, $message, $template = 'error_general', $status_code = 500){
        if ($message instanceof Exception) { //our all exceptions are being extended from Exception class
            log_message('error', 'Uncaught EXCEPTION: '. $message); //log the message
            $message = 'System Exception'; // Don't show on front what went wrong!
        }
        //call the normal function
        return parent::show_error($heading, $message, $template, $status_code);
    }
}

?>