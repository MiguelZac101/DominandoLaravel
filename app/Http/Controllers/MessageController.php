<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){
        //return $request->get('name');
        //$data recoje los valores enviados desde el formulario
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => __('I need your name'),
            'email.required' => 'Email requerido',
        ]);

        Mail::to('maqzac@yahoo.es')->queue(new MensajeRecibido($data));
        return "mensaje enviado";

        //para visualizar en navegador
        //return new MensajeRecibido($data);

        /*
        se hizo pruebas con log (storage/logs/laravel.log) y smtp mailtrap
        MAIL_MAILER=log
        ...
        crear una cuenta en https://mailtrap.io/ y obtener los datos de configuración
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io

        enviar con sendgrid producción
        https://sendgrid.com/docs/for-developers/sending-email/laravel/
        */
    }
}
