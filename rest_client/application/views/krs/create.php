<?php echo form_open('krs/create');?>
<h2><strong>Input Data KRS</strong></h2>
<table cellpadding="4">
<tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr>
<td>Nama Mahasiswa</td><td><?php echo form_input('nama');?></td></tr>
    <tr>
<td>Mata Kuliah</td><td><?php echo form_input('nmmk');?></td></tr>
    <tr>
<td>Nama Dosen</td><td><?php echo form_input('nm_dosen');?></td></tr>
    <tr>
<td>Prodi</td><td><?php echo form_input('prodi');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>