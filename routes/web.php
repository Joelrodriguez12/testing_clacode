<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

// Portfolio home page
Route::get('/', [InvitationController::class, 'index'])->name('home');

// Invitation pages
Route::get('/invitations/birthday-kids', [InvitationController::class, 'birthdayKids'])->name('invitations.birthday.kids');
Route::get('/invitations/birthday-adult', [InvitationController::class, 'birthdayAdult'])->name('invitations.birthday.adult');
Route::get('/invitations/baptism', [InvitationController::class, 'baptism'])->name('invitations.baptism');
Route::get('/invitations/quinceanera', [InvitationController::class, 'quinceanera'])->name('invitations.quinceanera');
Route::get('/invitations/religious-celebration', [InvitationController::class, 'religiousCelebration'])->name('invitations.religious');
