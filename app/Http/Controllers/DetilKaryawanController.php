<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetilKaryawan; 
use App\Models\Karyawan;//add Student Model - Data is coming from the database via Model.
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class DetilKaryawanController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detil_karyawan = DetilKaryawan::all();
        return view ('detil_karyawan.index', compact('detil_karyawan'));
    }

    public function cetak_pdf()
    {
        $detilkaryawan = DetilKaryawan::all();

        $pdf = PDF::loadView('detil_karyawan.detil_karyawan_pdf', ['detil_karyawan' => $detilkaryawan])->setPaper('a3', 'landscape');
        return $pdf->stream();

        
    }

    public function create()
    {
        $karyawan = Karyawan::all(); 
        return view('detil_karyawan.create', compact('karyawan'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_karyawan' => 'required',
            'nomor_ktp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_ktp' => 'required',
            'kota_ktp' => 'required',
            'provinsi_ktp' => 'required',
            'kode_pos_ktp' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
        ]);

        if($validator->fails()){
            Session::flash('error', 'Inputan harus terisi semua.');
            return redirect('/detil_karyawan/create');
        }else{

            $detil_karyawan = new DetilKaryawan;
//$detil_karyawan->kode_karyawan_detail = $request->kode_karyawan_detail;
            $detil_karyawan->nama_karyawan = $request->nama_karyawan;
            $detil_karyawan->nomor_ktp = $request->nomor_ktp;
            $detil_karyawan->tempat_lahir = $request->tempat_lahir;
            $detil_karyawan->tanggal_lahir = $request->tanggal_lahir;
            $detil_karyawan->alamat_ktp = $request->alamat_ktp;
            $detil_karyawan->kota_ktp = $request->kota_ktp;
            $detil_karyawan->provinsi_ktp = $request->provinsi_ktp;
            $detil_karyawan->kode_pos_ktp = $request->kode_pos_ktp;
            $detil_karyawan->nomor_telepon = $request->nomor_telepon;
            $detil_karyawan->email = $request->email;
            $detil_karyawan->save();
            //::create($request->all());

            return redirect('detil_karyawan')->with('flash_message', 'detil karyawan Added!');  
        
    }
}

    public function show($id)
{
    $detil_karyawan = DetilKaryawan::findOrFail($id);
    return view('detil_karyawan.show', compact('detil_karyawan'));
}

    public function edit($id)
    {
        $detil_karyawan = DetilKaryawan::findOrFail($id);
        $karyawan = Karyawan::all(); //semisal mau nama karyawan bisa diubah jika tidak mau maka bisa di hapus saja
        return view('detil_karyawan.edit', compact('detil_karyawan', 'karyawan'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'nomor_ktp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_ktp' => 'required',
            'kota_ktp' => 'required',
            'provinsi_ktp' => 'required',
            'kode_pos_ktp' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            // tambahkan validasi untuk field lainnya
        ]);
        $detil_karyawan = DetilKaryawan::findOrFail($id);
        $detil_karyawan->nama_karyawan = $request->nama_karyawan;
        $detil_karyawan->nomor_ktp = $request->nomor_ktp;
        $detil_karyawan->tempat_lahir = $request->tempat_lahir;
        $detil_karyawan->tanggal_lahir = $request->tanggal_lahir;
        $detil_karyawan->alamat_ktp = $request->alamat_ktp;
        $detil_karyawan->kota_ktp = $request->kota_ktp;
        $detil_karyawan->provinsi_ktp = $request->provinsi_ktp;
        $detil_karyawan->kode_pos_ktp = $request->kode_pos_ktp;
        $detil_karyawan->nomor_telepon = $request->nomor_telepon;
        $detil_karyawan->email = $request->email;
        $detil_karyawan->save();
        return redirect()->route('detil_karyawan.index')
                         ->with('success', 'Detil Karyawan berhasil di update');
    }

    public function destroy($id)
    {
        DetilKaryawan::findOrFail($id)->delete();
        return redirect()->route('detil_karyawan.index')
                         ->with('success', 'Detil Karyawan berhasil di hapus');
    }
}

