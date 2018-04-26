<?php echo $this->session->flashdata('hasil'); ?>
<h2 align="left"><strong>Data Mahasiswa</strong></h2>
<p><a href="http://localhost/rest_client/index.php/mahasiswa/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>NIM</strong></div></td>
    <td width="248"><div align="center"><strong>Nama Mahasiswa</strong></div></td>
    <td width="57"><div align="center"><strong>ID Jurusan</strong></div></td>
    <td width="241"><div align="center"><strong>Alamat</strong></div></td>
    <td width="121"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php

    foreach ($mahasiswa as $m){
        echo "<tr>
                 <td><div align='center'>$m->nim</div></td>
                 <td>$m->nama</td>
                 <td><div align='center'>$m->id_jurusan</td>
                 <td>$m->alamat</td>
                 <td><div align='center'>".anchor('mahasiswa/edit/'.$m->nim,'Edit')."
                     ".anchor('mahasiswa/delete/'.$m->nim,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>

