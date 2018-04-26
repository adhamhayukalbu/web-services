<?php echo $this->session->flashdata('hasil'); ?>
<h2 align="left"><strong>Data Mata Kuliah</strong></h2>
<p><a href="http://localhost/rest_client/index.php/matakuliah/create">Tambah Data</a></p>
<table width="600" border="1" cellpadding="3">
    <tr>
    <td width="70"><div align="center"><strong>Kode MK</strong></div></td>
    <td width="100"><div align="center"><strong>Mata Kuliah</strong></div></td>
    <td width="30"><div align="center"><strong>SKS</strong></div></td>
    <td width="60"><div align="center"><strong>Prodi</strong></div></td>
    <td width="60"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php

    foreach ($matakuliah as $n){
        echo "<tr>
                 <td><div align='center'>$n->kdmk</div></td>
                 <td>$n->nmmk</td>
                 <td><div align='center'>$n->sks</td>
                 <td><div align='center'>$n->prodi</td>
                 <td><div align='center'>
                     ".anchor('matakuliah/edit/'.$n->kdmk,'Edit')."
                     ".anchor('matakuliah/delete/'.$n->kdmk,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>






