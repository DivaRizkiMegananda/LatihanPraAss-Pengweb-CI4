<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Daftar penghuni</h4>
            <p class="category">Menampilkan semua data penghuni</p>
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
                <th>Nama </th>
                <th>unit</th>
                <th>no ktp</th>
                <th>foto</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($penghuni as $p) : ?>
                  <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $p['nama_penghuni']; ?></td>
                    <td><?= $p['unit']; ?></td>
                    <td><?= $p['no_ktp']; ?></td>

                    <td><img src="/img/<?= $p['foto']; ?>" alt=""></td>

                    <td><a href="/penghuni/edit/<?= $p['id_penghuni']; ?>" class="btn btn-warning btn-fill ">Update</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
          <a class="btn btn-info btn-fill pull-right" style="margin-top: 10px;" href="/penghuni/create">Tambah Data penghuni</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>