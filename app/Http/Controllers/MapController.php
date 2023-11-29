<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function getMarker(Request $request) {
        $data = Marker::all();
        return response()->json($data);
    }

    public function createMarker(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $marker = new Marker();
        $marker->id = $id;
        $marker->name = $name;
        $marker->latitude = $latitude;
        $marker->longitude = $longitude;
        $marker->save();

        return response()->json(['message' => 'Marker created successfully'], 201);
    }


    public function deleteMarker(Request $request, $id) {

        $marker = Marker::find($id);

        if(!$marker) {
            return response()->json(['message' => 'Marker not found'], 404);
        }

        $marker->delete();

        return response()->json(['message' => 'Marker deleted successfully'], 200);

    }
}
