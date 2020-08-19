<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use function GuzzleHttp\Psr7\_parse_request_uri;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('order', 'ASC')->paginate(6);

        return view('admin.web.index', compact('sliders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.web.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sliders = Slider::orderBy('order', 'ASC')->get();
        $slider_last = $sliders->last();
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->url_image = $this->UploadImage($request);
        if (count($sliders)) {
            $slider->order = $slider_last->order + 1;
        } else {
            $slider->order = 1;
        }
        $slider->text_btn = $request->text_btn;
        $slider->url_btn = $request->url_btn;
        $slider->save();


        return redirect()->route('web-index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.web.edit', compact('slider'));
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

        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        if ($request->file('url_image')) {
            $this->destroyFile($slider->url_image);
            $slider->url_image = $this->UploadImage($request);

        }


        $slider->text_btn = $request->text_btn;
        $slider->url_btn = $request->url_btn;
        $slider->save();


        return redirect()->route('web-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('web-index');
    }

    public function delete(Request $request)
    {
        $slider = Slider::find($request->id);
        $this->destroyFile($slider->url_image);
        $slider->delete();
        return response()->json([
            'succes' => true
        ], 200);
    }

    public function ChangeStatus(Request $request)
    {
        $slider = Slider::find($request->id);

        if ($slider->status === 'activo') {
            $slider->status = 'inactivo';
        } else {
            $slider->status = 'activo';
        }
        $slider->save();
        return response()->json([
            'slider' => $slider,
            'success' => true
        ], 200);
    }

    public function getSliders()
    {

        $sliders = Slider::orderBy('order', 'ASC')->paginate(6);
        return view('admin.web.table', compact('sliders'))->render();
    }

    public function UploadImage(Request $request)
    {
        $url_file = "img/sliders/";
        if ($request->file('url_image')) {
            $image = $request->file('url_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path($url_file) . $name);
            return $url_file . $name;
        } else {
            return "#";
        }
    }

    public function destroyFile($path_file)
    {
        if (\File::exists(public_path($path_file))) {

            \File::delete(public_path($path_file));

        }
    }

    public function changeOrder()
    {
        $sliders = Slider::orderBy('order', 'ASC')->get();
        return view('admin.web.sliderOrder', compact('sliders'));
    }

    public function updateOrder(Request $request)
    {
        $list_id = $request->data;
        $order = 1;
        foreach ($list_id as $id) {
            $slider = Slider::find($id);
            $slider->order = $order;
            $slider->save();
            $order++;
        }

        return response()->json([
            'success' => true
        ], 200);
    }
}
