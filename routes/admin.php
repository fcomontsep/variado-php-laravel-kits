<?php
use Illuminate\Support\Facades\Route;

Route::get('/cursos', function(){
	return "Hello Admin";
})->name('cursos');