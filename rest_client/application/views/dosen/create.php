<?php echo form_open('dosen/create');?>
<h2><strong>Input Data Dosen</strong></h2>
<table cellpadding="4">
<tr><td>NID</td><td><?php echo form_input('nid');?></td></tr>
    <tr>
<td>Nama Dosen</td><td><?php echo form_input('nm_dosen');?></td></tr>
    <tr>
<td>Id Jurusan</td><td><?php echo form_input('id_jurusan');?>  </td></tr>
    <tr>
<td>Alamat</td><td><?php echo form_input('alamat');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>