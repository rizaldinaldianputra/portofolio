<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Service::all(),
            'message' => 'Services retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
        ]);

        $service = Service::create($data);

        return response()->json([
            'data' => $service,
            'message' => 'Service created successfully',
            'status' => 'success'
        ], 201);
    }

    public function show(Service $service)
    {
        return response()->json([
            'data' => $service,
            'message' => 'Service retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
        ]);

        $service->update($data);

        return response()->json([
            'data' => $service,
            'message' => 'Service updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return response()->json([
            'data' => null,
            'message' => 'Service deleted successfully',
            'status' => 'success'
        ], 204);
    }
}
