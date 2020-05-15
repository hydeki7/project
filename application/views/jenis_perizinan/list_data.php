<?php
  foreach ($dataJenisPerizinan as $jenisperizin) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $jenisperizin->id_jenis_perizinan; ?></td>
      <td><?php echo $jenisperizin->nama_perizinan; ?></td>
     
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-success update-dataJenisPerizinan" data-id="<?php echo $jenisperizin->id_jenis_perizinan; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $jenisperizin->id_jenis_perizinan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>