<?php
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ConfigController;

// Route::get('/{slug?}', [ConfigController::class, 'show'])
//     ->where('slug', '.*');

// Dashboard
Route::get('/', function () {
    return view('main');
});
Route::get('/dashboard-time', function () {
    return view('dashboards/main-time');
});
Route::get('/dashboard-site', function () {
    return view('dashboards/main-site');
});
Route::get('/admin-request', function () {
    return view('dashboards/main-request');
});

// Report
Route::get('/report-time', function () {
    return view('reports/report-time');
});
Route::get('/report-person', function () {
    return view('reports/report-person');
});
Route::get('/report-location', function () {
    return view('reports/report-location');
});
Route::get('/report-system', function () {
    return view('reports/report-logs');
});

// member
Route::get('/mems-user', function () {
    return view('members/user');
});
Route::get('/mems-admin', function () {
    return view('members/admin');
});
Route::get('/mems-superadmin', function () {
    return view('members/superadmin');
});

// setting
Route::get('/setting-location', function () {
    return view('settings/setting-location');
});
Route::get('/setting-job', function () {
    return view('settings/setting-job');
});

// document
Route::get('/document', function () {
    return view('document');
});
Route::get('/support', function () {
    return view('support');
});

// Super Owner
Route::get('/owner-overview', function () {
    return view('owners/overview');
});

// Apps
Route::get('/app-signup', function () {
    return view('apps/signup');
});

// Auth
Route::get('/login', function () {
    return view('auth/signin');
});

// Auth
Route::prefix('lines/522726101')->group(function () {
    Route::get('signup', function () {
        return view('lines.522726101.signup');
    });
});
// Route::get('/apps/112', function () {
//     return view('lines.112.signup');
// });
