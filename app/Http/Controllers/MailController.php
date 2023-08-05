<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getMail()
    {
        $datos = request()->all();
        Mail::send("emails.contacto", $datos, function ($message) use ($datos) {
            $message->from($datos['email'], $datos['nombre'])
                ->to('niko@nctravelcusco.com', 'DJM2')
                ->subject('Formulario desde Trilha Inca Cuzco web.');
        });
        session()->flash('status', 'Mensagem enviada com sucesso!');
        return back();
    }
}
