<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Asignaciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
	public function login(Request $request){
		return view('admin-login1');
	}
    public function solicitud(Request $request){
        return view('admin-login2');
    }
    public function logeo(Request $request){
        $posibles = Usuarios::where('catastro_usuario',$request->catastro_usuario)->where('contrasena',$request->contrasena)->get();
        if (count($posibles)==0) {
            return redirect('/login');
        }else{
            for ($i=0; $i < count($posibles) ; $i++) { 
                if ($posibles[$i]['nombre_uno_usuario'].$posibles[$i]['apellido_uno_usuario']==$request->nombre_uno_usuario) {
                    session_start();
                    $_SESSION['id_login'] = $posibles[$i]['id'];
                    if ($posibles[$i]['id']==1) {
                        return redirect('/');
                    }elseif ($posibles[$i]['id']==2) {
                        return redirect('/admin_banners');
                    }else{
                        return redirect('/documentos_usuarios');
                    }
                }
            }
            return redirect('/login');
        }
    }
    public function logeo_fin(Request $request){
        session_start();
        session_destroy();
        return redirect('/login');
    }
    public function usuarios(Request $request){
        session_start();
        if ((!isset($_SESSION['id_login']))||($_SESSION['id_login']!=1)) {
            return redirect('/login');
        }
        $usuarios = Usuarios::where('id','<>','1')->paginate(10);
        $admin = Usuarios::where('id','1')->get()[0];
        return view('admin-usuarios', compact('usuarios','admin'));
    }
	public function documentos_usuarios(Request $request){
		session_start();
        if ((!isset($_SESSION['id_login']))) {
    		return redirect('/login');
        }
    	$asignaciones = Asignaciones::join('usuarios', 'usuarios.cedula_usuario', '=', 'asignaciones.cedula_usuario_asignacion')->select('asignaciones.*', 'usuarios.nombre_uno_usuario', 'usuarios.apellido_uno_usuario')->paginate(10);
        $date = date("Y-m-d h:i:s");
        for ($i=0; $i < count($asignaciones) ; $i++) { 
            if (($asignaciones[$i]['fecha_inicio_asignacion']<$date) AND ($asignaciones[$i]['fecha_fin_asignacion']>$date)) {
                $asignaciones[$i]['boton'] = 1;
            }else{
                $asignaciones[$i]['boton'] = 0;
            }
        }
    	return view('usuario-documentos', compact('asignaciones'));
    }
    public function documentos_usuarios_busqueda(Request $request){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/login');
        }
        $titulo_asignacion = $request->p;
        $asignaciones = Asignaciones::where('titulo_asignacion','like','%'.$titulo_asignacion.'%')->join('usuarios', 'usuarios.cedula_usuario', '=', 'asignaciones.cedula_usuario_asignacion')->select('asignaciones.*', 'usuarios.nombre_uno_usuario', 'usuarios.apellido_uno_usuario')->paginate(10);
        $date = date("Y-m-d h:i:s");
        for ($i=0; $i < count($asignaciones) ; $i++) { 
            if (($asignaciones[$i]['fecha_inicio_asignacion']<$date) AND ($asignaciones[$i]['fecha_fin_asignacion']>$date)) {
                $asignaciones[$i]['boton'] = 1;
            }else{
                $asignaciones[$i]['boton'] = 0;
            }
        }
        return view('usuario-documentos-busqueda', compact('asignaciones', 'titulo_asignacion'));
    }
    public function usuarios_busqueda(Request $request){
        session_start();
        if ((!isset($_SESSION['id_login']))||($_SESSION['id_login']!=1)) {
            return redirect('/login');
        }
    	$cedula_usuario = $request->p;
    	$admin = Usuarios::where('id','1')->get()[0];
    	$usuarios = Usuarios::where('cedula_usuario',$cedula_usuario)->where('id','<>','1')->paginate(12);
    	return view('admin-usuarios-busqueda', compact('usuarios', 'cedula_usuario','admin'));
    }
    public function usuarios_crear(Request $request){
    	$usuario = Usuarios::find($request->id);
    	if (count($usuario)<=0) {
    		$usuario = new Usuarios();
    	}
        $usuario->nombre_uno_usuario = $request->nombre_uno_usuario;
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
        if (count($usuario)<=0) {
    		return redirect()->back()->with('success', 'Usuario creado con exito');
    	}else{
    		return redirect()->back()->with('success', 'Usuario actualizado con exito');
    	}
    }
    public function usuarios_editar(Request $request){
    	$usuario = Usuarios::find($request->id);
        $usuario->nombre_uno_usuario = $request->nombre_uno_usuario;
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
    public function usuarios_eliminar(Request $request){
    	$usuario = Usuarios::find($request->id);
		$usuario->delete();
		return redirect()->back()->with('success', 'Usuario eliminado con exito');
    }
    public function asignaciones(Request $request){
        session_start();
        if ((!isset($_SESSION['id_login']))||($_SESSION['id_login']!=1)) {
            return redirect('/login');
        }
    	$asignaciones = Asignaciones::join('usuarios', 'usuarios.cedula_usuario', '=', 'asignaciones.cedula_usuario_asignacion')->select('asignaciones.*', 'usuarios.nombre_uno_usuario', 'usuarios.apellido_uno_usuario')->paginate(10);
    	$admin = Usuarios::where('id','1')->get()[0];
    	return view('admin-documentos', compact('asignaciones','admin'));
    }
    public function asignaciones_busqueda(Request $request){
        session_start();
        if ((!isset($_SESSION['id_login']))||($_SESSION['id_login']!=1)) {
            return redirect('/login');
        }
    	$titulo_asignacion = $request->p;
    	$asignaciones = Asignaciones::where('titulo_asignacion','like','%'.$titulo_asignacion.'%')->join('usuarios', 'usuarios.cedula_usuario', '=', 'asignaciones.cedula_usuario_asignacion')->select('asignaciones.*', 'usuarios.nombre_uno_usuario', 'usuarios.apellido_uno_usuario')->paginate(10);
    	$admin = Usuarios::where('id','1')->get()[0];
    	return view('admin-documentos-busqueda', compact('asignaciones', 'titulo_asignacion','admin'));
    }
    public function asignaciones_crear(Request $request){
    	$asignaciones = new Asignaciones();
        $asignaciones->titulo_asignacion = $request->titulo_asignacion;
        $asignaciones->cedula_usuario_asignacion = $request->cedula_usuario_asignacion;
        if($request->hasFile('pdf_asignacion')){
            $filename = 'pdf_'.str_random(10).".".$request->file('pdf_asignacion')->getClientOriginalExtension();
            $request->file('pdf_asignacion')->move('uploads/', $filename);
            $asignaciones->pdf_asignacion = $filename;
        }
        $asignaciones->fecha_inicio_asignacion = $request->fecha_inicio_asignacion;
        $asignaciones->fecha_fin_asignacion = $request->fecha_fin_asignacion;
        $asignaciones->save();
        return redirect()->back()->with('success', 'Asignación creada con exito');
    }
    public function asignaciones_editar(Request $request){
    	$asignaciones = Asignaciones::find($request->id);
        $asignaciones->titulo_asignacion = $request->titulo_asignacion;
        $asignaciones->fecha_inicio_asignacion = $request->fecha_inicio_asignacion;
        $asignaciones->fecha_fin_asignacion = $request->fecha_fin_asignacion;
        $asignaciones->save();
        return redirect()->back()->with('success', 'Asignación actualizada con exito');
    }
    public function asignaciones_eliminar(Request $request){
    	$asignaciones = Asignaciones::find($request->id);
		$asignaciones->delete();
		return redirect()->back()->with('success', 'Asignación eliminado con exito');
    }
    public function solicitud_cuenta(Request $request){
        $headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
        $headers .= "X-Priority: 3\n";
        $headers .= "X-MSMail-Priority: Normal\n";
        $headers .= "X-Mailer: php\n";
        $headers .= "From: \"".$request->cedula."\" <".$request->correo.">\n";
        mail('efbuitrago95@gmail.com', 'Solicitud de cuenta', 'Solicitud de cuenta para usuario con cedula: '.$request->cedula." Y correo electronico: ".$request->correo , $headers);
        //sechacienda@sonson-antioquia.gov.co
        return redirect()->back()->with('success', 'Email enviado con exito');
    }
    public function import_excel(Request $request){
        Excel::load($request->excel, function($reader) {
            $excel = $reader->get();
            // iteracción
            $reader->each(function($row) {
                $usuario = new Usuarios();
                $usuario->nombre_uno_usuario = $row->nombre_uno_usuario;
                $usuario->nombre_dos_usuario = $row->nombre_dos_usuario;
                $usuario->apellido_uno_usuario = $row->apellido_uno_usuario;
                $usuario->apellido_dos_usuario = $row->apellido_dos_usuario;
                $usuario->cedula_usuario = $row->cedula_usuario;
                $usuario->catastro_usuario = $row->catastro_usuario;
                $usuario->direccion_usuario = $row->direccion_usuario;
                $usuario->telefono_usuario = $row->telefono_usuario;
                $usuario->correo_usuario = $row->correo_usuario;
                $usuario->contrasena = $row->contrasena;
                $usuario->save();
            });
        });
        return redirect()->back()->with('success', 'Usuario creado con exito');
    }
}
