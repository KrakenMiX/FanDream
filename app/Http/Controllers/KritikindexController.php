<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Kritik;
use Session;

class KritikindexController extends Controller
{
    public function index()
    {
        return view('kritikindex');
    }

    public function actionkritik(Request $request)
    {
        $user = Kritik::create([
            'nama_kritik' => $request->nama_kritik,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'pesan' => $request->pesan
        ]);

        Session::flash('message_kritik', 'Saran & Kritik Berhasil Dikirim. Terima kasih telah memberikan respon terhadap pengembangan web saya :)');
        return redirect('kritikindex');
    }
}