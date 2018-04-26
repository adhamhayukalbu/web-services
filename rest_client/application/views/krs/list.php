<?php echo $this->session->flashdata('hasil'); ?>
<h2 align="left"><strong>Data KRS</strong></h2>
<p><a href="http://localhost/rest_client/index.php/krs/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>NIM</strong></div></td>
    <td width="200"><div align="center"><strong>Nama Mahasiswa</strong></div></td>
    <td width="200"><div align="center"><strong>Matakuliah</strong></div></td>
    <td width="200"><div align="center"><strong>Nama Dosen</strong></div></td>
    <td width="90"><div align="center"><strong>Prodi</strong></div></td>
    <td width="121"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php

    foreach ($krs as $m){
        echo "<tr>
                 <td><div align='center'>$m->nim</div></td>
                 <td>$m->nama</td>
                 <td>$m->nmmk</td>
                 <td>$m->nm_dosen</td>
                 <td><div align='center'>$m->prodi</td>
                 <td><div align='center'>".anchor('krs/edit/'.$m->nim,'Edit')."
                     ".anchor('krs/delete/'.$m->nim,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>

