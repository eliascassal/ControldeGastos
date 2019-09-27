<?php

namespace App\Http\Controllers;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacto.contacto');

    }
    public function store ()
       {
           
            $mensaje = request()->validate([
                'nombrecontacto'=>'required',
                'mail'          =>'required|email',
                'contenido'       =>'required',
             ]);    
        
        Mail::to('eliascassal@gmail.com')->queue(new MensajeRecibido($mensaje));  
            //return new MensajeRecibido($mensaje); 
            return 'datos validados';
    }

}
