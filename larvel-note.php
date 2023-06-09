<?php 

/**
 * Laravel part 11 ( resource controller  )
 * ===========================================================================
 */

// 1. composer create-project laravel/laravel my-pp
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
 *--------------------------------------------- Curd Template Start ------------------------------------------
 * <==========================================================================================================>
 */

/**
 * Laravel part 24 ( crud templates )
 * ==============================================================
 * curd template folder
*/
views -> student -> index.blade.php, show.blade.php, create.blade.php, edit.blade.php, trash.blade.php

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
 * Laravel part 28 ( model migration  )
 * ==============================================================
 * php artisan make:model Student -m
 *  php artisan migrate
*/


public function store(Request $request)
{
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'cell' => $request->cell,
        'uname' => $request->uname,
    ]);
    return back();
}

    /**
     * Store Student
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell' => $request->cell,
            'uname' => $request->uname,
        ]);
        return back() ->with('success','Thanks '.$request->name.' for your Registration');
    }

    <div class="card-body">
        <h2>Add New Student</h2>
        @if (Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}} 
                <button class="close" data-dismiss="alert">&times;</button>
            </p>
            
        @endif

*/
$unique_name = '';
if($request->hasFile('photo')){
    $img = $request -> file('photo');
    $unique_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();
    $img -> move(public_path('media/students'), $unique_name) ;
}
Student::create([
    'name' => $request->name,
    'email' => $request->email,
    'cell' => $request->cell,
    'uname' => $request->uname,
    'photo' => $unique_name,  // image db name 
]);
return back() ->with('success','Thanks '.$request->name.' for your Registration');
}



/**
 *  Laravel part 32 (  data show   )
 * ==============================================================
 * 
<tbody>
    @foreach ($all_data as $data )
        <tr>
            <td>{{$loop -> index + 1}}</td>
            {{-- <td>{{$data->id}}</td> --}}
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->cell}}</td>
            <td><img src="{{url('')}}/media/students/{{$data->photo}}" alt=""></td>
            {{-- <td><img src="{{URL::to('')}}/media/students/{{$data->photo}}" alt=""></td> --}}
            {{-- <td><img src="{{asset('')}}media/students/{{$data->photo}}" alt=""></td> --}}
            <td>
                <a class="btn btn-sm btn-info" href="{{route('student.show')}}">View</a>
                <a class="btn btn-sm btn-warning" href="{{route('student.edit')}}">Edit</a>
                <a class="btn btn-sm btn-danger" href="#">Delete</a>
            </td>
        </tr>
    @endforeach
</tbody>


/**
 *  Laravel part 33 ( data delete  )
 * ==============================================================
 * 
 * /

Route::get('/student/destroy/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy'); 

/**
 * Delete user
 * Studentcontroller
 */
    public function destroy($id)
    {
        $delete_data = student::find($id);
        $delete_data -> delete();
        return back() -> with('success', 'Student Data Delete.');
    }

    <a class="btn btn-sm btn-danger" href="{{route('student.destroy', $data ->id)}}">Delete</a>



/**
 *  Laravel part 34 ( view )
 * ==============================================================
 * 
 * /
 Route::get('/student/show/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');

     /**
     * Show single user
     */
    public function show($id)
    {
        $data = student::find($id);

        return view('student.show' , [
            'user_data' => $data,
        ]);
    }

    <div class="card">
			<div class="card-body">
				<h2>{{$user_data-> name}}</h2>
				<img class="mb-2" width="150px" src="{{URL::to('/')}}/media/students/{{$user_data->photo}}" alt="">
				<h2>{{$user_data-> name}}</h2>
				<p>{{$user_data-> cell}}</p>
			</div> 
		</div>


/**
 *  Laravel part 35 ( update )
 * ==============================================================
 * 
 */

Route::get('/student/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');

/**
 * Edit view Student
 */
public function edit($id)
{
    $data = student::find($id);
    return view('student.edit', [
        'edit_data' => $data
    ]);
}


/**
 * Updated Student
 */
public function update(Request $request, $id)
{
    $update_data = student::find($id);
    $update_data -> name = $request -> name;
    $update_data -> email = $request -> email;
    $update_data -> cell = $request -> cell;
    $update_data -> uname = $request -> uname;

    $update_data-> update();
    
    return back() -> with('success', 'Student Data Delete.');
}
    

// edit.blade.php
<div class="card">
    <div class="card-body">
        @if (Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}} 
                <button class="close" data-dismiss="alert">&times;</button>
            </p>
            
        @endif
        <h2>Edit Data {{$edit_data -> name}}</h2>
        <form action="{{route('student.update', $edit_data -> id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" class="form-control" value="{{$edit_data -> name}}" type="text">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" class="form-control" value="{{$edit_data -> email}}" type="text">
            </div>
            <div class="form-group">
                <label for="">Cell</label>
                <input name="cell" class="form-control" value="{{$edit_data -> cell}}" type="text">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input name="uname" class="form-control" value="{{$edit_data -> uname}}" type="text">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Updated">
            </div>
        </form>
    </div>
</div>


/**
 *  Laravel part 35 ( update )
 * ==============================================================
 * 
 */
public function store(Request $request)
{
    $this->validate($request, [
        'name' => ['required'],
        'email' => ['required', 'unique:students', 'email'],
        'cell' => ['required', 'numeric', 'digits_between:11,13', 'regex:/^(01|\+?8801)[1-9]\d{8}$/'],
        'uname' => ['min:5', 'max:10']
    ]);
    <div class="card-body">
    <h2>Add New Student</h2>
    @if (Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}} 
            <button class="close" data-dismiss="alert">&times;</button>
        </p>
        
    @endif
    @if ($errors->any())

        <p class="alert alert-danger">{{$errors->first()}} 
            <button class="close" data-dismiss="alert">&times;</button>
        </p>
            

    @endif
    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
}

// final step validation 

public function store(Request $request)
{
    $this->validate($request, [
        'name' => ['required'],
        'email' => ['required', 'unique:students', 'email'],
        'cell' => ['required', 'numeric', 'digits_between:11,13', 'regex:/^(01|\+?8801)[1-9]\d{8}$/'],
        'uname' => ['min:5', 'max:10']
    ],[
        'name.required' => 'নামের ঘরটি ঘালি রাখা যাবে না',
        'cell.numeric' => 'সঠিক নাম্বার বসান',
    ]);
}


// create.blade.php 
<div class="card">
<div class="card-body">
    <h2>Add New Student</h2>

    /// use this step form validation,,,


    @if (Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}} 
            <button class="close" data-dismiss="alert">&times;</button>
        </p>
        
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{$err}} 
                <button class="close" data-dismiss="alert">&times;</button>
            </p>
            
        @endforeach
    @endif



    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input  name="name" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input name="email" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Cell</label>
            <input name="cell" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input name="uname" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input name="photo" class="" type="file">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Sign Up">
        </div>
    </form>
</div>
</div>