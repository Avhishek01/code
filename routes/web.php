<?php

use Illuminate\Support\Facades\Route;

//ROUTE AS A DEFAULT

Route::get('/', function () {
    return view('welcome');
});
      // ROUTE AS A STRING
route::get('about',function(){
    return ('JAI BAJRANG BALI');
});

     //ROUTE AS A PARAMETER
Route::get('user/{id}',function($id){
    return ($id);
});

     //ROUTE AS A MORE THAN ONE PARAMETER 
Route::get('user/{id}/comment/{comment}',function($id,$comment){
    return "user-id " . $id . " comment-pass " . $comment;
});

     //ROUTE AS A OPTIONAL PARAMETER

Route::get('user/{id?}',function($id=null){
    return "user-id " . $id ;
});

   //ROUTE AS A PARAMETER WITH REGULAR EXPRESSION

Route::get('userid/{id}/name/{name}',function($id,$name){
    return ($id .$name);
})-> wherenumber('id')-> wherealpha('name');

                                                                //ROUTE FOR VIEWS

Route::get('profile',function(){
    return view('profile');//profile is the file name
});
 //ROUTE VIEW ALTERNATE METHOD

 //Route::view('/pro','profile');

Route::get('admin', function(){
    return view('admin.admin1'); //admin is the folder name & admin1 is the file name inside folder
});

//ROUTE VIEW ALTERNATE METHOD
//Route::view('admin','admin.admin1');

//PASSING DATA FROM THE ROUTE IN VIEWS
 
Route::get('contact',function(){
    return view('admin.Contact',['name'=>'CANVAS CRAFT MEDIA']); //pass data in key value pair and in form of array[]
});

//AS ROUTE HOW TO ADD STRING WITH VIEW WITH PARAMETER

Route::get('avhi/{id}',function($id){
    return view('avhi',['name'=> $id]);
});


                                                            //ROUTE FOR CONTROLLERS without parameters

use App\Http\Controllers\aboutcontroller ; //this the path 
route::get('about',[aboutcontroller::class,'show']); //show is the method name which is inside the function 
                                                            
                                                            //ROUTE FOR CONTROLLERS WITH PARAMETER
use App\Http\Controllers\parametercontroller;
route::get('parameter/{name}',[parametercontroller::class,'show']);
                                                            
                                                            //ROUTE FOR CONTROLLERS WITH VIEW METHOD
use App\Http\Controllers\viewcontroller;
Route::get('about',[viewcontroller::class,'show']);

                                                            //ROUTE FOR CONTROLLERS WITH VIEW AND INSIDE ADMIN FOLDER ACCESS

use App\Http\Controllers\admincontroller;
Route::get('admin',[admincontroller::class,'show']);

                                                        //PASSING DATA FROM CONTROLLER TO VIEW

use App\Http\Controllers\passingcontroller;
Route::get('passing',[passingcontroller::class,'show']);