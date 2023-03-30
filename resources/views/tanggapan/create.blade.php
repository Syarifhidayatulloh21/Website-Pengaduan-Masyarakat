@extends ('navbar')
@section ('main')

        <div class="container">
        <h4 class="page-title">Tambah Data tanggapan</h4>
            <div class="card mt-5">
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/tanggapan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Id pengaduan</label>
                            <select class="form-control select2" name="id_pengaduan" id="id_pengaduan">
                                <option disable value>Pilih Pengaduan</option>
                                @foreach ($pengaduan as $pengaduan)
                                <option value="{{ $pengaduan->id_pengaduan }}">{{ $pengaduan->isi_laporan }}</option>
                                @endforeach
                            </select>

                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
                        

                        <div class="form-group">
                            <label>Tanggal/Jam tanggapan</label>
                            <input type="" name="tgl_tanggapan" class="form-control" placeholder="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date( "d-m-Y | H:i:s"); ?>" readonly>
                        </div>
<!-- 
                        <div class="form-group">
                            <label>NIK Petugas</label>
                            <input type="number" name="nik" class="form-control" placeholder="">

                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div> -->

                        
                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder=""></textarea>
 
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
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection 