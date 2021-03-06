<?php

namespace App\Http\Controllers;

use App\Message;
use App\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 'activo')->orderBy('order', 'ASC')->get();

        return view('web.index', compact('sliders'));
    }
    public function categories()
    {


        return view('web.categories');
    }
    public function contact()
    {


        return view('web.contacts');
    }

    public function senMessage(Request $request){
        try{
             DB::beginTransaction();
            $message = new  Message();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->subject = $request->subject;
            $message->message = $request->message;
            $message->save();
            DB::commit();
            return 'OK';
            //return redirect()->route('contactos')->with('status', '¡Tú mensaje se ha enviado satisfactoriamente!');

        }catch(Exception $e){
            DB::rollback();
            return 'Error al enviar';
           // return redirect()->route('contactos')->with('status', 'error');
        }
    }

     public function getMessages()
    {
        $messages = Message::orderBy('created_at','ASC')->paginate(10);

        return view('admin.messages.index',compact('messages'));
    }
}
