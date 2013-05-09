<?php

/**
 *
 * @author Abhishek
 *
 */
class ImpressionModel extends BasicModel {

    function __construct(){
        parent::__construct();
    }


    /**
     *
     * @param Impression $imp
     */
    function search ($impCriteria, $pageno =1, $pagesize = 30) {

        $doBinding = array("dates" => false, "source" => false, "site" => false);

        $result = array();

        $startPoint = ($pageno-1) * $pagesize;

        $sql = 'SELECT * FROM `impression` where ';

        if (isset($impCriteria->startDate) && isset($impCriteria->endDate)) {
            $sql .= '(`imp_date` between :startDate and :endDate) and ';
            $doBinding["dates"] = true;
        }
        if (isset($impCriteria->sourceId)) {
            $sql .= '(`imp_source_id` = :sourceId and ';
            $doBinding["source"] = true;
        }
        if (isset($impCriteria->siteId)) {
            $sql .= '(`imp_site_id` = :siteId and ';
            $doBinding["site"] = true;
        }
        $sql .= '1 order by imp_date desc limit :startPoint , :recordCount';


        $statement = $this->db->prepare($sql);
        if ($doBinding["dates"] === true) {
            $statement->bindParam('startDate', $impCriteria->startDate, PDO::PARAM_INT);
            $statement->bindParam('endDate', $impCriteria->endDate, PDO::PARAM_INT);
        }
        if ($doBinding["source"] === true) {
            $statement->bindParam('imp_source_id', $impCriteria->sourceId, PDO::PARAM_INT);
        }
        if ($doBinding["site"] === true) {
            $statement->bindParam('imp_site_id', $impCriteria->siteId, PDO::PARAM_INT);
        }
        $statement->bindParam('startPoint', $startPoint, PDO::PARAM_INT);
        $statement->bindParam('recordCount', $pagesize, PDO::PARAM_INT);

        $statement->execute();

        while ($rows = $statement->fetch(PDO::FETCH_ASSOC)) {
            $impression = new Impression();
            foreach ($rows as $key => $value) {
                $impression->$key = $value;
            }
            array_push($result, $impression);
        }

        return $result;
    }


}


?>