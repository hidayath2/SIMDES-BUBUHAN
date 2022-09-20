<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use Barryvdh\DomPDF\Facade\Pdf;


// halaman awal untuk masyarakat
Route::get('/', [ProyekController::class, 'depan']);

// untuk halaman login masarakat dan admin
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');


// untuk halaman show all proyek,kegiatan,perangkat
Route::get('/allproyek', [ProyekController::class, 'showall']);
Route::get('/allkegiatan', [KegiatanController::class, 'showall']);
Route::get('/allagenda', [AgendaController::class, 'showall']);
Route::get('/allperangkat', [PerangkatController::class, 'showall']);

// untuk halaman detail proyek dan kegiatan untuk masyarakat
Route::get('/isikegiatan/{id}', [KegiatanController::class, 'detail']);
Route::get('/isiproyek/{id}', [ProyekController::class, 'detailproyek']);


//untuk halaman dashboard masyarakat melakukan pelayanan surat
Route::prefix('pelayanan/surat')->group(function(){

    Route::get('/rekomendasiproposal', function (){
        return view('halamanmasyarakat/rekomendasiproposal');
    })->name('rps');
    
    Route::get('/suratketerangantidakmampu', function (){
        return view('halamanmasyarakat/suratketerangantidakmampu');
    })->name('sktm');
    
    Route::get('/suratpindah', function (){
        return view('halamanmasyarakat/suratpindah');
    })->name('sp');
    
    Route::get('/suratketerangankematian', function (){
        return view('halamanmasyarakat/suratketerangankematian');
    })->name('skm');
    
    Route::get('/suratketeranganbelummemilikirumah', function (){
        return view('halamanmasyarakat/suratketeranganbelummemilikirumah');
    })->name('skbmr');
    
    Route::get('/suratketeranganhilang', function (){
        return view('halamanmasyarakat/suratketeranganhilang');
    })->name('skh');
    
    Route::get('/suratketeranganbelummenikah', function (){
        return view('halamanmasyarakat/suratketeranganbelummenikah');
    })->name('skbm');
    
    Route::get('/suratketeranganjanda', function (){
        return view('halamanmasyarakat/suratketeranganjanda');
    })->name('skj');
    
    Route::get('/suratketeranganpekerjaanorangtua', function (){
        return view('halamanmasyarakat/suratketeranganpekerjaanorangtua');
    })->name('skpot');
    
    Route::get('/suratketerangannama', function (){
        return view('halamanmasyarakat/suratketerangannama');
    })->name('skn');
    
    Route::get('/suratketerangankir', function (){
        return view('halamanmasyarakat/suratketerangankir');
    })->name('skkir');
    
    Route::get('/suratketeranganrekomendasikip', function (){
        return view('halamanmasyarakat/suratketeranganrekomendasikip');
    })->name('skkip');
    
    Route::get('/suratketeranganrekomendasiskck', function (){
        return view('halamanmasyarakat/suratketeranganrekomendasiskck');
    })->name('skskck');
    
    Route::get('/suratketeranganberkelakuanbaik', function (){
        return view('halamanmasyarakat/suratketeranganberkelakuanbaik');
    })->name('skbb');

});

// untuk halaman login
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);  
    
    Route::get('/dashboarda', [DashboardController::class, 'index'])->middleware('can:isAdmin');

    Route::get('/datapribadi', [MasyarakatController::class, 'datapribadi'])->middleware('can:isMasyarakat');

    Route::get('/surat', [SuratController::class, 'surat']);

    Route::post('/surat', [SuratController::class, 'store'])->name('surat.store');

    Route::delete('surat/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');
    Route::get('surat/{id}', [SuratController::class, 'show'])->name('surat.show');
    // DELETE        /users/{user}               destroy users.destroy
    Route::get('/dusunkinali', [MasyarakatController::class, 'dusunkinali']);
    Route::get('/dusuntulus', [MasyarakatController::class, 'dusuntulus']);
    Route::get('/dusunikhlas', [MasyarakatController::class, 'dusunikhlas']);
    Route::get('/dusunsuangking', [MasyarakatController::class, 'dusunsuangking']);
    Route::get('/sudahmenikah', [MasyarakatController::class, 'sudahmenikah']);
    Route::get('/belummenikah', [MasyarakatController::class, 'belummenikah']);
    Route::get('/pekerjaan', [MasyarakatController::class, 'pekerjaan']);

    // untuk halaman edit data pribadi masyarakat
Route::put('datapribadi/{id}', [MasyarakatController::class, 'update'])->name('datapribadi.update');
Route::get('datapribadi/{id}', [MasyarakatController::class, 'edit'])->name('datapribadi.edit');

// halaman dashboard admin data masyarakat
Route::resource('/masyarakat', MasyarakatController::class);

// untuk halaman dashboard admin kelola proyek,kegiatan dan perangkat dan agenda
Route::resource('proyek', ProyekController::class);
Route::resource('agenda', AgendaController::class);
Route::resource('kegiatan', KegiatanController::class);
Route::resource('perangkat', PerangkatController::class);

Route::post('/surat/send-message/{surat}', [SuratController::class, 'whatsapp'])->name('surat.wa');

// notif surat masuk
Route::get('/get_unopened_data', [SuratController::class, 'get_unopened_data'])->name('get_unopened_data');

// Route::get('/proyek', [InformasiController::class, 'kelolaproyek']);
// Route::get('/kegiatan', [InformasiController::class, 'kelolakegiatan']);
// Route::get('/agenda', [InformasiController::class, 'kelolaagenda']);

// // Route::resource('/', InformasiController::class);
// Route::resource('/', InformasiController::class);
// Route::post('/createproyek', [InformasiController::class, 'store'])->name('proyek.store');
// Route::get('/createproyek','InformasiController');

});

// Route::show('isisurat', [SuratController::class, 'show']);

// Route::get('/sktm', function (){
//     return Pdf::loadView('surat.sktm')->stream();
// });

// Route::get('/sktm', [SuratController::class, 'sktm']);
// Route::get('/rkp', [SuratController::class, 'rkp']);
// Route::get('/sp', [SuratController::class, 'sp']);
// Route::get('/skk', [SuratController::class, 'skk']);
// Route::get('/skbmr', [SuratController::class, 'skbmr']);
// Route::get('/skh', [SuratController::class, 'skh']);
// Route::get('/skbm', [SuratController::class, 'skbm']);
// Route::get('/skj', [SuratController::class, 'skj']);
// Route::get('/skpo', [SuratController::class, 'skpo']);
// Route::get('/skn', [SuratController::class, 'skn']);
// Route::get('/skkir', [SuratController::class, 'skkir']);
// Route::get('/skkb', [SuratController::class, 'skkb']);
// Route::get('/skrkip', [SuratController::class, 'skrkip']);
// Route::get('/skrskck', [SuratController::class, 'skrskck']);



