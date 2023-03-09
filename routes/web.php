<?php

use App\Http\Livewire\CountryDetail;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/country/{index}', CountryDetail::class);