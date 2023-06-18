<?php

namespace App\Controllers;

use App\Core\Controller;

class Index extends Controller
{

	public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->guest('index/index', $data);
	}

	public function show()
	{
		$data['row_show'] = "Ini file app/controllers/Index.php - show()";
		$this->guest('index/show', $data);
	}

	public function detail($id)
	{
		$data['row_detail'] = "Ini file app/controllers/Index.php - detail() - " . $id;
		$this->guest('index/detail', $data);
	}
}
