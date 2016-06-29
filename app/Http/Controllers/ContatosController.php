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

class ContatosController extends Controller {

    public function all(Request $request) {
        $contatos = Contato::where('user_id', $request->user_id)->get();

        $result = array('success' => true, 'contatos' => $contatos->toArray());

        return json_encode($result);
    }

    public function store(Request $request) {
        $contato = new Contato();

        $contato->fill($request->all());

        $result = $contato->save();

        return json_encode(array('success' => $result));
    }

}