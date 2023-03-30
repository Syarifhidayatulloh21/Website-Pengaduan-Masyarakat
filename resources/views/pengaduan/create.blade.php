@extends ('navbar')
@section ('main')

        <div class="container">
            <div class="card mt-5">
                <br>
                <h4 class="page-title" style="text-align:center;"><strong>@section ('title','Tambah Data Pengaduan ')</strong></h4>
                <div class="card-body">

                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Tanggal/Jam Pengaduan</label>
                            <input type="" name="tgl_pengaduan" class="form-control" placeholder="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date( "d-m-Y | H:i:s"); ?>" readonly>
                        </div>

                        <br>
 
                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea name="isi_laporan" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
 
                        </div>

                        <br>

                        <div class="form-group">
                            <label>foto</label>
                            <input type="file" name="foto" class="form-control" id="inputGroupFile" placeholder="">

                            @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
 
                        </div>

                        <br>

                        <div class="form-group last mb-4">
                        <input type="text" class="form-control" id="status" value="pending" hidden name="status" width="500">
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/dashboard" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection 