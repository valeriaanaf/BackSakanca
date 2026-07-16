<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTeamMemberRequest;
use App\Models\TeamMember;
use App\Traits\ApiResponse;

class TeamMemberController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $members = TeamMember::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        return $this->success($members, 'Data team members berhasil diambil');
    }

    public function store(UpdateTeamMemberRequest $request)
    {
        $member = TeamMember::create($request->validated());

        return $this->success($member, 'Team member berhasil dibuat', 201);
    }

    public function update(UpdateTeamMemberRequest $request, TeamMember $teamMember)
    {
        $teamMember->update($request->validated());

        return $this->success($teamMember, 'Team member berhasil diperbarui');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();

        return $this->success(null, 'Team member berhasil dihapus');
    }
}
