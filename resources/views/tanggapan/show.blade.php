@extends ('navbar')
@section ('main')

        <div class="container">
        <h4 class="page-title">Detail Data tanggapan</h4>
            <div class="card mt-5">
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>

                        <div class="form-group">
                        <strong>ID tanggapan:</strong>
                        {{ $tanggapan->id_pengaduan }}
                        </div>

                        <div class="form-group">
                        <strong>Tanggal tanggapan:</strong>
                        {{ $tanggapan->tgl_tanggapan }}
                        </div>

                        <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $tanggapan->nik }}
                        </div>

                        <div class="form-group">
                        <strong>Tanggapan:</strong>
                        {{ $tanggapan->tanggapan }}
                        </div>

                        <div class="form-group">
                        <strong>status:</strong>
                        {{ $tanggapan->status }}
                        </div>
                    </form>
 
                </div>
            </div>
        </div>
@endsection