@extends ('navbar')
@section ('main')

        <div class="container">
            <div class="form-group">
                <a href="/pengaduan" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="page-title"><strong>@section ('title',' Data Pengaduan')</strong></h4>
                         
                        <div class="form-group">
                        <strong>Tanggal Pengaduan:</strong>
                        {{ $pengaduan->tgl_pengaduan }}
                        </div>

                        <br>

                        <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $pengaduan->nik }}
                        </div>

                        <br>

                        <div class="form-group">
                        <strong>Isi Laporan:</strong>
                        {{ $pengaduan->isi_laporan }}
                        </div>

                        <br>

                        <div class="form-group">
                        <td>
                        <img src="{{ asset('image/'. $pengaduan->foto) }}" height="100%" width="100%">
                        </td> 
                        </div>

                        <br>
                        

                        <div class="form-group">
                        <strong>Status:</strong>
                            @if ($pengaduan->status == 'pending')
                            <span class="badge bg-danger">{{ $pengaduan->status }}</span>
                            @elseif ($pengaduan->status == 'proses')
                            <span class="badge bg-warning">{{ $pengaduan->status }}</span>
                            @else
                            <span class="badge bg-success">{{ $pengaduan->status }}</span>
                            @endif

                            <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    
                    
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                        <h4 class="page-title"><strong>Tanggapan</strong></h4>
                    <form method="post" action="/tanggapan/store" enctype="multipart/form-data">
                        <br>
 
                        {{ csrf_field() }}

                       
                            <input type="text" name="id_pengaduan" id="id_pengaduan" class="form-control" placeholder="" value="{{ $pengaduan->id_pengaduan }}" hidden>

                        

                        <div class="form-group">
                            <label>Tanggal/Jam tanggapan</label>
                            <input type="" name="tgl_tanggapan" class="form-control" placeholder="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date( "d-m-Y | H:i:s"); ?>" readonly>
                        </div>

                        <br>

                        <!-- <div class="form-group">
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
                            <textarea name="tanggapan" class="form-control" placeholder="" cols="10" rows="5"></textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <br>

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
                        <br>
                        <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection