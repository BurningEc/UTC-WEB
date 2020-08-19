<?php

namespace App\Http\Controllers\admin;

use App\CompanyType;
use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWT;
use Tymon\JWTAuth\Facades\JWTAuth;

class CompanyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = CompanyType::orderBy('name', 'ASC')->get();

        return view('admin.companytype.index', compact('companies'));
    }

    public function getCompanies()
    {
        $companies = CompanyType::orderBy('name', 'ASC')->get();

        return view('admin.companytype.table', compact('companies'))->render();

    }

    public function getApiCompanies()
    {
        $user = User::find(Auth::user()->id);
        $companies_type = CompanyType::where('status','activo')->orderBy('name','ASC')->get();

        return response()->json([
            'success'=>true,
            'companies'=>$companies_type
        ],200);

    }

    public function deactivate(Request $request)
    {
        try {
            $company = CompanyType::find($request->id);
            if ($company->status == 'inactivo') {
                $company->status = 'activo';
            } else {
                $company->status = 'inactivo';
            }
            $company->save();
            return response()->json(['status' => 'success'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 422);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Reglas de validacion de los campos del formulario  que vienen por POST
        $request->validate([
            //REGLAS DE VALIDACION
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|unique:company_types',
            'description' => 'required|string',
            'status' => 'required',
            'url_image'=>'required|mimes:png,jpeg,jpg'

        ], [
            //MENSAJES CUANDO NO SE CUMPLE LA VALIDACION
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Esta tipo ya existe.',
            'description.required' => 'Este campo es obligatorio.',
            'status.required' => 'Este campo es obligatorio.',

            'url_image.required' => 'Este campo es obligatorio.',
            'url_image.mimes' => 'Este formato de imagen no es válido.',
        ]);

        $company = new CompanyType();
        $company->name = $request->name;
        $company->description = $request->description;
        $company->status = $request->status;
        $company->url_image = $this->UploadImage($request);

        $company->save();
        return redirect()->route('get-company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = CompanyType::find($id);
        $companies = CompanyType::orderBy('name', 'ASC')->get();
        return view('admin.companytype.edit', compact('company', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Reglas de validacion de los campos del formulario  que vienen por POST
        $request->validate([
            //REGLAS DE VALIDACION
            'name' => ['required', 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u', Rule::unique('company_types')->ignore($id)],
            'description' => 'required|string',
            'status' => 'required'

        ], [
            //MENSAJES CUANDO NO SE CUMPLE LA VALIDACION
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Esta tipo ya existe.',
            'description.required' => 'Este campo es obligatorio.',
            'status.required' => 'Este campo es obligatorio.',
        ]);

        $company = CompanyType::find($id);
        $company->name = $request->name;
        $company->description = $request->description;
        $company->status = $request->status;
        if ($request->file('url_image')){
            $company->url_image = $this->UploadImage($request);
        }
        $company->save();
        return redirect()->route('get-company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $company = CompanyType::find($id);

            $company->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 422);
        }
    }

    public function UploadImage(Request $request)
    {
        $url_file = "img/forms/";
        if ($request->file('url_image')) {
            $image = $request->file('url_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path($url_file) . $name);
            return $url_file . $name;
        } else {
            return "#";
        }
    }

}
