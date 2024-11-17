<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => [
        [
            'id' => 1,
            'title' => 'Assistant Producer',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$35,000'
        ],
        [
            'id' => 3,
            'title' => 'Transportation customer service',
            'salary' => '$30,000'
        ]
    ]]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Assistant Producer',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$35,000'
        ],
        [
            'id' => 3,
            'title' => 'Transportation customer service',
            'salary' => '$30,000'
        ]
    ];

    //fn($job) => $job['id'] = $id New way to call function from PHP8.X
    $job = Arr::first($jobs, fn($job) => $job['id'] = $id);

    return view('job', ['job' => $job]);

});

Route::get('/contact', function () {
    return view('contact');
});

