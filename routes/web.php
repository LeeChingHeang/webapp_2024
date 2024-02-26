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

Route::get('/', function () {
    return 'Welcome to the homepage!';
});

Route::get('/about', function () {
    return 'About Us';
});

Route::get('/contact', function () {
    return 'Contact Us';
});

Route::get('/contact/AA/BBB/jhkhnlk/ughkhu', function ($name,$id) {
    return 'Contact ' . $name;
})->name('contact');

Route::get("/my_test",function (){
   return view('test');
});

Route::get("/test_2/{id}/{name?}",function ($id,$name="CADT"){
    echo "ID:". $id ."Name:" .$name;
});


Route::get("/about_us",function (){
    return view('front_end.about');
});
Route::get("/home/{id?}",function ($id = "0"){
    $data = array('name'=>'Mr.SOK',
                   'id'=>$id);
    return view('front_end.homepage',$data);
});

Route::get("/service",function (){
    return view('front_end.service');
});


Route::get("/student_list",function ($id = "0"){
   $students = array("Mr. SOK", "Mr. SAN","Mr. SAO");
   $data = array(
       "title1"=>"ALL Student Info",
       "students"=>$students
   );
    return view('back_end.manage_student.index')->with($data);
});


Route::get("/student_detial",function ($id = "0"){
   $studentName ="Mr. SOK SAN";
   $studentID ="IDT001";
   $educationLavel = ["PHD","MS","BA"];
   return view('back_end.manage_student.show',compact(['studentName','studentID','educationLavel']));
});
