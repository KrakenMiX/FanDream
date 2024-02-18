<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;

    protected $table = 'kritik';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nama_kritik','email','no_tlp','pesan'];
}
