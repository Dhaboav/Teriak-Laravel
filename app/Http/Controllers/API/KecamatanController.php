<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KecamatanController extends Controller
{
    public function getAllGeojson(Request $request) {
        $geojsons = Kecamatan::all();
        return response()->json($geojsons);
    }

    public function getGeojsonFile($filename)
    {
        // Correct path without /public prefix
        $path = 'kecamatan/' . $filename;
        
        if (Storage::disk('public')->exists($path)) {
            $file = Storage::disk('public')->get($path);
            return response($file, 200)->header('Content-Type', 'application/json');
        } else {
            return response()->json(['message' => 'File not found.'], 404);
        }
    }
}
?>