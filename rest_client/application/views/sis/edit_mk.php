<?php echo form_open('sis/edit_mk');?>
<?php echo form_hidden('kdmk',$matakuliah[0]->kdmk);?>
 <h2><strong>Edit Data</strong></h2>
<table cellpadding="4">
    <tr><td>Kode MK</td><td><?php echo form_input('',$sis[0]->kdmk"disabled");?></td></tr>
    <tr>
      <td>Nama MK</td><td><?php echo form_input('nmmk',$sis[0]->nmmk);?></td></tr>
    <tr>
      <td>Sks</td><td><?php echo form_input('sks',$sis[0]->sks);?></td></tr>
    <tr>
      <td>Prodi</td><td><?php echo form_input('prodi',$sis[0]->prodi);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('sis','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>