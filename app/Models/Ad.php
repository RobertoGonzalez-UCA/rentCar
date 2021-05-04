<?php

namespace App\Models;

use App\Http\Requests\NewAdRequest;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $primaryKey = 'adid';
}
