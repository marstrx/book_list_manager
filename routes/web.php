<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::resource("/books",BooksController::class);
