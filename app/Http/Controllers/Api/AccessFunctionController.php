<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\AccessFunction;
use App\Http\Controllers\Controller;

class AccessFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessFunctions = AccessFunction::all();

        return response()->json([
            'message' => 'Access functions retrieved successfully',
            'data' => $accessFunctions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $accessFunctions = AccessFunction::findOrFail($id);
        
        return response()->json([
            'message' => 'Access function retrieved successfully',
            'data' => $accessFunctions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $accessFunctions = AccessFunction::findOrFail($id);

        $accessFunctions->delete();

        return response()->json([
            'message' => 'Access function deleted successfully',
            'data' => $accessFunctions,
        ]);
    }
}
