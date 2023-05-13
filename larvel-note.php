<?php 

/**
 * Laravel part 11 ( resource controller  )
 * ===========================================================================
 */

// 1. php artisan create-project laravel/laravel my-pp
// 2. php artisan make:controller StudentController  // plean controller
// 3. php artisan make:controller StaffConroller --resource  // create all features
// 4. php artisan r:l  // create all features
// 5. php artisan make:model Student -m // create model and migration

/**
 * Laravel part 03 (  MVC )
 * ===========================================================================
 */

// Model: This component represents the data and the business logic of the application. It is responsible for handling database operations, data validation, and any other business logic related to the data.

// View: This component represents the user interface of the application. It is responsible for rendering the HTML, CSS, and JavaScript that is sent to the user's browser.

// Controller: This component acts as an intermediary between the Model and the View. It is responsible for handling user input, making calls to the Model to fetch or manipulate data, and passing that data to the View to render the appropriate response.


/**
 * Laravel part 04 ( project structure )
 * ===========================================================================
 */

// Discus laravel project structure

// simple route create 

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // // single route
    // Route::get('/hello', function () {
    //     return view('hello.hello');
    // });


/**
 * Laravel part 06 ( prefix route _ group route )
 * ===========================================================================
 */

// Route::prefix('student')->group(function(){

//     Route::get("name", function() {
//         echo "My name is Obaydulla";
//     });
//     Route::get("create", function() {
//         echo "Create a student.";
//     });
//     Route::get("roll", function() {
//         echo "My roll no is 05.";
//     });
    
// });


// Route::get()      //  When get some data
// Route::post()      // when data push data pase from data
// Route::put()      //   when data update or eddit we need put/patch
// Route::patch()      // when data update or eddit we need put/patch
// Route::delete()      //  when delte data
// Route::resource()      //  all rout in here

// Name Route
// Route::get('all', function(){
//     echo "All Product is here";
// })-> name('all product');


//All route
//========================

// Route::get('/', function () {
//     return view('welcome');
// });

// // single route
// Route::get('/hello', function () {
//     return view('hello.hello');
// });

// Route::prefix('student')->group(function(){

//     Route::get("name", function() {
//         echo "My name is Obaydulla";
//     });
//     Route::get("create", function() {
//         echo "Create a student.";
//     });
//     Route::get("roll", function() {
//         echo "My roll no is 05.";
//     });

// });

// Route::prefix('product')->group(function(){
//     Route::get('item-name', function(){
//         echo "Item name is fashions";
//     });
//     Route::get('quantity', function(){
//         echo 50;
//     });

//     Route::get('all', function(){
//         echo "All Product is here";
//     })-> name('all product');
// });



// create controller and resource controller


/**
 * Laravel part 09 ( Route with controller  )
 * ===========================================================================
 */

// Route::get('student', 'App\Http\Controllers\studentController@ageCal');
 
// Route::namespace('App\Http\Controllers') -> prefix('b129') -> group(function() {
//     Route::get('student/{name}/{year}', 'studentController@ageCal');
// });


/**
 * Laravel part 10 ( Route with controller 2  )
 * ===========================================================================
 */

// old laravel
//====================
// Route::get('devinfo', [App\Http\Controllers\StaffController::class, 'devinfo']);
// Route::get('getdev', [App\Http\Controllers\StaffController::class, 'gerdev']);

// New laravel
//====================
// Route::get('devinfo', [App\Http\Controllers\StaffController::class, 'devinfo']);
// Route::get('getdev', [App\Http\Controllers\StaffController::class, 'gerdev']);

// New laravel use name
//========================
// Route::get('devinfo', 'App\Http\Controllers\StaffController@devInfo')-> name('devinfo.all');
// Route::get('getdev', 'App\Http\Controllers\StaffController@getDev')-> name('get.dev');

// Closer Route
//========================
// Route::get('', function(){

// });

/**
 * Laravel part 11 ( resource controller  )
 * ===========================================================================
 * php artisan make:controller StaffConroller --resource 
 * Route 2 way
 *  1. Plean Route
 *  2. Resource Route 
 */


/**
 * Laravel part 12 ( database connection )
 * ===========================================================================
 * 
 */
// connection database
// Route::resource('student', 'App\Http\Controllers\StudentController');

/**
 * Laravel part 13 ( model migration 1 )
 * ===========================================================================
 * 
 * Models: Models class হল ডাটাবেজ থেকে ডাটা ধরে আনা, ইডিট করা, ডিলেট করা সকল কাজ করবে । Complete the all feature of CURD and more.
 * Migration: হুলো আমরা যে টেবিল বানাব সেইগুলো ম্যানেজ করাই হলো Migration. টেবিল দেখতে কেমন হবে, কয়টা রো, কলাম থাকবে । অথব বালা যায় টেবিল এর ডাটা গুলো ম্যানেজ করা ।
 * 
 * php artisan make:model Student -m // create model and migration
 */

