<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetControler extends Controller
{
    public function index(){
        $categories = Asset::all();
        return $categories;

    }

    public function store(Request $request){

        try {
        $request->validate([
            'name' => 'required|unique:assets|string|max:150',
            'url' => 'required|string',
            'type' => 'required|in:IMAGE, VIDEO'
        ]);

        $data = $request->all();

        $product = Asset::create($data);

        return $product;

    } catch (\Exception $exception){
        return response()->json(['message' => $exception->getMessage()], 400);
    }

    }

    public function update($id, Request $request){

        try{

            $evaluation = Asset::find($id);

            if(!$evaluation){
                return response()->json(['message' => 'Produto não encontrado'], 404);
            }

            $evaluation->update($request->all());


        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function destroy($id){
        $evaluation = Asset::find($id);

        if(!$evaluation){
            return response()->json(['message' => 'Produto não foi encontrado'], 404);
        }

        $evaluation->delete();

        return response(['message' => 'Id excluído com sucesso'], 204);

    }
}
