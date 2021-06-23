<?php

namespace App\Controllers;

use App\Models\PenghuniModel;

class Penghuni extends BaseController
{
  protected $PenghuniModel;
  public function __construct()
  {
    $this->penghuniModel = new PenghuniModel();
  }

  public function index()
  {

    $penghuni = $this->penghuniModel->findAll();

    $data = [

      'title' => 'Daftar penghuni',
      'subTitle' => 'penghuni',
      'penghuni' => $penghuni
    ];

    return view('penghuni/index', $data);
  }


  public function create()
  {

    $data = [
      'title' => 'Form Tambah penghuni',
      'subTitle' => 'penghuni'
    ];

    return view('penghuni/create', $data);
  }

  public function save()
  {

    // ambil gambar

    $fileGambarPenghuni = $this->request->getFile('foto');

    // pindahkan ke folder img

    $fileGambarPenghuni->move('img');

    // ambil nama file gambar artikel

    $namaFileGambarPenghuni = $fileGambarPenghuni->getName();


    $this->penghuniModel->save([

      'nama_penghuni' => $this->request->getVar('nama_penghuni'),
      'unit' => $this->request->getVar('unit'),
      'no_ktp' => $this->request->getVar('no_ktp'),
      'foto' => $namaFileGambarPenghuni
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/penghuni');
  }

  public function edit($id_penghuni)
  {

    $data = [
      'title' => 'Form Ubah penghuni',
      'subTitle' => 'penghuni',
      'penghuni' => $this->penghuniModel->getPenghuni($id_penghuni)
    ];

    return view('penghuni/edit', $data);
  }


  public function update($id_penghuni)
  {

    $fileGambarPenghuni = $this->request->getFile('foto');

    // cek gambar, apakah tetap gambar lama

    if ($fileGambarPenghuni->getError() == 4) {
      $namaGambarPenghuni = $this->request->getVar('fotoLama');
    } else {

      // generate nama file random

      $namaGambarPenghuni = $fileGambarPenghuni->getRandomName();

      // pindahkan gambar 

      $fileGambarPenghuni->move('img', $namaGambarPenghuni);
    }


    $this->penghuniModel->save([
      'id_penghuni' => $id_penghuni,
      'nama_penghuni' => $this->request->getVar('nama_penghuni'),
      'unit' => $this->request->getVar('unit'),
      'no_ktp' => $this->request->getVar('no_ktp'),
      'foto' => $namaGambarPenghuni
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/penghuni');
  }
}
