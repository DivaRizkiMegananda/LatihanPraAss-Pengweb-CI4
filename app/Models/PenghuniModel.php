<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghuniModel extends Model
{
  protected $table = 'penghuni';
  protected $primaryKey = 'id_penghuni';
  protected $allowedFields = ['nama_penghuni', 'unit', 'no_ktp', 'foto'];

  public function getPenghuni($penghuni = false)
  {

    if ($penghuni == false) {
      return $this->findAll();
    }

    return $this->where(['id_penghuni' => $penghuni])->first();
  }
}
