<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GithubController;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';

Route::get('/auth/github', [GithubController::class, 'redirect'])->name('auth.github');
Route::get('/auth/github/callback', [GithubController::class, 'callback']);

Route::get('/passworks', \App\Livewire\Passworks\Index::class)->name('passworks.index');
Route::get('/passworks/create', \App\Livewire\Passworks\Create::class)->name('passworks.create');
Route::get('/passworks/show/{passwork}', \App\Livewire\Passworks\Show::class)->name('passworks.show');
Route::get('/passworks/update/{passwork}', \App\Livewire\Passworks\Edit::class)->name('passworks.edit');

Route::get('/passgroups', \App\Livewire\Passgroups\Index::class)->name('passgroups.index');
Route::get('/passgroups/create', \App\Livewire\Passgroups\Create::class)->name('passgroups.create');
Route::get('/passgroups/show/{passgroup}', \App\Livewire\Passgroups\Show::class)->name('passgroups.show');
Route::get('/passgroups/update/{passgroup}', \App\Livewire\Passgroups\Edit::class)->name('passgroups.edit');