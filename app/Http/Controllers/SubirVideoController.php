<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class SubirVideoController extends Controller
{
    public function subirVideo(Request $request){
        $url = null;
        $archivo = $request->file('archivo');
        try{
            $url = Storage::disk('google')->put('',$archivo);
        }catch(\Exception $e){
            //dd($e);
        }
            
        return back()->with($url);
    }
}
