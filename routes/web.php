<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

// ===========================
// UTILISATEURS
// ===========================
use App\Http\Controllers\Utilisateurs\DashboardController;
use App\Http\Controllers\Utilisateurs\ReservationController;
use App\Http\Controllers\Utilisateurs\NotificationController;
use App\Http\Controllers\Utilisateurs\FactureController as UserFactureController;
use App\Http\Controllers\Utilisateurs\PublicationController;
use App\Http\Controllers\Utilisateurs\ProfilController;

// ===========================
// ADMIN
// ===========================
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminNotificationController;
use App\Http\Controllers\Admin\FactureController;
use App\Http\Controllers\Admin\PublicationController as AdminPublicationController;




/*
|--------------------------------------------------------------------------
| ACCUEIL
|--------------------------------------------------------------------------
*/

Route::get('/accueil', [HomeController::class, 'index'])->name('accueil');
// CONTACT
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*
|--------------------------------------------------------------------------
| ESPACE UTILISATEUR
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Réservations
    |--------------------------------------------------------------------------
    */

    Route::get('/reservation/create', [ReservationController::class, 'create'])
        ->name('reservation.create');

    Route::post('/reservation', [ReservationController::class, 'store'])
        ->name('reservation.store');

    Route::get('/mes-reservations', [ReservationController::class, 'historique'])
        ->name('mes.reservations');

    Route::get('/reservation/{id}', [ReservationController::class, 'show'])
        ->name('reservation.show');

    Route::delete('/reservation/{id}', [ReservationController::class, 'destroyer'])
        ->name('reservation.destroyer');


    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */

    Route::get('/mes-notifications', [NotificationController::class, 'index'])
        ->name('mes.notifications');

    Route::post('/notification/{id}/lire', [NotificationController::class, 'lire'])
        ->name('notification.lire');

    Route::delete('/notifications/{id}', [NotificationController::class, 'supprimerNotification'])
        ->name('notification.supprimer');

    Route::delete('/notifications/supprimer-lues', [NotificationController::class, 'supprimerNotificationsLues'])
        ->name('notifications.supprimerLues');


    /*
    |--------------------------------------------------------------------------
    | Factures
    |--------------------------------------------------------------------------
    */

    Route::get('/mes-factures', [UserFactureController::class, 'index'])
        ->name('mes.factures');

    Route::get('/mes-factures/{id}', [UserFactureController::class, 'show'])
        ->name('mes.factures.show');

    Route::get('/mes-factures/{id}/pdf', [UserFactureController::class, 'pdf'])
        ->name('mes.factures.pdf');


    /*
    |--------------------------------------------------------------------------
    | Publications
    |--------------------------------------------------------------------------
    */

    Route::get('/publications', [PublicationController::class, 'index'])
        ->name('publications.index');

    Route::get('/publications/{publication}', [PublicationController::class, 'show'])
        ->name('publications.show');
    
   

    

    
    Route::resource(
            'publications',
            PublicationController::class
        );

    /*
    |--------------------------------------------------------------------------
    | Profil
    |--------------------------------------------------------------------------
    */

    Route::get('/mon-profil', [ProfilController::class, 'index'])
        ->name('profil.index');

    Route::get('/mon-profil/modifier', [ProfilController::class, 'edit'])
        ->name('profil.edit');

    Route::put('/mon-profil', [ProfilController::class, 'update'])
        ->name('profil.update');


    /*
    |--------------------------------------------------------------------------
    | Breeze Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| ESPACE ADMINISTRATEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Réservations
    |--------------------------------------------------------------------------
    */

    Route::get('/reservations', 
    [AdminReservationController::class, 'index'])
        ->name('reservations.index');
        
    Route::post('/reservations/{reservation}/accepter',
        [AdminReservationController::class, 'accepter'])
        ->name('reservations.accepter');
    
    Route::post('/reservations/{reservation}/refuser',
        [AdminReservationController::class, 'refuser'])
        ->name('reservations.refuser');
    
    Route::get('/reservations/{reservation}',
        [AdminReservationController::class, 'show'])
        ->name('reservations.show');
    
    Route::get('/patients', 
    [PatientController::class,'index'])->name('patients.index');

    Route::get('/utilisateurs/admin/create', [AdminUserController::class, 'createAdmin'])
        ->name('utilisateurs.admin.create');
    
    Route::post('/utilisateurs/admin/store', [AdminUserController::class, 'storeAdmin'])
        ->name('utilisateurs.admin.store');

        // PATIENTS
    Route::get('/patients',
        [PatientController::class,'index']
    )->name('patients.index');
    Route::get('/patients/{patient}',
    [PatientController::class,'show'])->name('patients.show');




    // FACTURES
    Route::get('/factures',
        [FactureController::class,'index']
    )->name('factures.index');


    Route::get('/factures/{facture}',
    [FactureController::class,'show'])
    ->name('factures.show');


    Route::post('/factures/{facture}/payer',
    [FactureController::class,'payer'])
    ->name('factures.payer');


    Route::get('/factures/{facture}/pdf',
    [FactureController::class,'pdf'])
    ->name('factures.pdf');



    // PUBLICATIONS

    Route::resource('publications', AdminPublicationController::class);
    
    // NOTIFICATIONS ADMIN

    Route::get('/notifications',
        [AdminNotificationController::class, 'index']
    )->name('notifications.index');


    // Supprimer toutes les notifications lues
    Route::delete(
        '/notifications/supprimer-lues',
        [AdminNotificationController::class, 'supprimerLues']
    )->name('notifications.supprimerLues');


    // Lire notification
    Route::post('/notifications/{notification}/lire',
        [AdminNotificationController::class, 'lire']
    )->name('notifications.lire');


    // Supprimer une notification
    Route::delete('/notifications/{notification}',
        [AdminNotificationController::class, 'supprimer']
    )->name('notifications.supprimer');


    





});

require __DIR__.'/auth.php';