<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientReview;

class ClientReviewController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => ClientReview::with('client')->get(),
            'message' => 'Client reviews retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_id' => 'required|integer|exists:clients,id',
            'review' => 'required|string',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        $review = ClientReview::create($data);

        return response()->json([
            'data' => $review->load('client'),
            'message' => 'Client review created successfully',
            'status' => 'success'
        ], 201);
    }

    public function show(ClientReview $clientReview)
    {
        $clientReview->load('client');
        return response()->json([
            'data' => $clientReview,
            'message' => 'Client review retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, ClientReview $clientReview)
    {
        $data = $request->validate([
            'client_id' => 'sometimes|required|integer|exists:clients,id',
            'review' => 'sometimes|required|string',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        $clientReview->update($data);
        $clientReview->load('client');

        return response()->json([
            'data' => $clientReview,
            'message' => 'Client review updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy(ClientReview $clientReview)
    {
        $clientReview->delete();

        return response()->json([
            'data' => null,
            'message' => 'Client review deleted successfully',
            'status' => 'success'
        ], 204);
    }
}
