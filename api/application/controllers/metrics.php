<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Metrics extends CI_Controller {

    public function impression() {
        $criteria = new ImpressionCriteria();
        $pageNo = 1;
        $pageSize = 30;
        if ($this->input->get("startDate") !== false && $this->input->get("endDate") !== false) {
            $criteria->startDate = $this->input->get("startDate");
            $criteria->endDate = $this->input->get("endDate");
        }
        if ($this->input->get("pageNo") !== false && is_numeric($this->input->get("pageNo"))) {
            $pageNo = (int)$this->input->get("pageNo");
        }
        if ($this->input->get("pageSize") !== false && is_numeric($this->input->get("pageSize"))) {
            $pageSize = (int)$this->input->get("pageSize");
        }
        $model = new ImpressionModel();

        echo json_encode($model->search($criteria, $pageNo, $pageSize));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */