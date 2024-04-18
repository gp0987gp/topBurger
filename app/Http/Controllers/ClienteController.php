<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function clienteStore(Request $request){
        
        $clienteData = $request->all();
    
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagens/clientes', $nomeImagem, 'public');
            $clienteData['imagem'] = $caminhoImagem;
        }
        $clientes = Cliente::create($clienteData);
        return response()->json(['cliente'=>$clientes], 201);
    }
}