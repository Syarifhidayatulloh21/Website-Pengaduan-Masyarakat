@extends ('navbar')
@section ('main')

        <div class="container">
                    <h4 class="page-title">@section ('title','Ubah Status Data Pengaduan ')</h4>
                    <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <strong>Apakah Pengaduan Ini Sudah Ditanggapi?</strong>
                        <br>
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
                    </div>
                    <br>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection