<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies')->paginate(5);

        return response()->json([
            'succes' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();

        return response()->json([
            'succes' => true,
            'results' => $project,
        ]);
    }

    public function type_projects($slug)
    {
        $projects = DB::table('projects')
            ->join('types', 'types.id', '=', 'projects.type_id')
            ->select('projects.*', 'types.slug as typeSlug')
            ->where('types.slug', $slug)
            ->paginate(3);

        return response()->json([
            'succes' => true,
            'results' => $projects,
        ]);
    }
}
