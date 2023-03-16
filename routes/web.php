<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\HomeSlider\AddHomeSliderComponent;
use App\Http\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceComponent;
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

Route::get('/', HomeComponent::class);
Route::get('about',AboutComponent::class);
Route::get('services', ServiceComponent::class);
Route::get('contactUs', ContactComponent::class);
Route::get('blog',BlogComponent::class);


Route::middleware(['auth:sanctum','verified' ,'authadmin'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/manage-homesliders',HomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/add-homesliders',AddHomeSliderComponent::class)->name('admin.addhomeslider');
});
