<h2>Edit Kategori</h2>

<form action="<?php echo URL; ?>/kategori/update" method="post">
    <table>
        <input type="hidden" name="pel_id" value="<?php echo $data['pel_id']; ?>">
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['pel_nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><textarea name="pel_alamat" id="" cols=" 30" rows="10"><?php echo $data['pel_alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td>No Hp Pelanggan</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['pel_hp'] ?>"></td>
        </tr>
        <tr>
            <td>No KTP Pelanggan</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['pel_ktp'] ?>"></td>
        </tr>
        <tr>
            <td>No Seri Pelanggan</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['pel_seri'] ?>"></td>
        </tr>

        <tr>
            <td>Aktif</td>
            <td>
                <input type="radio" name="pel_aktif" value="Y" <?php echo ($data['pel_aktif'] == 'Y') ? 'checked' : ''; ?>>
                <label>Y</label>
                <input type="radio" name="pel_aktif" value="N" <?php echo ($data['pel_aktif'] == 'N') ? 'checked' : ''; ?>>
                <label>N</label>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>