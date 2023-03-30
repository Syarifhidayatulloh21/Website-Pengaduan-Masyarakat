@extends ('navbar')
@section ('main')

<div class="container">
            <div class="card mt-6">
                <div class="card-body">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left"></div>
                    </div>
                    <h4 class="page-title" style="text-align: center;"><strong>@section ('title','Pengguna')</strong></h4>
                    <table class="table table-bordered table-hover table-striped" style="text-align: center;"z>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->level}}</td>
                                <td>
                                    <a href="/pengguna/show/{{ $p->id }}" class="btn btn-success">Detail</a>
                                    <a href="/pengguna/edit/{{ $p->id }}" class="btn btn-warning la la-pencil">Edit</a>
                                    <a href="/pengguna/delete/{{ $p->id }}" onclick="return confirm('Anda yakin ingin menghapus penggguna ini?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection