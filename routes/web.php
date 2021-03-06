<?php


Route::view('/', 'home');
Route::view('contact-us', 'contact');

Route::prefix('admin')->group(function () {
    Route::redirect('/', 'records');
    Route::get('records', function (){
        $records = [
            'Queen - Greatest Hits',
            'The Rolling Stones - Sticky Fingers',
            'The Beatles - Abbey Road',
            'The Who - Tommy'
        ];
        return view('admin.records.index', [
            'records' => $records
        ]);
    });
});

