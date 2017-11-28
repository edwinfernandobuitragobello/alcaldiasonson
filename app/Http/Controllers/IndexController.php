<?php

namespace App\Http\Controllers;

use App\banners;
use App\nosotros;
use App\servicios;
use App\galerias;
use App\preguntas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use File;

class IndexController extends Controller
{
    public function index(Request $request){
        $banners = banners::get();
        $nosotros = nosotros::find(1);
        $servicios1 = servicios::find(1);
        $servicios2 = servicios::where('id','<>','1')->get();
        $galerias = galerias::get();
        return view('index', compact('banners','nosotros','servicios1','servicios2','galerias'));
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
        return redirect()->back()->with('success', 'Banner actualizado con exito');
    }
    public function admin_nosotros(Request $request){
        $nosotros = nosotros::find(1);
        return view('admin-nosotros', compact('nosotros'));
    }
    public function nosotros_editar(Request $request){
        $nosotro = nosotros::find(1);
        $nosotro->quienes_nosotros = $request->quienes_nosotros;
        $nosotro->mision_nosotros = $request->mision_nosotros;
        $nosotro->vision_nosotros = $request->vision_nosotros;
        if($request->hasFile('imagen_uno_nosotros')){
            $filename = 'imagen_uno_nosotros'.str_random(10).".".$request->file('imagen_uno_nosotros')->getClientOriginalExtension();
            $request->file('imagen_uno_nosotros')->move('imgIndex/', $filename);
            File::delete('imgIndex/'.$nosotro->imagen_uno_nosotros);
            $nosotro->imagen_uno_nosotros = $filename;
        }
        if($request->hasFile('imagen_dos_nosotros')){
            $filename = 'imagen_dos_nosotros'.str_random(10).".".$request->file('imagen_dos_nosotros')->getClientOriginalExtension();
            $request->file('imagen_dos_nosotros')->move('imgIndex/', $filename);
            File::delete('imgIndex/'.$nosotro->imagen_dos_nosotros);
            $nosotro->imagen_dos_nosotros = $filename;
        }
        $nosotro->save();
        return redirect()->back()->with('success', 'Información actualizada con exito');
    }
    public function admin_servicios(Request $request){
        $servicios1 = servicios::find(1);
        $servicios2 = servicios::where('id','<>','1')->get();
        return view('admin-servicios', compact('servicios1','servicios2'));
    }
    public function servicios_editar1(Request $request){
        $servicio = servicios::find(1);
        $servicio->descripcion_servicios = $request->descripcion_servicios;
        $servicio->save();
        return redirect()->back()->with('success', 'Descripción actualizada con exito');
    }
    public function servicios_editar2(Request $request){
        $servicio = servicios::find($request->id);
        if($request->hasFile('imagen_servicios')){
            $filename = 'imagen_servicios'.str_random(10).".".$request->file('imagen_servicios')->getClientOriginalExtension();
            $request->file('imagen_servicios')->move('imgIndex/', $filename);
            File::delete('imgIndex/'.$servicio->imagen_servicios);
            $servicio->imagen_servicios = $filename;
        }
        $servicio->titulo_servicios = $request->titulo_servicios;
        $servicio->texto_servicios = $request->texto_servicios;
        $servicio->save();
        return redirect()->back()->with('success', 'Descripción actualizada con exito');
    }
    public function admin_galeria(Request $request){
        $galerias = galerias::get();
        return view('admin-galeria', compact('galerias'));
    }
    public function galeria_editar(Request $request){
        $galeria = galerias::find($request->id);
        if($request->hasFile('imagen_galeria')){
            $filename = 'imagen_galeria'.str_random(10).".".$request->file('imagen_galeria')->getClientOriginalExtension();
            $request->file('imagen_galeria')->move('imgIndex/', $filename);
            File::delete('imgIndex/'.$galeria->imagen_galeria);
            $galeria->imagen_galeria = $filename;
        }
        $galeria->titulo_galeria = $request->titulo_galeria;
        $galeria->save();
        return redirect()->back()->with('success', 'galeria actualizada con exito');
    }
    public function admin_preguntas(Request $request){
        $preguntas1 = preguntas::find(1);
        $preguntas2 = preguntas::where('id','<>','1')->get();
        return view('admin-preguntas', compact('preguntas1','preguntas2'));
    }
    public function preguntas_editar1(Request $request){
        $pregunta = preguntas::find(1);
        $pregunta->descripcion_preguntas = $request->descripcion_preguntas;
        $pregunta->save();
        return redirect()->back()->with('success', 'Descripción actualizada con exito');
    }
    public function preguntas_editar2(Request $request){
        $pregunta = preguntas::find($request->id);
        $pregunta->titulo_preguntas = $request->titulo_preguntas;
        $pregunta->respuesta_preguntas = $request->respuesta_preguntas;
        $pregunta->save();
        return redirect()->back()->with('success', 'Descripción actualizada con exito');
    }
}
