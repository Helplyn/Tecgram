<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file("file");
        $nombreimagen = Str::uuid().".".$imagen->extension();
        $imagenservidor = Image::make($imagen);
        $imagenservidor->fit(500,500);

        $imagenruta = public_path('uploads')."/".$nombreimagen;

        $imagenservidor->save($imagenruta);

        return response()->json(['imagen'=>$imagen->extension()]);
    }
}
