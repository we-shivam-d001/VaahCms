<?php

use VaahCms\Modules\Articles\Http\Controllers\Backend\BlogsController;

Route::group(
    [
        'prefix' => 'backend/articles/blogs',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [BlogsController::class, 'getAssets'])
        ->name('vh.backend.articles.blogs.assets');
    /**
     * Get List
     */
    Route::get('/', [BlogsController::class, 'getList'])
        ->name('vh.backend.articles.blogs.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [BlogsController::class, 'updateList'])
        ->name('vh.backend.articles.blogs.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [BlogsController::class, 'deleteList'])
        ->name('vh.backend.articles.blogs.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [BlogsController::class, 'fillItem'])
        ->name('vh.backend.articles.blogs.fill');

    /**
     * Create Item
     */
    Route::post('/', [BlogsController::class, 'createItem'])
        ->name('vh.backend.articles.blogs.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [BlogsController::class, 'getItem'])
        ->name('vh.backend.articles.blogs.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [BlogsController::class, 'updateItem'])
        ->name('vh.backend.articles.blogs.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [BlogsController::class, 'deleteItem'])
        ->name('vh.backend.articles.blogs.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [BlogsController::class, 'listAction'])
        ->name('vh.backend.articles.blogs.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [BlogsController::class, 'itemAction'])
        ->name('vh.backend.articles.blogs.item.action');

    //---------------------------------------------------------

});
