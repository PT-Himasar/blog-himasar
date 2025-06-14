<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
  use HasFactory;
  protected $table = 'proker';
  protected $primaryKey = 'id';
  protected $fillable = ['devisi', 'kegiatan', 'tgl', 'status'];
}
