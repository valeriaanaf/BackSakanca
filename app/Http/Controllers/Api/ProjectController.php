<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use ApiResponse;

    public function index(Request $request)
    {
        // Selalu ambil project yang aktif dan sertakan data relasi servicenya
        $query = Project::with('service')->where('is_active', true);

        // Jika frontend mengirim query ?featured=true atau ?featured=false
        if ($request->has('featured')) {
            $isFeatured = filter_var($request->featured, FILTER_VALIDATE_BOOLEAN);
            $query->where('is_featured', $isFeatured);
        }

        $projects = $query->orderBy('order', 'asc')->get();

        return $this->success($projects, 'Data projects berhasil diambil');
    }
}
