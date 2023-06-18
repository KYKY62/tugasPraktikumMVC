<h2>Tabel Users</h2>

<a href="<?php echo URL; ?>/user/input" class="btn ">Input Users</a>

<table>
    <tr>
        <th>ID User</th>
        <th>Email User</th>
        <th>Password User</th>
        <th>Nama User</th>
        <th>Alamat User</th>
        <th>No Hp User</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>

    <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['user_password']; ?></td>
            <td><?php echo $row['user_nama']; ?></td>
            <td><?php echo $row['user_alamat']; ?></td>
            <td><?php echo $row['user_hp']; ?></td>

            <td><a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>" class="btn ">Edit</a></td>
            <td><a href="<?php echo URL; ?>/user/delete/<?php echo $row['user_id']; ?>" class="btn ">Delete</a></td>
        </tr>
    <?php } ?>
</table>