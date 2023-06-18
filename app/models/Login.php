<?php

namespace App\Models;

use App\Core\Model;

class login extends Model
{

    public function loginForm()
    {
        // Mengambil data dari input form
        $user_nama = $_POST['user_nama'];
        $user_alamat = $_POST['user_alamat'];
        $user_hp = $_POST['user_hp'];
        $username = $_POST['user_email'];
        $password = $_POST['user_password'];

        // Menjalankan query untuk login
        $sql = "SELECT * FROM tb_users WHERE user_nama=:user_nama,user_alamat=:user_alamat, user_hp=:user_hp, user_email = :user_email , user_password = :user_password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':user_nama', $user_nama);
        $stmt->bindParam(':user_alamat', $user_alamat);
        $stmt->bindParam(':user_hp', $user_hp);
        $stmt->bindParam(':user_email', $username);
        $stmt->bindParam(':user_password', $password);
        $stmt->execute();

        // Melakukan login dengan function login
        $result = $this->login($stmt, $user_nama, $user_alamat, $user_hp, $username, $password);

        if ($result > 1) {
            if ($username == $result['user_email'] && $password == $result['user_password']) {
                header('dashboard');
            }
        } else {
            header('login');
        }

        return $result;
    }
}
