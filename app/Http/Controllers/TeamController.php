<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class TeamController extends Controller
{
    public function index()
    {
        $team = config('team');
        $members = [];

        foreach ($team as $key => $member) {
            $githubData = Cache::remember("github_user_{$key}", 3600, function () use ($member) {
                try {
                    $response = Http::timeout(5)->get("https://api.github.com/users/{$member['github']}");
                    if ($response->successful()) {
                        return $response->json();
                    }
                } catch (\Exception $e) {
                    // fallback silently
                }
                return null;
            });

            $members[] = [
                'name' => $member['name'],
                'role' => $member['role'],
                'github' => $member['github'],
                'avatar' => $githubData['avatar_url'] ?? null,
                'bio' => $githubData['bio'] ?? $member['bio'],
                'github_url' => $githubData['html_url'] ?? $member['links']['github'],
                'public_repos' => $githubData['public_repos'] ?? null,
                'location' => $githubData['location'] ?? null,
                'company' => $githubData['company'] ?? null,
            ];
        }

        return view('pages.team.index', compact('members'));
    }
}
