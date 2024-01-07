<?php

namespace App\Http\Controllers;

use App\Models\Avaliation;
use Illuminate\Http\Request;

class AvaliationController extends Controller
{

    public function index(Request $request){
        $product_id = $request->query('product_id');

        $Avaliations = Avaliation::query()->where('product_id', $product_id)->get();
        return $Avaliations;
    }

    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'description' => 'required|string',
                'recommended' => 'required|boolean'
            ]);

            $data = $request->all();

            $marker = Avaliation::create($data);

            return $marker;

        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function update($id, Request $request){

        try{

            $Avaliation = Avaliation::find($id);

            if(!$Avaliation){
                return response()->json(['message' => 'Avaliação não encontrada'], 404);
            }

            $Avaliation->update($request->all());


        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function destroy($id){
        $Avaliation = Avaliation::find($id);

        if(!$Avaliation){
            return response()->json(['message' => 'Avaliação não foi encontrada'], 404);
        }

        $Avaliation->delete();

        return response(['message' => 'Id excluído com sucesso'], 204);

    }
}
