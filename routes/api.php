<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/request", function(Request $request){
    try {
        $dbconnect = DB::connection()->getPDO();
        $dbname = DB::connection()->getDatabaseName();
        echo "Connected successfully to the database. Database name is :".$dbname;
     } catch(Exception $e) {
        echo "Error in connecting to the database";
     }
});

Route::get("/image", function(Request $request){
    try{
        if(Storage::exists("index.html")){
            echo "Connected to S3 successfully and index.html exists";
        }
        else{
            echo "Connected to S3 successfully and index.html does not exist";
        }
    }
    catch(Exception $e){
        echo "Error in connecting to S3";
        echo ($e->getMessage());
    }
});