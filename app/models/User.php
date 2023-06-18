<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    public function tampil()
    {
        $query = "SELECT * FROM tb_users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }
    public function simpan()
    {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_nama = $_POST['user_nama'];
        $user_alamat = $_POST['user_alamat'];
        $user_hp = $_POST['user_hp'];

        $sql = "INSERT INTO tb_users (user_email,user_password,user_nama,user_alamat,user_hp) VALUES (:user_email,:user_password,:user_nama,:user_alamat,:user_hp)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_email", $user_email);
        $stmt->bindParam(":user_password", $user_password);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_alamat", $user_alamat);
        $stmt->bindParam(":user_hp", $user_hp);

        $stmt->execute();
    }
    public function edit($id)
    {
        $query = "SELECT * FROM tb_users WHERE user_id = :user_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_nama = $_POST['user_nama'];
        $user_alamat = $_POST['user_alamat'];
        $user_hp = $_POST['user_hp'];
        $user_id = $_POST['user_id'];

        $sql = "UPDATE tb_users SET user_email=:user_email,user_password=:user_password,user_nama=:user_nama,user_alamat=:user_alamat,user_hp=:user_hp WHERE user_id=:user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_email", $user_email);
        $stmt->bindParam(":user_password", $user_password);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_alamat", $user_alamat);
        $stmt->bindParam(":user_hp", $user_hp);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();
    }
}
