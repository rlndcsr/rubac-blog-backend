<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\FunctionModel;
use App\Http\Requests\FunctionRequest;

use App\Http\Controllers\Controller;

class FunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $functions = FunctionModel::all();
        
        return response()->json([
            'message' => 'Functions retrieved successfully',
            'data' => $functions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FunctionRequest $request)
    {
        $functions = FunctionModel::create($request->validated());

        return response()->json([
            'message' => 'Function created successfully',
            'data' => $functions,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $functions = FunctionModel::findOrFail($id);
        
        return response()->json([
            'message' => 'Function retrieved successfully',
            'data' => $functions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FunctionRequest $request, string $id)
    {
        $validated = $request->validated();

        $functions = FunctionModel::findOrFail($id);

        $functions->update($validated);

        return response()->json([
            'message' => 'Function updated successfully',
            'data' => $functions,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $functions = FunctionModel::findOrFail($id);

        $functions->delete();

        return response()->json([
            'message' => 'Function deleted successfully',
            'date' => $functions,
        ]);
    }
}
