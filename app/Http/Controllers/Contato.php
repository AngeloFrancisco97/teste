<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NovoContato;
use App\Mail\ConfirmacaoEnvioContato;

class Contato extends Controller
{

    public function novoContato(Request $request){
        $resposta = $request->all();
        $destinatario = ['angelofrancisco@outlook.com', 'contato@angelofrancisco.site'];
        Mail::to($destinatario)->send(new NovoContato($resposta));
        Mail::to($resposta['email'])->send(new ConfirmacaoEnvioContato());
        return response()->json($resposta['nome'], 201);
    }
}
