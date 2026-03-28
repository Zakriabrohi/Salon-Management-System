<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

// --- FRONTEND ROUTES ---
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::post('/booking/store', [FrontendController::class, 'storeBooking'])->name('booking.store');
Route::get('/about', [FrontendController::class , 'about'])->name('about');
Route::get('/contact', [FrontendController::class , 'contact'])->name('contact');
// Form submit karne ke liye POST route
Route::post('/contact-send', [FrontendController::class, 'contactSend'])->name('contact.send');


// Login Routes (Open for everyone)
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Protected Admin Routes (Sirf login ke baad)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/services/create', [AdminController::class, 'createService'])->name('admin.services.create');
    Route::post('/services/store', [AdminController::class, 'storeService'])->name('admin.services.store');
    Route::get('/services/manage', [AdminController::class, 'manageServices'])->name('admin.services.manage');
    Route::get('/services/delete/{id}', [AdminController::class, 'deleteService'])->name('admin.services.delete');
    Route::get('/booking', [AdminController::class, 'manageBookings'])->name('admin.bookings.manage');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/services/edit/{id}', [AdminController::class, 'editService'])->name('admin.services.edit');
    Route::post('/services/update/{id}', [AdminController::class, 'updateService'])->name('admin.services.update');
    // Admin side messages dekhne ke liye
Route::get('/messages', [AdminController::class, 'adminMessages'])->name('admin.messages');

// Message delete karne ke liye
Route::delete('messages/{id}', [AdminController::class, 'deleteMessage'])->name('admin.messages.delete');

});
