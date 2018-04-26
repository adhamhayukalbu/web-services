<?php echo $this->session->flashdata('hasil'); ?>
<h3 align="left"><strong>Data Mahasiswa</strong></h3>
<p><a href="http://localhost/rest_client/index.php/sis/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>NIM</strong></div></td>
    <td width="248"><div align="center"><strong>Nama</strong></div></td>
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
                 <td><div align='center'>".anchor('sis/edit/'.$m->nim,'Edit')."
                     ".anchor('sis/delete/'.$m->nim,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>


<h3 align="left"><strong>Data Mata Kuliah</strong></h3>
<p><a href="http://localhost/rest_client/index.php/sis/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>NIM</strong></div></td>
    <td width="248"><div align="center"><strong>Nama</strong></div></td>
    <td width="57"><div align="center"><strong>ID Jurusan</strong></div></td>
    <td width="241"><div align="center"><strong>Alamat</strong></div></td>
    <td width="121"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php

    foreach ($matakuliah as $n){
        echo "<tr>
                 <td><div align='center'>$n->kdmk</div></td>
                 <td>$n->nmmk</td>
                 <td><div align='center'>$n->sks</td>
                 <td>$n->prodi</td>
                 <td><div align='center'>
                     ".anchor('sis/edit/'.$n->kdmk,'Edit')."
                     ".anchor('sis/delete/'.$n->kdmk,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>



