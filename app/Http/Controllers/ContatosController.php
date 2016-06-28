<?php
/**
 * Created by PhpStorm.
 * User: thomaz
 * Date: 28/06/16
 * Time: 01:24
 */

namespace App\Http\Controllers;


use App\Contato;
use Illuminate\Http\Request;

class ContatosController extends Controller
{

    public function all() {
        $contatos = Contato::all();

        return $contatos->toJson();
    }

    public function store(Request $request) {
        $contato = new Contato();

        $contato->fill($request->all());

        $contato->save();
    }

}