<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarHadirController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\SendUndanganController;
use App\Http\Controllers\DataPengantinController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\DaftarUndanganController;
use App\Http\Controllers\PenyewaController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/undanganku/{nama}/{alamat}', function ($nama , $alamat) {

//     $qrcode=QrCode::size(100)->generate($nama . $alamat);

//     return view('undanganku', compact('nama','alamat') ,['qrcode'=>$qrcode]);
// });

Route::get('/', function () {
    return view('master');
});
Route::get('/undanganku/{nama}/{alamat}', [SendUndanganController::class, 'undangan']);


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/daftarhadir', [App\Http\Controllers\DaftarHadirController::class, 'index'])->name('daftarhadir');
    Route::get('/daftarvip', [App\Http\Controllers\HomeController::class, 'indexvip'])->name('daftarvip');
    Route::get('/daftarotp', [App\Http\Controllers\HomeController::class, 'indexotp'])->name('daftarotp');
    Route::get('/daftarotw', [App\Http\Controllers\HomeController::class, 'indexotw'])->name('daftarotw');
    Route::get('/daftarmp', [App\Http\Controllers\HomeController::class, 'indexmp'])->name('daftarmp');
    Route::get('/daftarmw', [App\Http\Controllers\HomeController::class, 'indexmw'])->name('daftarmw');

    Route::get('/scan', [ScanController::class, 'index'])->name('scan');
    Route::get('/tracking', [ScanController::class, 'tracking'])->name('tracking');
    Route::get('/scanmobile', [ScanController::class, 'indexmobile'])->name('scanmobile');
    Route::get('/download', [App\Http\Controllers\DaftarHadirController::class, 'download'])->name('download');
    Route::get('/datapengantin', [DataPengantinController::class, 'index'])->name('datapengantin');
    Route::get('/lihatdata', [DataPengantinController::class, 'lihatdata'])->name('lihatdata');
    Route::get('/daftarundangan', [DaftarUndanganController::class, 'index'])->name('daftarundangan');
    Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa');
    Route::get('/penyewa/delete/{uid}', [PenyewaController::class, 'delete'])->name('penyewaDelete');
    Route::delete('/datapengantin/destroy/{id}', [DataPengantinController::class, 'destroy'])->name('datapengantinDestroy');

    Route::post('/store', [DataPengantinController::class, 'store'])->name('store');
    Route::post('/storeUser', [PenyewaController::class, 'storeUser'])->name('storeUser');
    Route::post('/store_dtamu', [DaftarUndanganController::class, 'store_dtamu'])->name('store_dtamu');
});


Route::get('/add-tamu/{slug}/{nama}', [HomeController::class, 'addTamu']);
