<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;

class KritikController extends Controller
{
    public function index()
    {
        $data_kritik = Kritik::get();
        $data = [
            'data_kritik' => $data_kritik
        ];
        return view('kritik',$data);
    }

    public function detail_kritik(Request $request) {
        $id = $request->query('id');
        $data_kritik = Kritik::where('id', $id)->first();
        $data = [
            'data_kritik' => $data_kritik
        ];
        return view('detail_kritik', $data);
    }

    public function proses_hapus_kritik(Request $request) {
        $id = $request->query('id');
        $data_kritik = Kritik::destroy($id);
        $data = [
            'data_kritik' => $data_kritik
        ];
        return redirect('kritik');
    }

}
