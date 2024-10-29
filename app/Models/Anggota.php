<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
  use HasFactory;
  protected $table = 'anggota';
  protected $primaryKey = 'id';
  protected $fillable = ['nama', 'jkel', 'tgl_lahir', 'email', 'no_tlp', 'jabatan', 'status', 'angkatan', 'patondro', 'nra', 'jkarir', 'alamat', 'gambar'];
}
