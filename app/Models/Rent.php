<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $primaryKey = 'rentid';
    protected $table = 'rents';

    protected $fillable = [
        'date',
        'date_expire',
        'bail',
        'uid',
        'adid'
    ];
}
