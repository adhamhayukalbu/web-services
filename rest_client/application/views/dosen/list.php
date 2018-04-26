<?php echo $this->session->flashdata('hasil'); ?>
<h2 align="left"><strong>Data Dosen</strong></h2>
<p><a href="http://localhost/rest_client/index.php/dosen/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>NID</strong></div></td>
    <td width="248"><div align="center"><strong>Nama Dosen</strong></div></td>
    <td width="57"><div align="center"><strong>ID Jurusan</strong></div></td>
    <td width="241"><div align="center"><strong>Alamat</strong></div></td>
    <td width="121"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php

    foreach ($dosen as $m){
        echo "<tr>
                 <td><div align='center'>$m->nid</div></td>
                 <td>$m->nm_dosen</td>
                 <td><div align='center'>$m->id_jurusan</td>
                 <td>$m->alamat</td>
                 <td><div align='center'>".anchor('dosen/edit/'.$m->nid,'Edit')."
                     ".anchor('dosen/delete/'.$m->nid,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>

