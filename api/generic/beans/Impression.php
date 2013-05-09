<?php

/**
 *
 * @author Abhishek
 *
 */
class Impression {

    const PUBLISH_STATUS_PUBLISHED = 1;
    const PUBLISH_STATUS_UNPUBLISHED = 0;

    public $id;
    public $clickCount;
    public $viewCount;
    public $sourceId;
    public $siteId;
    public $date;

    function __construct() {
    }

    function __set($name, $value) {
        switch ($name) {
            case 'imp_id':
                $this->id = (int)$value;
                break;
            case 'imp_click_count':
                $this->clickCount = (int)$value;
                break;
            case 'imp_view_count':
                $this->viewCount = (int)$value;
                break;
            case 'imp_source_id':
                $this->sourceId = (int)$value;
                break;
            case 'imp_date':
                $this->date = (int)$value;
                break;
            case 'imp_site_id':
                $this->siteId = (int)$value;
                break;
        }
    }
}


?>