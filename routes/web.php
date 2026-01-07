<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');



//login
Route::get('/login',[\App\Http\Controllers\LoginController::class,'form'])->name('login.form');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'enter'])->name('login.enter');


//logout
//Route::get('logout'::class,'logout'])->name('logout');



//dashboard
Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'dashboard'])->name('dashboard');



//admin
Route::get('admin/add',[\App\Http\Controllers\AdminController::class,'add'])->name('admin.add');
Route::post('admin/save',[\App\Http\Controllers\AdminController::class,'save'])->name('admin.save');
Route::get('admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');

Route::get('admin/{admin}', [\App\Http\Controllers\AdminController::class,'show'])->name('admin.show');
Route::post('admin/update/{admin}', [\App\Http\Controllers\AdminController::class,'update'])->name('admin.update');
Route::get('admin/delete/{admin}', [\App\Http\Controllers\AdminController::class,'delete'])->name('admin.delete');



//customer
Route::get('customer/add',[\App\Http\Controllers\CustomerController::class,'add'])->name('customer.add');
Route::post('customer/save',[\App\Http\Controllers\CustomerController::class,'save'])->name('customer.save');
Route::get('customer',[\App\Http\Controllers\CustomerController::class,'index'])->name('customer.index');

Route::get('customer/show/{customer}', [\App\Http\Controllers\CustomerController::class,'show'])->name('customer.show');
Route::post('customer/update/{customer}', [\App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
Route::get('customer/delete/{customer}', [\App\Http\Controllers\CustomerController::class,'delete'])->name('customer.delete');



//driver
Route::get('driver/add',[\App\Http\Controllers\DriverController::class,'add'])->name('driver.add');
Route::post('driver/save',[\App\Http\Controllers\DriverController::class,'save'])->name('driver.save');
Route::get('driver',[\App\Http\Controllers\DriverController::class,'index'])->name('driver.index');

Route::get('driver/show/{driver}', [\App\Http\Controllers\DriverController::class,'show'])->name('driver.show');
Route::post('driver/update/{driver}', [\App\Http\Controllers\DriverController::class,'update'])->name('driver.update');
Route::get('driver/delete/{driver}', [\App\Http\Controllers\DriverController::class,'delete'])->name('driver.delete');



//car
Route::get('car/add',[\App\Http\Controllers\CarController::class,'add'])->name('car.add');
Route::post('car/save',[\App\Http\Controllers\CarController::class,'save'])->name('car.save');
Route::get('car',[\App\Http\Controllers\CarController::class,'index'])->name('car.index');

Route::get('car/modal/{driver}', [\App\Http\Controllers\CarController::class,'modal'])->name('car.modal');

Route::get('car/show/{car}', [\App\Http\Controllers\CarController::class,'show'])->name('car.show');
Route::post('car/update/{car}', [\App\Http\Controllers\CarController::class,'update'])->name('car.update');
Route::get('car/delete/{car}', [\App\Http\Controllers\CarController::class,'delete'])->name('car.delete');


//trip
Route::get('trip/add',[\App\Http\Controllers\TripController::class,'add'])->name('trip.add');
Route::post('trip/save',[\App\Http\Controllers\TripController::class,'save'])->name('trip.save');
Route::get('trip',[\App\Http\Controllers\TripController::class,'index'])->name('trip.index');

Route::get('trip/modal/{customer}', [\App\Http\Controllers\TripController::class,'modal'])->name('trip.modal');

Route::get('trip/show/{trip}', [\App\Http\Controllers\TripController::class,'show'])->name('trip.show');
Route::post('trip/update/{trip}', [\App\Http\Controllers\TripController::class,'update'])->name('trip.update');
Route::get('trip/delete/{trip}', [\App\Http\Controllers\TripController::class,'delete'])->name('trip.delete');



//address
Route::get('address/add/{customer}',[\App\Http\Controllers\AddressController::class,'add'])->name('address.add');
Route::post('address/save/{customer}',[\App\Http\Controllers\AddressController::class,'save'])->name('address.save');
Route::get('address/{customer}', [\App\Http\Controllers\AddressController::class,'index'])->name('address.index');

Route::get('address/show/{address}', [\App\Http\Controllers\AddressController::class,'show'])->name('address.show');
Route::post('address/update/{address}', [\App\Http\Controllers\AddressController::class,'update'])->name('address.update');
Route::delete('address/delete/{address}', [\App\Http\Controllers\AddressController::class,'delete'])->name('address.delete');



//make
Route::get('make/add',[\App\Http\Controllers\MakeController::class,'add'])->name('make.add');
Route::post('make/save',[\App\Http\Controllers\MakeController::class,'save'])->name('make.save');
Route::get('make',[\App\Http\Controllers\MakeController::class,'index'])->name('make.index');

Route::get('make/show/{make}', [\App\Http\Controllers\MakeController::class,'show'])->name('make.show');
Route::post('make/update/{make}', [\App\Http\Controllers\MakeController::class,'update'])->name('make.update');
Route::get('make/delete/{make}', [\App\Http\Controllers\MakeController::class,'delete'])->name('make.delete');



//model
Route::get('model/add',[\App\Http\Controllers\ModelController::class,'add'])->name('model.add');
Route::post('model/save',[\App\Http\Controllers\ModelController::class,'save'])->name('model.save');
Route::get('model',[\App\Http\Controllers\ModelController::class,'index'])->name('model.index');

Route::get('model/show/{model}', [\App\Http\Controllers\ModelController::class,'show'])->name('model.show');
Route::post('model/update/{model}', [\App\Http\Controllers\ModelController::class,'update'])->name('model.update');
Route::get('model/delete/{model}', [\App\Http\Controllers\ModelController::class,'delete'])->name('model.delete');



//ticket
Route::get('ticket/add',[\App\Http\Controllers\TicketController::class,'add'])->name('ticket.add');
Route::post('ticket/save',[\App\Http\Controllers\TicketController::class,'save'])->name('ticket.save');
Route::get('ticket',[\App\Http\Controllers\TicketController::class,'index'])->name('ticket.index');

Route::get('ticket/show/{ticket}', [\App\Http\Controllers\TicketController::class,'show'])->name('ticket.show');
Route::post('ticket/update/{ticket}', [\App\Http\Controllers\TicketController::class,'update'])->name('ticket.update');
Route::get('ticket/delete/{ticket}', [\App\Http\Controllers\TicketController::class,'delete'])->name('ticket.delete');



//type
Route::get('type/add',[\App\Http\Controllers\TypeController::class,'add'])->name('type.add');
Route::post('type/save',[\App\Http\Controllers\TypeController::class,'save'])->name('type.save');
Route::get('type',[\App\Http\Controllers\TypeController::class,'index'])->name('type.index');

Route::get('type/show', [\App\Http\Controllers\TypeController::class,'show'])->name('type.show');
Route::post('type/update', [\App\Http\Controllers\TypeController::class,'update'])->name('type.update');
Route::get('type/delete', [\App\Http\Controllers\TypeController::class,'delete'])->name('type.delete');



//category
Route::get('category/add',[\App\Http\Controllers\CategoryController::class,'add'])->name('category.add');
Route::post('category/save',[\App\Http\Controllers\CategoryController::class,'save'])->name('category.save');
Route::get('category',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.index');

Route::get('category/show', [\App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
Route::post('category/update', [\App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::get('category/delete', [\App\Http\Controllers\CategoryController::class,'delete'])->name('category.delete');



//message
Route::get('message/add/{customer}',[\App\Http\Controllers\MessageController::class,'add'])->name('message.add');
Route::post('message/save/{customer}',[\App\Http\Controllers\MessageController::class,'save'])->name('message.save');
Route::get('message/{customer}',[\App\Http\Controllers\MessageController::class,'index'])->name('message.index');

Route::get('message/show/{customer}', [\App\Http\Controllers\MessageController::class,'show'])->name('message.show');
Route::post('message/update/{customer}', [\App\Http\Controllers\MessageController::class,'update'])->name('message.update');
Route::get('message/delete/{customer}', [\App\Http\Controllers\MessageController::class,'delete'])->name('message.delete');
