<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\VehicleType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VehicleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = VehicleType::orderBy('name','ASC')->get();

        return view('admin.vehicletype.index',compact('vehicles'));
    }
    public function getVehicles()
    {
        $vehicles = VehicleType::orderBy('name','ASC')->get();

        return view('admin.vehicletype.table',compact('vehicles'))->render();

    }
    public function deactivate(Request $request)
    {
        try{
            $vehicle = VehicleType::find($request->id);
            if($vehicle->status =='inactivo'){
                $vehicle->status = 'activo';
            }else{
                $vehicle->status = 'inactivo';
            }
            $vehicle->save();
            return response()->json(['status'=>'success'],200);
        }catch(Exception $e){
            return response()->json(['error'=>$e],422);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Reglas de validacion de los campos del formulario  que vienen por POST
        $request->validate([
            //REGLAS DE VALIDACION
            'name'=>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|unique:vehicle_types',
            'description'=>'required|string',
            'status'=>'required'

        ], [
            //MENSAJES CUANDO NO SE CUMPLE LA VALIDACION
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Esta tipo ya existe.',
            'description.required' => 'Este campo es obligatorio.',
            'status.required' => 'Este campo es obligatorio.',
        ]);

        $vehicle = new VehicleType();
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->status = $request->status;
        $vehicle->save();
        return redirect()->route('get-vehicle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = VehicleType::find($id);
        $vehicles = VehicleType::orderBy('name','ASC')->get();
        return view('admin.vehicletype.edit',compact('vehicle','vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Reglas de validacion de los campos del formulario  que vienen por POST
        $request->validate([
            //REGLAS DE VALIDACION
            'name'=>['required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',Rule::unique('vehicle_types')->ignore($id)],
            'description'=>'required|string',
            'status'=>'required'

        ], [
            //MENSAJES CUANDO NO SE CUMPLE LA VALIDACION
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Esta tipo ya existe.',
            'description.required' => 'Este campo es obligatorio.',
            'status.required' => 'Este campo es obligatorio.',
        ]);

        $vehicle = VehicleType::find($id);
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->status = $request->status;
        $vehicle->save();
        return redirect()->route('get-vehicle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $vehicle = VehicleType::find($id);

            $vehicle->delete();
            return response()->json(['status'=>'success'],200);
        }catch(Exception $e){
            return response()->json(['error'=>$e],422);
        }
    }
}
