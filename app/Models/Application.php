<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'company',
        'job_title',
        'status',
        'tracked_since',
        'job_description',
        'job_link',
        'resume',
    ];
}
