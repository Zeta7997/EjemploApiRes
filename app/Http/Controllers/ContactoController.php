<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //gets listar registros
    public function index(Request $request)
    {
        if($request->has('txtBuscar'))
        {
            $contacto = Contacto ::where('nombre','like','%'. $request->txtBuscar .'%')
                ->orwhere('telefono', $request->txtBuscar)
                ->get();
        }
        else{
            $contacto = Contacto::all();
        }
        return $contacto;
    }


    //post Insertar datos
    public function store(CreateContactoRequest $request)
    {
        $input=$request->all();
        Contacto::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //get regresa un solo registro
    public function show(Contacto $contacto)
    {
        return $contacto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Put Actualizar registros
    public function update(UpdateContactoRequest $request,Contacto $contacto)
    {
        $input = $request->all();
        $contacto->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro actualizado correctamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //delete
    public function destroy($id)
    {
        Contacto::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente'
        ],200);
    }
}
