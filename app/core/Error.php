<?php

namespace App\Core;

class Error
{

	public function fileNotFound()
	{
		echo "Ini file app/controllers/Error.php - fileNotFound()";
		echo "<p>404 - File tidak ditemukan</p>";
	}
}
