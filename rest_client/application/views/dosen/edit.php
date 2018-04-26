<?php echo form_open('dosen/edit');?>
<?php echo form_hidden('nid',$dosen[0]->nid);?>
 <h2><strong>Edit Data Dosen</strong></h2>
<table cellpadding="4">
    <tr><td>NID</td><td><?php echo form_input('',$dosen[0]->nid,"disabled");?></td></tr>
    <tr>
      <td>Nama Dosen</td><td><?php echo form_input('nm_dosen',$dosen[0]->nm_dosen);?></td></tr>
    <tr>
      <td>Id Jurusan</td><td><?php echo form_input('id_jurusan',$dosen[0]->id_jurusan);?></td></tr>
    <tr>
      <td>Alamat</td><td><?php echo form_input('alamat',$dosen[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>