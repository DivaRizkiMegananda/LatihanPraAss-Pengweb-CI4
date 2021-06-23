<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
  protected $table = 'paket';
  protected $primaryKey = 'id_paket';
  protected $allowedFields = ['tanggal_datang', 'penerima', 'isi_paket', 'tanggal_ambil'];

  public function getPaket($paket = false)
  {

    if ($paket == false) {
      return $this->findAll();
    }

    return $this->where(['id_paket' => $paket])->first();
  }
}
