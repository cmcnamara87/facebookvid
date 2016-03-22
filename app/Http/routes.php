<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('video', function(Request $request) {
    $slides = $request->input('slides');
    $videoMaker = new \App\VideoMaker\VideoMaker();
    $asset = $videoMaker->make($slides);
    return response()->json(['url' => $asset]);
});

// usage inside a laravel route
Route::get('video', function()
{
    $slides = [[
        "title" => "INDIAN FOOD",
        "background_color" => "#9B3166",
        "text_color" => "#fff"
    ],[
        "title" => "COOKING CLASSES",
        "background_color" => "#9B3166",
        "text_color" => "#fff"
    ], [
        "title" => "In Brisbane",
        "background_color" => "#E7B100",
        "text_color" => "#fff"
    ], [
        "title" => "Cooking Demo",
        "subtitle" => "Booval",
        "background_color" => "#0F1219",
        "image_url" => "http://static.au.groupon-content.net/70/69/1454489676970.jpg",
        "text_color" => "#fff"
    ], [
        "title" => "with Meal & Drinks",
        "subtitle" => "Booval",
        "background_color" => "#0F1219",
        "image_url" => "http://static.au.groupon-content.net/70/69/1454489676970.jpg",
        "text_color" => "#fff"
    ], [
        "title" => "$19",
//        "subtitle" => "50% off",
        "image_url" => "http://static.au.groupon-content.net/64/86/1457503358664.jpg",
//        "subtitle_image_url" => "/Users/craig/Desktop/movie/tomato.png",
        "background_color" => "#9B3166",
        "text_color" => "#fff"
    ], [
        "title" => "3Hr Cooking Class",
        "subtitle" => "Woolloongabba",
        "image_url" => "http://static.au.groupon-content.net/28/26/1457704342628.jpg",
        "text_color" => "#fff"
    ], [
        "title" => "with Dinner",
        "subtitle" => "Woolloongabba",
        "background_color" => "#0F1219",
        "image_url" => "http://static.au.groupon-content.net/28/26/1457704342628.jpg",
        "text_color" => "#fff"
    ], [
        "title" => "$69",
        "background_color" => "#9B3166",
        "text_color" => "#fff"
    ], [
        "title" => "TO-DO.CO",
        "background_color" => "#E7B100",
        "text_color" => "#0F1219"
    ]];

    $blah = new \App\VideoMaker\VideoMaker();
    $asset = $blah->make($slides);

    return response()->json(['url' => $asset]);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
