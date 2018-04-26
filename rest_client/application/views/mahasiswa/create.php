<?php echo form_open('mahasiswa/create');?>
<h2><strong>Input Data Mahasiswa</strong></h2>
<table cellpadding="4">
<tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr>
<td>Nama Mahasiswa</td><td><?php echo form_input('nama');?></td></tr>
    <tr>
<td>Id Jurusan</td><td><?php echo form_input('jurusan');?>  </td></tr>
    <tr>
<td>Alamat</td><td><?php echo form_input('alamat');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>