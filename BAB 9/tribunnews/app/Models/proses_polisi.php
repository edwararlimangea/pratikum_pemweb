<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proses_polisi extends Model
{
    use HasFactory;
    protected $table = 'proses_polisi';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['photo', 'judul', 'kejadian'];
    public $timestamps = true;
}
