<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Asignaciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function usuarios(Request $request){
    	$usuarios = Usuarios::paginate(12);
    	return view('usuarios', compact('usuarios'));
    }
    public function usuarios_busqueda(Request $request){
    	$cedula = $request->p;
    	$usuarios = Usuarios::where('cedula_usuario',$cedula_usuario)->paginate(12);
    	return view('usuarios', compact('usuarios', 'cedula'));
    }
    public function usuarios_crear(Request $request){
    	$usuario = new Usuarios();
        $usuario->nombre_sub = $request->nombre_uno_usuario;
        $usuario->nombre_dos_usuario = $request->nombre_dos_usuario;
        $usuario->apellido_uno_usuario = $request->apellido_uno_usuario;
        $usuario->apellido_dos_usuario = $request->apellido_dos_usuario;
        $usuario->cedula_usuario = $request->cedula_usuario;
        $usuario->catastro_usuario = $request->catastro_usuario;
        $usuario->direccion_usuario = $request->direccion_usuario;
        $usuario->telefono_usuario = $request->telefono_usuario;
        $usuario->correo_usuario = $request->correo_usuario;
        $usuario->contrasena = $request->contrasena;
        $usuario->save();
        return redirect()->back()->with('success', 'Usuario cread con exito');
    }
    public function usuarios_editar(Request $request){
    	$usuario = Usuarios::find($request->id);
        $usuario->nombre_sub = $request->nombre_uno_usuario;
        $usuario->nombre_dos_usuario = $request->nombre_dos_usuario;
        $usuario->apellido_uno_usuario = $request->apellido_uno_usuario;
        $usuario->apellido_dos_usuario = $request->apellido_dos_usuario;
        $usuario->cedula_usuario = $request->cedula_usuario;
        $usuario->catastro_usuario = $request->catastro_usuario;
        $usuario->direccion_usuario = $request->direccion_usuario;
        $usuario->telefono_usuario = $request->telefono_usuario;
        $usuario->correo_usuario = $request->correo_usuario;
        $usuario->contrasena = $request->contrasena;
        $usuario->save();
        return redirect()->back()->with('success', 'Usuario actualizado con exito');
    }
    public function usuarios_eliminar($id){
    	$usuario = Usuarios::find($id);
		$usuario->delete();
		return redirect()->back()->with('success', 'Usuario eliminado con exito');
    }
    public function asignaciones(Request $request){
    	$asignaciones = Asignaciones::paginate(12);
    	return view('asignaciones', compact('asignaciones'));
    }
    public function asignaciones_busqueda(Request $request){
    	$cedula_usuario_asignacion = $request->p;
    	$asignaciones = Asignaciones::where('cedula_usuario_asignacion',$cedula_usuario_asignacion)->paginate(12);
    	return view('asignaciones', compact('asignaciones', 'cedula_usuario_asignacion'));
    }
    public function asignaciones_crear(Request $request){
    	$asignaciones = new Asignaciones();
        $asignaciones->titulo_asignacion = $request->titulo_asignacion;
        $asignaciones->cedula_usuario_asignacion = $request->cedula_usuario_asignacion;
        if($request->hasFile('pdf_asignacion')){
            $filename = 'pdf_asignacion'.str_random(40).".".$request->file('pdf_asignacion')->getClientOriginalExtension();
            $request->file('pdf_asignacion')->move('uploads/', $filename);
            $asignaciones->pdf_asignacion = $filename;
        }
        $asignaciones->fecha_inicio_asignacion = $request->fecha_inicio_asignacion;
        $asignaciones->fecha_fin_asignacion = $request->fecha_fin_asignacion;
        $usuario->save();
        return redirect()->back()->with('success', 'Asignación creada con exito');
    }
    public function asignaciones_editar(Request $request){
    	$asignaciones = Asignaciones::find($request->id);
        $asignaciones->titulo_asignacion = $request->titulo_asignacion;
        // $asignaciones->cedula_usuario_asignacion = $request->cedula_usuario_asignacion;
        // $asignaciones->pdf_asignacion = $request->pdf_asignacion;
        $asignaciones->fecha_inicio_asignacion = $request->fecha_inicio_asignacion;
        $asignaciones->fecha_fin_asignacion = $request->fecha_fin_asignacion;
        $usuario->save();
        return redirect()->back()->with('success', 'Asignación actualizada con exito');
    }
    public function asignaciones_eliminar($id){
    	$asignaciones = Asignaciones::find($id);
		$asignaciones->delete();
		return redirect()->back()->with('success', 'Asignación eliminado con exito');
    }
}
