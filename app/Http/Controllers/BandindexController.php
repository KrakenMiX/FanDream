<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Band;

class BandindexController extends Controller
{
    public function index()
    {
        $data_band = Band::get(); 
        $data = [
            'data_band' => $data_band
        ];
        return view('bandindex',$data);
    }

}