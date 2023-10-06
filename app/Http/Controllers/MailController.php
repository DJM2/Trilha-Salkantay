<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\EnviarCorreo;

class MailController extends Controller
{
    public function getMail(Request $request)
    {
        $datos = request()->all();
        if (!empty($request->input('verificar'))) {
            return abort(403, 'Lo sentimos, parece que eres un robot. Tu IP ha sido bloqueada.');
        }
        $correo = $datos['correo'];
        Mail::send("emails.contacto", $datos, function ($message) use ($datos, $correo) {
            $message->from($correo, $datos['nombre'])
                ->to('niko@nctravelcusco.com', 'NC Travel Cusco')
                ->subject('Formulario desde Trilha Salkantay web.');
        });
        session()->flash('status', 'Mensagem enviada com sucesso!');
        return back();
    }
    public function formIndex(Request $request)
    {
        $datos = request()->all(); 
        if (!empty($request->input('solicitud'))) {
            return abort(403, 'Lo sentimos, parece que eres un robot. Tu IP ha sido bloqueada.');
        }
        $correo = $datos['email'];
        Mail::send("emails.index", $datos, function ($message) use ($datos, $correo) {
            $message->from($correo, $datos['nombre'])
                ->to('niko@nctravelcusco.com', 'NC Travel Cusco')
                ->subject('Formulario desde Trilha Salkantay web.');
        });
        session()->flash('status', 'Mensagem enviada com sucesso!');
        return back();
    }
}

/*  public function getMail(Request $request)    {
        $datos = request()->all();
        $correo = $datos['correo'];
        Mail::send("emails.contacto", $datos, function ($message) use ($datos, $correo) {
            $message->from($correo, $datos['nombre'])
                ->to('mirandadjmdjm@gmail.com', 'DJM2')
                ->subject('Formulario desde Trilha Salkantay web.');
        });
        session()->flash('status', 'Mensagem enviada com sucesso!');
        return back(); 
          }
}*/