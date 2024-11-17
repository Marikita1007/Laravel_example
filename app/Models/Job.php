<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        //fn($job) => $job['id'] = $id New way to call function from PHP8.X
        $job = Arr::first(static::all(), fn($job) => $job['id'] = $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
