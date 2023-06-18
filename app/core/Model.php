<?php

namespace App\Core;

use PDO;

class Model
{

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("mysql:host=localhost;dbname=tb_warung", "root", "");
		} catch (\Exception $e) {
			die("error! " . $e->getMessage());
		}
	}

	public function select($stmt)
	{
		//Menampilkan satu data
		return $stmt->fetch();
	}

	public function selects($stmt)
	{
		//Menampilkan semua data
		$data = [];

		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
	}
	public function login($stmt, $username, $password, $user_nama, $user_alamat, $user_hp)
	{
		// Menginisialisasi variabel untuk menyimpan hasil login
		$result = null;

		// Mengambil data pengguna berdasarkan username dan password
		$stmt->bindParam(':user_nama', $user_nama);
		$stmt->bindParam(':user_alamat', $user_alamat);
		$stmt->bindParam(':user_hp', $user_hp);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();

		// Mengambil hasil query
		$data = $this->selects($stmt);

		// Memeriksa apakah ada hasil login yang valid
		if (!empty($data)) {
			// Jika ada, set hasil login ke pengguna pertama dalam array
			$result = $data[0];
		}

		return $result;
	}
}
