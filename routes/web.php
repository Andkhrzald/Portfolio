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

    $certKeys = [
        ['id' => 'pkl',          'lang_key' => 'certificates.pkl',       'pages' => 1, 'badge' => 'completed'],
        ['id' => 'bnsp',         'lang_key' => 'certificates.bnsp',      'pages' => 2, 'badge' => 'active'],
        ['id' => 'hakcipta',     'lang_key' => 'certificates.copyright', 'pages' => 1, 'badge' => 'active',
         'team' => ['Rehanfzn', 'FuncSmile', 'NoyanPolicarpus']],
    ];

    $certificates = [];
    foreach ($certKeys as $cert) {
        $lk = $cert['lang_key'];
        $cert['title']  = __("{$lk}.title");
        $cert['issuer'] = __("{$lk}.issuer");
        $cert['period'] = __("{$lk}.period");
        $cert['desc']   = __("{$lk}.desc");

        $certificates[] = $cert;
    }

    return view('welcome', compact('members', 'certificates'));
})->name('home');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
