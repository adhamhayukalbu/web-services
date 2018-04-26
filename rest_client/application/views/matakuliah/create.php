<?php echo form_open('matakuliah/create');?>
<h2><strong>Input Data Mata Kuliah</strong></h2>
<table cellpadding="4">
<tr><td>Kode MK</td><td><?php echo form_input('kdmk');?></td></tr>
    <tr>
<td>Mata Kuliah</td><td><?php echo form_input('nmmk');?></td></tr>
    <tr>
<td>SKS</td><td><?php echo form_input('sks');?>  </td></tr>
    <tr>
<td>Prodi</td><td><?php echo form_input('prodi');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('matakuliah','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>