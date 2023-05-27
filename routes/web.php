<?php

declare(strict_types=1);

use App\Http\Livewire\Pages\TopicDetailPage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\TopicPage;

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

Route::get('/', TopicPage::class)->name('pages.topics.index');
Route::get('/{topic:slug}', TopicDetailPage::class)->name('pages.topics.show');
