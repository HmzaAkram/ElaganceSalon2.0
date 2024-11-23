<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AppointmentController;

//User Routes Start


Route::get('/login', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('users.pages.welcome');
});

Route::view("/template","users.pages.template");
Route::view("/aboutus","users.pages.aboutus");
Route::view("/gallery","users.pages.gallery");
Route::view("/feedback","users.pages.feedback");
Route::view("/testimonals","users.pages.testimonals");
Route::view("/contact","users.pages.contact");
Route::view("/team","users.pages.team");
Route::view("/pricing","users.pages.pricing");
Route::view("/signup","auth.register");
Route::view("/login","auth.login");
Route::view("/blogclassic","users.pages.blog-classic");
Route::view("/appointment","users.pages.appointment");
Route::view("/aboutcompany","users.pages.about-company");
Route::get('/user/services', [ServiceController::class, 'userServices'])->name('userServices');
Route::get('/user/appointments', [AppointmentController::class, 'userAppointments'])->name('userAppointments');
Route::get('/get-price/{id}', [ServiceController::class, 'getPrice']);


//User Routes End

//Admin Routes Start
Route::view("/dash","admin.dashboard");
Route::view("/appointments","admin.appointment");
Route::view("/editService","admin.serviceEdit");
Route::view("/editInventory","admin.inventoryEdit");

Route::view("/blank","admin.blank");
Route::view("/button","admin.button");
Route::view("/chart","admin.chart");
Route::view("/element","admin.element");
Route::view("/form","admin.form");
Route::view("/adminSignIn","admin.signin");
Route::view("/adminSignUp","admin.signup");
Route::view("/table","admin.table");
Route::view("/spin","admin.spinTem");
Route::view("/index","admin.index");
Route::view("/typo","admin.typography");
Route::view("/widget","admin.widget");
Route::view("/User","admin.user");
Route::view("/createUser","admin.userCreate");
Route::view("/editUser","admin.userEdit");
Route::view("/adminServices","admin.services");
Route::view("/adminServicesCreate","admin.servicesCreate");
Route::view("/adminInventory","admin.inventory");
Route::view("/adminInventoryCreate","admin.inventoryCreate");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/getUser', [App\Http\Controllers\AdminController::class, 'getUsers'])->name('user');

Route::post('/users', [HomeController::class, 'store'])->name('user.store');

Route::get('/users/{id}/edit', [HomeController::class, 'edit'])->name('user.edit'); // To show the form to edit an existing user
Route::put('/users/{id}', [HomeController::class, 'update'])->name('users.update');// To update a user
Route::delete('/users/{id}', [HomeController::class, 'destroy'])->name('user.destroy'); // To delete a user
// Route::get('/user/create', [HomeController::class, 'create'])->name('user.create'); // This handles the GET request to show the form


//Service Routes


// Display all services
Route::get('/admin/services', [ServiceController::class, 'index'])->name('showServices');

// Show form to create a new service
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');

// Store a new service
Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store');

// Show form to edit an existing service
Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');

// Update an existing service
Route::put('/admin/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');

// Delete a service
Route::delete('/admin/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');



//Inventory Routes


Route::get('/admin/products/create', [InventoryController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products/store', [InventoryController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products', [InventoryController::class, 'index'])->name('admin.products.index');
Route::delete('/products/{id}', [InventoryController::class, 'destroy'])->name('admin.products.destroy');
Route::get('/admin/inventory/{id}/edit', [InventoryController::class, 'editInventory'])->name('admin.inventory.edit');
Route::put('/admin/inventory/{id}', [InventoryController::class, 'updateInventory'])->name('admin.inventory.update');

// reviews/web.php


// Route for displaying all reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

Route::get('/showFeedbacks', [ReviewController::class, 'showFeedbacks'])->name('showFeedbacks');
// Route for showing the form to create a new review
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
// Route for storing a new review
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
// Route for showing the form to edit an existing review
Route::get('/reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
// Route for updating an existing review
Route::put('/reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');
// Route for deleting a review

Route::delete('reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');


Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');


//Appointment Routes

// In your routes/web.php

Route::get('/showAppointments', [AppointmentController::class, 'showAppointments'])->name('admin.showAppointments');

// Display all appointments
Route::get('/appointments', [AppointmentController::class, 'index'])->name('Showappointment');

// Show the form to create a new appointment
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');

// Store a new appointment
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Show a single appointment
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');

// Show the form to edit an existing appointment
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');

// Update an existing appointment
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');

// Delete an appointment
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
Route::patch('/appointments/{id}/accept', [AppointmentController::class, 'accept'])->name('appointments.accept');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

// staff routes
Route::view("/staff",".staff.staff");
