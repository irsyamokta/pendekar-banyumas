<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratePin;
use App\Models\InstrumenSDQ;
use App\Models\Peserta;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
            $request->session()->regenerate();
            return redirect()->route('formData')->with('success', 'PIN yang anda masukkan sesuai');
        }else{
            return redirect()->back()->with('error', 'Ooppss... Pin yang Anda masukkan salah!');
        }
    }

    public function formData(Request $request)
    {   
        session()->flash('success');
        return view('client.page.screening.page.input-data');
    }

    public function inputData(Request $request)
    {
        try{
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
            $peserta->token = Str::random(60);

            $peserta->save();
            $request->session()->put('token', $peserta->token);
            $request->session()->regenerate(); 
            return redirect()->route('sdqQuestions')->with('success', 'Berhasil mengisi data diri');

        }catch(Exception $e){
            return redirect()->back()->with('error', 'Ooppss... Terjadi kesalahan');
        }
    }

    public function sdqQuestions(Request $request)
    {   

        $token = $request->session()->get('token');
        if (!$token) {
            abort(403, 'Unauthorized access');
        }

        $peserta = Peserta::where('token', $token)->first();

        if (!$peserta || $peserta->token != $token) {
            abort(403, 'Unauthorized access');
        }

        $tanggalLahir = $peserta->tanggal_lahir;
        $tanggalLahirCarbon = Carbon::createFromFormat('d/m/Y', $tanggalLahir);
        $umur = $tanggalLahirCarbon->age;

        if ($umur >= 4 && $umur <= 10) {
            $sdqQuestions = InstrumenSDQ::where('kategori', '4-10 Tahun')->get();
        } elseif ($umur >= 11 && $umur <= 18) {
            $sdqQuestions = InstrumenSDQ::where('kategori', '11-18 Tahun')->get();
        } else {
            abort(404);
        }

        return view('client.page.screening.page.questions', compact('sdqQuestions', 'umur'));
    }
}
