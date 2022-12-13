<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $primarykey = "agency_id";

    protected $fillable = [
        'name',
        'country',
        'type'
    ];
}

