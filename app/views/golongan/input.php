<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/simpan" method="post">
    <table>
        <tr>
            <td>Kode Pelanggan</td>
            <td><input type="text" name="gol_kode"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="gol_nama"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>