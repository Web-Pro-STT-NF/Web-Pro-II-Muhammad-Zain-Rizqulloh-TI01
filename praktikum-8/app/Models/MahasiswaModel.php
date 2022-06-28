<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
  protected $returnType = 'object';
  protected $useTimestamps = true;
  protected $allowedFields = ['id', 'nim', 'nama', 'jenis_kelamin', 'tgl_lahir', 'tempat_lahir', 'program_study', 'ipk'];
}
