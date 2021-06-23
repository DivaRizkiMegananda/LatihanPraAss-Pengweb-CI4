<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Daftar paket</h4>
            <p class="category">Menampilkan semua data paket</p>
            <?php if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>No</th>
                <th>Nama penerima</th>
                <th>Tanggal datang</th>
                <th>Tanggal ambil</th>
                <th>Isi paket</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($paket as $pkt) : ?>
                  <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $pkt['penerima']; ?></td>
                    <td><?= $pkt['tanggal_datang']; ?></td>
                    <td><?= $pkt['tanggal_ambil']; ?></td>
                    <td><?= $pkt['isi_paket']; ?></td>

                    <td><a href="/paket/edit/<?= $pkt['id_paket']; ?>" class="btn btn-warning btn-fill ">Update</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
          <a class="btn btn-info btn-fill pull-right" style="margin-top: 10px;" href="/paket/create">Tambah Data paket</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>