<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('client')->get();
        return response()->json([
            'data' => $projects,
            'message' => 'Projects retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_id' => 'required|integer|exists:clients,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $project = Project::create($data);

        return response()->json([
            'data' => $project->load('client'),
            'message' => 'Project created successfully',
            'status' => 'success'
        ], 201);
    }

    public function show(Project $project)
    {
        $project->load('client');
        return response()->json([
            'data' => $project,
            'message' => 'Project retrieved successfully',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'client_id' => 'sometimes|required|integer|exists:clients,id',
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $project->update($data);
        $project->load('client');

        return response()->json([
            'data' => $project,
            'message' => 'Project updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json([
            'data' => null,
            'message' => 'Project deleted successfully',
            'status' => 'success'
        ], 204);
    }
}
