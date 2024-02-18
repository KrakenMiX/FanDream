<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Anggota_Band;

class AnggotaindexController extends Controller
{
    public function index()
    {
        $data_anggota = Anggota_Band::get();
        $data = [
            'data_anggota' => $data_anggota
        ];
        return view('anggotaindex',$data);
    }

}