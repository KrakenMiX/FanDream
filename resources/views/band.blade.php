@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Data Band</h1>
        </center>
        <center>
            <a href="{{ route('tambah_band') }}">+ &nbsp; Tambah Band</a>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Band</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_band as $band)
                    <tr>
                        <td>{{ $band->id }}</td>
                        <td>{{ $band->nama_band }}</td>
                        <td>{{ substr($band->deskripsi, 0, 20) }}...</td>
                        <td style="text-align: center;"><img src="gambar/{{ $band->gambar_band }}" style="width: 120px;"></td>
                        <td>
                            <a href="{{ route('edit_band', ['id'=>$band->id]) }}">Edit</a> |
                            <a href="{{ route('proses_hapus_band', ['id'=>$band->id]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
