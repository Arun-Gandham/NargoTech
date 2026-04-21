<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/robots.txt', function () {
    $content = implode("\n", [
        'User-agent: *',
        'Allow: /',
        'Sitemap: ' . url('/sitemap.xml'),
    ]);

    return Response::make($content, 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
})->name('seo.robots');

Route::get('/sitemap.xml', function () {
    $pages = [
        ['loc' => route('site.home'), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => route('site.services'), 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => route('site.about'), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => route('site.contact'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ];

    return response()
        ->view('sitemap', ['pages' => $pages])
        ->header('Content-Type', 'application/xml; charset=UTF-8');
})->name('seo.sitemap');

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home')->name('site.home');
    Route::get('/services', 'services')->name('site.services');
    Route::get('/about', 'about')->name('site.about');
    Route::get('/contact', 'contact')->name('site.contact');
    Route::post('/contact', 'submitContact')->name('site.contact.submit');
});
