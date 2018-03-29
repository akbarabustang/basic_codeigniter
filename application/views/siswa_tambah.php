<h3>Tambah data</h3>
<form action="<?php echo site_url() ?>/welcome/create" method="POST">
    <table>
        <tr>
            <td>Masukkan NIS siswa</td>
            <td><input type="text" name="nis" ></td>
        </tr>
        <tr>
            <td>Masukkan Nama siswa</td>
            <td><input type="text" name="nm_siswa" ></td>
        </tr>
        <tr>
            <td>Masukkan Alamat siswa</td>
            <td><input type="text" name="alamat" ></td>
        </tr>
    </table>
    <button type="submit" name="submit">Simpan</button>
</form>