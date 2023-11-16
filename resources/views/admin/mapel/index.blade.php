@extends('admin.layout.main')

@section('content')
    <div class="d-flex justify-content-end align-content-end">
        <a href="" class="btn btn-outline-primary btn-sm">Tambah</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>
                        @if ($user->level == 'admin')
                            <a href="">Edit</a>
                            <a href="">Lihat</a>
                            <a href="">Hapus</a>
                        @elseif($user->level == 'siswa')
                            <a href="">Lihat</a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
