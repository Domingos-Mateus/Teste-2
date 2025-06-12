<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function listarGatos()
    {
        $response = Http::withHeaders([
            'x-api-key' => env('CAT_API_KEY')
        ])->get('https://api.thecatapi.com/v1/images/search?limit=5');

        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json([
                'erro' => 'Erro ao buscar dados da API externa',
                'status' => $response->status()
            ], $response->status());
        }
    }
}
