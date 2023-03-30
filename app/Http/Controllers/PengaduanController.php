<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function pengaduantanggapan($id_pengaduan)
    {
        $pengaduan = Pengaduan::with(['pengaduan'])->findOrFail($id_pengaduan);
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
	    return view('pengaduantanggapan', compact('pengaduan','tanggapan'));
    }


    public function index()
    {
        // $pengaduan = Pengaduan::where('nik', auth()->user()->nik)->get();
        $pengaduan = Pengaduan::orderBy('id_pengaduan', 'DESC')->paginate(5);
	    return view('pengaduan.index', compact('pengaduan'));
    }

    public function laporan()
    {
        $pengaduan = Pengaduan::where('nik', auth()->user()->nik)->get();
        // $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();
	    return view('laporan', compact('pengaduan'));
    }


    public function cetak()
    {
        $pengaduan = Pengaduan::all();
	    return view('cetak', compact('pengaduan'));
    }

    public function laporanadmin()
    {
        return view('/laporanadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_tanggapan' => Carbon::now()->format('Y-m-d'),
    		'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => 'required'
            
    	]);
 

        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);

        Pengaduan::create([
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => auth()->user()->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName,
            'status' => $request->status,
            
        ]);

        return redirect('/pengaduan/create')->with('success','Data Berhasil Di Tambahkan');
        //    $nm = $request->foto;
    //    $item = time().rand(100,999).".".$nm->getClientOriginalName();

    //    $data = new Pengaduan;
    //    $data->tgl_pengaduan = $request->tgl_pengaduan;
    //    $data->nik = $request->nik;
    //    $data->isi_laporan = $request->isi_laporan;
    //    $data->status = $request->status;
    //    $data['foto'] =
    //    $request->file('foto')->store('assets/pengaduan','public');

    //    $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pengaduan)
    {
        $pengaduan = Pengaduan::with(['pengaduan'])->findOrFail($id_pengaduan);
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
        // dd($tanggapan);

        // $data_tanggapan = Tanggapan::whereHas('pengaduan',function($query) { 
        //     $query->where('id_pengaduan',request()->route('id'));
        // });

        // $tanggapan = DB::table('tanggapan')->where('id',$id_pengaduan)->get();

        return view('pengaduan.show',compact('pengaduan','tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan = Tanggapan::where('id_tanggapan',$id)->first();
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        return view('pengaduan.edit',compact('pengaduan','tanggapan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'status' => 'required',

         ]);
      

          $pengaduan = Pengaduan::find($id);
          $pengaduan->status = $request->status;
          $pengaduan->save();
          return redirect('pengaduan')->with('success','Status Berhasil Ubah');

            // Pengaduan::where('id_pengaduan',$id)->update([
            // 'tgl_pengaduan' => $request->tgl_pengaduan,
            // 'nik' => $request->nik,
            // 'isi_laporan' => $request->isi_laporan,
            // 'status' => $request->status,
            // 'foto' => $request->file('foto')->store('assets/pengaduan','public')
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('pengaduan')->with('success', 'Pengaduan berhasil di hapus');;
    }
}
