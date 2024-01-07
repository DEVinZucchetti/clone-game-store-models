<?php

namespace App\Http\Controllers;

use App\Models\ProductMarker;
use Illuminate\Http\Request;

class ProductMarkerController extends Controller
{

    public function index(){
        $markers = ProductMarker::all();
        return $markers;

    }

    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'marker_id' => 'required|integer'
            ]);

            $data = $request->all();

            $marker = ProductMarker::create($data);

            return $marker;

        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function destroy($id){
        $marker = ProductMarker::find($id);

        if(!$marker){
            return response()->json(['message' => 'Id não foi encontrado'], 404);
        }

        $marker->delete();

        return response(['message' => 'Id excluído com sucesso'], 204);

    }
}
