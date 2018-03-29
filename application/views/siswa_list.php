<h3>Siswa List</h3>
<a href="<?php echo site_url() ?>/welcome/create">Tambah Data</a>
<table border="2" cellspacing="0" cellpadding="0" >
    <tr>
        <th>no</th>
        <th>nis siswa</th>
        <th>nama siswa</th>
        <th>alamat siswa</th>
        <th>aksi</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($siswa_data as $siswa) : ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $siswa['nis'] ?></td>
        <td><?php echo $siswa['nm_siswa'] ?></td>
        <td><?php echo $siswa['alamat'] ?></td>
        <td>
            <a href="<?php echo site_url('/welcome/edit/'.$siswa['id']) ?>">Edit</a>
            <a href="#">hapus</a>
        </td>
    </tr>
    <?php endforeach ?> 
</table>