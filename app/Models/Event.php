<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected  $primaryKey = 'event_id';

    protected $fillable = [
        'name',
        'agency_id',
        'limit',
        'date',
        'location',
        'status'
    ];
}
