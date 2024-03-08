<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\ParametrosComponent;
use App\Livewire\Inline2Component;
use App\Livewire\ActionsComponent;
use App\Livewire\EventosComponent;
use App\Livewire\FormulariosComponent;

Route::get('/', HomeComponent::class);
Route::get('/parametros/{id}/{slug}', ParametrosComponent::class);
Route::get('/inline', Inline2Component::class);
Route::get('/actions', ActionsComponent::class)->name("actions_component");
Route::get('/eventos', EventosComponent::class);
Route::get('/formularios', FormulariosComponent::class)->name("formularios_component");