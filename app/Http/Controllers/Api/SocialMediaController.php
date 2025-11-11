<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => SocialMedia::all(),
            'message' => 'Social media links retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'platform' => 'required|string|max:255',
            'link' => 'required|string',
            'icon' => 'nullable|string',
        ]);

        $social = SocialMedia::create($data);

        return response()->json([
            'data' => $social,
            'message' => 'Social media link created successfully',
            'status' => 'success'
        ], 201);
    }

    public function show(SocialMedia $socialMedia)
    {
        return response()->json([
            'data' => $socialMedia,
            'message' => 'Social media link retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, SocialMedia $socialMedia)
    {
        $data = $request->validate([
            'platform' => 'sometimes|required|string|max:255',
            'link' => 'sometimes|required|string',
            'icon' => 'nullable|string',
        ]);

        $socialMedia->update($data);

        return response()->json([
            'data' => $socialMedia,
            'message' => 'Social media link updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();

        return response()->json([
            'data' => null,
            'message' => 'Social media link deleted successfully',
            'status' => 'success'
        ], 204);
    }
}
