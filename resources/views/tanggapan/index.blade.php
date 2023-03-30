@extends ('navbar')
@section ('main')

        <div class="container">
            <h4 class="page-title">Tanggapan</h4>
            <div class="card mt-6">
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">Input tanggapan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Pengaduan</th>
                                <th>Tanggal tanggapan</th>
                                <th>Nik</th>
                                <th>Tanggapan</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->id_pengaduan }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->tanggapan }}</td>

                                <td>
                                    <a href="/tanggapan/show/{{ $p->id_tanggapan }}" class="btn btn-success">Detail</a>
                                    <a href="/tanggapan/edit/{{ $p->id_tanggapan }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/delete/{{ $p->id_tanggapan }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection