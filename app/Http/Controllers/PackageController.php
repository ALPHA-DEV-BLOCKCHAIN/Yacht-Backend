<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\package;
use Illuminate\Support\Facades\Log;

class PackageController extends Controller
{
    //
     // Get all packages
     public function index() {
        $packages = Package::all();
        Log::info("users package were".$packages);
        return response()->json($packages);
    }

    // Create a new package
    public function store(Request $request) {
        
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required',
            'status' => 'required'
            ]);
            // in:available,unavailable'
            
        // return response()->json(["data"=>$validated]);

        // $package = Package::create($validated);

        $fedex=new package();
        $fedex->name=$request->name;
        $fedex->description=$request->description;
        $fedex->price=$request->price;
        $fedex->status=$request->status;

        $fedex->save();

        return response()->json(["data"=>"package added"], 201);
    }

    // Update an existing package
    public function update(Request $request, $id) {
        $package = Package::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'status' => 'in:available,unavailable',
        ]);

        $package->update($validated);

        Yacht::where('name','lightstream')->get(3);//collection
        Yacht::where('name','lightstream')->first();
        Yacht::where('name','lightstream')->pluck('description');//value

        return response()->json($package);
    }

    // Delete a package
    public function destroy($id) {
        $package = Package::findOrFail($id);
        $package->delete();
        return response()->json(null, 204);
    }
}
