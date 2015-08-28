<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


 /* Mainpage (GET) */

Route::get('/', [

	'as'    =>  'home',
    'uses'  =>  'HomeController@hello'
]);



/*
 * Authenticated group
 */
Route::group(array('before' => 'auth'), function() {

    Route::group(array('before' => 'csrf'), function () {

        /* Account (POST) */
        Route::post('/account', [
            'as'   => 'account-post',
            'uses' => 'UserController@postAccount'
        ]);
    });

    /*  Logout */

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'UserController@getLogout'
    ]);

    /* Account (GET) */

    Route::get('/account', [
        'as' => 'account',
        'uses' => 'UserController@getAccount'
    ]);

});

/*
 * Unauthenticated group
 */

Route::group(array('before' => 'guest'), function(){

    /*
     *  CSRF protected group
     */
    Route::group(array('before'=>'csrf'), function(){

        /*
         * Create User (POST)
         */
        Route::post('/registration', [
             'as'    =>  'registration-post ',
             'uses'  =>  'UserController@postRegistration'
        ]);

        /*
         * Login User (POST)
         */
        Route::post('/login', [
             'as'    =>  'login-post',
             'uses'  =>  'UserController@postLogin'
        ]);

        // Forgot password page (POST)
        Route::post('/forgot', [
            'as'      => 'forgot-post',
            'uses'    => 'UserController@postForgot'
        ]);

    });

    /*
     * Create User (GET)
     */
    Route::get('/registration', [
         'as'     => 'registration',
         'uses'   => 'UserController@getRegistration'
    ]);

    /*
     * Activate by code
     */
    Route::get('/registration/activate/{code}', [
         'as'     => 'activate',
         'uses'   => 'UserController@getActivate'
    ]);

    /*
     * Login User (GET)
     */
    Route::get('/login', [
         'as'     => 'login',
         'uses'   => 'UserController@getLogin'
    ]);

    // Forgot password page
    Route::get('/forgot', [
        'as'      => 'forgot',
        'uses'    => 'UserController@getForgot'
    ]);

    //Recover password
    Route::get('/recover/{code}', [
        'as'      => 'recover',
        'uses'    => 'UserController@getRecover'
    ]);

    //Projects (GET)
    Route::get('/projects', [
        'as'      => 'projects',
        'uses'    => 'HomeController@getProjects'
    ]);

    //Projects by option (GET)
    Route::get('/projects/{option}', [
        'as'      => 'projects/{option}',
        'uses'    => 'HomeController@getProjectsByOption'
    ]);

    // Projects search
    Route::get('/projectsp', [
        'as'      => 'projectsp-get',
        'uses'    => 'HomeController@getProjectsp'
    ]);

    // Project page
    Route::get('/project/{id}',[
        'as'      => 'project',
        'uses'    => 'HomeController@getProject'
    ]);

    //About page
    Route::get('about', [
        'as'      =>  'about',
        'uses'    =>  'HomeController@about'
    ]);

    //Contacts
    Route::get('contacts', [
        'as'      =>   'contacts',
        'uses'    =>   'HomeController@contacts'
    ]);

    //Social groups
    Route::get('social', [
        'as'      =>    'social',
        'uses'    =>    'HomeController@social'
    ]);

    //Socilate login
    //Facebook
    Route::get('/login/facebook',[
        'as'      => '/login/facebook',
        'uses'    => 'SocialiteController@facebookLoginRequest'
    ]);
    Route::get('/login/facebook/callback', [
        'as'      => '/login/facebook/callback',
        'uses'    => 'SocialiteController@handleFacebookCallback'
    ]);

    //Twitter
    Route::get('/login/twitter', [
        'as'      => '/login/twitter',
        'uses'    => 'SocialiteController@twitterLoginRequest'
    ]);

    Route::get('/login/twitter/callback', [
        'as'      => '/login/twitter/callback',
        'uses'    => 'SocialiteController@handleTwitterCallback'
    ]);




});
