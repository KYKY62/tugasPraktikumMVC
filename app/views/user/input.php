<h2>Input User</h2>

<form action="<?php echo URL; ?>/user/simpan" method="post">
    <table>
        <tr>
            <td>Email User</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>Password User</td>
            <td><input type="text" name="user_password"></td>
        </tr>
        <tr>
            <td>Nama User</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>Alamat User</td>
            <td><input type="text" name="user_alamat"></td>
        </tr>
        <tr>
            <td>No Hp User</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>