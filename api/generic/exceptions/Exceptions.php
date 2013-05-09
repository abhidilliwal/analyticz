<?php


/**
 *
 * Exception related to validation or something related to business
 * @author abhishek
 *
 */
class BusinessException extends Exception{

	function __construct($message = null, $code = null) {
		parent::__construct($message, $code);
	}
}


/**
 *
 * Exception related to database failure or something related to database
 * @author abhishek
 *
 */
class DBException extends Exception{

	function __construct($message = null, $code = null) {
		parent::__construct($message, $code);
	}
}

/**
 *
 * Exception related to System like failures or not-configured issues
 * @author abhishek
 */
class SystemException extends Exception{

	function __construct($message = null, $code = null) {
		parent::__construct($message, $code);
	}
}


set_exception_handler('show_error');
	//all the uncaught exceptions are being logged and the custom extension of CI_Exception is called (MY_Exception)

?>