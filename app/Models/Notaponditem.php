<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaponditem extends Model
{
  use HasFactory;
  protected $table = 'notaponditem';
  protected $fillable = [
    'notapond_id',
    'hargapond_id',
    'namabarang',
    'quantity'
  ];
  public function Notapond()
  {
    return $this->belongsTo(Notapond::class);
  }

  public function hargapond()
  {
    return $this->belongsTo(Hargapond::class);
  }
}
