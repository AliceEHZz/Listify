<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskShow;
use App\Livewire\Tasks\TaskUpdate;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', TaskIndex::class)->name('tasks');

Route::get('/tasks/create', TaskCreate::class);
Route::get('/tasks/{task}',TaskShow::class);

