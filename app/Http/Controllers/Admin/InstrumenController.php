<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstrumenSDQ;
use App\Models\InstrumenSRQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstrumenController extends Controller
{

    // SDQ First
    public function viewSDQFirst($id){
        $data = InstrumenSDQ::where('id_sdq', $id)->first();
        if(!$data){
            abort(404);
        }
        return view('admin.dashboard.menu.edit-sdq-first', compact('data'));
    }

    public function storeSDQFirst(Request $request){
        try{
            $data = new InstrumenSDQ();
            $data->pertanyaan = $request->pertanyaan;
            $data->domain = $request->domain;
            $data->kategori = $request->kategori;
            $data->save();
            DB::statement('SET @i = 0');
            DB::statement('UPDATE instrumen_sdq SET urutan = (@i := @i + 1) ORDER BY id_sdq');
            return redirect()->route('sdqFirst')->with('Success', 'Berhasil menambahkan pertanyaan');
        } catch (\Exception $e){
            return redirect()->route('sdqFirst')->with('error', $e->getMessage());
        }
    }

    public function editSDQFirst(Request $request, $id){
        try{
            $data = InstrumenSDQ::find($id);
            $data->pertanyaan = $request->pertanyaan;
            $data->domain = $request->domain;
            $data->save();
            return redirect()->route('sdqFirst')->with('Success', 'Berhasil mengedit pertanyaan');
        } catch(\Exception $e){
            return redirect()->route('sdqFirst')->with('error', $e->getMessage());
        }
    }

    public function deleteSDQFirst($id){
        $data = InstrumenSDQ::find($id);
        $data->delete();
        DB::statement('SET @i = 0');
        DB::statement('UPDATE instrumen_sdq SET urutan = (@i := @i + 1) ORDER BY id_sdq');
        return redirect()->route('sdqFirst')->with('Success', 'Berhasil menghapus pertanyaan');
    }

    // SDQ Second
    public function viewSDQSecond($id){
        $data = InstrumenSDQ::where('id_sdq', $id)->first();
        if(!$data){
            abort(404);
        }
        return view('admin.dashboard.menu.edit-sdq-second', compact('data'));
    }
    public function storeSDQSecond(Request $request){
        try{
            $data = new InstrumenSDQ();
            $data->pertanyaan = $request->pertanyaan;
            $data->domain = $request->domain;
            $data->kategori = $request->kategori;
            $data->save();
            DB::statement('SET @i = 0');
            DB::statement('UPDATE instrumen_sdq SET urutan = (@i := @i + 1) ORDER BY id_sdq');
            return redirect()->route('sdqSecond')->with('Success', 'Berhasil menambahkan pertanyaan');
        } catch (\Exception $e){
            return redirect()->route('sdqSecond')->with('error', $e->getMessage());
        }
    }

    public function editSDQSecond(Request $request, $id){
        try{
            $data = InstrumenSDQ::find($id);
            $data->pertanyaan = $request->pertanyaan;
            $data->domain = $request->domain;
            $data->save();
            return redirect()->route('sdqSecond')->with('Success', 'Berhasil mengedit pertanyaan');
        } catch(\Exception $e){
            return redirect()->route('sdqSecond')->with('error', $e->getMessage());
        }
    }

    public function deleteSDQSecond($id){
        $data = InstrumenSDQ::find($id);
        $data->delete();
        DB::statement('SET @i = 0');
        DB::statement('UPDATE instrumen_sdq SET urutan = (@i := @i + 1) ORDER BY id_sdq');
        return redirect()->route('sdqSecond')->with('Success', 'Berhasil menghapus pertanyaan');
    }

    // SRQ

    public function viewSRQ($id){
        $data = InstrumenSRQ::where('id_srq', $id)->first();
        if(!$data){
            abort(404);
        }
        return view('admin.dashboard.menu.edit-srq', compact('data'));
    }

    public function storeSRQ(Request $request){
        try{
            $data = new InstrumenSRQ();
            $data->pertanyaan = $request->pertanyaan;
            $data->save();
            DB::statement('SET @i = 0');
            DB::statement('UPDATE instrumen_srq SET urutan = (@i := @i + 1) ORDER BY id_srq');
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
            return redirect()->route('srq')->with('Success', 'Berhasil mengedit pertanyaan');
        } catch(\Exception $e){
            return redirect()->route('srq')->with('error', $e->getMessage());
        }
    }

    public function deleteSRQ($id){
        $data = InstrumenSRQ::find($id);
        $data->delete();
        DB::statement('SET @i = 0');
        DB::statement('UPDATE instrumen_srq SET urutan = (@i := @i + 1) ORDER BY id_srq');
        return redirect()->route('srq')->with('Success', 'Berhasil menghapus pertanyaan');
    }

}
