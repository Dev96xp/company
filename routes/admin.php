<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;

Route ::get('', [HomeController::class, 'index'])->name('home.admin');

Route ::get('messages', [MessageController::class, 'index'])->name('messages.index');