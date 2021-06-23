<?php

namespace App\Controllers;

use App\Models\PaketModel;

class Paket extends BaseController
{
  protected $PaketModel;
  public function __construct()
  {
    $this->paketModel = new PaketModel();
  }

  public function index()
  {

    $paket = $this->paketModel->findAll();

    $data = [

      'title' => 'Daftar paket',
      'subTitle' => 'paket',
      'paket' => $paket
    ];

    return view('paket/index', $data);
  }


  public function create()
  {

    $data = [
      'title' => 'Form Tambah paket',
      'subTitle' => 'paket'
    ];

    return view('paket/create', $data);
  }

  public function save()
  {

    $this->paketModel->save([

      'tanggal_datang' => $this->request->getVar('tanggal_datang'),
      'penerima' => $this->request->getVar('penerima'),
      'isi_paket' => $this->request->getVar('isi_paket'),
      'tanggal_ambil' => $this->request->getVar('tanggal_ambil')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/paket');
  }

  public function edit($id_paket)
  {

    $data = [
      'title' => 'Form Ubah paket',
      'subTitle' => 'paket',
      'paket' => $this->paketModel->getPaket($id_paket)
    ];

    return view('paket/edit', $data);
  }


  public function update($id_paket)
  {
    $this->paketModel->save([
      'id_paket' => $id_paket,
      'tanggal_datang' => $this->request->getVar('tanggal_datang'),
      'penerima' => $this->request->getVar('penerima'),
      'isi_paket' => $this->request->getVar('isi_paket'),
      'tanggal_ambil' => $this->request->getVar('tanggal_ambil')

    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/paket');
  }
}
