<h2>Edit Users</h2>

<form action="<?php echo URL; ?>/user/update" method="post">
    <table>
        <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
        <tr>
            <td>Email User</td>
            <td><input type="text" name="user_email" value="<?php echo $data['user_email'] ?>"></td>
        </tr>
        <tr>
            <td>Password User</td>
            <td><input type="text" name="user_password" value="<?php echo $data['user_password'] ?>"></td>
        </tr>
        <tr>
            <td>Nama User</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['user_nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat User</td>
            <td><input type="text" name="user_alamat" value="<?php echo $data['user_alamat'] ?>"></td>
        </tr>
        <tr>
            <td>No Hp User</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['user_hp'] ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>