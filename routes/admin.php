<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\ProductCreate;
use App\Http\Livewire\Admin\ProductEdit;
use App\Http\Livewire\Admin\SubcategoryCreate;
use App\Http\Livewire\Admin\SubcategoryList;
use App\Http\Livewire\Admin\SubcategoryEdit;


Route::get('productoscreate', ProductCreate::class)->name('product.create');
Route::get('productosedit/{product}', ProductEdit::class)->name('product.edit');
Route::get('subcategoriascreate', SubcategoryCreate::class)->name('subcategory.create');
Route::get('subcategoriasedit/{subcategory}', SubcategoryEdit::class)->name('subcategory.edit');
Route::get('subcategoriaslist', SubcategoryList::class)->name('subcategory.list');
