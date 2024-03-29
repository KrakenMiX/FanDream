<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $table = 'band';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nama_band','deskripsi','gambar_band'];
}
