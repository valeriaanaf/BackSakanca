<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Traits\ApiResponse;

class ProjectController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint untuk ProjectSection.tsx — Public
     */
    public function index()
    {
        $projects = Project::with('service:id,name')
            ->where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        return $this->success($projects, 'Data projects berhasil diambil');
    }

    public function show(Project $project)
    {
        return $this->success($project->load('service:id,name'));
    }

    public function store(UpdateProjectRequest $request)
    {
        $project = Project::create($request->validated());

        return $this->success($project, 'Project berhasil dibuat', 201);
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return $this->success($project, 'Project berhasil diperbarui');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return $this->success(null, 'Project berhasil dihapus');
    }
}
