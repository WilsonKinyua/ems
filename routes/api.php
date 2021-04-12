<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Event Categories
    Route::apiResource('event-categories', 'EventCategoryApiController');

    // Task Statuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Task Tags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');

    // Event Listings
    Route::post('event-listings/media', 'EventListingApiController@storeMedia')->name('event-listings.storeMedia');
    Route::apiResource('event-listings', 'EventListingApiController');

    // Delegates
    Route::apiResource('delegates', 'DelegateApiController');

    // Sponsor Templates
    Route::post('sponsor-templates/media', 'SponsorTemplateApiController@storeMedia')->name('sponsor-templates.storeMedia');
    Route::apiResource('sponsor-templates', 'SponsorTemplateApiController');

    // Sponsors
    Route::apiResource('sponsors', 'SponsorsApiController');

    // Speaker Templates
    Route::post('speaker-templates/media', 'SpeakerTemplateApiController@storeMedia')->name('speaker-templates.storeMedia');
    Route::apiResource('speaker-templates', 'SpeakerTemplateApiController');

    // Guest Of Honors
    Route::apiResource('guest-of-honors', 'GuestOfHonorApiController');

    // Guest Of Honor Templates
    Route::post('guest-of-honor-templates/media', 'GuestOfHonorTemplateApiController@storeMedia')->name('guest-of-honor-templates.storeMedia');
    Route::apiResource('guest-of-honor-templates', 'GuestOfHonorTemplateApiController');

    // Exhibitors
    Route::apiResource('exhibitors', 'ExhibitorsApiController');

    // Exhibitors Templates
    Route::post('exhibitors-templates/media', 'ExhibitorsTemplateApiController@storeMedia')->name('exhibitors-templates.storeMedia');
    Route::apiResource('exhibitors-templates', 'ExhibitorsTemplateApiController');

    // Media
    Route::apiResource('media', 'MediasApiController');

    // Media Templates
    Route::post('media-templates/media', 'MediaTemplateApiController@storeMedia')->name('media-templates.storeMedia');
    Route::apiResource('media-templates', 'MediaTemplateApiController');

    // Partners
    Route::apiResource('partners', 'PartnersApiController');

    // Partners Templates
    Route::post('partners-templates/media', 'PartnersTemplateApiController@storeMedia')->name('partners-templates.storeMedia');
    Route::apiResource('partners-templates', 'PartnersTemplateApiController');

    // Customs
    Route::apiResource('customs', 'CustomsApiController');

    // Customs Templates
    Route::post('customs-templates/media', 'CustomsTemplateApiController@storeMedia')->name('customs-templates.storeMedia');
    Route::apiResource('customs-templates', 'CustomsTemplateApiController');

    // Visas
    Route::apiResource('visas', 'VisaApiController');

    // Visa Templates
    Route::post('visa-templates/media', 'VisaTemplateApiController@storeMedia')->name('visa-templates.storeMedia');
    Route::apiResource('visa-templates', 'VisaTemplateApiController');
});
