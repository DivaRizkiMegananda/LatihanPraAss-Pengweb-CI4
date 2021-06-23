<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div id="comments">

      <form action="/penghuni/update/<?= $penghuni['id_penghuni']; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_penghuni" id="id_penghuni" value="<?= $penghuni['id_penghuni']; ?>">
        <input type="hidden" name="fotoLama" id="fotoLama" value="<?= $penghuni['foto']; ?>">
        <div class="one_third first">
          <label for="nama_penghuni">nama penghuni<span>*</span></label>
          <input id="nama_penghuni" name="nama_penghuni" for="nama_penghuni" type="text" class="form-control" placeholder="Masukan nama penghuni" required value="" autofocus>
        </div>
        <div class="one_third first">
          <label for="unit">unit<span>*</span></label>
          <input id="unit" name="unit" for="unit" type="number" class="form-control" placeholder="Masukan unit " required value="">
        </div>
        <div class="one_third first">
          <label for="no_ktp">no ktp<span>*</span></label>
          <input id="no_ktp" name="no_ktp" for="no_ktp" type="number" class="form-control" placeholder="Masukan no ktp" value="">
        </div>

        <div class="one_third first">
          <label for="foto">foto<span>*</span></label>
          <input id="foto" name="foto" for="foto" type="file" class="form-control" placeholder="Masukan foto" value="">
        </div>
        <div class="one_third first">
          <button type="submit" class="btn btn-success btn-fill pull-right">Submit</button>
        </div>
      </form>
    </div>
    <!-- ################################################################################################ -->

    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?= $this->endSection(); ?>