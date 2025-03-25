<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//6 types of route:-get:-checks something on url 

//get route example
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
/*Route::post('/formsubmitted', function () {
    return "Form submitted successfully!";
});*/
Route::post('/formsubmitted', function (Request $request) {
    // Form processing and validation logic
    $fullname = $request->input("fullname");
    $email = $request->input("email");

    // Validate input fields
    $validatedData = $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    return "Form submitted successfully! Your full name is $fullname, and your email is $email.";
})->name("formsubmitted");

//parameter using routes giving it parameter using the brace{}
//Route::get('/portifolio{firstname}', function ($firstname) {
//return view('portifolio');
//return $firstname; //if we havent passed parameter then it will say page not found bc it only returns the parameter if no then it doesnt return 
//});
//named route to aceess this on home page 
/*Route::get('/test', function () {
    return "this is a test!";
})->name("test
page");

//grouped routes 
Route::get('/portifolio', function () {
    return view("portifolio");
});
// this is same as /portifolio/company
Route::prefix("portifolio")->group(
    function () {
        Route::get('/company', function () {
            return view("company");
        });
        Route::get('/organization', function () {
            return view("organization");
        });
    }
);
*/