<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <table>
        <input type="hidden" name="gol_id" value="<?php echo $data['gol_id']; ?>">
        <tr>
            <td>Kode Golongan</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['gol_kode'] ?>"></td>
        </tr>
        <tr>
            <td>Nama Golongan</td>
            <td><input type="text" name="gol_nama" value="<?php echo $data['gol_nama'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>