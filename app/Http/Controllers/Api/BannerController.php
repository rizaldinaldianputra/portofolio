<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Banner::all(),
            'message' => 'Banners retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|string',
            'link' => 'nullable|string',
        ]);

        $banner = Banner::create($data);

        return response()->json([
            'data' => $banner,
            'message' => 'Banner created successfully',
            'status' => 'success'
        ], 201);
    }

    public function show(Banner $banner)
    {
        return response()->json([
            'data' => $banner,
            'message' => 'Banner retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'image' => 'nullable|string',
            'link' => 'nullable|string',
        ]);

        $banner->update($data);

        return response()->json([
            'data' => $banner,
            'message' => 'Banner updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();

        return response()->json([
            'data' => null,
            'message' => 'Banner deleted successfully',
            'status' => 'success'
        ], 204);
    }
}
