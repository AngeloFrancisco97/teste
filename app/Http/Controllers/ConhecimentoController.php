<?php

namespace App\Http\Controllers;

use App\Models\Conhecimento;
use Illuminate\Http\Request;

class ConhecimentoController extends Controller
{
    public function __construct(Conhecimento $conhecimento) {
        $this->middleware('jwt.auth')->only('store', 'update', 'destroy');
        $this->conhecimento = $conhecimento;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resposta = $this->conhecimento->all();
        return response()->json($resposta, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->conhecimento->rules());

        $conhecimento = $this->conhecimento->create($request->all());

        return response()->json($conhecimento, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informacao  $conhecimento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conhecimento = $this->conhecimento->find($id);
        if($conhecimento === null) {
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404); //json
        }
            return response()->json($conhecimento,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informacao  $conhecimento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informacao  $conhecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conhecimento = $this->conhecimento->find($id);

        if($conhecimento === null){
            return response()->json(['erro' => 'Impossível realizaar a atualização. O recurso solicitado não existe'], 404);
        }

        if($request->method() === 'PATCH'){

            $regrasDinamicas = array();

            //percorrendo todas as regras definidas no Model
            foreach($conhecimento->rules() as $input => $regra){

                //coletar apenas as  regras aplicáveis aos parâmetros parciais da requisição PATCH
                if(array_key_exists($input, $request->all())){
                    $regrasDinamicas[$input] = $regra;
                }
            }
            $request->validate($regrasDinamicas);
        }else {
            $request->validate($conhecimento->rules());
        }
        

        //preencher o objeto 4marca com os dados do request
        $conhecimento->fill($request->all());
        $conhecimento->save();

        return response()->json($conhecimento, 200) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informacao  $conhecimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conhecimento = $this->conhecimento->find($id);

        if($conhecimento === null){
            return response()->json(['erro' => 'Impossível realizar a exclusão. O recurso solicitado não existe'],404);
        }
        //Remove o arquivo antigo caso um novo arquivo tenha sido enviado no request
        $conhecimento->delete();
        return response()->json([$conhecimento], 200);
    }
}
