<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota_Band extends Model
{
    use HasFactory;

    protected $table = 'anggota_band';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nama_anggota','band','deskripsi','gambar_anggota'];
}
