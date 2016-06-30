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

    /**
     * @param Request $request
     * @return string
     */
    public function all(Request $request) {
        $contatos = Contato::where('user_id', $request->user_id)->get();

        $result = array('success' => true, 'contatos' => $contatos->toArray());

        return json_encode($result);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request) {
        $contato = new Contato();

        $contato->fill($request->all());

        $result = $contato->save();

        return json_encode(array('success' => $result));
    }

    /**
     * @param Request $request
     */
    public function edit(Request $request) {
        $contato = Contato::find($request->id);

        $contato->fill($request->all());

        $result = $contato->save();

        return json_encode(array('success' => $result));
    }

    /**
     * @param Request $request
     * @return string
     */
    public function show(Request $request) {
        $contatos = Contato::where('id', $request->id)->get();

        $result = array('success' => true, 'contato' => $contatos->toArray());

        return json_encode($result);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function destroy(Request $request) {
        $rows = Contato::where('id', $request->id)->delete();

        return json_encode(array('success' => true, 'rows_affected' => $rows));
    }

}