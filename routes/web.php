<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Relationships_c;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/FK', function(){
    return view('page');
}
);
Route::get('/show/{id}', [Relationships_c::class, 'show'])->name('show_rel');
Route::get('/index/{id}', [Relationships_c::class, 'index'])->name('index_rel');

/* start many to many  */
// Route::get('/storecustomer', function(){
//     return view('manytomany_store1');
// }
// );
// Route::get('/storeproduit', function(){
//     return view('manytomany_store2');
// }
// );
Route::post('/showcustomer', [Relationships_c::class, 'storecustomer'])->name('storecustomer');
Route::post('/showproduit', [Relationships_c::class, 'storeproduit'])->name('storeproduit');
Route::get('/all', [Relationships_c::class, 'all'])->name('all');
Route::get('/allcustomer', [Relationships_c::class, 'allproduit'])->name('allproduit');
Route::get('/allproduit', [Relationships_c::class, 'allcustomer'])->name('allcustomer');
Route::post('/store_fk_pro', [Relationships_c::class, 'store_fk_pro'])->name('store_fk_pro');
// Route::post('/store_fk_cus/{id}', [Relationships_c::class, 'store_fk_cus'])->name('store_fk_cus');
/*end many to many */
Route::get('/table', function(){
    return view('page_customer');
}
);
Route::get('/get_table_customer', [Relationships_c::class, 'get_table_customer'])->name('get_table_customer');
Route::get('/get_table_produit', [Relationships_c::class, 'get_table_produit'])->name('get_table_produit');
Route::delete('/destroycustomer/{id}', [Relationships_c::class, 'destroy_customer'])->name('destroy_customer');
Route::delete('/destroyproduit/{id}', [Relationships_c::class, 'destroy_produit'])->name('destroy_produit');
Route::get('/update_customer/{id}/index_customer', [Relationships_c::class, 'index_customer'])->name('index_customer');
Route::put('/update_customer/{id}', [Relationships_c::class, 'update_customer'])->name('update_customer');
Route::get('/add_customer', [Relationships_c::class, 'add_customer'])->name('add_customer');
Route::get('/add_produit', [Relationships_c::class, 'add_produit'])->name('add_produit');
Route::get('/update_produit/{id}/index_produit', [Relationships_c::class, 'index_produit'])->name('index_produit');
Route::put('/update_produit/{id}', [Relationships_c::class, 'update_produit'])->name('update_produit');

//

Route::get('/get_table_fk/{id}', [Relationships_c::class, 'get_table_fk'])->name('get_table_fk');
Route::delete('/destroy_fkc/{id}', [Relationships_c::class, 'destroy_fkc'])->name('destroy_fkc');
