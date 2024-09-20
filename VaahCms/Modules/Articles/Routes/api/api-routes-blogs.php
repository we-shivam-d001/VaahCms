<?php
use VaahCms\Modules\Articles\Http\Controllers\Backend\BlogsController;
/*
 * API url will be: <base-url>/public/api/articles/blogs
 */
Route::group(
    [
        'prefix' => 'articles/blogs',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [BlogsController::class, 'getAssets'])
        ->name('vh.backend.articles.api.blogs.assets');
    /**
     * Get List
     */
    Route::get('/', [BlogsController::class, 'getList'])
        ->name('vh.backend.articles.api.blogs.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [BlogsController::class, 'updateList'])
        ->name('vh.backend.articles.api.blogs.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [BlogsController::class, 'deleteList'])
        ->name('vh.backend.articles.api.blogs.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [BlogsController::class, 'createItem'])
        ->name('vh.backend.articles.api.blogs.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [BlogsController::class, 'getItem'])
        ->name('vh.backend.articles.api.blogs.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [BlogsController::class, 'updateItem'])
        ->name('vh.backend.articles.api.blogs.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [BlogsController::class, 'deleteItem'])
        ->name('vh.backend.articles.api.blogs.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [BlogsController::class, 'listAction'])
        ->name('vh.backend.articles.api.blogs.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [BlogsController::class, 'itemAction'])
        ->name('vh.backend.articles.api.blogs.item.action');



});
