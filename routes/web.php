<?php

use Illuminate\Support\Facades\Route;
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

Route::get('admin', 'loginController@adminIndex')->name('admin.login');
Route::post('admin', 'loginController@adminPosted');


Route::group(['middleware' => 'admin'], function () {


    Route::get("/admin_panel", 'admin_panel\dashboardController@index')->name('admin.dashboard');

    Route::get('admin/logout', 'loginController@adminLogout')->name('admin.logout');
    //categories
    Route::get('/admin_panel/categories', 'admin_panel\categoriesController@index')->name('admin.categories');
    Route::post('/admin_panel/categories', 'admin_panel\categoriesController@posted');

    Route::get('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@edit')->name('admin.categories.edit');
    Route::post('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@update');

    Route::get('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@delete')->name('admin.categories.delete');
    Route::post('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@destroy');


    //products
    Route::get('/admin_panel/products', 'admin_panel\productsController@index')->name('admin.products');

    Route::get('/admin_panel/products/create', 'admin_panel\productsController@create')->name('admin.products.create');
    Route::post('/admin_panel/products/create', 'admin_panel\productsController@store');

    Route::get('/admin_panel/products/edit/{id}', 'admin_panel\productsController@edit')->name('admin.products.edit');
    Route::post('/admin_panel/products/edit/{id}', 'admin_panel\productsController@update');

    Route::get('/admin_panel/products/delete/{id}', 'admin_panel\productsController@delete')->name('admin.products.delete');
    Route::post('/admin_panel/products/delete/{id}', 'admin_panel\productsController@destroy');

    //order management 
    Route::get('/admin_panel/management', 'admin_panel\managementController@manage')->name('admin.orderManagement');
    Route::post('/admin_panel/management', 'admin_panel\managementController@update')->name('admin.orderUpdate');
});


Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {

    Route::get('/', function () {
        $res = App\Models\Product::all();
        return view('index')
            ->with('products', $res);
    })->name('home');

    Route::get('/AboutUs', function () {
        return view('about-Us');
    })->name('aboutUs');
    Route::get('/campaigns', function () {
        return view('campaigns');
    })->name('campaigns');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');



    Route::get('/categories/{id}', 'user\userController@index')->name('categories');

    Route::get('/product/{id}', 'user\userController@view')->name('product');

    Route::get('/search', 'user\userController@search')->name('user.search');


    Route::get('information/privacy-policy', function () {
        return view('information.privacy-policy');
    });
    Route::get('information/return-policy', function () {
        return view('information.return-policy');
    });
    Route::get('information/sales-agreement', function () {
        return view('information.sales-agreement');
    });
    Route::get('information/user-agreement', function () {
        return view('information.user-agreement');
    });
    Route::get('career', function () {
        return view('career');
    });
    Route::group(['middleware' => 'auth'], function () {

        Route::get('profile/profile/{id}', function ($lang, $id) {
            $r = App\Models\Address::find($id);
            return view('profile.profile')->with('ad', $r);
        });

        Route::get('profile/edit_profile/{id}', 'user\userController@editprofile');
        Route::post('profile/edit_profile/{id}', 'user\userController@storprofile');

        Route::get('profile/address/{id}', function ($lang, $id) {
            $r = App\Models\Address::find($id);
            return view('profile.address')->with('ad', $r);
        });

        Route::get('profile/add_address', function () {
            return view('profile.add_address');
        });
        Route::get('profile/Change-Password', function () {
            return view('profile.show');
        });

        Route::post('profile/add_address/{id}', 'user\userController@storaddress');
        Route::get('profile/edit_address/{id}', 'user\userController@editaddress');
        Route::post('profile/edit_address/{id}', 'user\userController@updateaddress');
        Route::post('profile/delete_address/{id}', 'user\userController@destroyaddress');

        Route::post('product/{id}', 'user\userController@post');
        Route::get('cart', 'user\userController@cart')->name('user.cart');
        Route::get('cart/confirm', 'user\userController@confirmcart');
        Route::post('cart/checkout', 'user\userController@confirm');
        Route::post('edit_cart', 'user\userController@editCart')->name('user.editCart');
        Route::post('delete_item_from_cart', 'user\userController@deleteCartItem')->name('user.deleteCartItem');

        Route::get('user/myorder', 'user\userController@history');
    });
});
