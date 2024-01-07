<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index(Request $request){

        $product_id = $request->query('product_id');

        $requirements = Requirement::query()->where('product_id', $product_id)->get();

        return $requirements;

    }

    public function store(Request $request){

        try {
        $request->validate([
            'product_id' => 'required',
            'operational_system' => 'required|string',
            'memory' => 'required|string',
            'storage' => 'required|string',
            'observations' => 'required|string',
            'type' => 'required|in:MINIMUS, RECOMMENDED'
        ]);

        $data = $request->all();

        $requirement_exists = Requirement::query()->where('product_id', $data['product_id'])->where('type', $data['type'])->first();

        if($requirement_exists) {
            return response()->json(['message' => 'O requisito já foi cadastrado'], 409);
        }

        $requirement = Requirement::create($data);

        return $requirement;

    } catch (\Exception $exception){
        return response()->json(['message' => $exception->getMessage()], 400);
    }

    }

    public function update($id, Request $request){

        try{

            $achievement = Requirement::find($id);

            if(!$achievement){
                return response()->json(['message' => 'Requisito não encontrado'], 404);
            }

            $achievement->update($request->all());


        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function destroy($id){
        $achievement = Requirement::find($id);

        if(!$achievement){
            return response()->json(['message' => 'Requisito não encontrado'], 404);
        }

        $achievement->delete();

        return response(['message' => 'Id excluído com sucesso'], 204);

    }


}
