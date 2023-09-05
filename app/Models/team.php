<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TeamController;


class team extends Model
{
    use HasFactory;
    protected $fillable = ['firstName','lastName','email'];
}
