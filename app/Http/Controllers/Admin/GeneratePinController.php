<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratePin;
use Exception;

class GeneratePinController extends Controller
{
    public function store(Request $request)
    {
        try{
            $request->validate([
                'pin' => 'required|min:6|max:6',
            ]);
            
            $generatePin = new GeneratePin();
            $generatePin->pin = $request->pin;
            $generatePin->save();
    
            return redirect()->route('dashboard')->with('success', 'Generate Pin Success');

        }catch(Exception $e){
            return redirect()->route('dashboard')->with('error', $e->getMessage());
        }
    }
}
