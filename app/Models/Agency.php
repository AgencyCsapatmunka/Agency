<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('agency_id', '=', $this->getAttribute('agency_id')); 

        return $query;
    } 


    protected $fillable = [
        'name',
        'country',
        'type'
    ];
}

