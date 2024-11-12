<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KPI extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu/KPI_mod', 'kpi');
    }

	public function index()
	{

        $data['kpiData'] = $this->kpi->getKpiGroupedByType();

		$this->load->view('_layouts/header');
		$this->load->view('menu/kpi', $data);
		$this->load->view('_layouts/footer');

	}
}
