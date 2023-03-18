<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\Blog\AddBlogComponent;
use App\Http\Livewire\Admin\Blog\BlogComponent as BlogBlogComponent;
use App\Http\Livewire\Admin\Blog\EditBlogComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\HomeSlider\AddHomeSliderComponent;
use App\Http\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Http\Livewire\Admin\Reviews\AddReviewsComponent;
use App\Http\Livewire\Admin\Reviews\EditReviewsComponent;
use App\Http\Livewire\Admin\Reviews\ReviewsComponent;
use App\Http\Livewire\Admin\Services\AddServicesComponent;
use App\Http\Livewire\Admin\Services\EditServicesComponent;
use App\Http\Livewire\Admin\Services\ServicesComponent;
use App\Http\Livewire\Admin\Team\AddTeamComponent;
use App\Http\Livewire\Admin\Team\EditTeamComponent;
use App\Http\Livewire\Admin\Team\TeamComponent as TeamTeamComponent;
use App\Http\Livewire\Admin\TeamComponent;
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

    //Team
    Route::get('/consullers',TeamTeamComponent::class)->name('admin.team');
    Route::get('/add-consuller',AddTeamComponent::class)->name('admin.addTeam');
    Route::get('/edit-consuller/{id}',EditTeamComponent::class)->name('admin.editTeam');

    // Services
    Route::get('/admin-services',ServicesComponent::class)->name('admin.services');
    Route::get('/add-services',AddServicesComponent::class)->name('admin.addServices');
    Route::get('/edit-services/{id}',EditServicesComponent::class)->name('admin.editServices');

    //reviews
    Route::get('/reviews',ReviewsComponent::class)->name('admin.reviews');
    Route::get('/add-reviews',AddReviewsComponent::class)->name('admin.addReview');
    Route::get('/edit-reviews/{id}',EditReviewsComponent::class)->name('admin.editreviews');

    //News
    Route::get('/news',BlogBlogComponent::class)->name('admin.news');
    Route::get('/add-news',AddBlogComponent::class)->name('admin.addNews');
    Route::get('/edit-news/{id}',EditBlogComponent::class)->name('admin.edit');
});
