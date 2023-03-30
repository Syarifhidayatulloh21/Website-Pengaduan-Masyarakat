@extends ('navbar')
@section ('main')

        <div class="container">
        <h4 class="page-title">Edit Data tanggapan</h4>
            <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>
                    <form method="post" action="/tanggapan/update/{{ $tanggapan->id_tanggapan }}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                        <div class="form-group">
                            <label>Id tanggapan</label>
                            <input type="text" name="id_tanggapan" class="form-control" placeholder="" value="{{ $tanggapan->id_tanggapan }}">

                            @if($errors->has('id_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Id Pengaduan</label>
                            <input type="text" name="id_pengaduan" class="form-control" placeholder="" value="{{ $tanggapan->id_pengaduan }}">

                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal tanggapan</label>
                            <input type="" name="tgl_tanggapan" class="form-control" placeholder="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date( "d-m-Y | H:i:s"); ?>" readonly> 

                            @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control" placeholder="" value="{{ $tanggapan->nik }}">

                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Isi Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder="">{{ $tanggapan->tanggapan }}</textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <label for="status">Status :</label>
                        <select name="status">
                        <option value="proses">Proses</option>
                        <option value="selesai">Selesai</option>
                        </select>
                            @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection