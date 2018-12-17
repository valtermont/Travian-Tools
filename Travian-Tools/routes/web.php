<?php

Auth::routes();

/*----------------------------------------------------------------------------------*/
/* ----------------------------------- Home page ----------------------------------- */
/*----------------------------------------------------------------------------------*/
Route::get('/', 'HomeController@index')->name('home');					// Displays home page on login
Route::get('/home', 'HomeController@index')->name('home');				// Displays home page on selection


/*----------------------------------------------------------------------------------*/
/* --------------------------------- Finders page ---------------------------------- */
/*----------------------------------------------------------------------------------*/
Route::get('/finder','Finders\FindersController@index')->name('finder');			// Finders main page

Route::get('/finder/player','Finders\PlayerFinderController@player');		    // Displays the different type of finders
Route::post('/finder/player','Finders\PlayerFinderController@processPlayer');		// Displays the different type of finders
Route::get('/finder/player/{name}/{id?}','Finders\PlayerFinderController@player');		    // Displays the different type of finders

Route::get('/finder/alliance','Finders\AllianceFinderController@alliance');		// Displays the different type of finders
Route::post('/finder/alliance','Finders\AllianceFinderController@processAlliance');	// Displays the different type of finders
Route::get('/finder/alliance/{name}/{id?}','Finders\AllianceFinderController@alliance');	// Displays the different type of finders

Route::get('/finder/inactive','Finders\InactiveFinderController@inactive');		// Displays the different type of finders
Route::post('/finder/inactive','Finders\InactiveFinderController@processInactive');		// Displays the result of the inactive finders

Route::get('/finder/natar','Finders\NatarFinderController@natar');		        // Displays the different type of finders
Route::post('/finder/natar','Finders\NatarFinderController@processNatar');		// Displays the result of the Natar finders

Route::get('/finder/neighbour','Finders\NeighbourFinderController@neighbour');		// Displays the different type of finders
Route::post('/finder/neighbour','Finders\NeighbourFinderController@processNeighbour');		// Displays the result of the neighbour finders




/*----------------------------------------------------------------------------------*/
/* -------------------------- Controller for Account Page -------------------------- */
/*----------------------------------------------------------------------------------*/
Route::get('/account','AccountController@index')->name('account');			// Account main page
Route::get('/account/{task}','AccountController@show');		// Displays the different options in the account page




/*----------------------------------------------------------------------------------*/
/* ----------------------- Plus Page -- General Options --------------------------- */
/*----------------------------------------------------------------------------------*/
Route::get('/plus','Plus\PlusController@index')->name('plus');					// Plus Menu main page

/*-------------------------- Plus overview routes ----------------------------*/
Route::get('/plus/members','Plus\PlusController@members');
Route::get('/plus/member/{id}','Plus\PlusController@member');

/* --------------- Controller for Plus leader routes --------------- */
Route::get('/leader/{task?}','LeaderController@leader');	

/* --------------- Plus Resource routes  --------------- */
Route::get('/plus/resource','Plus\Resources\ResourceController@showTaskList');
Route::get('/plus/resource/{id}','Plus\Resources\ResourceController@showTask');
Route::post('/plus/resource/{id}','Plus\Resources\ResourceController@updateTask');

Route::get('/resource','Plus\Resources\LeaderResourceController@resourceTaskList');
Route::get('/resource/{id}','Plus\Resources\LeaderResourceController@resourceTask');
Route::post('/resource/create','Plus\Resources\LeaderResourceController@createResourceTask');
Route::post('/resource/update','Plus\Resources\LeaderResourceController@processResourceTask');	

/* --------------- Plus defense CFD   --------------- */

Route::get('/plus/defense','Plus\Defense\CFD\CFDController@defenseTaskList');
Route::get('/plus/defense/{id}','Plus\Defense\CFD\CFDController@defenseTask');
Route::post('/plus/defense/{id}','Plus\Defense\CFD\CFDController@updateDefenseTask');

Route::get('/defense/cfd','Plus\Defense\CFD\LeaderCFDController@CFDList');
Route::get('/defense/cfd/{id}','Plus\Defense\CFD\LeaderCFDController@CFDDetail');
Route::get('/defense/cfd/troops/{id}/{uid}','Plus\Defense\CFD\LeaderCFDController@CFDTroops');
Route::post('/defense/cfd/create','Plus\Defense\CFD\LeaderCFDController@createCFD');
Route::post('/defense/cfd/update','Plus\Defense\CFD\LeaderCFDController@processCFD');



Route::get('/defense/incoming','DefenseController@incoming');
Route::post('/defense/incoming','DefenseController@processIncoming');



/* -------------------- Plus Search Defense -----------------------*/
Route::get('/defense/search','Plus\Defense\Search\DefenseController@show');
Route::post('/defense/search','Plus\Defense\Search\DefenseController@process');






/* --------------- Controller for the Report Page ----------- */
Route::get('/report','ReportController@index');				// Displays the Report Page
Route::post('/report','ReportController@process');			// Creates the Defect / bug in the Database




/* --------------- Controller for the Contact Page ------------ */
Route::get('/about','AboutController@index');			//Displays the contact page





/* ---------------- Servers page controllers ------------------- */
Route::get('/servers','ServersController@index')->name('server');
Route::post('/servers','ServersController@process');


