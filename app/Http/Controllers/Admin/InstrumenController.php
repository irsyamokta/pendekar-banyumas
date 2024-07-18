<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstrumenSDQ;
use App\Models\InstrumenSRQ;
use Illuminate\Http\Request;

class InstrumenController extends Controller
{
    public function viewSDQ($id){
        $data = InstrumenSDQ::where('id_sdq', $id)->first();
        if(!$data){
            abort(404);
        }
        return view('admin.dashboard.edit-sdq', compact('data'));
    }

    public function storeSDQ(Request $request){
        try{
            $data = new InstrumenSDQ();
            $data->pertanyaan = $request->pertanyaan;
            $data->save();
            return redirect()->route('sdq')->with('Success', 'Berhasil menambahkan pertanyaan');
        } catch (\Exception $e){
            return redirect()->route('sdq')->with('error', $e->getMessage());
        }
    }

    public function editSDQ(Request $request, $id){
        try{
            $data = InstrumenSDQ::find($id);
            $data->pertanyaan = $request->pertanyaan;
            $data->save();
            return redirect()->route('sdq')->with('Success', 'Berbayar mengedit pertanyaan');
        } catch(\Exception $e){
            return redirect()->route('sdq')->with('error', $e->getMessage());
        }
    }

    public function deleteSDQ($id){
        $data = InstrumenSDQ::find($id);
        $data->delete();
        return redirect()->route('sdq')->with('Success', 'Berhasil menghapus pertanyaan');
    }
    

    public function viewSRQ($id){
        $data = InstrumenSRQ::where('id_srq', $id)->first();
        if(!$data){
            abort(404);
        }
        return view('admin.dashboard.edit-srq', compact('data'));
    }

    public function storeSRQ(Request $request){
        try{
            $data = new InstrumenSRQ();
            $data->pertanyaan = $request->pertanyaan;
            $data->save();
            return redirect()->route('srq')->with('Success', 'Berhasil menambahkan pertanyaan');
        } catch (\Exception $e){
            return redirect()->route('srq')->with('error', $e->getMessage());
        }
    }

    public function editSRQ(Request $request, $id){
        try{
            $data = InstrumenSRQ::find($id);
            $data->pertanyaan = $request->pertanyaan;
            $data->save();
            return redirect()->route('srq')->with('Success', 'Berbayar mengedit pertanyaan');
        } catch(\Exception $e){
            return redirect()->route('srq')->with('error', $e->getMessage());
        }
    }

    public function deleteSRQ($id){
        $data = InstrumenSRQ::find($id);
        $data->delete();
        return redirect()->route('srq')->with('Success', 'Berhasil menghapus pertanyaan');
    }

}
