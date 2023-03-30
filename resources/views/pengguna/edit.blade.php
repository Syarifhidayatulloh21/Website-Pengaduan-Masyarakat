@extends ('navbar')
@section ('main')

        <div class="container">
                    <h4 class="page-title">@section ('title','Ubah Level Data User ')</h4>
                    <form method="post" action="/pengguna/update/{{ $pengguna->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <strong>Apakah User Ini Ingin Mengubah Level?</strong>
                        <br>
                        <br>
                        <label for="level">Level :</label>
                        <select name="level">
                            <option value="masyarakat">Masyarakat</option>
                            <option value="petugas">Petugas</option>
                            <option value="admin">Admin</option>
                        </select>
                            @if($errors->has('level'))
                                <div class="text-danger">
                                    {{ $errors->first('level')}}
                                </div>
                            @endif
 
                        </div>
                    </div>
                    <br>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="/pengguna" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection