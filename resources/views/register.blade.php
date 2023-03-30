<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('login/asset/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('login/asset/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login/asset/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login/asset/css/style.css') }}">

    <title>Register Pengaduan Masyarakat</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3 style="text-align: center;"><strong>Register Pengaduan Masyarakat</strong></h3>
                </div>
                <form id="formAuthentication" action="{{route('simpanregister') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group first">
                          <label for="nik">Nik</label>
                          <input type="number" class="form-control" id="nik" name="nik">
                          @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                          @endif
                        </div>
                        <div class="form-group last mb-4">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group last mb-4">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name="email">
                          @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group last mb-4">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group last mb-4">
                          <label for="telp">Telp</label>
                          <input type="number" class="form-control" id="telp" name="telp">
                        </div>

                          <div class="form-group last mb-4">
                              <label for="jenkel">Jenis Kelamin :</label>
                              <br>
                              <br>
                              <input type="radio" name="jenkel" value="laki-laki" selected> Laki-laki  
                              <input type="radio" name="jenkel" value="perempuan" selected> Perempuan
                          </div>

                          <div class="form-group last mb-4">
                            <label for="alamat"> Alamat</label>
                            <textarea name="alamat" id="alamat" cols="55" rows="5"></textarea>
                          </div>  

                          <div class="form-group last mb-4">
                            <input type="text" class="form-control" id="level" value="masyarakat" hidden name="level" width="500">

                          </div> 
                        </div>
                      <div>
                      <div class="col-md-12">
                      <div class="form-group last mb-4">
                            <label for="rt">Rt</label>
                            <input type="number" class="form-control" id="rt" name="rt" width="500">
                          </div> 
                      <div class="form-group last mb-4">
                            <label for="rw">Rw</label>
                            <input type="number" class="form-control" id="rw" name="rw" width="500">
                          </div>
                      <div class="form-group last mb-4">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="number" class="form-control" id="kode_pos" name="kode_pos" width="500">
                          </div> 
                          <br>
                          <div class="row mb-12">
                          <label class="col-md-12 col-form-label" for="kota">Provinsi</label>
                              <div class="col-md-12">
                              <select class="form-group" name="province_id" id="provinsi">
                                <option selected>Pilih Provinsi</option>
                                @foreach($provinces as $p)
                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                              </select>
                              </div>
                          </div>
                          <br>  
                          <div class="row mb-12">
                            <label class="col-md-12 col-form-label" for="regency">Kabupaten / Kota</label>
                            <div class="col-md-12">
                                <select class="form-group" name="regency_id" id="kabupaten">
                                </select>
                            </div>
                      </div>
                      <br>
                      <div class="row mb-12">
                          <label class="col-md-12 col-form-label" for="kecamatan">Kecamatan</label>
                          <div class="col-md-12">
                              <select class="form-group" name="district_id" id="kecamatan">
                                
                              </select>
                          </div>
                      </div>
                      <br>
                      <div class="row mb-12">
                          <label class="col-md-12 col-form-label" for="desa">Desa</label>
                          <div class="col-md-12">
                              <select class="form-group" name="village_id" id="desa">
                                
                              </select>
                          </div>
                      </div>
                    </div>
                  </div>



                  <input type="submit" value="Sign Up" class="btn btn-pill text-white btn-block btn-primary">

                  <span class="d-block text-center my-4 text-muted"> Sudah punya akun <a href="/logins">Login</a></span>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{ asset('login/asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login/asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('login/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login/asset/js/main.js') }}"></script>

    <script>
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
            });
    
            $(function(){
                $('#provinsi').on('change',function(){
                    let id_provinsi = $('#provinsi').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkabupaten')}}",
                        data : {id_provinsi:id_provinsi},
                        cache : false,
    
                        success: function(msg){
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
    
                $('#kabupaten').on('change',function(){
                    let id_kabupaten = $('#kabupaten').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkecamatan')}}",
                        data : {id_kabupaten:id_kabupaten},
                        cache : false,
    
                        success: function(msg){
                            $('#kecamatan').html(msg);
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
    
                $('#kecamatan').on('change',function(){
                    let id_kecamatan = $('#kecamatan').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getdesa')}}",
                        data : {id_kecamatan:id_kecamatan},
                        cache : false,
    
                        success: function(msg){
                            $('#desa').html(msg);
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
            });
        });
    </script>
  </body>
</html>