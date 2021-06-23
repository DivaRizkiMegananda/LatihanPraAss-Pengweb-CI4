<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Pra Ass Diva</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Latihan Ass CI4 DIVA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/tampil/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/paket/index">Paket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penghuni/index">Penghuni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/karyawan/index">Karyawan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?= $this->renderSection('content'); ?>

  <!-- footer start -->
  <footer class="bg-secondary text-white text-center pb-1 fw-bold">
    <p>
      Latihan Ass CI4 Pengweb DivaRizkiM 6701190027
    </p>
  </footer>
  <!-- footer end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>