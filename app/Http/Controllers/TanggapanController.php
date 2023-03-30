<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
use App\Pengaduan ;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan:: all();
	    return view('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::all();

        // dd($pengaduan);
        return view('tanggapan.create', compact('pengaduan'));
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
            'id_pengaduan' => 'required',
    		'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            
    	]);
 
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
    		'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'nik' => auth()->user()->nik,
    	]);

        $pengaduan = Pengaduan::find($request->id_pengaduan);
        // dd($pengaduan);
        $pengaduan->status = $request->status;
        $pengaduan->save();


        // $data_tanggapan = new Tanggapan();
        // $data_tanggapan->tgl_tanggapan = request()->get('tgl_tanggapan');
        // $data_tanggapan->id_pengaduan = request()->get('id_pengaduan');
        // $data_tanggapan->tanggapan = request()->get('tanggapan');
        // $data_tanggapan->nik = request()->get('nik');
        // $data_tanggapan->id_tanggapan = Auth::user()->id_tanggapan;
        // $data_tanggapan->save();
        // return redirect()->back();
 
    	return redirect('/pengaduan')->with('success','Tanggapan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tanggapan)
    {
        $tanggapan = Tanggapan::where('id_tanggapan',$id_tanggapan)->first();
        return view('tanggapan.show',compact('tanggapan'));
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
        // dd($tanggapan);
        return view('tanggapan.edit',compact('tanggapan'));
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
            'id_pengaduan' => 'required',
    		'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'nik'=> 'required',
    	]);
 
        Tanggapan::where('id_tanggapan',$id)->update([
            'id_pengaduan' => $request->id_pengaduan,
    		'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'nik' => $request->nik,
    	]);

        $pengaduan = Pengaduan::find($request->id_pengaduan);
        $pengaduan->status = $request->status;
        $pengaduan->save();


  
    	return redirect('/pengaduan')->with('success','Tanggapan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Tanggapan::where('id_tanggapan',$id)->delete();
        return redirect('tanggapan');
    }
}
