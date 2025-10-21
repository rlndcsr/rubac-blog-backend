<?php

namespace App\Http\Controllers\Api;

use App\Models\AccessLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccessLevelRequest;

class AccessLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessLevels = AccessLevel::all();

        return response()->json([
            'success' => true,
            'data' => $accessLevels,
        ]);

    }

    /**
     * Display a listing of the resource with functions.
     */
    public function indexWithFunctions()
    {
        $accessLevels = AccessLevel::with('functions')->get();

        return response()->json([
            'success' => true,
            'data' => $accessLevels,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccessLevelRequest $request)
    {
        $accessLevel = AccessLevel::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Access level created successfully',
            'data' => $accessLevel,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $accessLevel = AccessLevel::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'message' => 'Access level retrieved successfully',
            'data' => $accessLevel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccessLevelRequest $request, string $id)
    {
        $validated = $request->validated();

        $accessLevel = AccessLevel::findOrFail($id);

        $accessLevel->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Access level updated successfully',
            'data' => $accessLevel,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $accessLevel = AccessLevel::findOrFail($id);

        $accessLevel->delete();

        return response()->json([
            'success' => true,
            'message' => 'Access level deleted successfully',
        ]);
    }
}
