<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
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

    return view('welcome', compact('members'));
})->name('home');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
