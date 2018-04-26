<?php echo form_open('krs/edit');?>
<?php echo form_hidden('nim',$krs[0]->nim);?>
 <h2><strong>Edit Data KRS</strong></h2>
<table cellpadding="4">
    <tr><td>NIM</td><td><?php echo form_input('',$krs[0]->nim,"disabled");?></td></tr>
    <tr>
      <td>Nama Mahasiswa</td><td><?php echo form_input('nama',$krs[0]->nama);?></td></tr>
    <tr>
      <td>Mata Kuliah</td><td><?php echo form_input('nmmk',$krs[0]->nmmk);?></td></tr>
    <tr>
      <td>Nama Dosen</td><td><?php echo form_input('nm_dosen',$krs[0]->nm_dosen);?></td></tr>
    <tr>
      <td>Prodi</td><td><?php echo form_input('prodi',$krs[0]->prodi);?></td></tr>
    
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>