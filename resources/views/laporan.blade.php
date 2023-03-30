@extends ('navbar')
@section ('main')

        <div class="container">
            <div class="card mt-6">
                <div class="card-body">
                    <h4 class="page-title" style="text-align: center;"><strong>@section ('title','Pengaduan Saya')</strong></h4>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped" style="text-align: center;">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Nik</th>
                                <th>Isi Laporan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->isi_laporan }}</td>

                                
                                <td>
                                    @if ($p->status == 'pending')
                                    <span class="badge bg-danger">{{ $p->status }}</span>
                                    @elseif ($p->status == 'proses')
                                    <span class="badge bg-warning">{{ $p->status }}</span>
                                    @else
                                    <span class="badge bg-success">{{ $p->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/pengaduan/show/{{ $p->id_pengaduan }}" class="btn btn-success la la-eye">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection