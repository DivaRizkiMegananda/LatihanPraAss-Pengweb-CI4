<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div id="comments">

      <form action="/paket/update/<?= $paket['id_paket']; ?>" method="post">
        <input type="hidden" name="id_paket" id="id_paket" value="<?= $paket['id_paket']; ?>">
        <div class="one_third first">
          <label for="tanggal_datang">Tanggal datang<span>*</span></label>
          <input id="tanggal_datang" name="tanggal_datang" for="tanggal_datang" type="date" class="form-control" placeholder="Masukan tanggal datang" required value="" autofocus>
        </div>
        <div class="one_third first">
          <label for="penerima">Nama penerima<span>*</span></label>
          <input id="penerima" name="penerima" for="penerima" rows="5" class="form-control" placeholder="Masukan penerima " required value="">
        </div>
        <div class="one_third first">
          <label for="isi_paket">Isi Paket<span>*</span></label>
          <input id="isi_paket" name="isi_paket" for="isi_paket" type="text" class="form-control" placeholder="Masukan isi paket" value="">
        </div>

        <div class="one_third first">
          <label for="tanggal_ambil">tanggal ambil<span>*</span></label>
          <input id="tanggal_ambil" name="tanggal_ambil" for="tanggal_ambil" type="date" class="form-control" placeholder="Masukan Tanggal ambil" value="">
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