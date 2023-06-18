<h2>Tabel Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn ">Input Golongan</a>

<table>
    <tr>
        <th>ID Golongan</th>
        <th>Kode Golongan</th>
        <th>Nama Golongan</th>

        <th>Edit</th>
        <th>Hapus</th>
    </tr>

    <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $row['gol_id']; ?></td>
            <td><?php echo $row['gol_kode']; ?></td>
            <td><?php echo $row['gol_nama']; ?></td>

            <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn ">Edit</a></td>
            <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn ">Delete</a></td>
        </tr>
    <?php } ?>
</table>