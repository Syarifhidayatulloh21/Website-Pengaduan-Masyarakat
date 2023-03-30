@extends ('navbar')
@section ('main')

<div class="container">
    <a href="/pengguna" class="btn btn-primary">Kembali</a>
    <div class="card mt-5">
        <div class="card-body">
                    <h4 class="page-title"><strong>@section ('title','Detail Pengguna')</strong></h4>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-6">
                        <div class="form-group">
                            <strong>Nik:</strong>
                            {{ $user->nik }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $user->nama }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>No Telepon:</strong>
                            {{ $user->telp }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $user->jenkel }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Level:</strong>
                            {{ $user->level }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Alamat:</strong>
                            {{ $user->alamat }}
                            </div>

                            <br>
                        </form>

                        </div>
                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                            <div class="form-group">
                            <strong>Rt:</strong>
                            {{ $user->rt }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Rw:</strong>
                            {{ $user->rw }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Kode Pos:</strong>
                            {{ $user->kode_pos }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Provinsi:</strong>
                            {{ $user->province->name}}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Kabupaten / Kota:</strong>
                            {{ $user->district->name }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Kecamatan:</strong>
                            {{ $user->regency->name }}
                            </div>

                            <br>

                            <div class="form-group">
                            <strong>Kelurahan:</strong>
                            {{ $user->Village->name }}
                            </div>

                            <br>
                        </div>

                    </div>
@endsection