<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = config('projects');
        $allTech = collect($projects)
            ->flatMap(fn($p) => $p['tech'])
            ->unique()
            ->sort()
            ->values()
            ->toArray();

        return view('pages.projects.index', compact('projects', 'allTech'));
    }

    public function show($slug)
    {
        $projects = config('projects');
        $project = collect($projects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        $team = config('team');

        $collaborators = [];
        foreach ($project['collaborators'] as $githubUser) {
            if (isset($team[$githubUser])) {
                $member = $team[$githubUser];
                $githubData = Cache::remember("github_user_{$githubUser}", 3600, function () use ($githubUser) {
                    try {
                        $response = Http::timeout(5)->get("https://api.github.com/users/{$githubUser}");
                        if ($response->successful()) {
                            return $response->json();
                        }
                    } catch (\Exception $e) {
                        // fallback silently
                    }
                    return null;
                });

                $collaborators[] = [
                    'name' => $member['name'],
                    'role' => $member['role'],
                    'github' => $githubUser,
                    'avatar' => $githubData['avatar_url'] ?? null,
                    'bio' => $githubData['bio'] ?? $member['bio'],
                    'github_url' => $githubData['html_url'] ?? $member['links']['github'],
                    'contributions' => $githubData['public_repos'] ?? null,
                ];
            }
        }

        $related = collect($projects)
            ->where('slug', '!=', $slug)
            ->take(3)
            ->values()
            ->toArray();

        return view('pages.projects.show', compact('project', 'collaborators', 'related'));
    }
}
