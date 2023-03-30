@extends ('navbar')
@section ('main')

        <div class="container">
            <div class="card mt-6">
                <div class="card-body">
                    <h4 class="page-title" style="text-align: center;"><strong>@section ('title','Pengaduan')</strong></h4>
                    <table class="table table-bordered table-hover table-striped" style="text-align: center;">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Nik</th>
                                <th>Isi Laporan</th>
                                <th>Status</th>
                                <th>OPSI</th>
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
                                    <a href="/pengaduan/show/{{ $p->id_pengaduan }}" class="btn btn-success la la-eye"> Detail</a>
                                    <br>
                                    @if (auth()->user()->level == 'petugas' ||  auth()->user()->level == 'admin')
                                    @if ($p->status == 'proses')
                                    <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-warning la la-pencil"> Edit</a>
                                    <br>
                                    @endif
                                    @if ($p->status == 'pending')
                                    <a href="/pengaduantanggapan/{{ $p->id_pengaduan }}" class="btn btn-info la la-bullhorn"> Tanggapi</a>
                                    <br>
                                    @endif
                                    @if (auth()->user()->level == 'admin')
                                    <a href="/pengaduan/delete/{{ $p->id_pengaduan }}" onclick="return confirm('Anda yakin ingin menghapus item ini ?')" class="btn btn-danger la la-trash"> Hapus</a>
                                    @endif
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            {{ $pengaduan->onEachSide(5)->links() }}
                            <br>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



@endsection