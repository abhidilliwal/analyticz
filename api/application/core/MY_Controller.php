<?php

//Exception classes are always needed
require_once 'generic/exceptions/Exceptions.php';
require_once 'generic/dao/ConnectionManager.php';
require_once 'generic/beans/Impression.php';
require_once 'generic/beans/ImpressionCriteria.php';
require_once 'generic/dao/BasicModel.php';
require_once 'generic/dao/ImpressionModel.php';

class MY_Controller extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    protected function _is_num_id($id) {
        return !empty($id) && is_numeric($id) && $id > 0;
    }

}

?>