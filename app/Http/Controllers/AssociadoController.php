<?php

namespace App\Http\Controllers;

use App\Model\AssociadoModel;
use Illuminate\Http\Request;

class AssociadoController extends Controller
{

    private $associado;

    public function __construct(AssociadoModel $associado)
    {
        $this->associado = $associado;
    }

    public function index() {

        $model = $this->associado->all();

        return response()->json($model, 201);
    }

    public function storage(Request $request) {

        $model = $this->associado->create($request->all());

        return response()->json($model, 201);

    }

    public function update(Request $request, $id) {

        $model = $this->associado->find($id);

        $model->update($request->all());

        return response()->json($model, 201);

    }

    public function delete($id) {
        $model = $this->associado->find($id);

        $model->delete();

        return response()->json(null, 204);
    }

    public function findId($id) {

        $model = $this->associado->find($id);

        if ($model == null){

            return response()->json("Não existe valor disponível", 201);
        }

        return response()->json($model, 201);
    }
}
