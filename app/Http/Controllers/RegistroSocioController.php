<?php

namespace App\Http\Controllers;

use App\Registro_socio;
use Illuminate\Http\Request; //indispensable para usar Request de los JSON
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage; //gestion de archivos
// use Illuminate\Support\Facades\DB;//consulta a la base de datos

class RegistroSocioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    //declaramos un indice llamado usuario_soio
    //nos paginara las entradas por 5 registros
    $datos['registro_socio'] = registro_socio::paginate();
    return view('registro_socio.index', $datos);

    // DB::table('posts');

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('registro_socio.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {


    $campos = [
      'USUARIO_NOMBRE' => 'string|max:100',
      'USUARIO_APELLIDOPATERNO' => 'string|max:100',
      'USUARIO_APELLIDOMATERNO' => 'string|max:100',
      'USUARIO_SEXO' => 'required',
      'USUARIO_CORREO' => 'email',
      'USUARIO_CALLE' => 'string|max:100',
      // 'USUARIO_NUM_EXT'=>'required',
      // 'USUARIO_NUM_INT' => 'required',
      'USUARIO_CP' => 'string|max:5',
      'USUARIO_COLONIA' => 'string|max:100',
      'USUARIO_LOCALIDAD' => 'string|max:100',
      'USUARIO_ENTIDAD' => 'string|max:100',

      'USUARIO_TEL_CASA' => 'string|max:10',
      'USUARIO_TEL_CEL' => 'string|max:10',
      'USUARIO_CURP' => 'string|max:18',
      // 'USUARIO_FECHA_NAC' => 'required',
      'USUARIO_ENTIDAD_NAC' => 'string|max:100',
      'USUARIO_ESTADO_CIVIL' => 'required',
      'USUARIO_BANCO' => 'string|max:100',
      'USUARIO_CLAVE_INTERBANCARIA' => 'string|max:16',
      'USUARIO_ID_PATROCINADOR' => 'string',
      'USUARIO_ID_UPLINE_DIRECTO' => 'string',
      'USUARIO_BENEFICIARIO' => 'string'

    ];

    $Mensaje = ["required" => 'El :attribute es requerido'];
    $this->validate($request, $campos, $Mensaje);

    //todo lo que se envia del formulario se almacena en $datosEmpleado por medio del metodo store
    // $datosUsuario=request()->all();

    $datosUsuario = request()->except('_token');
    //insertamos la info en la bd
    registro_socio::insert($datosUsuario);
    //retorno una respuesta en forma de json de la info del formulario
    // return response()->json($datosUsuario);
    return redirect('registro_socio')->with('Mensaje', 'Usuario quasar agregado con exito'); //con with retornamos en la vista nuestro mensaje con la variable 'Mensaje'


  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Registro_socio  $registro_socio
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $usuario = registro_socio::findOrFail($id);
    return view('registro_socio.historial', compact('usuario'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Registro_socio  $registro_socio
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //me devuelve toda la informacion que corresponde al id cuando le doy en editar
    $usuario = registro_socio::findOrFail($id);

    // compact crea un conj de informacion a traves de una variable
    return view('registro_socio.edit', compact('usuario'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Registro_socio  $registro_socio
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

    $campos = [
      'USUARIO_NOMBRE' => 'string|max:100',
      'USUARIO_APELLIDOPATERNO' => 'string|max:100',
      'USUARIO_APELLIDOMATERNO' => 'string|max:100',
      'USUARIO_SEXO' => 'required',
      'USUARIO_CORREO' => 'email',
      'USUARIO_CALLE' => 'string|max:100',
      // 'USUARIO_NUM_EXT'=>'required',
      // 'USUARIO_NUM_INT' => 'required',
      'USUARIO_CP' => 'string|max:5',
      'USUARIO_COLONIA' => 'string|max:100',
      'USUARIO_LOCALIDAD' => 'string|max:100',
      'USUARIO_ENTIDAD' => 'string|max:100',

      'USUARIO_TEL_CASA' => 'string|max:10',
      'USUARIO_TEL_CEL' => 'string|max:10',
      'USUARIO_CURP' => 'string|max:18',
      // 'USUARIO_FECHA_NAC' => 'required',
      'USUARIO_ENTIDAD_NAC' => 'string|max:100',
      'USUARIO_ESTADO_CIVIL' => 'required',
      'USUARIO_BANCO' => 'string|max:100',
      'USUARIO_CLAVE_INTERBANCARIA' => 'string|max:17',
      'USUARIO_ID_PATROCINADOR' => 'string',
      'USUARIO_ID_UPLINE_DIRECTO' => 'string',
      'USUARIO_BENEFICIARIO' => 'string'

    ];

    $Mensaje = ["required" => 'El :attribute es requerido'];
    $this->validate($request, $campos, $Mensaje);

    //recepciono la info y lo coloco en $datosUsuario
    $datosUsuario = request()->except(['_token', '_method']);
    //el where actualiza de a cuerdo al id preguntando si el id es igual al id que me enviaron
    //si es que si es igual, actualiza la info del id seleccionado
    registro_socio::where('id', '=', $id)->update($datosUsuario);

    //jalamos lo que tiene editar
    // $usuario= registro_socio::findOrFail($id);
    // compact crea un conj de informacion a traves de una variable
    // return view('registro_socio.edit',compact('usuario'));
    return redirect('registro_socio')->with('Mensaje-Modificar', 'Usuario Quasar modificado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Registro_socio  $registro_socio
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // busco todos los registros correspondientes al id que me estan enviando
    $usuario = registro_socio::findOrFail($id);
    //elimino el registro seleccionado pasandole el parametro $id
    // registro_socio::destroy($id);
    $usuario->delete();
    // $usuario::destroy($id);
    return redirect('registro_socio')->with('Mensaje', 'Usuario Quasar eliminado con exito');
    // return redirect('registro_socio', $usuario)->with('Mensaje', 'Usuarios Quasar Eliminado con exito');
  }

  
}
