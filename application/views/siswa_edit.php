<h3>Edit data</h3>
<form action="<?php echo site_url() ?>/welcome/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?> ">
    <table>
        <tr>
            <td>Masukkan NIS siswa</td>
            <td><input type="text" name="nis" value="<?php echo $siswa['nis'] ?> " ></td>
        </tr>
        <tr>
            <td>Masukkan Nama siswa</td>
            <td><input type="text" name="nm_siswa" value="<?php echo $siswa['nm_siswa'] ?> " ></td>
        </tr>
        <tr>
            <td>Masukkan Alamat siswa</td>
            <td><input type="text" name="alamat" value="<?php echo $siswa['alamat'] ?> "></td>
        </tr>
    </table>
    <button type="submit" name="submit">Edit</button>
</form>