<?php
  
namespace App\Http\Controllers;
  
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Band;
use Session;

class BandController extends Controller
{
    public function index() 
    {
        $data_band = Band::get();
        $data = [
            'data_band' => $data_band
        ];
        return view('band',$data);
    }

    public function tambah_band() {
        return view('tambah_band');
    }

    public function proses_tambah_band(Request $request) {
        $nama_band = $request->nama_band;
        $deskripsi = $request->deskripsi;

        $image = $request->file('gambar_band');
        $nama_folder = "gambar";
        $timetamp = Carbon::now()->timestamp;
        $nama_file = $timetamp."_".$image->getClientOriginalName();

        $image->move($nama_folder, $nama_file);

        Band::create([
            'nama_band' => $nama_band,
            'deskripsi' => $deskripsi,
            'gambar_band' => $nama_file
        ]);

        Session::flash('message_tambah_band', 'Data Band Berhasil Ditambah');
        return redirect('tambah_band');
    }

    public function edit_band(Request $request) {
        $id = $request->query('id');
        $data_band = Band::where('id', $id)->first();
        $data = [
            'data_band' => $data_band
        ];
        return view('edit_band', $data);
    }

    public function proses_edit_band(Request $request) {
        $id = $request->id;
        $nama_band = $request->nama_band;
        $deskripsi = $request->deskripsi;

        $band = Band::find($id);
        $band->nama_band = $nama_band;
        $band->deskripsi = $deskripsi;

        $image = $request->file('gambar_band');
        if ($image) {
            $nama_folder = "gambar";
            $timetamp = Carbon::now()->timestamp;
            $nama_file = $timetamp."_".$image->getClientOriginalName();
            $image->move($nama_folder, $nama_file);

            $band->gambar_band = $nama_file;
        }

        $band->save();

        Session::flash('message_edit_band', 'Data Band Berhasil Diedit');
        return redirect('band');
    }

    public function proses_hapus_band(Request $request) {
        $id = $request->query('id');
        $data_band = Band::destroy($id);
        $data = [
            'data_band' => $data_band
        ];
        return redirect('band');
    }
    
}