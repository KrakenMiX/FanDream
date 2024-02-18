<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Anggota_Band;
use Session;

class AnggotaController extends Controller
{ 
    public function index()
    {
        $data_anggota = Anggota_Band::get();
        $data = [
            'data_anggota' => $data_anggota
        ];
        return view('anggota',$data);
    }

    public function tambah_anggota() {
        return view('tambah_anggota');
    }

    public function proses_tambah_anggota(Request $request) {
        $nama_anggota = $request->nama_anggota;
        $band = $request->band;
        $deskripsi = $request->deskripsi;

        $image = $request->file('gambar_anggota');
        $nama_folder = "gambar";
        $timetamp = Carbon::now()->timestamp;
        $nama_file = $timetamp."_".$image->getClientOriginalName();

        $image->move($nama_folder, $nama_file);

        Anggota_Band::create([
            'nama_anggota' => $nama_anggota,
            'band' => $band,
            'deskripsi' => $deskripsi,
            'gambar_anggota' => $nama_file
        ]);

        Session::flash('message_tambah_anggota', 'Data Anggota Band Berhasil Ditambah');
        return redirect('tambah_anggota');
    }

    public function edit_anggota(Request $request) {
        $id = $request->query('id');
        $data_anggota = Anggota_Band::where('id', $id)->first();
        $data = [
            'data_anggota' => $data_anggota
        ];
        return view('edit_anggota', $data);
    }

    public function proses_edit_anggota(Request $request) {
        $id = $request->id;
        $nama_anggota = $request->nama_anggota;
        $band = $request->band;
        $deskripsi = $request->deskripsi;

        $anggota_band = Anggota_Band::find($id);
        $anggota_band->nama_anggota = $nama_anggota;
        $anggota_band->band = $band;
        $anggota_band->deskripsi = $deskripsi;

        $image = $request->file('gambar_anggota');
        if ($image) {
            $nama_folder = "gambar";
            $timetamp = Carbon::now()->timestamp;
            $nama_file = $timetamp."_".$image->getClientOriginalName();
            $image->move($nama_folder, $nama_file);

            $anggota_band->gambar_anggota = $nama_file;
        }

        $anggota_band->save();

        Session::flash('message_edit_anggota', 'Data Anggota Band Berhasil Diedit');
        return redirect('anggota');
    }

    public function proses_hapus_anggota(Request $request) {
        $id = $request->query('id');
        $data_anggota = Anggota_Band::destroy($id);
        $data = [
            'data_anggota' => $data_anggota
        ];
        return redirect('anggota');
    }

}
