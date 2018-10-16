<?php

/*
|--------------------------------------------------------------------------
| Public Pages  Routes
|--------------------------------------------------------------------------
*/


Route::get('/',[
    'uses' => 'PublicPagesController@getIndex',
    'as'   => 'home'
]);

Route::get('/about',[
    'uses' => 'PublicPagesController@getAbout',
    'as'   => 'about'
]);

Route::get('/our-events',[
    'uses' => 'PublicPagesController@getPress',
    'as'   => 'press'
]);

Route::get('/our-press/{slug}',[
    'uses' => 'PublicPagesController@getPressSingle',
    'as'   => 'presssingle'
]);

Route::get('/contact',[
    'uses' => 'PublicPagesController@getContact',
    'as'   => 'contact'
]);



Route::get('/services-details',[
    'uses' => 'PublicPagesController@getServicesdetails',
    'as'   => 'servicesdetails'
]);



Route::get('/fuwang-foods',[
    'uses' => 'PublicPagesController@getFuwangfoods',
    'as'   => 'fuwangfoods'
]);


Route::get('/fuwang-foods',[
    'uses' => 'PublicPagesController@getFuwangfoods',
    'as'   => 'fuwangfoods'
]);

Route::get('/fuwang-beverage',[
    'uses' => 'PublicPagesController@getFuwangBeverage',
    'as'   => 'fuwangbeverage'
]);



Route::get('/fuwang-foods-chocolate-div',[
    'uses' => 'PublicPagesController@getChocolatediv',
    'as'   => 'chocolatediv'
]);



Route::get('/fuwang-foods-drinks',[
    'uses' => 'PublicPagesController@getDrinksdiv',
    'as'   => 'drinksdiv'
]);



Route::get('/product-description/{slug}',[
    'uses' => 'PublicPagesController@getProductDescription',
    'as'   => 'productdescription'
]);


Route::get('/financial',[
    'uses' => 'PublicPagesController@getFinancial',
    'as'   => 'financial'
]);




Route::get('/Q11financial',[
    'uses' => 'PublicPagesController@Q11financial',
    'as'   => 'Q11financial'
]);

Route::get('/financial/{id}','PublicPagesController@Q12financial');


Route::get('/Q13financial',[
    'uses' => 'PublicPagesController@Q13financial',
    'as'   => 'Q13financial'
]);


Route::get('/Q14financial',[
    'uses' => 'PublicPagesController@Q14financial',
    'as'   => 'Q14financial'
]);


Route::get('/Q15financial',[
    'uses' => 'PublicPagesController@Q15financial',
    'as'   => 'Q15financial'
]);


Route::get('/Q16financial',[
    'uses' => 'PublicPagesController@Q16financial',
    'as'   => 'Q16financial'
]);

Route::get('/prices',[
    'uses' => 'PublicPagesController@prices',
    'as'   => 'prices'
]);


Route::get('/commercial',[
    'uses' => 'PublicPagesController@commercial',
    'as'   => 'commercial'
]);

Route::get('/shareholding',[
    'uses' => 'PublicPagesController@shareholding',
    'as'   => 'shareholding'
]);

Route::get('/board-of-directors',[
    'uses' => 'PublicPagesController@BoardOfDirectors',
    'as'   => 'BoardOfDirectors'
]);

Route::get('/corporate-governance',[
    'uses' => 'PublicPagesController@CorporateGovernance',
    'as'   => 'CorporateGovernance'
]);

Route::get('/contact-person-for-inestors',[
    'uses' => 'PublicPagesController@ContactPersonForInestors',
    'as'   => 'ContactPersonForInestors'
]);

Route::get('/fuwang-foods-ltd-top-management',[
    'uses' => 'PublicPagesController@TopManagement',
    'as'   => 'TopManagement'
]);

Route::get('/audit-committee',[
    'uses' => 'PublicPagesController@AuditCommittee',
    'as'   => 'AuditCommittee'
]);
Route::get('/nomination',[
    'uses' => 'PublicPagesController@Nomination',
    'as'   => 'Nomination'
]);



Route::get('/careers',[
    'uses' => 'PublicPagesController@getEmployee',
    'as'   => 'employee'
]);



Route::post('/resuume-box',[
    'uses' => 'PublicPagesController@ResuumeBox',
    'as'   => 'ResuumeBox1'
]);




// admin


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-resume', 'HomeController@Resume');

Route::resource('category','CategoryController');

Route::resource('sub-category','SubCategoryController');

Route::resource('products','ProductsController');

Route::resource('sliders','SlidersController');

Route::resource('abouts','AboutController');

Route::resource('share-price','SharePriceController');

Route::resource('press','PressController');

Route::resource('employees','EmployeesController');

Route::resource('distributor','DistributorController');

Route::resource('our-financial','FinancialController');

Route::resource('career','CareerController');

Route::resource('director','DirectorController');

Route::resource('board','BordController');






