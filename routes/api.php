<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaraOrderController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ManfaatController;
use App\Http\Controllers\MediaPartnerController;
use App\Http\Controllers\SyaratKetentuan2Controller;
use App\Http\Controllers\SyaratKetentuanController;
use App\Http\Controllers\TentangKamiController;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
        Route::group([
            'middleware' => 'auth:api'
        ], function () {
            // api secure

        });
    });
});

Route::group([
    'prefix' => 'all'
], function () {
    Route::get('home', [AllController::class, 'home']);
    Route::get('about', [AllController::class, 'about']);
    Route::get('syarat', [AllController::class, 'syarat']);
    Route::get('paket', [AllController::class, 'paket']);
    Route::get('blog', [AllController::class, 'blog']);
    Route::get('detail-blog/{id}', [AllController::class, 'detailBlog']);
    // Route::post('create', [AllController::class, 'create']);
    // Route::post('update/{id}', [AllController::class, 'update']);
    // Route::delete('delete/{id}', [AllController::class, 'delete']);
});

// Route::group([
//     'prefix' => 'beranda'
// ], function () {
//     Route::get('list', [BerandaController::class, 'list']);
//     Route::post('create', [BerandaController::class, 'create']);
//     Route::post('update/{id}', [BerandaController::class, 'update']);
//     Route::delete('delete/{id}', [BerandaController::class, 'delete']);
// });

Route::group([
    'prefix' => 'foto'
], function () {
    Route::get('list', [FotoController::class, 'list']);
    Route::post('create', [FotoController::class, 'create']);
    Route::post('update/{id}', [FotoController::class, 'update']);
    Route::delete('delete/{id}', [FotoController::class, 'delete']);
});

Route::group([
    'prefix' => 'info'
], function () {
    Route::get('list', [InfoController::class, 'list']);
    Route::post('create', [InfoController::class, 'create']);
    Route::post('update/{id}', [InfoController::class, 'update']);
    Route::delete('delete/{id}', [InfoController::class, 'delete']);
});

Route::group([
    'prefix' => 'manfaat'
], function () {
    Route::get('list', [ManfaatController::class, 'list']);
    Route::post('create', [ManfaatController::class, 'create']);
    Route::post('update/{id}', [ManfaatController::class, 'update']);
    Route::delete('delete/{id}', [ManfaatController::class, 'delete']);
});

Route::group([
    'prefix' => 'keunggulan'
], function () {
    Route::get('list', [KeunggulanController::class, 'list']);
    Route::post('create', [KeunggulanController::class, 'create']);
    Route::post('update/{id}', [KeunggulanController::class, 'update']);
    Route::delete('delete/{id}', [KeunggulanController::class, 'delete']);
});

Route::group([
    'prefix' => 'tentang-kami'
], function () {
    Route::get('list', [TentangKamiController::class, 'list']);
    Route::post('create', [TentangKamiController::class, 'create']);
    Route::post('update/{id}', [TentangKamiController::class, 'update']);
    Route::delete('delete/{id}', [TentangKamiController::class, 'delete']);
});

Route::group([
    'prefix' => 'harga'
], function () {
    Route::get('list', [HargaController::class, 'list']);
    Route::post('create', [HargaController::class, 'create']);
    Route::post('update/{id}', [HargaController::class, 'update']);
    Route::delete('delete/{id}', [HargaController::class, 'delete']);
});

Route::group([
    'prefix' => 'syarat-ketentuan'
], function () {
    Route::get('list', [SyaratKetentuanController::class, 'list']);
    Route::post('create', [SyaratKetentuanController::class, 'create']);
    Route::post('update/{id}', [SyaratKetentuanController::class, 'update']);
    Route::delete('delete/{id}', [SyaratKetentuanController::class, 'delete']);
});

Route::group([
    'prefix' => 'syarat-ketentuan-dua'
], function () {
    Route::get('list', [SyaratKetentuan2Controller::class, 'list']);
    Route::post('create', [SyaratKetentuan2Controller::class, 'create']);
    Route::post('update/{id}', [SyaratKetentuan2Controller::class, 'update']);
    Route::delete('delete/{id}', [SyaratKetentuan2Controller::class, 'delete']);
});

Route::group([
    'prefix' => 'media-partner'
], function () {
    Route::get('list', [MediaPartnerController::class, 'list']);
    Route::post('create', [MediaPartnerController::class, 'create']);
    Route::post('update/{id}', [MediaPartnerController::class, 'update']);
    Route::delete('delete/{id}', [MediaPartnerController::class, 'delete']);
});

Route::group([
    'prefix' => 'cara-order'
], function () {
    Route::get('list', [CaraOrderController::class, 'list']);
    Route::post('create', [CaraOrderController::class, 'create']);
    Route::post('update/{id}', [CaraOrderController::class, 'update']);
    Route::delete('delete/{id}', [CaraOrderController::class, 'delete']);
});

Route::group([
    'prefix' => 'faq'
], function () {
    Route::get('list', [FaqController::class, 'list']);
    Route::post('create', [FaqController::class, 'create']);
    Route::post('update/{id}', [FaqController::class, 'update']);
    Route::delete('delete/{id}', [FaqController::class, 'delete']);
});

Route::group([
    'prefix' => 'layanan'
], function () {
    Route::get('list', [LayananController::class, 'list']);
    Route::post('create', [LayananController::class, 'create']);
    Route::post('update/{id}', [LayananController::class, 'update']);
    Route::delete('delete/{id}', [LayananController::class, 'delete']);
});

Route::group([
    'prefix' => 'kontak'
], function () {
    Route::get('list', [KontakController::class, 'list']);
    Route::post('create', [KontakController::class, 'create']);
    Route::post('update/{id}', [KontakController::class, 'update']);
    Route::delete('delete/{id}', [KontakController::class, 'delete']);
});

Route::group([
    'prefix' => 'blog'
], function () {
    Route::get('list', [BlogController::class, 'list']);
    Route::post('create', [BlogController::class, 'create']);
    Route::post('update/{id}', [BlogController::class, 'update']);
    Route::delete('delete/{id}', [BlogController::class, 'delete']);
});
