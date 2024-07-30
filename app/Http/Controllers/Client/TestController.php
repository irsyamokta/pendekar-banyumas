<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratePin;
use App\Models\InstrumenSDQ;
use App\Models\Peserta;
use Exception;

class TestController extends Controller
{
    public function inputPin()
    {
        return view('client.page.screening.page.input-pin');
    }

    public function checkPin(Request $request)
    {
        $latestPinRecord = GeneratePin::orderBy('created_at', 'desc')->first();
        $latestPin = $latestPinRecord ? $latestPinRecord->pin : null;
        $pinInput = $request->input_pin;

        if($latestPin && $latestPin === $pinInput){
            return redirect()->route('formData')->with('success', 'PIN yang anda masukkan sesuai');
        }else{
            return redirect()->back()->with('error', 'Ooppss... Pin yang Anda masukkan salah!');
        }
    }

    public function formData()
    {
        return view('client.page.screening.page.input-data');
    }

    public function inputData(Request $request)
    {
        try{
            // $request->validate([
            
        // ]);
            $peserta = new Peserta();
            $peserta->nama_lengkap = $request->nama_lengkap;
            $peserta->tanggal_lahir = $request->tanggal_lahir;
            $peserta->jenis_kelamin = $request->jenis_kelamin;
            $peserta->nomor_hp = $request->nomor_hp;
            $peserta->email = $request->email;
            $peserta->alamat = $request->alamat;
            $peserta->kelurahan = $request->kelurahan;
            $peserta->kecamatan = $request->kecamatan;
            $peserta->kabupaten = $request->kabupaten;

            $peserta->save();


        }catch(Exception $e){
            return redirect()->back()->with('error', 'Ooppss... Terjadi kesalahan');
        }
    }

    public function sdqTest()
    {
        $instrumenSdq = InstrumenSDQ::all();
        return view('client.page.screening.page.questions', compact('instrumenSdq'));
    }
}
