<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Client::all(),
            'message' => 'Clients retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|string',
        ]);

        $client = Client::create($data);

        return response()->json([
            'data' => $client,
            'message' => 'Client created successfully',
            'status' => 'success'
        ], 201);
    }

    public function show(Client $client)
    {
        return response()->json([
            'data' => $client,
            'message' => 'Client retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'logo' => 'nullable|string',
        ]);

        $client->update($data);

        return response()->json([
            'data' => $client,
            'message' => 'Client updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return response()->json([
            'data' => null,
            'message' => 'Client deleted successfully',
            'status' => 'success'
        ], 204);
    }
}
