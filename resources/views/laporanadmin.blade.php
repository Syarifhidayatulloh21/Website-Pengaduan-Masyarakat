@extends ('navbar')
@section ('main')

        <div class="container">
            <div class="card mt-6">
                <div class="card-body">
                    <h4 class="page-title" style="text-align: center;"><strong>@section ('title','Laporan Admin')</strong></h4>
                    <br/>
                    <br/>
                    <h3>Cetak Semua Laporan Pengaduan Masyarakat</h3>
                    <br>
                    <a href="cetak" class="white_btn3" target="_blank"><Strong>Cetak Pengaduan</Strong></a>
                </div>
            </div>
        </div>



@endsection