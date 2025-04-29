<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehiculoContacto;
use Illuminate\Support\Facades\Validator;

class VehiculoContactoController extends Controller
{
    public function index()
    {
        $vehiculoslist = VehiculoContacto::all();

        if ($vehiculoslist->isEmpty()){
            return response()->json(['message' => 'No hay contactos registrados'], 200);
        }
        else {
        return response()->json($vehiculoslist, 200);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'placa' => 'required|unique:vehiculos_contactos|max:20',
            'marca' => 'required|max:100',
            'modelo' => 'required|max:100',
            'anio_fabricacion' => 'required|digits:4|integer',
            'nombre_cliente' => 'required|max:100',
            'apellidos_cliente' => 'required|max:100',
            'nro_documento_cliente' => 'required|max:20',
            'correo_cliente' => 'required|email|max:100',
            'telefono_cliente' => 'required|min:9|max:9',

        ], [
            'placa.unique' => 'La placa ingresada ya está registrada en el sistema.',
            'placa.required' => 'La placa es obligatoria.',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validacion de datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data,400);
        }

        $VehiculoContacto = VehiculoContacto::create($request->all());

        if (!$VehiculoContacto) {
            $data = [
                'message' => 'Error en la creacion',
                'status' => 500
            ];
            return response()->json($data,500);
        }
        else {
            $data = [
                'VehiculoContacto' => $VehiculoContacto,
                'status' => 201
            ];

            return response()->json($data,201);
        }

    }

    public function show($id)
    {
        $VehiculoContacto = VehiculoContacto::find($id);

        if (!$VehiculoContacto) {
            $data = [
                'message' => 'Contacto no encontrado',
                'status' => 404
            ];
            return response()->json($data,404);
        }
        else {
            $data = [
                'VehiculoContacto' => $VehiculoContacto,
                'status' => 200
            ];

            return response()->json($data,200);
        }
    }

    public function update(Request $request, $id)
    {
        $vehiculo = VehiculoContacto::findOrFail($id);

        $request->validate([
            'placa' => 'sometimes|required|max:20|unique:vehiculos_contactos,placa,' . $vehiculo->id,
            'marca' => 'sometimes|required|max:100',
            'modelo' => 'sometimes|required|max:100',
            'anio_fabricacion' => 'sometimes|required|digits:4|integer',
            'nombre_cliente' => 'sometimes|required|max:100',
            'apellidos_cliente' => 'sometimes|required|max:100',
            'nro_documento_cliente' => 'sometimes|required|max:20',
            'correo_cliente' => 'sometimes|required|email|max:100',
            'telefono_cliente' => 'sometimes|required|max:20',
        ]);

        $vehiculo->update($request->all());

        return response()->json($vehiculo, 200);
    }

    public function destroy($id)
    {
        $VehiculoContacto = VehiculoContacto::find($id);

        if (!$VehiculoContacto) {
            $data = [
                'message' => 'Contacto no existe',
                'status' => 404
            ];
            return response()->json($data,404);
        }
        else {

            $VehiculoContacto->delete();
            
            $data = [
                'message' => 'Contacto eliminado exitosamente',
                'status' => 200
            ];

            return response()->json($data,200);
        }
    }
}
