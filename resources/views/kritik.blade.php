@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Kritik Dan Saran User</h1>
        </center>
        <center>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_kritik as $kritik)
                    <tr>
                        <td>{{ $kritik->id }}</td>
                        <td>{{ $kritik->nama_kritik }}</td>
                        <td>{{ $kritik->email }}</td>
                        <td>{{ $kritik->no_tlp }}</td>
                        <td>{{ substr($kritik->pesan, 0, 20) }}...</td>
                        <td>
                            <a href="{{ route('detail_kritik', ['id'=>$kritik->id]) }}
                                ">Detail</a> |
                            <a href="{{ route('proses_hapus_kritik', ['id'=>$kritik->id]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
