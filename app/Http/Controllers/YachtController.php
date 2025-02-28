<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Yacht;

class YachtController extends Controller
{
    //
    public function index() {
        $yachts = Yacht::all();
        return response()->json($yachts);
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|in:for_sale,for_rent,sold',
        ]);
    
        $yacht = Yacht::create($validated);
        return response()->json($yacht, 201);
    }
    
    public function update(Request $request, $id) {
        $yacht = Yacht::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'status' => 'in:for_sale,for_rent,sold',
        ]);
    
        $yacht->update($validated);
        return response()->json($yacht);
    }
    
    public function destroy($id) {
        $yacht = Yacht::findOrFail($id);
        $yacht->delete();
        return response()->json(null, 204);
    }
    
}
