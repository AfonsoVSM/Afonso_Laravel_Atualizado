<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index (){
    	return view('entrada');

    }
    public function listarEquipas(){
    	$teams = [
    		'Desportivo das Aves',
    		'Moreirense',
    		'Famalicão',
    	];
    	return view('listar-equipas' ['equipas'=>$teams]);

    }
    public function listarEquipa (Request $_request) {
    $teams = [
        'Desportivo das Aves',
        $request->
        //obter o nome da equipa pretendida atraves do ID
        $equipas = $teams[$request->chave];
        }
        else{
            $equipa = 'Nao foi possivel obter a info pretendida.';
        }
        
        return view('listar-equipas', ['equipa'=>$equipas]);  
}
    
}

