<?php

// Route::get("/adminpanel", function (){
//     return "Admin Panel";
// });


Route::group(['middleware' => 'adminMiddleware:protected' ,'namespace' => 'Dezashibi\Cms\Http\Controllers'], function() {
    Route::get("/adminpanel", 'AdminPanelController@index');
    Route::get("/adminpanel/config",function() {
        return config("cms.url");
    });
});
