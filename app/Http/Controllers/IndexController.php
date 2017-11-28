<?php

namespace App\Http\Controllers;

use App\banners;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use File;

class IndexController extends Controller
{
    public function index(Request $request){
        return view('index');
    }
    public function admin_enlaces(Request $request){
        return view('admin-enlaces');
    }
    public function admin_banners(Request $request){
    	$banners = banners::get();
        return view('admin-banners', compact('banners'));
    }
    public function banner_editar(Request $request){
    	$banner = banners::find($request->id);
        $banner->titulo_banner = $request->titulo_banner;
        $banner->descripcion_banner = $request->descripcion_banner;
        if($request->hasFile('imagen_banner')){
            $filename = 'imagen_banner'.str_random(10).".".$request->file('imagen_banner')->getClientOriginalExtension();
            $request->file('imagen_banner')->move('imgIndex/', $filename);
            File::delete('imgIndex/'.$banner->imagen_banner);
            $banner->imagen_banner = $filename;
        }
        $banner->save();
        return redirect()->back()->with('success', 'Asignación actualizada con exito');
    }
}
