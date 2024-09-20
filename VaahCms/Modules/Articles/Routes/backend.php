<?php
include('backend/routes-blogs.php');
 
use VaahCms\Modules\Articles\Http\Controllers\Backend\BackendController;
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

Route::group(
    [
        'prefix'     => 'backend/articles',
        'middleware' => ['web', 'has.backend.access']
    ],
    function () {
        //------------------------------------------------
        Route::get( '/', [BackendController::class, 'index'] )
            ->name( 'vh.backend.articles' );
        //------------------------------------------------
        //------------------------------------------------
        Route::get( '/assets', [BackendController::class, 'getAssets'] )
            ->name( 'vh.backend.articles.assets' );
        //------------------------------------------------
    });


/*
 * Include CRUD Routes
 */
//include("backend/routes-example.php");
