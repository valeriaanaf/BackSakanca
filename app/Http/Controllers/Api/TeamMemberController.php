<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
}
