@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Data Anggota Band</h1>
        </center>
        <center>
            <a href="{{ route('tambah_anggota') }}">+ &nbsp; Tambah Anggota</a>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Band</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_anggota as $anggota)
                    <tr>
                        <td>{{ $anggota->id }}</td>
                        <td>{{ $anggota->nama_anggota }}</td>
                        <td>{{ $anggota->band }}</td>
                        <td>{{ substr($anggota->deskripsi, 0, 20) }}...</td>
                        <td style="text-align: center;"><img src="gambar/{{ $anggota->gambar_anggota }}" style="width: 120px;"></td>
                        <td>
                            <a href="{{ route('edit_anggota', ['id'=>$anggota->id]) }}">Edit</a> |
                            <a href="{{ route('proses_hapus_anggota', ['id'=>$anggota->id]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
