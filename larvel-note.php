<?php 

/**
 * Laravel part 11 ( resource controller  )
 * ===========================================================================
 */

// 1. php artisan create-project laravel/laravel my-pp
// 2. php artisan make:controller StudentController  // plean controller
// 3. php artisan make:controller StaffConroller --resource  // create all features
// 4. php artisan r:l  // create all features
// 5. php artisan make:model   // create model
// 6. php artisan make:migration   // create migration
// 7. php artisan make:migration create_orders_table   // create table
// 8. php artisan make:model Student -m // create model and migration
// 9. php artisan migrate // create table
// 10. php artisan migrate:refresh // Update Migrate all column
// 11. php artisan migrate:fresh // drop all column and added new column

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


// Route::get()     ---> // When get some data
// Route::post()    ---> // when data push data pase from data
// Route::put()     ---> // when data update or eddit we need put/patch
// Route::patch()   ---> // when data update or eddit we need put/patch
// Route::delete()  ---> //  when delte data
// Route::resource()---> //  all rout in here

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

// connection database
// Route::resource('student', 'App\Http\Controllers\StudentController');

/**
 * Laravel part 13 ( model migration 1 )
 * ===========================================================================
 * 
 * Models: Models class হল ডাটাবেজ থেকে ডাটা ধরে আনা, ইডিট করা, ডিলেট করা সকল কাজ করবে । Complete the all feature of CURD and more.
 * Migration: Migration er kaj holo table structure golo kamon hobe seta bole dibe. হলো আমরা যে টেবিল বানাব সেইগুলো ম্যানেজ করাই হলো Migration. টেবিল দেখতে কেমন হবে, কয়টা রো, কলাম থাকবে । অথব বালা যায় টেবিল এর ডাটা গুলো ম্যানেজ করা ।
 * 
 * php artisan make:model Student -m // create model and migration
 */



     
    // public function up(): void
    // {
    //     Schema::create('students', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('email') -> unique();
    //         $table->integer('age');
    //         $table->boolean('status') -> default(1);
    //         $table->boolean('trash') -> default(0);
    //         $table->timestamps();
    //     });
    // }


    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('staff', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name', 100);
    //         $table->string('email', 100) -> unique();
    //         $table->unsignedInteger('age', 3);
    //         $table->longText('Desc');
    //         $table->timestamps();
    //     });
    // }



/**
 * Laravel part 16 ( migration  )
 * ===========================================================================
 *  php artisan migrate:refresh // Update Migrate all column
 *  php artisan migrate:fresh // drop all column and added new column
 * 
 * নিউ কলাম এড করতে চাইল ডাটাবেজ থেকে migrations এবং আমাদের টেবিলটি ডিলেট করতে হবে । এর পর php artisan migrate করতে হবে । 
 * 
*/
// Schema::create('staff', function (Blueprint $table) {
//     $table->id();
//     $table->string('name', 100) -> nullable();
//     $table->string('email', 100) -> unique();
//     $table->string('cell', 100) -> unique();
//     $table->integer('age') -> unsigned();
//     $table->integer('income') -> unsigned();
//     $table->string('school_id');
//     $table->longText('Desc') -> default('This is default value');
//     $table->timestamps();
// });


// আমরা চাইলে Student টেবিল থেকে stu টেবিলে ডাটা পাঠাইতে পারি । 

// class Student extends Model
// {
    // use HasFactory;

    // protected $table = 'students';
// We decide where column send data otherwise don't send data
    // protected $fillable = ['name', 'age', 'status', 'trash'];

// We send data every column
    // protected $guarded = [];

// If we need any column data don't send just name in empty array
    // protected $guarded = ['email', 'cell'];
// }



/**
 * Laravel part 18 ( model _ migration  )
 * ===========================================================================
 * migration ফাইলের মূল কাজ হলো ডাটাবেজে টেবিল তৈরি করা । 
 * model এর কাজ ক্লাস গুলো 
 * php artisan make:model   // create model
 * php artisan make:migration   // create migration
 * php artisan make:migration create_orders_table   // create table
 * 
 * 
*/


/**
 * Laravel part 19 ( view 1 )
 * ===========================================================================
 * View is any pages...
 * 
 * 
*/
// Route::get('/', function(){
//     return view('homepage');
// });
// Route::get('/contact', function(){
//     return view('contact');
// });
// Route::get('/about', function(){
//     return view('about');
// });

/**
 * Laravel part 20 ( view 2 )
 * ===========================================================================
 * View is any pages...
 * 
 * 
*/
// Route::get('/', function(){
//     return view('homepage');
// });
// Route::get('/contact', function(){
//     return view('contact');
// });
// Route::get('/about', function(){
//     return view('about');
// });

// web.php
//=============================

// Route::get('/',[App\Http\Controllers\FrontendController::class, 'homePageShow']);
// Route::get('/contact',[App\Http\Controllers\FrontendController::class, 'contactPageShow']);
// Route::get('/about',[App\Http\Controllers\FrontendController::class, 'aboutPageShow']);


// Controller
//=====================

// class FrontendController extends Controller
// {
    
// /**
//  * Home Page Show
//  * 
// */
//     public function homePageShow()
//     {
//         return view('homepage');
//     }
// /**
//  * About Page Show
//  * 
// */
//     public function aboutPageShow()
//     {
//         return view('about');
//     }
// /**
//  * Contact Page Show
//  * 
// */
//     public function contactPageShow()
//     {
//         return view('pages/contact');
//     }
// }


// resource -> pages:-
//=============================

    // homepage.blade.php 
    //================================
        // <h2>This is Home Page </h2>
        // <p>Hello from Home Page...</p>

    // aboutpage.blade.php 
    //================================
        // <h2>This is About Page </h2>
        // <p>Hello from About Page...</p>

    // contactpage.blade.php 
    //================================
        // <h2>This is Contact Page </h2>
        // <p>Hello from Contact Page...</p>

        
/**
 * Laravel part 21 ( view 3 )
 * ===========================================================================
 * 
 * index.html file added in view and controller call ..
 * 
*/

        
/**
 * Laravel part 22 ( url, URL to, asset, route )
 * ==============================================================
 * url : use for menu
 * url, asset, UEL::to : call route name
 * route : use for name route, example: 
 *           Route::get('/about',[App\Http\Controllers\FrontendController::class, 'aboutpage'])->name('about');
*/
// {{-- <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a> --}}
// {{-- <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">Home</a> --}}
// {{-- <a class="nav-link active" aria-current="page" href="{{ URL::to('/') }}">Home</a> --}}
// {{-- <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a> --}}


/**
 * Laravel part 23 ( Blade syntax )
 * ==============================================================
 * {{}} Its use for echo.
{{'My name is obaydulla'}} // All times
{{!! 'My name is obaydulla'!!}} // some times

@php
$age = 10;
@endphp

@if ($age >= 20)
    {{'You are done'}}
@else 
    {{'You are not dome.'}}
@endif
@for ($i = 0; $i <= 10; $i++)"
    {{"The value is " . $i  }} <br>
@endfor
*/
// 

/**
 * Laravel part 24 ( crud templates )
 * ==============================================================
 * curd template folder
*/

/**
 * Laravel part 25 ( crud template setup )
 * ==============================================================
 * 
*/
//web.php
//================
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::get('/student/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::get('/student/show', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.show');


//StudentController
//=========================
class StudentController extends Controller
{
    /**
     * Load All Student
     */
    public function index()
    {
        return view('student.index');
    }
    /**
     * Add new Student
     */
    public function create()
    {
        return view('student.create');
    }
    /**
     * Edit view Student
     */
    public function edit()
    {
        return view('student.edit');
    }
    /**
     * Show view Student
     */
    public function show()
    {
        return view('student.show');
    }
}


// Link asset
//==================
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

// declare route 
// ==============
<a class="btn btn-sm btn-primary mb-2" href="{{route('student.create')}}">Add New Student</a>



/**
 * Laravel part 26 ( form setup )
 * ==============================================================
 * 
*/

<form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
@csrf

// ========
    /**
     * Store Student
     */
    public function store()
    {
       echo "I Am Here";
    }

    // post 
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');


/**
 * Laravel part 27 ( data get from form  )
 * ==============================================================
 * 
*/
    /**
     * Store Student
     */
    public function store(Request $request)
    {
       return $request->all();
    }



/**
 * Laravel part 29 ( student darta add  )
 * ==============================================================
 * 
*/


