<?php

namespace App\Http\Controllers;

use App\usuario_socio;
use Illuminate\Http\Request; //indispensable para usar Request de los JSON
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;//gestion de archivos
// use Illuminate\Support\Facades\DB;//consulta a la base de datos


class UsuarioSocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //declaramos un indice llamado usuario_socio
        //nos paginara las entradas por 5 registros
        $datos['usuario_socio']= usuario_socio::paginate(5);
        return view('usuario_socio.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario_socio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //todo lo que se envia del formulario se almacena en $datosEmpleado
        // $datosUsuario=request()->all();

        $datosUsuario=request()->except('_token');
        //insertamos la info en la bd
        usuario_socio::insert($datosUsuario);
        //retorno una respuesta en forma de json de la info del formulario
        // return response()->json($datosUsuario);
        return redirect('usuario_socio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario_socio  $usuario_socio
     * @return \Illuminate\Http\Response
     */
    public function show(usuario_socio $usuario_socio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario_socio  $usuario_socio
     * @return \Illuminate\Http\Response
     */
    public function edit( $id=null)
    {
        //me devuelve toda la informacion que corresponde al id cuando le doy en editar
        $usuario= usuario_socio::findOrFail($id);

        // compact crea un conj de informacion a traves de una variable
        return view('usuario_socio.edit',compact('usuario'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario_socio  $usuario_socio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //recepciono la info y lo coloco en $datosUsuario
        $datosUsuario=request()->except(['_token','_method']);
        //el where actualiza de a cuerdo al id preguntando si el id es igual al id que me enviaron
        //si es que si es igual, actualiza la info del id seleccionado
        usuario_socio::where('id','=',$id)->update($datosUsuario);

        $usuario= usuario_socio::findOrFail($id);
        return view('usuario_socio.edit',compact('usuario'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario_socio  $usuario_socio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
// busco todos los registros correspondientes al id que me estan enviando
      $usuario= usuario_socio::findOrFail($id);


        //elimino el registro seleccionado pasandole el parametro $id
        usuario_socio::destroy($id);
        return redirect('usuario_socio');

       //  usuario_socio::find($id)->delete();
       // return redirect('/usuario_socio');


    //    $id = $request->input('id');
    // usuario_socio::find($id)->delete();
    }


}
