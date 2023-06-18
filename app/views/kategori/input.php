<h2>Input Kategori</h2>

<form action="<?php echo URL; ?>/kategori/simpan" method="post">
    <table>
        <tr>
            <td>Id Pelanggan</td>
            <td><input type="text" name="pel_id_gol"></td>
        </tr>
        <tr>
            <td>Nomor Pelanggan</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>No Hp Pelanggan</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td>No KTP Pelanggan</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>No Seri Pelanggan</td>
            <td><input type="text" name="pel_seri"></td>
        </tr>
        <tr>
            <td>Aktif</td>
            <td>
                <input type="text" name="pel_aktif" maxlength="1" placeholder="Y atau N saja">
            </td>
        </tr>
        <tr>
            <td>No Meteran Pelanggan</td>
            <td><input type="text" name="pel_meteran"></td>
        </tr>
        <tr>
            <td>Id User Pelanggan</td>
            <td>
                <input type="number" name="pel_id_user" maxlength="1" placeholder="Ketik 1">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>