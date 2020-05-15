<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Jenis Perizinan</h3>

  <form id="form-tambah-jenis-perizinan" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama" name="nama_perizinan" aria-describedby="sizing-addon2">
    </div>
    
    <!-- <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-home"></i>
      </span>
      <select name="kota" class="form-control select2" aria-describedby="sizing-addon2">
        <?php
        foreach ($dataJenisPerizinan as $jenisperizin) {
          ?>
          <option value="<?php echo $jenisperizin->id_jenis_perizinan; ?>">
            <?php echo $jenisperizin->nama_perizinan; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div> -->
    
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data Jenis Perizinan</button>
      </div>
    </div>
  </form>
</div>


<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>