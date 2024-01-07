<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    public function index(Request $request){
        $product_id = $request->query('product_id');

        $evaluations = Evaluation::query()->where('product_id', $product_id)->get();
        return $evaluations;
    }

    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'description' => 'required|string',
                'recommended' => 'required|boolean'
            ]);

            $data = $request->all();

            $marker = Evaluation::create($data);

            return $marker;

        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function update($id, Request $request){

        try{

            $evaluation = Evaluation::find($id);

            if(!$evaluation){
                return response()->json(['message' => 'Avaliação não encontrada'], 404);
            }

            $evaluation->update($request->all());


        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function destroy($id){
        $evaluation = Evaluation::find($id);

        if(!$evaluation){
            return response()->json(['message' => 'Avaliação não foi encontrada'], 404);
        }

        $evaluation->delete();

        return response(['message' => 'Id excluído com sucesso'], 204);

    }
}
