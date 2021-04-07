<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Event Categories
    Route::delete('event-categories/destroy', 'EventCategoryController@massDestroy')->name('event-categories.massDestroy');
    Route::resource('event-categories', 'EventCategoryController');

    // Task Statuses
    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');
    Route::resource('task-statuses', 'TaskStatusController');

    // Task Tags
    Route::delete('task-tags/destroy', 'TaskTagController@massDestroy')->name('task-tags.massDestroy');
    Route::resource('task-tags', 'TaskTagController');

    // Tasks
    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');
    Route::post('tasks/media', 'TaskController@storeMedia')->name('tasks.storeMedia');
    Route::post('tasks/ckmedia', 'TaskController@storeCKEditorImages')->name('tasks.storeCKEditorImages');
    Route::resource('tasks', 'TaskController');

    // Tasks Calendars
    Route::resource('tasks-calendars', 'TasksCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Event Listings
    Route::delete('event-listings/destroy', 'EventListingController@massDestroy')->name('event-listings.massDestroy');
    Route::post('event-listings/media', 'EventListingController@storeMedia')->name('event-listings.storeMedia');
    Route::post('event-listings/ckmedia', 'EventListingController@storeCKEditorImages')->name('event-listings.storeCKEditorImages');
    Route::resource('event-listings', 'EventListingController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('user-alerts/read', 'UserAlertsController@read');

    // Delegates
    Route::delete('delegates/destroy', 'DelegateController@massDestroy')->name('delegates.massDestroy');
    Route::post('delegates/parse-csv-import', 'DelegateController@parseCsvImport')->name('delegates.parseCsvImport');
    Route::post('delegates/process-csv-import', 'DelegateController@processCsvImport')->name('delegates.processCsvImport');
    Route::resource('delegates', 'DelegateController');
    Route::get('delegates/compose/mail','DelegateController@composeMail')->name("compose.mailmail");
    // sending emails
    Route::post("delegates/send-emails","Emails\DelegateSendingEmails@store")->name("delagates.emails");

    // Sponsor Templates
    Route::delete('sponsor-templates/destroy', 'SponsorTemplateController@massDestroy')->name('sponsor-templates.massDestroy');
    Route::post('sponsor-templates/media', 'SponsorTemplateController@storeMedia')->name('sponsor-templates.storeMedia');
    Route::post('sponsor-templates/ckmedia', 'SponsorTemplateController@storeCKEditorImages')->name('sponsor-templates.storeCKEditorImages');
    Route::resource('sponsor-templates', 'SponsorTemplateController');
    // preview mail before send
    Route::get('sponsor-template/compose/preview/{id}',"SponsorTemplateController@preview")->name('compose.preview');
    // send the previewed mail
    // Route::post('sponsor-template/compose/preview/send','SponsorTemplateController@sendMail')->name('sponsor.sendmail');
    // send mail
    Route::post("sponsor-template/compose/preview/send-mail","Emails\SponsorSendingEmails@store")->name("sponsor.emails");

    // Sponsors
    Route::delete('sponsors/destroy', 'SponsorsController@massDestroy')->name('sponsors.massDestroy');
    Route::post('sponsors/parse-csv-import', 'SponsorsController@parseCsvImport')->name('sponsors.parseCsvImport');
    Route::post('sponsors/process-csv-import', 'SponsorsController@processCsvImport')->name('sponsors.processCsvImport');
    Route::resource('sponsors', 'SponsorsController');

    // Speakers
    Route::delete('speakers/destroy', 'SpeakerController@massDestroy')->name('speakers.massDestroy');
    Route::post('speakers/parse-csv-import', 'SpeakerController@parseCsvImport')->name('speakers.parseCsvImport');
    Route::post('speakers/process-csv-import', 'SpeakerController@processCsvImport')->name('speakers.processCsvImport');
    Route::resource('speakers', 'SpeakerController');

    // Speaker Templates
    Route::delete('speaker-templates/destroy', 'SpeakerTemplateController@massDestroy')->name('speaker-templates.massDestroy');
    Route::post('speaker-templates/media', 'SpeakerTemplateController@storeMedia')->name('speaker-templates.storeMedia');
    Route::post('speaker-templates/ckmedia', 'SpeakerTemplateController@storeCKEditorImages')->name('speaker-templates.storeCKEditorImages');
    Route::resource('speaker-templates', 'SpeakerTemplateController');
    // preview speaker mail before send
    Route::get('speaker-template/compose/preview/{id}',"SpeakerTemplateController@preview")->name('speaker.preview');
    // send mail
    Route::post("speaker-template/compose/preview/send-mail","Emails\SpeakerSendingEmails@store")->name("speaker.emails");

    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');

});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

Route::prefix('email')->group(function () {
    Route::get('/','EmailController@index')->name('email.index');
    Route::post('/email','EmailController@store')->name('email.store');
});

