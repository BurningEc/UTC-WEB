<?php

namespace App\Http\Controllers\admin;

use App\Convenio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = Convenio::orderBy('created_at', 'ASC')->get();
        return view('admin.convenios.index', compact('convenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.convenios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $convenio = new Convenio();
        $convenio->name = $request->name;
        $convenio->legal_representative = $request->legal_representative;
        $convenio->start = $request->start;
        $convenio->end = $request->end;
        $convenio->url_document = $this->loadPDFConvenio($request);
        $convenio->status = $request->status;
        $convenio->save();

        return redirect()->route('index-convenios');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convenio = Convenio::find($id);
        return view('admin.convenios.show', compact('convenio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio = Convenio::find($id);
        return view('admin.convenios.edit', compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $convenio = Convenio::find($id);
        $convenio->name = $request->name;
        $convenio->legal_representative = $request->legal_representative;
        $convenio->start = $request->start;
        $convenio->end = $request->end;
        if ($request->file('url_document')) {
            $this->destroyFile($convenio->url_document);
            $convenio->url_document = $this->loadPDFConvenio($request);
        }

        $convenio->status = $request->status;
        $convenio->save();

        return redirect()->route('index-convenios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $convenio = Convenio::find($request->id);
        $this->destroyFile($convenio->url_document);
        $convenio->delete();
        return redirect()->route('index-convenios');
    }

    public function loadPDFConvenio(Request $request)
    {
        $ruta_archivo = "#";

        if ($request->file('url_document')) {

            $archivo = $request->file('url_document');
            $nombre_archivo = "convenio-" . time() . '.' . $archivo->getClientOriginalExtension();
            $r2 = Storage::disk('documents')->put(utf8_decode($nombre_archivo), File::get($archivo));
            $ruta_archivo = "storage/documents/" . $nombre_archivo;
        } else {
            $ruta_archivo = "#";
        }
        return $ruta_archivo;
    }

    public function destroyFile($path_file)
    {
        if (\File::exists(public_path($path_file))) {

            \File::delete(public_path($path_file));

        }
    }

    public function getConvenio()
    {
        $convenios = Convenio::orderBy('created_at', 'ASC')->get();
        return view('admin.convenios.table', compact('convenios'))->render();
    }
    public function downloadpdf($id)
    {
        $convenio = Convenio::find($id);
        $rutaPdf = $convenio->url_document;
        $name_pdf = $convenio->name;
        return response()->download($rutaPdf, $name_pdf . ".pdf");
    }
}
